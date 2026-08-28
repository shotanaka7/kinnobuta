<?php
/**
 * 一般設定に「その他運営者情報」フィールドを追加
 */
function storeadmin_register_settings() {
	// オプション登録（サニタイズ付き）
	register_setting(
		'general',
		'storeadmin_established_date',
		array(
			'type'              => 'string',
			'sanitize_callback' => 'storeadmin_sanitize_date',
			'default'           => '',
		)
	);

	register_setting(
		'general',
		'storeadmin_kaitori_jisseki',
		array(
			'type'              => 'string',
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '',
		)
	);

	// セクション
	add_settings_section(
		'storeadmin_operator_section',
		__( 'その他運営者情報', 'storeadmin' ),
		'__return_false',
		'general'
	);

	// 創業日
	add_settings_field(
		'storeadmin_established_date',
		__( '創業日', 'storeadmin' ),
		'storeadmin_established_date_field',
		'general',
		'storeadmin_operator_section'
	);

	// 買取実績
	add_settings_field(
		'storeadmin_kaitori_jisseki',
		__( '買取実績（〇〇万点）', 'storeadmin' ),
		'storeadmin_kaitori_jisseki_field',
		'general',
		'storeadmin_operator_section'
	);
}
add_action( 'admin_init', 'storeadmin_register_settings' );

/**
 * フィールド出力
 */
function storeadmin_established_date_field() {
	$value = storeadmin_get_established_date();
	$max   = current_time( 'Y-m-d' );
	echo '<input type="date" id="storeadmin_established_date" name="storeadmin_established_date" value="' . esc_attr( $value ) . '" max="' . esc_attr( $max ) . '" />';
	echo '<p class="description">' . esc_html__( '創業年月日を入力（例：2011-09-07）。この日を迎えるまで年数は繰り上がりません。', 'storeadmin' ) . '</p>';
}

function storeadmin_kaitori_jisseki_field() {
	$value = get_option( 'storeadmin_kaitori_jisseki', '' );
	echo '<input type="number" id="storeadmin_kaitori_jisseki" name="storeadmin_kaitori_jisseki" class="small-text" min="1" max="9999" step="1" value="' . esc_attr( $value ) . '" class="regular-text" />';
	echo '<p class="description">' . esc_html__( '例：数値のみ入力（例：16と入力すると、16万点と表示されます）', 'storeadmin' ) . '</p>';
}

/**
 * サニタイズ：創業日（YYYY-MM-DD 形式のみ許可。実在しない日付は破棄）
 */
function storeadmin_sanitize_date( $value ) {
	$value = trim( (string) $value );
	if ( '' === $value ) {
		return '';
	}
	if ( ! preg_match( '/^(\d{4})-(\d{2})-(\d{2})$/', $value, $m ) ) {
		return '';
	}
	if ( ! checkdate( (int) $m[2], (int) $m[3], (int) $m[1] ) ) {
		return '';
	}
	return $value;
}

/**
 * 創業日を取得（旧「創業年」オプションからのフォールバック付き）
 *
 * creation date が未設定でも、旧オプションに西暦4桁が残っていれば
 * その年の1月1日として扱い、従来どおりの表示を保つ。
 */
function storeadmin_get_established_date() {
	$date = storeadmin_sanitize_date( get_option( 'storeadmin_established_date', '' ) );
	if ( '' !== $date ) {
		return $date;
	}

	$legacy_year = (int) get_option( 'storeadmin_established', '' );
	if ( $legacy_year >= 1800 ) {
		return sprintf( '%04d-01-01', $legacy_year );
	}

	return '';
}

/**
 * 創業からの満年数を取得
 *
 * 創業年月日を基準に計算するため、創業日を迎えるまで繰り上がらない。
 * 例）2011-09-07 創業 → 2026-09-06 時点は 14、2026-09-07 に 15 となる。
 */
if ( ! function_exists( 'get_established_year' ) ) {
	function get_established_year() {
		$established = storeadmin_get_established_date();

		// 未設定のときは 0 を返す（現在の西暦がそのまま出るのを防ぐ）
		if ( '' === $established ) {
			return 0;
		}

		list( $year, $month, $day ) = array_map( 'intval', explode( '-', $established ) );

		$now_year  = (int) current_time( 'Y' );
		$now_month = (int) current_time( 'n' );
		$now_day   = (int) current_time( 'j' );

		$years = $now_year - $year;

		// 今年の創業日をまだ迎えていない場合は1年引く
		if ( $now_month < $month || ( $now_month === $month && $now_day < $day ) ) {
			--$years;
		}

		return max( 0, $years );
	}
}

/**
 * 買取実績を取得
 */
if ( ! function_exists( 'get_kaitori_jisseki' ) ) {
	function get_kaitori_jisseki() {
		return (int) get_option( 'storeadmin_kaitori_jisseki', '' );
	}
}
