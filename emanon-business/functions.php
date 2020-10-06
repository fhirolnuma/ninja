<?php
/**
* Emanon Business function
*/

function emanon_business_scripts() {
	wp_enqueue_script( 'emanon-swiper', get_stylesheet_directory_uri() . '/lib/js/swiper.min.js', array(), '', true );
	wp_enqueue_script( 'emanon-child-custom', get_stylesheet_directory_uri() . '/lib/js/custom.min.js', array('jquery'),'', true );
	wp_enqueue_style( 'emanon-swiper-css' , get_stylesheet_directory_uri() . '/lib/css/swiper.min.css');
}
add_action( 'wp_enqueue_scripts', 'emanon_business_scripts' );

function emanon_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar','emanon' ),
		'id' => 'sidebar-widget',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
		) );

	register_sidebar( array(
		'name' => __( 'Sidebar［Fixed］','emanon' ),
		'id' => 'sidebar-widget-fixed',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
		) );

	register_sidebar( array(
		'name' => __( 'Sidebar［SP］','emanon' ),
		'id' => 'sidebar-widget-sp',
		'description' => __( 'It is a sidebar for smartphone. Displayed in priority over widgets of sidebar and sidebar [fixed].', 'emanon' ),
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
		) );

	register_sidebar( array(
		'name' => __( 'Front Page','emanon' ),
		'id' => 'front-page-widget',
		'before_widget' => '<div class="front-page-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad Common','emanon' ),
		'id' => 'ad-300',
		'description' => __( 'Display common ads. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad Sidebar','emanon' ),
		'id' => 'ad-sidebar',
		'description' => __( 'Display ads in the sidebar. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad h2 Left','emanon' ),
		'id' => 'ad-h2-left',
		'description' => __( 'Display ad on top left of h2. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad h2 Right','emanon' ),
		'id' => 'ad-h2-right',
		'description' => __( 'Display ad on top right of h2. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad Page Bottom Left','emanon' ),
		'id' => 'ad-bottom-left',
		'description' => __( 'Display ad in the bottom left of page body. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad Page Bottom Right','emanon' ),
		'id' => 'ad-bottom-right',
		'description' => __( 'Display ad in the bottom right of page body. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Header right area','emanon' ),
		'id' => 'header-r-widget',
		'description' => __( 'It is a widget dedicated to the right margin of the header. Set up header layout setting as "left layout".', 'emanon' ),
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
		) );

	register_sidebar( array(
		'name' => __( 'Hamburger menu area','emanon' ),
		'id' => 'mobile-menu-widget',
		'description' => __( 'It is a widget for hamburger menu. It is displayed in the modal window.', 'emanon' ),
		'before_widget' => '<div class="mobile-menu-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
		) );

	register_sidebar( array(
		'name' => __( 'Hamburger menu area for LP','emanon' ),
		'id' => 'lp-mobile-menu-widget',
		'description' => __( 'It is a widget for LP hamburger menu. It is displayed in the modal window.', 'emanon' ),
		'before_widget' => '<div class="mobile-menu-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer left area','emanon' ),
		'id' => 'footer-w-left',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer center area［1］','emanon' ),
		'id' => 'footer-w-center',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer center area［2］','emanon' ),
		'id' => 'footer-w-center-2',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer right area','emanon' ),
		'id' => 'footer-w-right',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer area［SP］','emanon' ),
		'id' => 'footer-w-sp',
		'description' => __( 'It is a sidebar for smartphone. Displayed in priority over widgets of Footer left area, Footer center area and Footer right area.', 'emanon' ),
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'emanon_widgets_init' );

// 圧縮版style.cssの読み込み切り替え
function emanon_enqueue_style() {
	$css_minified = get_theme_mod( 'css_minified', '' );
	if ( $css_minified ) {
		wp_enqueue_style( 'emanon-style-min', get_template_directory_uri() . '/style-min.css' );
			} else {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/css/animate.min.css' );
	}
}

// style.cssの統合
function emanon_css_compression() {
	$parent_css = TEMPLA . '/style.css';
	$child_css = STYLE . '/style.css';
	$animate_css = TEMPLA . '/lib/css/animate.min.css';

	$css = '';

if ( WP_Filesystem() ) {//WP_Filesystemの初期化
	global $wp_filesystem;//$wp_filesystemオブジェクトの呼び出し
	if( is_file( $parent_css ) ) $css .= $wp_filesystem->get_contents( $parent_css );
	if( is_file( $child_css ) ) $css .= $wp_filesystem->get_contents( $child_css );
	if( is_file( $animate_css ) ) $css .= $wp_filesystem->get_contents( $animate_css );
}

// CSS 圧縮
if( class_exists('CSSmin') ) {
		$minify = new CSSmin();
		if( method_exists( $minify, "run" ) ) {
				$css = trim( $minify->run( $css ) );
		}

	$style_min = TEMPLA . '/style-min.css';

	// 圧縮後のCSSファイル保存
	if ( WP_Filesystem() ) {//WP_Filesystemの初期化
		global $wp_filesystem;//$wp_filesystemオブジェクトの呼び出し
		//$wp_filesystemオブジェクトのメソッドとしてファイルに書き込む
		$wp_filesystem->put_contents( $style_min, $css );
	}

	return;

	}
}
add_action( 'customize_save_after', 'emanon_css_compression', 10, 1 );

//post classからcategory-sectionを削除
function remove_category_section( $classes ) {
	$classes = array_diff( $classes, array( 'category-section' ) );
	return $classes;
}
add_filter( 'post_class','remove_category_section' );

// 子テーマ用のmoファイル
function emanon_child_setup() {
	load_child_theme_textdomain( 'emanon', get_stylesheet_directory() . '/languages');
}
add_action( 'after_setup_theme', 'emanon_child_setup');

//子テーマ用のビジュアルエディタースタイル
add_editor_style( 'lib/css/editor-style.css' );

//Emanon Pro 子テーマ用の関数を以下に記述
require( get_stylesheet_directory() . '/lib/theme-inline-styles.php' );
require( get_stylesheet_directory() . '/lib/theme-customizer.php' );
require( get_stylesheet_directory() . '/lib/theme-tags.php' );

/*------------------------------------------------------------------------------------
/* アップデートチェックの初期化
/*----------------------------------------------------------------------------------*/
require 'lib/theme-update-checker.php';
	$example_update_checker = new ThemeUpdateChecker(
	'emanon-business',
	'https://wp-emanon.jp/theme-update/emanon-business/update-emanon-business.json'
);