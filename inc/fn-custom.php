<?php
/**
 * カスタム関数
 */

if ( ! function_exists( 'imgDir' ) ) {
	function imgDir() {
		return get_template_directory_uri() . '/img';
	}
}


/**
 * ソート用の「よみキー」を生成
 * - カタカナ/半角カナをひらがなに正規化
 * - 長音「ー」を直前母音（あ/い/う/え/お）へ展開（例: エーザイ→ええざい）
 */
if ( ! function_exists( 'uxc_yomi_sort_key' ) ) {
	function uxc_yomi_sort_key( string $s ): string {
		if ( $s === '' ) {
			return '';
		}
		// カタカナ/半角カナ → ひらがな
		$hira = mb_convert_kana( $s, 'c', 'UTF-8' );

		$chars = preg_split( '//u', $hira, -1, PREG_SPLIT_NO_EMPTY );
		$out   = array();

		$to_vowel = static function ( string $prev ): string {
			if ( preg_match( '/[ぁあかがさざただなはばぱまやゃらわ]/u', $prev ) ) {
				return 'あ'; }
			if ( preg_match( '/[ぃいきぎしじちぢにひびぴみり]/u', $prev ) ) {
				return 'い'; }
			if ( preg_match( '/[ぅうくぐすずつづぬふぶぷむゆゅる]/u', $prev ) ) {
				return 'う'; }
			if ( preg_match( '/[ぇえけげせぜてでねへべぺめれ]/u', $prev ) ) {
				return 'え'; }
			if ( preg_match( '/[ぉおこごそぞとどのほぼぽもよょろを]/u', $prev ) ) {
				return 'お'; }
			return 'う'; // デフォルト
		};

		foreach ( $chars as $i => $ch ) {
			if ( 'ー' === $ch && $i > 0 ) {
				$out[] = $to_vowel( $out[ count( $out ) - 1 ] ?? '' );
			} else {
				$out[] = $ch;
			}
		}
		return implode( '', $out );
	}
}

/**
 * タームの読み仮名を取得（ACF優先）
 * 優先順：ACF 'brand_yomigana'（taxonomy_term → term_ → term obj）→ term meta 'brand_yomigana' → term meta '_yomi'
 */
if ( ! function_exists( 'uxc_get_term_yomigana' ) ) {
	function uxc_get_term_yomigana( WP_Term $t ): string {
		$yomi = '';

		// ACF優先（環境差吸収のため複数キーを試す）
		if ( function_exists( 'get_field' ) ) {
			// 推奨："{$taxonomy}_{$term_id}" 形式
			$yomi = (string) get_field( 'brand_yomigana', $t->taxonomy . '_' . $t->term_id );
			if ( $yomi === '' ) {
				// 古い/別設定："term_{$term_id}" 形式
				$yomi = (string) get_field( 'brand_yomigana', 'term_' . $t->term_id );
			}
			if ( $yomi === '' ) {
				// 一部環境ではタームオブジェクト指定でも取れる
				$yomi = (string) get_field( 'brand_yomigana', $t );
			}
		}

		// フォールバック：生の term meta
		if ( $yomi === '' ) {
			$yomi = (string) get_term_meta( $t->term_id, 'brand_yomigana', true );
		}
		if ( $yomi === '' ) {
			$yomi = (string) get_term_meta( $t->term_id, '_yomi', true );
		}

		return trim( (string) $yomi );
	}
}

/**
 * ターム配列を「よみ（_yomi）優先 → なければ名前」をキーに
 * 50音（ひらがな）→ 英字 → その他 の順で安定ソート
 */
if ( ! function_exists( 'uxc_sort_terms_by_yomi_key' ) ) {
	function uxc_sort_terms_by_yomi_key( array $terms ): array {
		$get_key = static function ( WP_Term $t ): string {
			$yomi = uxc_get_term_yomigana( $t );
			$src  = $yomi !== '' ? $yomi : $t->name;
			return uxc_yomi_sort_key( trim( $src ) );
		};

		$group = static function ( string $key ): int {
			if ( preg_match( '/^[\p{Hiragana}]/u', $key ) ) {
				return 0; } // 50音
			if ( preg_match( '/^[\p{Latin}]/u', $key ) ) {
				return 1; } // A–Z
			return 2; // その他（数字・記号・他言語など）
		};

		$collator = class_exists( 'Collator' ) ? new Collator( 'ja_JP' ) : null;
		if ( ! $collator ) {
			@setlocale( LC_COLLATE, 'ja_JP.UTF-8', 'ja_JP', 'ja' );
		}

		usort(
			$terms,
			static function ( WP_Term $a, WP_Term $b ) use ( $get_key, $group, $collator ): int {
				$ka = $get_key( $a );
				$kb = $get_key( $b );
				$ga = $group( $ka );
				$gb = $group( $kb );

				if ( $ga !== $gb ) {
					return $ga <=> $gb; // 50音 → 英字 → その他
				}
				if ( $collator ) {
					return $collator->compare( $ka, $kb );
				}
				$cmp = strcoll( $ka, $kb );
				return $cmp <=> 0;
			}
		);

		return $terms;
	}
}

/**
 * ACFの画像フィールドからURLを取得（配列/URLどちらでも対応）
 *
 * @param WP_Term $term
 * @param string  $field_key  例: 'brand_img'
 * @return string 画像URL（なければ空文字）
 */
if ( ! function_exists( 'uxc_get_acf_image_url' ) ) {
	function uxc_get_acf_image_url( WP_Term $term, string $field_key = 'brand_img' ): string {
		if ( ! function_exists( 'get_field' ) ) {
			return '';
		}
		$val = get_field( $field_key, $term->taxonomy . '_' . $term->term_id );
		if ( empty( $val ) ) {
			$val = get_field( $field_key, 'term_' . $term->term_id );
		}
		if ( empty( $val ) ) {
			$val = get_field( $field_key, $term );
		}
		if ( is_array( $val ) && isset( $val['url'] ) ) {
			return (string) $val['url'];
		}
		if ( is_string( $val ) ) {
			return $val; // URL文字列想定
		}
		return '';
	}
}

/**
 * 親タームID配下の子タームを<li>で出力（またはHTMLとして返す）
 *
 * @param int    $parent_term_id 親タームID
 * @param string $taxonomy       タクソノミー（例: 'category' や 'brand'）
 * @param bool   $echo           その場で出力するか（true=echo / false=HTMLを返す）
 * @return string                $echo=false の場合は生成したHTML
 */
if ( ! function_exists( 'uxc_render_term_children_list' ) ) {
	function uxc_render_term_children_list( int $parent_term_id, string $taxonomy = 'category', bool $echo = true, string $variant = 'simple', array $args = array() ): string {
		$terms = get_terms(
			array(
				'taxonomy'   => $taxonomy,
				'parent'     => $parent_term_id,
				'hide_empty' => false,
			)
		);

		if ( is_wp_error( $terms ) || empty( $terms ) ) {
			if ( $echo ) {
				echo ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
			return '';
		}

		$terms     = uxc_sort_terms_by_yomi_key( $terms );
		$out       = '';
		$img_field = isset( $args['img_field'] ) && is_string( $args['img_field'] ) ? $args['img_field'] : 'brand_img';

		foreach ( $terms as $term ) {
			$link = get_term_link( $term );
			if ( is_wp_error( $link ) ) {
				continue;
			}

			if ( 'card' === $variant ) {
				$img_url = uxc_get_acf_image_url( $term, $img_field );
				$out    .= '<li class="item">';
				$out    .= '<a href="' . esc_url( $link ) . '">';
				$out    .= '<div class="ph_wrap">';
				if ( $img_url !== '' ) {
					$out .= '<img src="' . esc_url( $img_url ) . '" alt="' . esc_attr( $term->name ) . '">';
				} else {
					$out .= '<img src="https://placehold.co/400x300?text=No+Image" alt="">';
				}
				$out .= '</div>';
				$out .= '<div class="name">' . esc_html( $term->name ) . '</div>';
				$out .= '</a>';
				$out .= '</li>';
			} else {
				$out .= sprintf(
					'<li class="link"><a href="%1$s">%2$s</a></li>',
					esc_url( $link ),
					esc_html( $term->name )
				);
			}
		}

		if ( $echo ) {
			echo $out; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		return $out;
	}
}
