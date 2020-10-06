<?php
/**
* Top Pagebox Section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--pagebox-->
<div class="pagebox clearfix">
	<ul>
		<?php for($li=1; $li<4; $li++) { ?>
		<?php if( get_theme_mod('pagebox_setting_'.$li) ) { ?>
		<?php $pagebox_query = new WP_query('page_id='.get_theme_mod( 'pagebox_setting_'.$li,'' ) ); ?>
		<?php while ( $pagebox_query->have_posts() ) : $pagebox_query->the_post(); ?>
		<li class="bar2 pagebox-list">
			<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>"><div class="pagebox-thumbnail"><?php the_post_thumbnail( 'slider-thumbnail' ); ?></a></div>
			<?php else: ?>
			<div class="pagebox-thumbnail"><a href="<?php the_permalink(); ?>"><img width="733" height="353" src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/slider-no-img.png" alt="no image" /></a></div>
			<?php endif; ?>
			<div class="wow fadeInUpBig">
			<a class="mosaic-overlay" href="<?php the_permalink(); ?>">
			<div class="pagebox-date">
			<h2 class="pagebox-title"><?php the_title(); ?></h2>
			<?php if( get_theme_mod( 'pagebox_description_'.$li) ): ?>
			<p class="pagebox-description"><?php echo esc_html( $page_description = get_theme_mod( 'pagebox_description_'.$li, '' ) ); ?></p>
			<?php endif; ?>
			</div>
			</a>
			</div>
		</li>
		<?php endwhile; wp_reset_postdata(); ?>
		<?php }
					}
		?>
	</ul>
	<div class="loading-wrapper"></div>
</div>
<!--eend pagebox-->
<?php endif; ?>