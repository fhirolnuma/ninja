<?php
/**
* Template No Sidebar Page
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_page_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col12">
			<?php get_template_part( 'lib/modules/components/ad-front-top' ); ?>
			<?php	get_template_part( 'content', 'page' ); ?>
			<?php get_template_part( 'lib/modules/components/ad-front-bottom' ); ?>
			</div>
		</main>
		<!--end main-->
	</div>
</div>
<!--end content-->
