<?php
/**
* Breadcrumb
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>

<?php

	global $post;
	$page_for_posts = get_option('page_for_posts');

	echo '<!--breadcrumb-->' . "\n";
	echo '<nav id="breadcrumb" class="col12 rcrumbs clearfix">' . "\n";
	echo '<ol>' . "\n";
	echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><i class="fa fa-home"></i><a href="' . home_url() . '/" itemprop="url"><span itemprop="title">'. get_bloginfo('name') .'</span></a><i class="fa fa-angle-right"></i></li>' . "\n";

		if( is_home() ) {
			if ( $page_for_posts ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_the_title( $page_for_posts ). '</span>' . "\n";
			}
		}

		if( is_single() ) {
			if( is_singular( 'post' ) ) {
				if ( $page_for_posts ) {
				echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink( $page_for_posts ) . '" itemprop="url"><span itemprop="title">'. get_the_title( $page_for_posts ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
				}
				$categories = get_the_category( $post->ID );
				$cat = $categories[0];
				if( $cat -> parent != 0 ) {
					$ancestors = array_reverse( get_ancestors( $cat -> cat_ID, 'category' ) );
					foreach( $ancestors as $ancestor ) {
						echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_category_link( $ancestor ) . '" itemprop="url"><span itemprop="title">'. get_cat_name( $ancestor ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
					}
				}
				echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_category_link( $cat -> term_id ) . '" itemprop="url"><span itemprop="title">'. esc_html( $cat -> cat_name ) . '</span><i class="fa fa-angle-right"></i></a></li>' . "\n";
				echo '<li><span>' . get_the_title() . '</span></li>' . "\n";

			} else {
				$taxonomies = get_the_taxonomies();
				$taxonomy = key( $taxonomies );

				if ( $taxonomies ) {
					$terms = get_the_terms( get_the_ID(), $taxonomy );
					$term = reset( $terms );
					if ( $term -> parent != 0 ) {
						$ancestors = array_reverse( get_ancestors( $term -> term_id, $taxonomy ) );
						foreach( $ancestors as $ancestor ) {
							$pan_term = get_term( $ancestor, $taxonomy );
							echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_term_link( $ancestor, $taxonomy ) . '" itemprop="url"><span itemprop="title">'.esc_html( $pan_term -> name ).'</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
						}
					}

					$term_url	= get_term_link( $term->term_id, $taxonomy );
					echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . $term_url . '" itemprop="url"><span itemprop="title">' . esc_html( $term -> name ) . '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
					echo '<li><span>' . get_the_title() . '</span></li>' . "\n";

				} else if ( is_attachment() ) {
					echo '<li><span>' . get_the_title() . '</span></li>' . "\n";
				}

			}

		} else if( is_page() ) {
			if( $post -> post_parent != 0 ) {
				$ancestors = array_reverse( get_post_ancestors( $post -> ID ) );
				foreach( $ancestors as $ancestor ) {
					echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink( $ancestor ) . '" itemprop="url"><span itemprop="title">'. get_the_title( $ancestor ) .'</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
				}
			}
			echo '<li><span>' . get_the_title() . '</span></li>' . "\n";

		} else if( is_category() ) {
			if ( $page_for_posts ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink( $page_for_posts ) . '" itemprop="url"><span itemprop="title">'. get_the_title( $page_for_posts ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
			}
			$cat = get_queried_object();
			if( $cat -> parent != 0 ) {
				$ancestors = array_reverse( get_ancestors( $cat -> cat_ID, 'category' ) );
				foreach( $ancestors as $ancestor ){
					echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_category_link( $ancestor ) . '" itemprop="url"><span itemprop="title">'. get_cat_name( $ancestor ) .'</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
				}
			}
			echo '<li><span>'. $cat-> cat_name . '</span></li>' . "\n";

		} else if( is_tag() ) {
			if ( $page_for_posts ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink( $page_for_posts ) . '" itemprop="url"><span itemprop="title">'. get_the_title( $page_for_posts ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
			}
			echo '<li><span>'. single_tag_title( '' , false ). '</span></li>' . "\n";

		} else if ( is_tax() ) {
		$term = $wp_query->queried_object->term_id;
		$term_parent = $wp_query->queried_object->parent;
		$taxonomy = $wp_query->queried_object->taxonomy;

		if( $term_parent != 0 ) {
				$ancestors = array_reverse( get_ancestors( $term, $taxonomy ) );
				foreach( $ancestors as $ancestor ) {
					$pan_term = get_term( $ancestor, $taxonomy );
					echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_term_link( $ancestor, $taxonomy ) . '" itemprop="url"><span itemprop="title">'. esc_html( $pan_term->name ) .'</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
				}
			}
			echo '<li><span>' . esc_html( single_cat_title( '', '', false ) ) . '</span></li>';

		} else if( is_date() ) {
			if ( $page_for_posts ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink( $page_for_posts ) . '" itemprop="url"><span itemprop="title">'. get_the_title( $page_for_posts ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
			}
			if( is_day() ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_year_link( get_the_time( 'Y' ) ) . '" itemprop="url"><span itemprop="title">' . get_the_time( 'Y' ) . __( 'Year', 'emanon' ) . '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";

			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'.  get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '" itemprop="url"><span itemprop="title">' . get_the_time( 'm' ) . __( 'Month', 'emanon' ) .'</span></a><i class="fa fa-angle-right"></i></li>' . "\n";

			echo '<li><span>'. get_the_time( 'd' ) . __( 'Day', 'emanon' ) .'</span></li>' . "\n";
			} else if( is_month() ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_year_link( get_the_time( 'Y' ) ) . '" itemprop="url"><span itemprop="title">'. get_the_time( 'Y' ).__( 'Year', 'emanon' ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
			echo '<li><span>' . get_the_time( 'm' ) . __( 'Month', 'emanon' ) . '</span></li>' . "\n";
			} else {
			echo '<li><span>' . get_the_time( 'Y' ) . __( 'Year', 'emanon' ) . '</span></li>' . "\n";
			}

		} elseif ( is_author() ) {
			if ( $page_for_posts ) {
			echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink( $page_for_posts ) . '" itemprop="url"><span itemprop="title">'. get_the_title( $page_for_posts ). '</span></a><i class="fa fa-angle-right"></i></li>' . "\n";
			}
			echo '<li><span>' . get_the_author_meta( 'display_name' ).'</span></li>' . "\n";

		} elseif ( is_404() ) {
			echo '<li><span>' . __( 'File not found', 'emanon' ) . '</span></li>' . "\n";

		} elseif ( is_search() ) {
			echo '<li><span>' . __( 'Search results', 'emanon' ) . '</span></li>' . "\n";
		}

	echo '</ol>' . "\n";
	echo '</nav>' . "\n";
	echo '<!--end breadcrumb-->' . "\n";

?>