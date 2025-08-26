<?php
/**
 * カスタム関数
 */

if ( ! function_exists( 'imgDir' ) ) {
	function imgDir() {
		return get_template_directory_uri() . '/img';
	}
}
