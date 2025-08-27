<?php
/**
 * 一般設定に「その他運営者情報」フィールドを追加
 */
function storeadmin_register_settings() {
	// オプション登録（サニタイズ付き）
	register_setting(
		'general',
		'storeadmin_established',
		array(
			'type'              => 'string',
			'sanitize_callback' => 'storeadmin_sanitize_year',
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

	// 創業年
	add_settings_field(
		'storeadmin_established',
		__( '創業年', 'storeadmin' ),
		'storeadmin_established_field',
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
function storeadmin_established_field() {
	$value = get_option( 'storeadmin_established', '' );
	$year  = esc_attr( $value );
	$max   = (int) gmdate( 'Y' );
	echo '<input type="number" id="storeadmin_established" name="storeadmin_established" value="' . $year . '" class="small-text" min="1800" max="' . $max . '" step="1" />';
	echo '<p class="description">' . esc_html__( '西暦4桁で入力（例：2001）', 'storeadmin' ) . '</p>';
}

function storeadmin_kaitori_jisseki_field() {
	$value = get_option( 'storeadmin_kaitori_jisseki', '' );
	echo '<input type="number" id="storeadmin_kaitori_jisseki" name="storeadmin_kaitori_jisseki" class="small-text" min="1" max="9999" step="1" value="' . esc_attr( $value ) . '" class="regular-text" />';
	echo '<p class="description">' . esc_html__( '例：数値のみ入力（例：16と入力すると、16万点と表示されます）', 'storeadmin' ) . '</p>';
}

/**
 * サニタイズ：創業年（数字以外を除去し4桁に制限）
 */
function storeadmin_sanitize_year( $value ) {
	$digits = preg_replace( '/\D+/', '', (string) $value );
	if ( strlen( $digits ) > 4 ) {
		$digits = substr( $digits, 0, 4 );
	}
	return $digits;
}

/**
 * 創業年を取得
 */
if ( ! function_exists( 'get_established_year' ) ) {
	function get_established_year() {
		$established_year = (int) get_option( 'storeadmin_established', '' );
		$now_year         = (int) date( 'Y' );
		return $now_year - $established_year;
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
