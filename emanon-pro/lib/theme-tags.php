<?php
/**
* Theme Tags
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

/*------------------------------------------------------------------------------------
/* 全般設定
/*----------------------------------------------------------------------------------*/
// metaタグの表示判定
function is_emanon_active_meta_tage_settings() {
	$active_meta_tage_settings = get_theme_mod( 'active_meta_tage_settings', true );
	return $active_meta_tage_settings;
}

// Keywordsの取得
function get_emanon_keywords() {
	global $wp_query;
	$post = $wp_query->get_queried_object();
	$meta_post_keywords = post_custom( 'emanon_meta_keywords' );
	$common_keywords = get_theme_mod( 'top_keywords', '' );

	if ( is_home() || is_front_page() ) {
			$keywords = $common_keywords;
		if ( $common_keywords == "" ) {
			$keywords = get_bloginfo( 'name' );
			}
	} else if ( !empty( $post->post_password ) ) {
			$keywords = __( 'Protected post.','emanon' );
	} else if ( is_single() ) {
		if( is_singular( 'post' ) ) {
				$keywords = $meta_post_keywords;
			if ( $meta_post_keywords == "" ) {
					$post_cat = get_the_category();
					$cat = $post_cat[0];
					$keywords = $cat->cat_name;
				}
			} else {
				$taxonomies = get_the_taxonomies();
				$taxonomy = key( $taxonomies );
				if ( $taxonomies ) {
					$terms = get_the_terms( get_the_ID(), $taxonomy );
					$term = reset( $terms );
					$keywords = $term -> name;
					}
				}
	} else if ( is_page() ) {
			$keywords = $meta_post_keywords;
		if ( $meta_post_keywords == "" ) {
			$keywords = $common_keywords;
			}
		if ( $meta_post_keywords == "" && $common_keywords == "" ) {
			$keywords = get_bloginfo( 'name' );
			}
	} else if ( is_category() ) {
		$keywords = single_cat_title( '', '' );
	} else if ( is_tag() ) {
		$keywords = single_tag_title( '', '' );
	} else if ( is_tax() ) {
		$keywords = single_cat_title( '', '' ) ;
	} else if ( is_day() ) {
		$keywords = get_the_time(__( 'Ymd', 'emanon' ) );
	} else if ( is_month() ) {
		$keywords = get_the_time(__( 'Ym', 'emanon') );
	} else if ( is_year() ) {
		$keywords = get_the_time(__( 'Y', 'emanon' ) );
	} else if ( is_search() ) {
		$keywords = get_search_query();
	} else if ( is_404() ) {
		$keywords = __( '404 Error', 'emanon' );
	} else if ( is_author() ) {
		$keywords = get_the_author_meta( 'display_name', get_query_var( 'author' ) );
	}
	return $keywords;
}

// Keywordsの表示
function emanon_keywords() {
	echo esc_html( strip_tags( get_emanon_keywords() ) );
}

// Descriptionの取得
function get_emanon_description() {
	global $wp_query, $page, $paged;
	$post = $wp_query->get_queried_object();
	$meta_post_description = post_custom( 'emanon_meta_description' );
	$top_description = get_theme_mod( 'top_description', '' );

	if ( is_home() || is_front_page() ) {
		$resume = $top_description;
		if ( $resume == "") {
			$resume = get_bloginfo( 'description' );
			}
		if ( get_query_var( 'paged' ) > 1 ) {
			$resume = trim( get_bloginfo( 'name' ) ) ." | ".	__( 'List of post', 'emanon' ) ." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_singular() ) {
		if ( !empty( $post->post_password ) ) {
			$resume = __( 'There is no overview because this is a protected post.', 'emanon' );
			} else if ( $meta_post_description ) {
				$resume = $meta_post_description;
			} else {
				$content = $post->post_content;
				if( '' !== strpos( $content, '<!--nextpage-->') ) {
					$num = $page ? $page - 1 : 0;
					$split_contents = explode( '<!--nextpage-->', $content );
					$content = $split_contents[$num];
				}
				$resume = mb_substr( strip_tags( $content ), 0, 120 );
			}
	} else if ( is_category() ) {
			$resume = trim( strip_tags( category_description() ) );
			if ( $resume == "" ) {
				$resume = single_cat_title('','') ." - ". __( 'Category of article list', 'emanon' );
			}
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = single_cat_title('','') ." - ". __( 'Category of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if( is_tag( ) ) {
			$resume = trim( strip_tags( tag_description() ) );
			if ( $resume == "" ) {
				$resume = single_tag_title('','') ." - ". __( 'Tag of article list', 'emanon' );
			}
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = single_tag_title('','') ." - ". __( 'Tag of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_tax() ) {
			$resume = trim( strip_tags( tag_description() ) );
			if ( $resume == "" ) {
				$resume = single_cat_title('','') ." - ". __( 'Taxonomy of article list', 'emanon' );
			}
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = single_cat_title('','') ." - ". __( 'Taxonomy of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_year() ) {
			$resume = get_the_time( __( 'Y', 'emanon' ) ) ." - ". __( 'Year of article list', 'emanon' );
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = get_the_time( __( 'Y', 'emanon' ) ) ." - ". __( 'Year of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_month( ) ) {
			$resume = get_the_time( __( 'Ym', 'emanon' ) ) ." - ". __( 'Month of article list', 'emanon' );
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = get_the_time( __( 'Ym', 'emanon' ) ) ." - ". __( 'Month of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_date() ) {
			$resume = get_the_time( __( 'Ymd', 'emanon' ) ) ." - ". __( 'Day of article list', 'emanon' );
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = get_the_time( __( 'Ymd', 'emanon' ) ) ." - ". __( 'Day of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_author() ) {
			$resume = get_the_author_meta( 'display_name', get_query_var( 'author' )) ." - ". __( 'Author of article list', 'emanon' );
			if ( get_query_var( 'paged' ) > 1 ) {
			$resume = get_the_author_meta( 'display_name', get_query_var( 'author' )) ." - ". __( 'Author of article list', 'emanon' )." - ". sprintf( __( '%s Page', 'emanon' ), max( $paged, $page ) );
			}
	} else if ( is_search() ) {
			$resume = get_search_query() ." - ". __( 'Search Result of article list', 'emanon' );
	} else if ( is_404() ) {
			$resume = __( 'It looks like nothing was found at this location. Maybe try a search? or check URL.', 'emanon' );
	}
			$resume = str_replace( "\n", "", $resume );
			$resume = strip_shortcodes( $resume );
	return $resume;
}

// Descriptionの表示
function emanon_description() {
	echo esc_html( strip_tags( get_emanon_description() ) );
}

// Meta robotsの表示
function emanon_robots() {
	$noindex = post_custom( 'emanon_noindex' );
	$nofollow = post_custom( 'emanon_nofollow' );
	if ( $noindex == 1 && $nofollow == 1 )
	$robots = '<meta name="robots" content="noindex, nofollow">' . "\n";
	else if ( $noindex == 1 && $nofollow == 0 )
	$robots = '<meta name="robots" content="noindex">' . "\n";
	else if ( $noindex == 0 && $nofollow == 1 )
	$robots = '<meta name="robots" content="nofollow">' . "\n";
	else if ( $noindex == 0 && $nofollow == 0 )
	$robots = '';
	if ( is_search() || is_404() || is_year() || is_month() || is_day() || is_tag() )
	$robots = '<meta name="robots" content="noindex, follow">' . "\n";
	echo $robots;
}

function emanon_custom_css() {
	$emanon_custom_css_setting = post_custom( 'emanon_custom_css_setting' );
	echo $emanon_custom_css_setting;
}
// Facebook OGPの表示
function emanon_facebook_opg() {
	$display_facebook_opg = get_theme_mod( 'display_facebook_opg', '' );
	if ( $display_facebook_opg ) {
	get_template_part( 'lib/modules/components/facebook-opg' );
	}
}

// 現在URLの表示
function emanon_ogp_url() {
	if( is_home() || is_front_page() ) {
		$ogp_url = home_url();
	} else {
		$ogp_url = home_url() . $_SERVER [ 'REQUEST_URI' ];
		}
echo esc_url( $ogp_url );
}

// OPG titleの取得
function get_emanon_opg_title() {
	$title = "";
	if ( is_home() || is_front_page() ) {
		$title =	get_bloginfo( 'name' );
		} else if	( is_singular() ) {
			$title = trim( get_the_title() );
		} else if ( is_category() ) {
			$title = single_cat_title('','') ." - ". __( 'Category of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_tag() ) {
			$title = single_tag_title('','') ." - ". __( 'Tag of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_year() ) {
			$title = get_the_time( __( 'Y', 'emanon' ) ) ." - ". __( 'Year of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_month( ) ) {
			$title = get_the_time( __( 'Ym', 'emanon' ) ) ." - ". __( 'Month of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_date() ) {
			$title = get_the_time( __( 'Ymd', 'emanon' ) ) ." - ". __( 'Day of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_author() ) {
			$title = get_the_author_meta( 'display_name', get_query_var( 'author' )) ." - ". __( 'Author of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_search() ) {
			$title = get_search_query() ." - ". __( 'Search Result of article list', 'emanon' )." | ". get_bloginfo( 'name' );
		} else if ( is_404() ) {
			$title = __( 'It looks like nothing was found at this location. Maybe try a search? or check URL.', 'emanon' )." | ". get_bloginfo( 'name' );
	}
	return $title;
}

// OPG titleの表示
function emanon_opg_title() {
	echo esc_html( strip_tags( get_emanon_opg_title() ) );
}

// Facebook OGP画像の表示
function emanon_facebook_opg_image() {
	$default_image = get_theme_mod( 'facebook_opg_image', '' );
	$thumbnail_image_id = get_post_thumbnail_id();
	$thumbnail_image = wp_get_attachment_image_src( $thumbnail_image_id, 'full');
	if ( is_singular() ){
		if ( has_post_thumbnail() ) {
			echo '<meta property="og:image" content="' . esc_url( $thumbnail_image[0] ) . '">' . "\n";
		} else if ( $default_image ) {
			echo '<meta property="og:image" content="' . esc_url( $default_image ) . '">' . "\n";
		}
	} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
		if ( $default_image ) {
			 echo '<meta property="og:image" content="' . esc_url( $default_image ) . '">' . "\n";
		} 
	}
}

// Facebook Application IDの取得
function get_emanon_facebook_app_id() {
	$facebook_app_id = get_theme_mod( 'facebook_app_id', '' );
	return trim( $facebook_app_id );
}

// JavaScript用Facebook SDKの表示
function emanon_fb_root() {
	$facebook_app_id = esc_js( get_emanon_facebook_app_id() );
	if ( $facebook_app_id ) {
	echo '<div id="fb-root"></div>' . "\n";
	$fb_root =	<<<fb_root
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=$facebook_app_id";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
fb_root;
	echo $fb_root . "\n";
	}
}

// Twitterカードの表示
function emanon_twitter_card() {
	$display_twitter_card = get_theme_mod( 'display_twitter_card', '' );
	if ( $display_twitter_card ) {
		get_template_part( 'lib/modules/components/twitter-card' );
	}
}

// Twitterカードの取得
function get_emanon_twitter_card_type() {
	$twitter_card_type = get_theme_mod( 'twitter_card_type', 'summary' );
	return strip_tags( $twitter_card_type );
}

// TwitterIDの取得
function get_emanon_twitter_id() {
	$twitter_id = get_theme_mod( 'twitter_id', '' );
	return trim( $twitter_id );
}

// Twitter OGP画像の表示
function emanon_twitter_opg_image() {
	$default_image = get_theme_mod( 'twitter_opg_image', '' );
	$thumbnail_image_id = get_post_thumbnail_id();
	$thumbnail_image = wp_get_attachment_image_src( $thumbnail_image_id, 'full');
	if ( is_singular() ){
		if ( has_post_thumbnail() ) {
			echo '<meta name="twitter:image" content="' . esc_url( $thumbnail_image[0] ) . '">' . "\n";
		} else if ( $default_image ) {
			echo '<meta name="twitter:image" content="' . esc_url( $default_image ) . '">' . "\n";
		}
	} else {
		if ( $default_image ) {
			 echo '<meta name="twitter:image" content="' . esc_url( $default_image ) . '">' . "\n";
		} 
	}
}

// Twitter urlの取得
function get_emanon_twitter_profile_url() {
	$twitter_profile_url = get_theme_mod( 'twitter_profile_url', '' );
	return trim( $twitter_profile_url );
}

// Facebook urlの取得
function get_emanon_facebook_profile_url() {
	$facebook_profile_url = get_theme_mod( 'facebook_profile_url', '' );
	return trim( $facebook_profile_url );
}

// Google+ urlの取得
function get_emanon_googlePlus_profile_url() {
	$googlePlus_profile_url = get_theme_mod( 'googlePlus_profile_url', '' );
	return trim( $googlePlus_profile_url );
}

// Instagram urlの取得
function get_emanon_instagram_profile_url() {
	$instagram_profile_url = get_theme_mod( 'instagram_profile_url', '' );
	return trim( $instagram_profile_url );
}

// Feedly urlの取得
function get_emanon_feedly_url() {
	$feedly_url = get_theme_mod( 'feedly_url', get_bloginfo( 'rss2_url' ) );
	return trim( $feedly_url );
}

// Google analyticsの表示
function emanon_google_analytics() {
	$tracking_id = get_theme_mod( 'tracking_id', '' );
	if ( $tracking_id ) {
	get_template_part( 'lib/modules/components/google-analytics' );
	}
}

// Google Tag Manager </head>直前に挿入
function emanon_google_tag_manager() {
	$tag_manager_id = get_theme_mod( 'tag_manager_id', '' );
	if ( $tag_manager_id ) {
	get_template_part( 'lib/modules/components/google-tag-manager' );
	}
}

// Google Tag Manager (noscript) <body>直後に挿入
function emanon_google_tag_manager_noscript() {
	$tag_manage_id = get_theme_mod( 'tag_manage_id', '' );
	if ( $tag_manage_id ) {
	get_template_part( 'lib/modules/components/google-tag-manager-noscript' );
	}
}

function emanon_header_js() {
	$insert_headcod = get_theme_mod( 'insert_headcod', '' );
	if ( $insert_headcod ) {
	echo $insert_headcod . "\n";
	}
}
add_action( 'wp_head', 'emanon_header_js', 999 );

function emanon_footer_js() {
	$insert_footercod = get_theme_mod( 'insert_footercod', '' );
	if ( $insert_footercod ) {
	echo $insert_footercod . "\n";
	}
}
add_action( 'wp_footer', 'emanon_footer_js', 999 );

/*------------------------------------------------------------------------------------
/* JSON-LDを用いたschema.orgの記述
/*----------------------------------------------------------------------------------*/
add_action('wp_head','insert_json_ld');
function insert_json_ld (){
	if ( is_single()) {
		if ( have_posts() ) : while (have_posts() ) : the_post();
				$context = 'http://schema.org';
				$type = 'Article';
				$headline = get_the_title();
				$dataPublished = get_the_date('Y-n-j');
				$dateModified = get_the_modified_date('Y-n-j');
				$mainEntityOfPage = get_permalink();
				$image_type = 'ImageObject';
				$image_id = get_post_thumbnail_id ();
				$image = wp_get_attachment_image_src ( $image_id, false );
				$image_url = $image[0];
				$image_width = $image[1];
				$image_height = $image[2];
				$author_type = 'Person';
				$author_name = get_the_author();
				$publisher_type = 'Organization';
				$publisher_name = get_bloginfo('name');
				$display_header_logo = esc_url( get_theme_mod( 'display_header_logo', '' ) );
				if ( $display_header_logo) {
				$logo_url = $display_header_logo;
				} else {
				$logo_url = get_template_directory_uri()."/lib/images/no-img/emanon-logo.png";
				}
				$logo_width = 245;
				$logo_height = 50;

				$json= "
				\"@context\" : \"{$context}\",
				\"@type\" : \"{$type}\",
				\"headline\" : \"{$headline}\",
				\"datePublished\" : \"{$dataPublished}\",
				\"dateModified\" : \"{$dateModified}\",
				\"mainEntityOfPage\" : \"{$mainEntityOfPage}\",
				\"author\" : {
						 \"@type\" : \"{$author_type}\",
						 \"name\" : \"{$author_name}\"
						 },
				\"image\" : {
						 \"@type\" : \"{$image_type}\",
						 \"url\" : \"{$image_url}\",
						 \"width\" : \"{$image_width}\",
						 \"height\" : \"{$image_height}\"
						 },
				\"publisher\" : {
						 \"@type\" : \"{$publisher_type}\",
						 \"name\" : \"{$publisher_name}\",
						 \"logo\" : {
									\"@type\" : \"{$image_type}\",
									\"url\" : \"{$logo_url}\",
									\"width\" : \"{$logo_width}\",
									\"height\" : \"{$logo_height}\"
									}
						 }
				";
			echo '<script type="application/ld+json">{'.$json.'}</script>' . "\n";
		endwhile; endif;
	}
}

/*------------------------------------------------------------------------------------
/* フロントページ設定
/*----------------------------------------------------------------------------------*/
// ファーストビューの表示
if ( !function_exists( 'emanon_firstview' ) ):
function emanon_firstview() {
	$firstview_type = get_theme_mod( 'firstview_layout', 'no_display' );
	if ( $firstview_type == 'slider' ) {
		get_template_part( 'lib/modules/sections/section-top-slider' );
	}
	if ( $firstview_type == 'slider-content' ) {
		get_template_part( 'lib/modules/sections/section-top-slider-content' );
	}
	if ( $firstview_type == 'featured' ) {
		get_template_part( 'lib/modules/sections/section-top-featured');
	}
	if ( $firstview_type == 'pagebox' ) {
		get_template_part( 'lib/modules/sections/section-top-pagebox' );
	}
	if ( $firstview_type == 'video' ) {
		get_template_part( 'lib/modules/sections/section-top-video' );
	}
	if ( $firstview_type == 'eyecatch' ) {
		get_template_part( 'lib/modules/sections/section-top-eyecatch' );
	}
}
endif;

/*------------------------------------------------------------------------------------
/* 投稿タグ（フロントページ設定 slider-content用）
/*----------------------------------------------------------------------------------*/
// 投稿日の表示判定
function is_emanon_display_slider_content_date() {
	$display_slider_content_date = get_theme_mod( 'display_slider_content_date', true );
	return $display_slider_content_date;
}

// 更新日の表示判定
function is_emanon_display_slider_content_update_date() {
	$display_slider_content_update_date = get_theme_mod( 'display_slider_content_update_date', '' );
	return $display_slider_content_update_date;
}

// カテゴリーの表示判定
function is_emanon_display_slider_content_category() {
	$display_slider_content_category = get_theme_mod( 'display_slider_content_category', true );
	return $display_slider_content_category;
}

// タグの表示判定
function is_emanon_display_slider_content_tag() {
	$display_slider_content_tag = get_theme_mod( 'display_slider_content_tag', '' );
	return $display_slider_content_tag;
}

// コメント数の表示判定
function is_emanon_display_slider_content_comments_number() {
	$display_slider_content_comments_number = get_theme_mod( 'display_slider_content_comments_number', '' );
	return $display_slider_content_comments_number;
}

// 投稿者名の表示判定
function is_emanon_display_slider_content_author() {
	$display_slider_content_author = get_theme_mod( 'display_slider_content_author', '' );
	return $display_slider_content_author;
}

// カテゴリーの表示
function emanon_slider_content_category() {
	$categories = array();
	if ( $_categories = get_the_category() ) {
		foreach ( $_categories as $_category ) {
			$categories[] = sprintf(
				'<a href="%s">%s</a>',
				get_category_link( $_category->cat_ID ),
				esc_html( $_category->cat_name )
			);
		}
			if ( is_emanon_display_slider_content_category() ) {
			echo '<span class="slider-post-category">' . implode( $categories ) . '</span>' . "\n";
		}
	}
}

// 投稿タグの表示
function emanon_slider_content_meta() {
global $post;

	echo '<div class="slider-post-meta">' . "\n";
	if ( is_emanon_display_slider_content_date() && is_emanon_display_slider_content_update_date() ) {
		echo '<span><i class="fa fa-clock-o"></i><time class="date published" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ) . '">' . esc_html( get_the_date() ) . '</time></span>' . "\n";
	} else if ( is_emanon_display_slider_content_date() && !is_emanon_display_slider_content_update_date() ) {
		echo '<span><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></span>' . "\n";
	}
	if ( is_emanon_display_slider_content_update_date() && get_the_time( 'Y-m-d' ) != get_the_modified_date( 'Y-m-d' ) ) {
		echo '<span><i class="fa fa-history"></i><time class="date updated" datetime="' . esc_attr( get_the_modified_date( 'Y-m-d' ) ). '">' . esc_html( get_the_modified_date() ). '</time></span>' . "\n";
	} else if ( !is_emanon_display_slider_content_date() && is_emanon_display_slider_content_update_date() ) {
		echo '<span><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></span>' . "\n";
	}

	if ( $tags_list = get_the_tag_list( '', ', ' ) ) {
		if ( is_emanon_display_slider_content_tag() ) {
			echo '<span><i class="fa fa-tag"></i>' . $tags_list . '</span>' . "\n";
			}
	}

	if ( is_emanon_display_slider_content_comments_number() && ! post_password_required() && get_comments_number() ) {
		echo '<span>' . "\n";
		comments_popup_link( printf( '<i class="fa fa-comments-o"></i><span class="screen-reader-text">%s</span>' , get_the_title() ) );
		echo '</span>' . "\n";
	}

	if ( is_emanon_display_slider_content_author() ) {
		echo '<span><i class="fa fa-user"></i><span class="vcard author"><span class="fn"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></span>' . "\n";
	}

	echo '</div >' . "\n";
}

/*------------------------------------------------------------------------------------
/* ランディングページ設定
/*----------------------------------------------------------------------------------*/
// ファーストビューの表示
function emanon_lp_header() {
	$display_header_section = get_theme_mod( 'display_header_section', '' );
	if ( $display_header_section ) {
		get_template_part( 'lib/modules/sections/section-lp-header' );
	}
}

// CTA［ヘッダー］セクションの表示
function emanon_lp_header_cta() {
	$display_lp_header_cta = get_theme_mod( 'display_lp_header_cta', '' );
	if ( $display_lp_header_cta ) {
		get_template_part( 'lib/modules/components/header-lp-cta' );
	}
}

// CTA［ヘッダー スクロール］セクションの表示
function emanon_lp_header_cta_scroll() {
	$display_lp_header_cta = get_theme_mod( 'display_lp_header_cta', '' );
	$lp_header_cta_type = get_theme_mod( 'lp_header_cta_type', 'default' );
	if ( $display_lp_header_cta && $lp_header_cta_type == 'tracking') {
		get_template_part( 'lib/modules/components/header-lp-cta-scroll' );
	}
}

// グローバルナビの表示
function emanon_lp_gloval_nav() {
	$display_lp_gloval_nav = get_theme_mod( 'display_lp_gloval_nav', '' );
	if ( $display_lp_gloval_nav ) {
		get_template_part( 'lib/modules/components/header-lp-global-nav' );
	}
}

// モーダルウィンドウナビの表示
function emanon_lp_header_mb_global_nav() {
	get_template_part( 'lib/modules/components/header-lp-mb-global-nav' );
}

// モバイルナビの表示
function emanon_lp_header_mb_scroll_nav() {
	$display_lp_mobile_nav = get_theme_mod( 'display_lp_mobile_nav', '' );
	if ( $display_lp_mobile_nav ) {
		get_template_part( 'lib/modules/components/header-lp-mb-horizontal-nav' );
	}
}

// 共感セクションの表示
function emanon_lp_empathy_section() {
	$display_empathy_section = get_theme_mod( 'display_empathy_section', '' );
	if ( $display_empathy_section ) {
		get_template_part( 'lib/modules/sections/section-lp-empathy' );
	}
}

// 強みセクションの表示
function emanon_lp_advantage_section() {
	$display_advantage_section = get_theme_mod( 'display_advantage_section', '' );
	if ( $display_advantage_section ) {
		get_template_part( 'lib/modules/sections/section-lp-advantage' );
	}
}

// CTA［ボタン］セクションの表示［1］
function emanon_lp_cta_btn_section_1() {
	$display_advantage_section_1 = get_theme_mod( 'display_cta_btn_lp_1', '' );
	if ( $display_advantage_section_1 ) {
		get_template_part( 'lib/modules/sections/section-lp-cta-btn' );
	}
}

// CTA［ボタン］セクションの表示［2］
function emanon_lp_cta_btn_section_2() {
	$display_advantage_section_2 = get_theme_mod( 'display_cta_btn_lp_2', '' );
	if ( $display_advantage_section_2 ) {
		get_template_part( 'lib/modules/sections/section-lp-cta-btn' );
	}
}

// CTA［ボタン］セクションの表示［3］
function emanon_lp_cta_btn_section_3() {
	$display_advantage_section_3 = get_theme_mod( 'display_cta_btn_lp_3', '' );
	if ( $display_advantage_section_3 ) {
		get_template_part( 'lib/modules/sections/section-lp-cta-btn' );
	}
}

// コンテンツセクションの表示
function emanon_lp_content_section() {
	$display_content_section = get_theme_mod( 'display_content_section', true );
	if ( $display_content_section ) {
		get_template_part( 'content', 'landing-page' );
	}
}

// 商品の特徴セクションの表示
function emanon_lp_product_features_section() {
	$display_product_features_section = get_theme_mod( 'display_product_features_section', '' );
	if ( $display_product_features_section ) {
		get_template_part( 'lib/modules/sections/section-lp-product-features' );
	}
}

// 比較セクションの表示
function emanon_lp_comparison_table_section() {
	$display_comparison_table_section= get_theme_mod( 'display_comparison_table_section', '' );
	if ( $display_comparison_table_section) {
		get_template_part( 'lib/modules/sections/section-lp-comparison' );
	}
}

// お客様の声（推薦文）セクションの表示
function emanon_lp_testimonial_section() {
	$display_testimonial_section = get_theme_mod( 'display_testimonial_section', '' );
	if ( $display_testimonial_section ) {
		get_template_part( 'lib/modules/sections/section-lp-testimonial' );
	}
}

// オファーセクションの表示
function emanon_lp_offer_section() {
	$display_offer_section = get_theme_mod( 'display_offer_section', '' );
	if ( $display_offer_section ) {
		get_template_part( 'lib/modules/sections/section-lp-offer' );
	}
}

// 特典セクションの表示
function emanon_lp_benefits_section() {
	$display_benefits_section = get_theme_mod( 'display_benefits_section', '' );
	if ( $display_benefits_section ) {
		get_template_part( 'lib/modules/sections/section-lp-benefits' );
	}
}

// クロージングセクションの表示
function emanon_lp_closing_section() {
	$display_closing_section = get_theme_mod( 'display_closing_section', '' );
	if ( $display_closing_section ) {
		get_template_part( 'lib/modules/sections/section-lp-closing' );
	}
}

// CTA［コンタクトフォーム］の表示
function emanon_lp_cta_section() {
	$display_cta_lp = get_theme_mod( 'display_cta_lp', '' );
	if ( $display_cta_lp ) {
		get_template_part( 'lib/modules/sections/section-lp-cta' );
	}
}

// FAQセクションの表示
function emanon_lp_faq_section() {
	$display_faq_section = get_theme_mod( 'display_faq_section', '' );
	if ( $display_faq_section ) {
		get_template_part( 'lib/modules/sections/section-lp-faq' );
	}
}

// 追伸の表示
function emanon_lp_postscript_section() {
	$display_postscript_section = get_theme_mod( 'display_postscript_section', '' );
	if ( $display_postscript_section ) {
		get_template_part( 'lib/modules/sections/section-lp-postscript' );
	}
}

// モバイルCTAの表示
function emanon_lp_mobile_cta_section() {
	$display_mobile_cta_section = get_theme_mod( 'display_mobile_cta_section', '' );
	if ( $display_mobile_cta_section ) {
		get_template_part( 'lib/modules/sections/section-lp-mobile-cta' );
	}
}

/*------------------------------------------------------------------------------------
/* ヘッダー設定
/*----------------------------------------------------------------------------------*/
// ヘッダーレイアウトの表示
function emanon_header_layout() {
	$header_layout_type = get_theme_mod( 'header_layout_type', 'header-default' );
	if ( !is_page_template( 'templates/lp.php' ) ) {
		if ( $header_layout_type == 'header-default') {
			get_template_part( 'lib/modules/components/header-layout-default' );
		}
		if ( $header_layout_type == 'header-center' ) {
			get_template_part( 'lib/modules/components/header-layout-center' );
		}
		if ( $header_layout_type == 'header-line' ) {
			get_template_part( 'lib/modules/components/header-layout-line' );
		}
	}
}

// Descriptionの表示
function emanon_header_description() {
	$header_description = get_bloginfo( 'description' );
	if ( is_front_page() || is_home() ) {
	echo '<h1 itemprop="description">' . $header_description . '</h1>' . "\n";
	} else {
	echo '<p itemprop="description">' . $header_description . '</p>' . "\n";
	}
}

// スクロールナビの表示
function emanon_header_scroll_nav() {
	$global_nav_design_type = get_theme_mod( 'global_nav_design_type', 'default' );
	if ( $global_nav_design_type == 'tracking' ) {
		get_template_part( 'lib/modules/components/header-scroll-nav' );
	}
}

// スクロールナビ［モバイル用］の表示
function emanon_header_mb_scroll_nav() {
	$global_nav_design_type = get_theme_mod( 'global_nav_design_type', 'default' );
	if ( $global_nav_design_type == 'tracking' ) {
		get_template_part( 'lib/modules/components/header-mb-scroll-nav' );
	}
}

// モバイルナビの表示
function emanon_header_mb_horizontal_nav() {
	$display_mobile_nav = get_theme_mod( 'display_mobile_nav', '' );
	if ( $display_mobile_nav ) {
		get_template_part( 'lib/modules/components/header-mb-horizontal-nav' );
	}
}

// モーダルウィンドウナビの表示
function emanon_header_mb_global_nav() {
	get_template_part( 'lib/modules/components/header-mb-global-nav' );
}

// ヘッダーロゴの表示
function emanon_header_logo() {
	$display_header_logo = get_theme_mod( 'display_header_logo', '' );
	$header_tagline_position_type = get_theme_mod( 'header_tagline_position_type', 'upper-left' );
	if ( $display_header_logo ) {
	echo '<div class="header-table">' . "\n";
	echo '<div class="header-logo"><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $display_header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></div>' . "\n";
	if ( $header_tagline_position_type == 'logo-under' ) {
		echo '<div>' . "\n";
		echo emanon_header_description();
		echo '</div>' . "\n";
	}
	echo '</div>' . "\n";
	}
	else {
	echo '<div class="header-table">' . "\n";
	echo '<div class="header-site-name" itemprop="headline"><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></div>' . "\n";
	if ( $header_tagline_position_type == 'logo-under' ) {
		echo '<div>' . "\n";
		echo emanon_header_description();
		echo '</div>' . "\n";
	}
	echo '</div>' . "\n";
	}
}

// ヘッダーロゴの表示（スクロールナビ用/ランディングページ用）
function emanon_simple_header_logo() {
	$display_header_logo = get_theme_mod( 'display_header_logo', '' );
	if ( $display_header_logo ) {
	echo '<div class="header-table">' . "\n";
	echo '<div class="header-logo"><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $display_header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></div>' . "\n";
	echo '</div>' . "\n";
	}
	else {
	echo '<div class="header-table">' . "\n";
	echo '<div class="header-site-name" itemprop="headline"><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></div>' . "\n";
	echo '</div>' . "\n";
	}
}

// ヘッダーロゴの表示（モーダルウィンドウナビ用）
function emanon_mb_header_logo() {
	$display_header_logo = get_theme_mod( 'display_header_logo', '' );
	if ( $display_header_logo ) {
	echo '<div class="modal-header-logo"><a href="' . home_url( '/' ) . '"><img src="' . esc_url( $display_header_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" ></a></div>' . "\n";
	}
	else {
	echo '<div class="modal-header-site-name"><a href="' . home_url( '/' ) .'">' . get_bloginfo( 'name' ) . '</a></div>' . "\n";
	}
}

// ヘッダーCTAの表示判定
function is_emanon_header_cta() {
	$display_header_cta = get_theme_mod( 'display_header_cta', '' );
	return $display_header_cta;
}

// ヘッダーCTAの表示
function emanon_header_cta() {
	get_template_part( 'lib/modules/components/header-cta' );
}

/*------------------------------------------------------------------------------------
/* パンくずリストの表示（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// 投稿ページに表示判定
function emanon_single_breadcrumb() {
	$display_single_breadcrumb = get_theme_mod( 'display_single_breadcrumb', true );
	if ( $display_single_breadcrumb ) {
		get_template_part( 'lib/modules/components/breadcrumb' );
	}
}

// アーカイブページ等に表示判定
function emanon_archive_breadcrumb() {
	$display_archive_breadcrumb = get_theme_mod( 'display_archive_breadcrumb', true );
	if ( $display_archive_breadcrumb && !is_front_page() ) {
		get_template_part( 'lib/modules/components/breadcrumb' );
	}
}

// 固定ページに表示判定
function emanon_page_breadcrumb() {
	$display_page_breadcrumb = get_theme_mod( 'display_page_breadcrumb' , '' );
	if ( $display_page_breadcrumb && !is_front_page() ) {
		get_template_part( 'lib/modules/components/breadcrumb' );
	}
}

/*------------------------------------------------------------------------------------
/* キャプションの表示（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
function emanon_featured_image_caption() {
	$display_thumbnail_caption = get_theme_mod( 'display_thumbnail_caption' , '' );
	$caption = get_post( get_post_thumbnail_id() )->post_excerpt;
	if ( $display_thumbnail_caption && $caption ) {
		echo '<div class="article-thumbnail-caption">' . $caption . '</div>';
	}
}

/*------------------------------------------------------------------------------------
/* 投稿タグ（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// 投稿日の表示判定
function is_emanon_display_entry_date() {
	$display_entry_date = get_theme_mod( 'display_entry_date', true );
	return $display_entry_date;
}

// 更新日の表示判定
function is_emanon_display_update_date() {
	$display_update_date = get_theme_mod( 'display_update_date', '' );
	return $display_update_date;
}

// カテゴリーの表示判定
function is_emanon_display_category() {
	$display_category = get_theme_mod( 'display_category', '' );
	return $display_category;
}

// タグの表示判定
function is_emanon_display_tag() {
	$display_tag = get_theme_mod( 'display_tag', '' );
	return $display_tag;
}

// コメント数の表示判定
function is_emanon_display_comments_number() {
	$display_comments_number = get_theme_mod( 'display_comments_number', '' );
	return $display_comments_number;
}

// 投稿者名の表示判定
function is_emanon_display_author() {
	$display_author = get_theme_mod( 'display_author', true );
	return $display_author;
}

// 投稿タグの表示
function emanon_entry_meta() {
global $post;

	echo '<ul class="post-meta clearfix">' . "\n";
	if ( is_emanon_display_entry_date() && is_emanon_display_update_date() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ) . '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	} else if ( is_emanon_display_entry_date() && !is_emanon_display_update_date() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}
	if ( is_emanon_display_update_date() && get_the_time( 'Y-m-d' ) != get_the_modified_date( 'Y-m-d' ) ) {
		echo '<li><i class="fa fa-history"></i><time class="date updated" datetime="' . esc_attr( get_the_modified_date( 'Y-m-d' ) ). '">' . esc_html( get_the_modified_date() ). '</time></li>' . "\n";
	} else if ( !is_emanon_display_entry_date() && is_emanon_display_update_date() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}

	$categories = array();
	if ( $_categories = get_the_category() ) {
		foreach ( $_categories as $_category ) {
			$categories[] = sprintf(
				'<a href="%s">%s</a>',
				get_category_link( $_category->cat_ID ),
				esc_html( $_category->cat_name )
			);
		}
			if ( is_emanon_display_category() ) {
			echo '<li><i class="fa fa-clone"></i>' . implode( ', ', $categories ) . '</li>' . "\n";
		}
	}

	if ( $tags_list = get_the_tag_list( '', ', ' ) ) {
		if ( is_emanon_display_tag() ) {
			echo '<li><i class="fa fa-tag"></i>' . $tags_list . '</li>' . "\n";
			}
	}

	if ( is_emanon_display_comments_number() && ! post_password_required() && get_comments_number() ) {
		echo '<li>' . "\n";
		comments_popup_link( printf( '<i class="fa fa-comments-o"></i><span class="screen-reader-text">%s</span>' , get_the_title() ) );
		echo '</li>' . "\n";
	}

	if ( is_emanon_display_author() ) {
		echo '<li><i class="fa fa-user"></i><span class="vcard author"><span class="fn"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></li>' . "\n";
	} else {
		echo '<li class="display-none"><i class="fa fa-user"></i><span class="vcard author"><span class="fn"><a href="' . esc_url( get_author_posts_url( $post->post_author ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></li>' . "\n";
	}
	echo '</ul >' . "\n";
}

/*------------------------------------------------------------------------------------
/* SNSシェアボタン（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// シェアボタンの上部表示
function emanon_top_sns_share() {
	$display_top_sns_share = get_theme_mod( 'display_top_sns_share', '' );
	$sns_layout_type = get_theme_mod( 'sns_layout_type', 'no_count' );
	if ( $display_top_sns_share && $sns_layout_type == 'no_count' ) {
		get_template_part( 'lib/modules/components/sns-buttons' );
	} else if ( $display_top_sns_share && $sns_layout_type == 'count' ) {
		get_template_part( 'lib/modules/components/sns-buttons-count' );
	}
}

// シェアボタンの下部表示
function emanon_bottom_sns_share() {
	$display_bottom_sns_share = get_theme_mod( 'display_bottom_sns_share', '' );
	$sns_layout_type = get_theme_mod( 'sns_layout_type', 'no_count' );
	if ( $display_bottom_sns_share && $sns_layout_type == 'no_count' ) {
		get_template_part( 'lib/modules/components/sns-buttons' );
	} else if ( $display_bottom_sns_share && $sns_layout_type == 'count' ) {
		get_template_part( 'lib/modules/components/sns-buttons-count' );
	}
}

// Twitterシェアボタンの表示判定
function is_emanon_display_twitter_btn() {
	$display_twitter_btn = get_theme_mod( 'display_twitter_btn', true );
	return $display_twitter_btn;
}

// Facebookシェアボタンの表示判定
function is_emanon_display_facebook_btn() {
	$display_facebook_btn = get_theme_mod( 'display_facebook_btn', true );
	return $display_facebook_btn;
}

// Google+シェアボタンの表示判定
function is_emanon_display_google_plus_btn() {
	$display_google_plus_btn = get_theme_mod( 'display_google_plus_btn', true );
	return $display_google_plus_btn;
}

// Hatenaシェアボタンの表示判定
function is_emanon_display_hatena_btn() {
	$display_hatena_btn = get_theme_mod( 'display_hatena_btn', true );
	return $display_hatena_btn;
}

// Pocketシェアボタンの表示判定
function is_emanon_display_pocket_btn() {
	$display_pocket_btn = get_theme_mod( 'display_pocket_btn', true );
	return $display_pocket_btn;
}

/*------------------------------------------------------------------------------------
/* モバイルフッターボタン（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// モバイルフッターボタンの表示
function emanon_mobile_footer_buttons() {
	$mobile_footer_btn_style = get_theme_mod( 'mobile_footer_btn_style', 'no_display' );
	if ( is_mobile() ) {
		if ( $mobile_footer_btn_style == 'display' || $mobile_footer_btn_style == 'display_no_share_button' ) {
			get_template_part( 'lib/modules/components/mobile-footer-buttons' );
		}
	}
}

// モバイルフッターボタン［モーダルウィンドウ］
function emanon_mobile_footer_buttons_modal_window() {
	$mobile_footer_btn_style = get_theme_mod( 'mobile_footer_btn_style', 'no_display' );
	if ( is_mobile() ) {
		if ( $mobile_footer_btn_style == 'display' || $mobile_footer_btn_style == 'display_no_share_button' ) {
			get_template_part( 'lib/modules/components/mobile-footer-buttons-modal-window' );
		}
	}
}

/*------------------------------------------------------------------------------------
/* SNSフォローボタン（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// Facebook Likeボタンの表示
function emanon_content_fb_like_follow() {
	$display_fb_like_btn = get_theme_mod( 'display_fb_like_btn', '' );
	if ( $display_fb_like_btn ) {
		get_template_part( 'lib/modules/components/facebook-follow' );
	}
}

// Twitter followボタンの表示
function emanon_content_twitter_follow() {
	$display_content_twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
	if ( $display_content_twitter_follow ) {
		get_template_part( 'lib/modules/components/sns-follow-twitter' );
	}
}

// SNSフォローボタンの表示
function emanon_content_sns_follow() {
	$display_content_sns_follow = get_theme_mod( 'display_content_sns_follow', '' );
	if ( $display_content_sns_follow ) {
		get_template_part( 'lib/modules/components/sns-follow' );
	}
}

/*------------------------------------------------------------------------------------
/* 投稿者プロフィールの表示（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
function emanon_author_profile() {
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	if ( $display_author_profile ) {
		get_template_part( 'lib/modules/components/author-profile' );
	}
}

// Archiveページでの表示
function emanon_author_archive() {
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	if ( $display_author_profile && is_author() ) {
		get_template_part( 'lib/modules/components/author-archive' );
	}
}

/*------------------------------------------------------------------------------------
/* 関連記事（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// 前後記事の表示
function emanon_display_pre_nex() {
	$display_pre_nex = get_theme_mod( 'display_pre_nex', true );
	if ( $display_pre_nex ) {
		get_template_part( 'lib/modules/components/post-navigation' );
	}
}

// 関連記事の表示
function emanon_related_post() {
	$display_related_post = get_theme_mod( 'display_related_post', true );
	if ( $display_related_post ) {
		get_template_part( 'lib/modules/components/related-post' );
	}
}

/*------------------------------------------------------------------------------------
/* リストページ（コンテンツ設定）
/*----------------------------------------------------------------------------------*/
// レイアウトクラスの追加
function emanon_content_entry_layout( $classes ) {
	$entry_layout_type = get_theme_mod( 'content_entry_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			$classes[] = 'one-column';
		} else if ( $entry_layout_type == 'two_column' ) {
			$classes[] = 'two-column';
		} else if ( $entry_layout_type == 'three_column' ) {
			$classes[] = 'three-column';
		} else if ( $entry_layout_type == 'big_column' ) {
			$classes[] = 'big-column';
		}
		return $classes;
}
add_filter( 'post_class', 'emanon_content_entry_layout' );

// アーカイブレイアウトクラスの追加
function emanon_archive_entry_layout( $classes ) {
	$entry_layout_type = get_theme_mod( 'archive_entry_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			$classes[] = 'ar-one-column';
		} else if ( $entry_layout_type == 'two_column' ) {
			$classes[] = 'ar-two-column';
		} else if ( $entry_layout_type == 'three_column' ) {
			$classes[] = 'ar-three-column';
		} else if ( $entry_layout_type == 'big_column' ) {
			$classes[] = 'ar-big-column';
		}
		return $classes;
}
add_filter( 'post_class', 'emanon_archive_entry_layout' );

// 投稿者リストレイアウトクラスの追加
function emanon_author_list_layout( $classes ) {
	$entry_layout_type = get_theme_mod( 'author_list_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			$classes[] = 'au-one-column';
		} else if ( $entry_layout_type == 'two_column' ) {
			$classes[] = 'au-two-column';
		} else if ( $entry_layout_type == 'three_column' ) {
			$classes[] = 'au-three-column';
		}
		return $classes;
}
add_filter( 'post_class', 'emanon_author_list_layout' );

// アイキャッチ画像のレイアウト対応
function emanon_content_entry_thumbnail() {
	$entry_layout_type = get_theme_mod( 'content_entry_layout', 'one_column' );
		if ( $entry_layout_type == 'one_column') {
			get_template_part( 'lib/modules/components/thumb' );
		} else if ( $entry_layout_type == 'two_column' ) {
			get_template_part( 'lib/modules/components/thumb-card' );
		} else if ( $entry_layout_type == 'three_column' ) {
			get_template_part( 'lib/modules/components/thumb-card' );
		} else if ( $entry_layout_type == 'big_column' ) {
			get_template_part( 'lib/modules/components/thumb-card-large' );
	}
}

// 投稿日の表示判定
function is_emanon_display_entry_date_list() {
	$display_entry_date_list = get_theme_mod( 'display_entry_date_list', true );
	return $display_entry_date_list;
}

// 更新日の表示判定
function is_emanon_display_update_date_list() {
	$display_update_date_list = get_theme_mod( 'display_update_date_list', '' );
	return $display_update_date_list;
}

// カテゴリーの表示判定
function is_emanon_display_category_list() {
	$display_category_list = get_theme_mod( 'display_category_list', true );
	return $display_category_list;
}

// タグの表示判定
function is_emanon_display_tag_list() {
	$display_tag_list = get_theme_mod( 'display_tag_list', '' );
	return $display_tag_list;
}

// コメント数の表示判定
function is_emanon_display_comments_number_list() {
	$display_comments_number_list = get_theme_mod( 'display_comments_number_list', '' );
	return $display_comments_number_list;
}

// 投稿者名の表示
function is_emanon_display_author_list() {
	$display_author_list = get_theme_mod( 'display_author_list', '' );
	return $display_author_list;
}

// 投稿メタの表示
function emanon_entry_meta_list() {
global $post;

	echo '<ul class="post-meta clearfix">' . "\n";
	if ( is_emanon_display_entry_date_list() && is_emanon_display_update_date_list() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ) . '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	} else if ( is_emanon_display_entry_date_list() && !is_emanon_display_update_date_list() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}
	if ( is_emanon_display_update_date_list() && get_the_time( 'Y-m-d' ) != get_the_modified_date( 'Y-m-d' ) ) {
		echo '<li><i class="fa fa-history"></i><time class="date updated" datetime="' . esc_attr( get_the_modified_date( 'Y-m-d' ) ). '">' . esc_html( get_the_modified_date() ). '</time></li>' . "\n";
	} else if ( !is_emanon_display_entry_date_list() && is_emanon_display_update_date_list() ) {
		echo '<li><i class="fa fa-clock-o"></i><time class="date published updated" datetime="' . esc_attr( get_the_time( 'Y-m-d' ) ). '">' . esc_html( get_the_date() ) . '</time></li>' . "\n";
	}

	if ( $tags_list = get_the_tag_list( '', ', ' ) ) {
		if ( is_emanon_display_tag_list() ) {
			echo '<li><i class="fa fa-tag"></i>' . $tags_list . '</li>' . "\n";
			}
	}

	if ( is_emanon_display_comments_number_list() && ! post_password_required() && get_comments_number() ) {
		echo '<li>' . "\n";
		comments_popup_link( printf( '<i class="fa fa-comments-o"></i><span class="screen-reader-text">%s</span>' , get_the_title() ) );
		echo '</li>' . "\n";
	}

	if ( is_emanon_display_author_list() ) {
		echo '<li itemscope itemtype="http://schema.org/Person" itemprop="author"><i class="fa fa-user"></i><span class="vcard author"><span class="fn" itemprop="name"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( $post->post_author ) ) ) . '">' . esc_attr( get_the_author() ) . '</a></span></span></li>' . "\n";
	}
	echo '</ul >' . "\n";
}

function emanonn_entry_meta_category() {
	if ( is_sticky() && is_home() || is_sticky() && is_front_page() ) {
		echo '<span class="cat-name">' . __( 'Recommended Articles', 'emanon' ) . '</span>' . "\n";
	} else if ( is_emanon_display_category_list() && !is_category() ) {
		$display_category_nicename = get_theme_mod( 'display_category_nicename', '' );
		$category = get_the_category();
		$category = $category[0];
		if ( $display_category_nicename ) {
			echo '<span class="cat-name ' .$category->category_nicename . '">' . sprintf('<a href="%s">%s</a>', get_category_link( $category->cat_ID ), esc_html( $category->cat_name ) ) . '</span>' . "\n";
		} else {
			echo '<span class="cat-name">' . sprintf('<a href="%s">%s</a>', get_category_link( $category->cat_ID ), esc_html( $category->cat_name ) ) . '</span>' . "\n";
		}
	}
}

// 抜粋の表示
function emanon_excerpt() {
	$display_excerpt = get_theme_mod( 'display_excerpt', true );
	return $display_excerpt;
}

// 抜粋の長さを取得
function get_emanon_excerpt_length() {
	$excerpt_length = get_theme_mod( 'excerpt_length', 40 );
	return $excerpt_length;
}

function emanon_excerpt_length( $length ) {
	return intval( get_emanon_excerpt_length() );
}

add_filter( 'excerpt_length', 'emanon_excerpt_length', 999 );

// 抜粋の末尾を取得
function get_emanon_excerpt_more() {
	$excerpt_more = get_theme_mod( 'excerpt_more', '' );
	return strip_tags( $excerpt_more );
}

function emanon_excerpt_more( $more ) {
	return get_emanon_excerpt_more();
}
add_filter( 'excerpt_more', 'emanon_excerpt_more' );

// 続きを読むの表示
function emanon_read_more() {
	$display_read_more = get_theme_mod( 'display_read_more', true );
	if ( $display_read_more ) {
		get_template_part( 'lib/modules/components/read-more' );
	}
}

// 続きを読むの取得
function get_emanon_read_more_type() {
	$read_more_type = get_theme_mod( 'read_more_type', 'read_more' );
	return $read_more_type;
}

/*------------------------------------------------------------------------------------
/* フッター設定
/*----------------------------------------------------------------------------------*/
// トップページに戻るボタンの表示
function emanon_top_page_btn() {
	$display_top_page_btn_pc = get_theme_mod( 'display_top_page_btn_pc', true );
	$display_top_page_btn_sp = get_theme_mod( 'display_top_page_btn_sp', true );
	if ( $display_top_page_btn_pc && !is_mobile() ) {
		echo '<div class="pagetop wow slideInUp"><a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i><span class="br"></span>Page Top</a></div>';
	} else if ( $display_top_page_btn_sp && is_mobile() ) {
		echo '<div class="pagetop wow slideInUp"><a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i><span class="br"></span>Page Top</a></div>';
	}
}

// フッターCTA サイト名・ロゴの表示
function emanon_footer_logo() {
	$footer_logo = get_theme_mod( 'footer_logo', '' );
	$cta_footer_title = get_theme_mod( 'cta_footer_title', get_bloginfo( 'name' )	 );
	$cta_footer_title_url = get_theme_mod( 'cta_footer_title_url', home_url( '/' )	);
	if ( $footer_logo ) {
	echo '<a href="' . esc_url( $cta_footer_title_url ) . '"><img src="' . esc_url( $footer_logo ) . '" alt="' . esc_html( $cta_footer_title ) . '" ></a>' . "\n";
	} else {
	echo '<p><a href="' . esc_url( $cta_footer_title_url ) .'">' . esc_html( $cta_footer_title ) . '</a></p>' . "\n";
	}
}

// フッターCTAの表示
function emanon_cta_footer_section() {
	$display_cta_footer_section_frontpage = get_theme_mod( 'display_cta_footer_section_frontpage', '' );
	$display_cta_footer_section_page_single = get_theme_mod( 'display_cta_footer_section_page_single', '' );
	$display_cta_footer_section_archive = get_theme_mod( 'display_cta_footer_section_archive', '' );
		if ( $display_cta_footer_section_frontpage && is_home() || $display_cta_footer_section_frontpage && is_front_page() || $display_cta_footer_section_page_single && is_single() || $display_cta_footer_section_page_single && is_page() && !is_page_template( 'templates/lp.php' ) || $display_cta_footer_section_archive	 && is_archive() ) {
		get_template_part( 'lib/modules/sections/section-cta-footer' );
	}
}

// Pop Up CTAの表示
function emanon_cta_popup() {
	$display_cta_popup_mobile = get_theme_mod( 'display_cta_popup_mobile', '' );
	$display_cta_popup_frontpage = get_theme_mod( 'display_cta_popup_frontpage', '' );
	$display_cta_popup_single = get_theme_mod( 'display_cta_popup_single', '' );
	$display_cta_popup_page = get_theme_mod( 'display_cta_popup_page', '' );
	$display_cta_popup_archive = get_theme_mod( 'display_cta_popup_archive', '' );
	if ( $display_cta_popup_mobile && wp_is_mobile() ) {
		if ( $display_cta_popup_frontpage && is_home() || $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() && !is_page_template( 'templates/lp.php' ) || $display_cta_popup_archive	&& is_archive() ) {
			get_template_part( 'lib/modules/components/cta-popup-mobile' ); // モーダルウィンドウ
			}
		} else if ( !wp_is_mobile() ) {
			if ( $display_cta_popup_frontpage && is_home() || $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() && !is_page_template( 'templates/lp.php' ) || $display_cta_popup_archive	&& is_archive() ) {
			get_template_part( 'lib/modules/components/cta-popup' );
		}
	}
}

// Pop up CTA mobile［モーダルウィンドウ］
function emanon_cta_popup_modal_window() {
	$display_cta_popup_mobile = get_theme_mod( 'display_cta_popup_mobile', '' );
	$display_cta_popup_frontpage = get_theme_mod( 'display_cta_popup_frontpage', '' );
	$display_cta_popup_single = get_theme_mod( 'display_cta_popup_single', '' );
	$display_cta_popup_page = get_theme_mod( 'display_cta_popup_page', '' );
	$display_cta_popup_archive = get_theme_mod( 'display_cta_popup_archive', '' );
	$cta_popup_mobile_icon = get_theme_mod( 'cta_popup_mobile_icon', 'fa fa-envelope-o' );
	if ( $display_cta_popup_mobile && wp_is_mobile() && !is_404() && !is_page_template( 'templates/lp.php' ) ) {
		if ( $display_cta_popup_frontpage && is_home() || $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() && !is_page_template( 'templates/lp.php' ) || $display_cta_popup_archive	&& is_archive() ) {
		echo '<div class="popup-btn-mobile wow fadeInRight" data-wow-delay="2.0s"><a href="#modal-cta-popup" data-remodal-target="modal-cta-popup"><i class="' . esc_html( $cta_popup_mobile_icon ) . '"></i></div>';
		}
	}
}

// SNSフォローボタンの表示判定
function is_emanon_footer_sns_follow() {
	$display_footer_sns_follow = get_theme_mod( 'display_footer_sns_follow', '' );
	return ( $display_footer_sns_follow );
}

// SNSフォローボタンの表示
function emanon_footer_sns_follow() {
	if ( is_emanon_footer_sns_follow() ) {
	echo '<div class="footer-top">' . "\n";
	echo '<div class="container">' . "\n";
	echo '<div class="col12">' . "\n";
	echo '<div class="footer-top-inner">' . "\n";
	echo '<ul>' . "\n";
		if ( get_emanon_twitter_profile_url() ) { ?><li><a href="<?php echo esc_html( get_emanon_twitter_profile_url() ); ?>" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li> <?php }
		if ( get_emanon_facebook_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_facebook_profile_url() ); ?>" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li> <?php }
		if ( get_emanon_instagram_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_instagram_profile_url() ); ?>" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a></li> <?php }
		if ( get_emanon_googlePlus_profile_url() ) { ?><li><a href="<?php echo esc_url( get_emanon_googlePlus_profile_url() ); ?>" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li> <?php }
		if ( get_emanon_feedly_url() ) { ?><li><a href="http://feedly.com/index.html#subscription%2Ffeed%2F<?php echo esc_url( get_emanon_feedly_url() ); ?>" target="_blank"><i class="fa fa-rss"></i><span>Feedly</span></a></li> <?php }
	echo '</ul>' . "\n";
	echo '</div>' . "\n";
	echo '</div>' . "\n";
	echo '</div>' . "\n";
	echo '</div>' . "\n";
	}
}

/*------------------------------------------------------------------------------------
/* 投稿ページ・固定ページ CTA設定
/*----------------------------------------------------------------------------------*/
// CTA非表示の判定
function is_emanon_exclude_cta_article() {
	$emanon_hide_cta = post_custom( 'emanon_hide_cta', '' );
	return !$emanon_hide_cta ;
}

// CTAボタン（投稿用）の表示
function emanon_cta_single() {
	$display_cta_single = get_theme_mod( 'display_cta_single', '' );
	if ( $display_cta_single ) {
	$emanon_cta_type = post_custom( 'emanon_cta_type', 'cta1' );
		if ( $emanon_cta_type == 'cta1' ) {
			get_template_part( 'lib/modules/components/cta-post-potential' );
		} else if ( $emanon_cta_type == 'cta2' ) {
			get_template_part( 'lib/modules/components/cta-post-eventually' );
		} else if ( $emanon_cta_type == 'cta3' ) {
			get_template_part( 'lib/modules/components/cta-post-compare' );
		} else if ( $emanon_cta_type == 'cta4' ) {
			get_template_part( 'lib/modules/components/cta-post-prospect' );
		} else {
			get_template_part( 'lib/modules/components/cta-post-common' );
		}
	}
}

// CTAボタン（固定ページ用）の表示
function emanon_cta_page() {
	$display_cta_page = get_theme_mod( 'display_cta_page', '' );
	if ( $display_cta_page ) {
	$emanon_cta_type = post_custom( 'emanon_cta_type', 'cta1' );
		if ( $emanon_cta_type == 'cta1' ) {
			get_template_part( 'lib/modules/components/cta-post-potential' );
		} else if ( $emanon_cta_type == 'cta2' ) {
			get_template_part( 'lib/modules/components/cta-post-eventually' );
		} else if ( $emanon_cta_type == 'cta3' ) {
			get_template_part( 'lib/modules/components/cta-post-compare' );
		} else if ( $emanon_cta_type == 'cta4' ) {
			get_template_part( 'lib/modules/components/cta-post-prospect' );
		} else {
			get_template_part( 'lib/modules/components/cta-post-common' );
		}
	}
}

//投稿ページ・固定ページ Popup CTA非表示の判定
function is_emanon_exclude_popup_cta_article() {
	$emanon_hide_popup_cta = post_custom( 'emanon_hide_popup_cta', '' );
	return !$emanon_hide_popup_cta ;
}

/*------------------------------------------------------------------------------------
/* 広告設定
/*----------------------------------------------------------------------------------*/
// 投稿ページの広告表示判定
function is_emanon_ad_single() {
	$display_ad_single = get_theme_mod( 'display_ad_single', '' );
	return $display_ad_single;
}

// 固定ページの広告表示判定
function is_emanon_ad_page() {
	$display_ad_page = get_theme_mod( 'display_ad_page', '' );
	return $display_ad_page;
}

// フロントページ・アーカイブページの広告表示判定
function is_emanon_ad_listpage() {
	$display_ad_listpage = get_theme_mod( 'display_ad_listpage', '' );
	return $display_ad_listpage;
}

// 投稿ページ・固定ページ 広告非表示の判定
function is_emanon_exclude_ad_article() {
	$emanon_hide_ad = post_custom( 'emanon_hide_ad', '' );
	return !$emanon_hide_ad ;
}

// 広告ラベルの取得
function get_emanon_ad_label() {
	$emanon_ad_label = get_theme_mod( 'emanon_ad_label', __( 'Sponsor link', 'emanon' ) );
	return strip_tags( $emanon_ad_label );
}

// サイドバー広告 300px 300pxの表示
function emanon_sidebar_ad300() {
	$sidebar_ad300 = get_theme_mod( 'sidebar_ad300', '' );
	if ( $sidebar_ad300 ) {
		get_template_part( 'lib/modules/components/ad-300' );
	}
}

// h2上部 left 300px 300pxの表示判定
function is_emanon_h2_left_ad300() {
	$h2_left_ad300 = get_theme_mod( 'h2_left_ad300', '' );
	return $h2_left_ad300;
}

// h2上部 right 300px 300pxの表示判定
function is_emanon_h2_right_ad300() {
	$h2_right_ad300 = get_theme_mod( 'h2_right_ad300', '' );
	return $h2_right_ad300;
}

// h2見出しを判定し 300px 300pxを表示
define( 'H2_REG', '/<h2.*?>/i' );
function get_h2_included_in_body( $the_content ) {
	if ( preg_match( H2_REG, $the_content, $h2results ) ) {
		return $h2results[0];
	}
}

function add_ads_before_1st_h2( $the_content ) {
	if ( is_emanon_h2_left_ad300() && is_emanon_exclude_ad_article() || is_emanon_h2_right_ad300() && is_emanon_exclude_ad_article() ) {
		ob_start();
		get_template_part( 'lib/modules/components/ad-300h2' );
		$ad_template = ob_get_clean();
		$h2result = get_h2_included_in_body( $the_content );
		if ( $h2result ) {
			$the_content = preg_replace( H2_REG, $ad_template.$h2result, $the_content, 1);
		}
	}
	return $the_content;
}
add_filter( 'the_content','add_ads_before_1st_h2' );


// ページ下部 left 300px 300pxの表示判定
function is_emanon_under_left_ad300() {
	$left_ad300 = get_theme_mod( 'under_left_ad300', '' );
	return $left_ad300;
}

// ページ下部 right 300px 300pxの表示判定
function is_emanon_under_right_ad300() {
	$right_ad300 = get_theme_mod( 'under_right_ad300', '' );
	return $right_ad300;
}

// ページ下部 300px 300pxの表示
function emanon_under_ad300() {
	get_template_part( 'lib/modules/components/ad-300under' );
}

/*------------------------------------------------------------------------------------
/* Archiveページの説明文表示
/*----------------------------------------------------------------------------------*/
function get_emanon_archive_description() {
	if ( is_category() ) {
		$description = trim( strip_tags( category_description() ) );
		if ( $description == "" ) {
			$description = __( 'Category of article list', 'emanon' );
		} 
	} else if ( is_tag() ) {
				$description = trim( strip_tags( tag_description() ) );
		if ( $description == "" ) {
			$description = __( 'Tag of article list', 'emanon' );
		}
	} else if ( is_archive() ) {
			$description = __( 'Article list', 'emanon' );
	} else if ( is_author() ) {
			$description = __( 'Author of article list', 'emanon' );
	} 
	return $description;

}

function emanon_archive_description() {
	echo esc_html( get_emanon_archive_description() );
}

/*------------------------------------------------------------------------------------
/* iframeのレスポンシブ対応
/*----------------------------------------------------------------------------------*/
function emanon_iframe_in_div( $the_content ) {
	if ( is_singular() ) {
	//YouTube動画
	$the_content = preg_replace( '/<iframe[^>]+?youtube\.com[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	//GoogleMap
	$the_content = preg_replace( '/<iframe[^>]+?google\.com\/maps\/embed[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	//slideshare
	$the_content = preg_replace( '/<iframe[^>]+?slideshare\.net[^<]+?<\/iframe>/is', '<div class="responsive-wrap">${0}</div>', $the_content );
	}
	return $the_content;
}
add_filter( 'the_content','emanon_iframe_in_div' );

/*------------------------------------------------------------------------------------
/* ページスピード設定
/*----------------------------------------------------------------------------------*/
// HTMLの圧縮
function emanon_html_compress_start() {
	$html_minified = get_theme_mod( 'html_minified', '' );
	if ( $html_minified ) {
		$ob_start = ob_start();
		return $ob_start;
	}
}

function emanon_html_compress_end() {
	$html_minified = get_theme_mod( 'html_minified', '' );
	if ( $html_minified ) {
		$html_compress = ob_get_clean();
		$html_compress = str_replace( "\t", '', $html_compress );
		$html_compress = str_replace( "\r", '', $html_compress );
		$html_compress = str_replace( "\n", '', $html_compress );
		$html_compress = preg_replace( '/<!--[\s\S]*?-->/', '', $html_compress );
		echo $html_compress;
	}
}

// Jqueryのフッター移動
function emanon_enqueue_script() {
	$jquery_bottom = get_theme_mod( 'jquery_bottom', '' );
	if ( $jquery_bottom ) {
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',array(), '', true ); //head内でjQueryが必要な場合は無効
			} else {
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',array(), '', false );
	 }
 }

// font-awesome.css 読み込み遅延の判定
function is_replace_font_awesom_tag() {
	$font_awesome_lazyload = get_theme_mod( 'font_awesome_lazyload', '' );
	return $font_awesome_lazyload;
}

// font-awesome.css 読み込み遅延
if ( is_replace_font_awesom_tag() ) {
function replace_font_awesome_tag ( $tag, $handle ) {
	if ( 'font-awesome' !== $handle ) {
		return $tag;
	}
		return str_replace( 'stylesheet', 'subresource', $tag );
	}

add_filter( 'style_loader_tag', 'replace_font_awesome_tag', 10, 2);
}

/*------------------------------------------------------------------------------------
/* CSS統合/圧縮
/*----------------------------------------------------------------------------------*/
define( 'TEMPLA', get_template_directory() );
define( 'STYLE', get_stylesheet_directory() );
require_once(ABSPATH . 'wp-admin/includes/file.php'); // WP_Filesystemの使用

// 圧縮版style.cssの読み込み切り替え
if ( !function_exists( 'emanon_enqueue_style' ) ):
function emanon_enqueue_style() {
	$css_minified = get_theme_mod( 'css_minified', '' );
	if ( $css_minified ) {
		wp_enqueue_style( 'emanon-style-min', get_template_directory_uri() . '/style-min.css' );
			} else {
		wp_enqueue_style( 'emanon-style', get_stylesheet_uri() );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/css/animate.min.css' );
	}
}
endif;

if ( !function_exists( 'emanon_css_compression' ) ):
function emanon_css_compression() {

	$parent_css = TEMPLA . '/style.css';
	$animate_css = TEMPLA . '/lib/css/animate.min.css';

	$css = '';

 if ( WP_Filesystem() ) { // WP_Filesystemの初期化
	global $wp_filesystem; // $wp_filesystemオブジェクトの呼び出し
	if( is_file( $parent_css ) ) $css .= $wp_filesystem->get_contents( $parent_css );
	if( is_file( $animate_css ) ) $css .= $wp_filesystem->get_contents( $animate_css );
}
	
// CSS 圧縮
	if( class_exists('CSSmin') ) {
		$minify = new CSSmin();
		if( method_exists( $minify, "run" ) ) {
				$css = trim( $minify->run( $css ) );
		}

// 圧縮後のCSSファイル保存
	$style_min = TEMPLA . '/style-min.css';

if ( WP_Filesystem() ) { // WP_Filesystemの初期化
		global $wp_filesystem; // $wp_filesystemオブジェクトの呼び出し
		// $wp_filesystemオブジェクトのメソッドとしてファイルに書き込む
		$wp_filesystem->put_contents( $style_min, $css );
	}

	return;
}

}
add_action( 'customize_save_after', 'emanon_css_compression', 10, 1 );
endif;

/*------------------------------------------------------------------------------------
/* Copyright
/*----------------------------------------------------------------------------------*/
// Site name
function get_emanon_footer_copyright() {
	$footer_copyright_text = get_bloginfo( 'name' );
	$footer_copyright_text = apply_filters( 'emanon_footer_custom_copyright_text', $footer_copyright_text );
	return strip_tags( $footer_copyright_text );
}

// Powered by emanon
function emanon_footer_copy() {
	$powered_by = 'Powered by <a href="https://synergyentertainment.net/" target="_blank">シナジー・エンターテインメント株式会社</a>';
	$powered_by = apply_filters( 'emanon_footer_custom_powered_by', $powered_by );
	echo '<div class="copyright">' . "\n";
	echo '<small>&copy;&nbsp;<a href="' . esc_url( home_url() ) . '">' . esc_html( get_emanon_footer_copyright() ) . '</a><br class="br-sp"> ' . $powered_by . '</small>' . "\n";
	echo '</div>' . "\n";
}
