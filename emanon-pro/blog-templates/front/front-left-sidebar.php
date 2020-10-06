<?php
/**
* Template right sidebar frontpage
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$entry_section_title = get_theme_mod( 'entry_section_title', __( 'Latest Posts', 'emanon' ) );
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_archive_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col-main-right clearfix">
			<?php get_template_part( 'lib/modules/components/ad-front-top' ); ?>
			<?php if ( $entry_section_title ): ?>
			<div class="entry-header">
				<h2><span><?php echo esc_html( $entry_section_title); ?></span></h2>
			</div>
			<?php endif; ?>
			<?php	get_template_part( 'content', 'home' ); ?>
			<?php get_template_part( 'lib/modules/components/ad-front-bottom' ); ?>
			</div>
		</main>
		<!--end main-->
		<!--sidebar-->
		<aside class="col-sidebar-left sidebar">
			<?php get_sidebar(); ?>
		</aside>
		<!--end sidebar-->
	</div>
</div>
<!--end content-->
