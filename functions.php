<?php

define('WP_DEBUG',true);
define('WP_THEMES_ROOT',get_template_directory_uri());

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (!empty($_SERVER['DOCUMENT_ROOT']) && !defined('WWW_ROOT')) {
    define('WWW_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);
}
function wpinc($file) {
    include get_template_directory() . DS . $file;
}


/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/
/* カスタム投稿タイプ
============================================== */
//function custom_entry_post_type() {
//        $labels = array(
//                'name' => 'カスタム投稿',
//                'singular_name' => 'カスタム投稿',
//                'add_new_item' => 'カスタム投稿を追加',
//                'add_new' => '新規追加',
//                'new_item' => '新しい記事',
//                'view_item' => 'このカスタム投稿を表示',
//                'not_found' => '記事がありません',
//                'not_found_in_trash' => 'ゴミ箱にカスタム投稿の記事はありません。',
//                'search_items' => '記事を検索',
//        );
//        $args = array(
//                'labels' => $labels,
//                'public' => true,
//                'show_ui' => true,
//                'query_var' => true,
//                'hierarchical' => false,
//                'menu_position' => 5,
//                'supports' => array('title','editor','thumbnail',
//      'custom-fields','excerpt','author','trackbacks',
//      'comments','revisions','page-attributes'),
//                'has_archive' => true
//        );
//        register_post_type('custom_entry', $args);
//        register_taxonomy('custom_categories','custom_entry', array(
//                'hierarchical' => true,
//                'update_count_callback' => '_update_post_term_count',
//                'label' => 'カテゴリー',
//                'singular_label' => 'カテゴリー',
//                'public'=> true,
//                'show_ui' => true )
//        );
//}
//add_action('init', 'custom_entry_post_type');


/* アーカイブ有効
============================================== */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; 
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


/* コメント欄カスタム
============================================== */
//コメント文言を変更
function custom_comment_form($args) {
//	$args['comment_notes_before'] = '<p class="comment_notes_before">コメントは承認後サイトに反映されます。<p>';
	$args['comment_notes_before'] = '';
	$args['comment_notes_after'] = '';
	$args['label_submit'] = '送信';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');

//コメントからEmailとウェブサイトを削除
function my_comment_form_remove($arg) {
	$arg['email'] = '';
	$arg['url'] = '';
	return $arg;
}
add_filter('comment_form_default_fields', 'my_comment_form_remove');


/*アイキャッチ
============================================== */
add_theme_support('post-thumbnails');

/* ぺージャー 
============================================== */
function gcheck(&$page)
{
	if(empty($page))
	{
		$page = 1;
		return $page;
	} else {
		$esc = htmlspecialchars($page,ENT_QUOTES);
		$page = intval($esc);
		if(empty($page))
		{
			gcheck($page);    
		} else {
			return $page;
		}         
	}
}

function getpagenum($postcount,$page,$splitnum,$displayrow)
{
	$num = func_num_args();
	if($num !== 4)
	{
		return false;
	}
	$result[0] = $postcount%$displayrow == 0 ? intval($postcount/$displayrow) : intval(ceil($postcount/$displayrow));
	$result[1] = $page>$splitnum/2 ? intval($page-floor($splitnum/2)): 1;
	$result[2] = $result[1]+($splitnum-1);
	if($result[2]>$result[0])
	{
		$result[2] = $result[0];
	}    
	return $result;
}

function getdataindex($page,$displayrow)
{
	$result[0] = $page-1<0 ? 1 : $page-1;
	$result[1] = $result[0]*$displayrow;
	$result[2] = $displayrow-1+$result[1];
	return $result;
}

//サイドバーアーカイブ表示形式変更
function my_archives_link($html){
	$html = str_replace('年','.',$html);
	$html = str_replace('月','',$html);
	return $html;
}
add_filter('get_archives_link', 'my_archives_link');

//サムネイルのサイズ無効
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

// 管理画面のカスタム投稿一覧にカテゴリー(ターム)を表示
function add_custom_column( $defaults ) {
	$defaults['brand'] = 'ブランド'; // 『area』はタクソノミースラッグ(複数設定可)
	return $defaults;
	}
  add_filter('manage_product_posts_columns', 'add_custom_column'); // ここの『product』はカスタム投稿タイプスラッグ
	function add_custom_column_id($column_name, $id) {
	$terms = get_the_terms($id, $column_name);
	if ( $terms && ! is_wp_error( $terms ) ){
	  $product_links = array(); // ここの『news』は変えなくてもOKだが、カスタム投稿タイプスラッグがおすすめ
	foreach ( $terms as $term ) {
		$product_links[] = $term->name;
	}
	echo join( ", ", $product_links );
	}
}
  add_action('manage_product_posts_custom_column', 'add_custom_column_id', 10, 2); // ここの『news』はカスタム投稿タイプスラッグ




remove_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );