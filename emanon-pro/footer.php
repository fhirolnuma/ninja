<?php
/**
* Template footer
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php emanon_cta_footer_section(); ?>
<?php if( is_emanon_exclude_popup_cta_article() ): ?>
<?php emanon_cta_popup(); ?>
<?php endif; ?>
<!--footer-->
<footer class="footer">
	<?php emanon_footer_sns_follow(); ?>
	<?php if( is_emanon_exclude_popup_cta_article() ): ?>
	<?php emanon_cta_popup_modal_window(); ?>
	<?php endif; ?>
	<?php get_sidebar( 'footer' ); ?>
	<div class="container">
		<div class="col12">
			<?php emanon_top_page_btn(); ?>
			<?php wp_nav_menu( array ( 'theme_location' => 'footer-nav', 'fallback_cb' => '', 'container' => false, 'menu_class' => 'footer-nav') ); ?>
			<?php emanon_footer_copy(); ?>
		</div>
	</div>
</footer>
<!--end footer-->
<?php wp_footer(); ?>
</body>
</html>
<?php emanon_html_compress_end(); ?>