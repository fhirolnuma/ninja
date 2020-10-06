<?php
/**
* Benefit section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$benefit_section_title = get_theme_mod( 'benefit_section_title', '' );
	$benefit_section_description = get_theme_mod( 'benefit_section_description', '' );
	$benefit_section_layout = get_theme_mod( 'benefit_section_layout', 4 );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--benefit section-->
<div id="benefit-section" class="eb-benefit-section">
	<div class="container inner">
		<div class="benefit-header wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
			<?php if ( $benefit_section_title ): ?>
			<h2><?php echo esc_html( $benefit_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $benefit_section_description ): ?>
			<p><?php echo nl2br( $benefit_section_description ); ?></p>
			<?php endif; ?>
		</div>
		<?php for($li=1; $li<$benefit_section_layout; $li++) { ?>
		<?php $benefit_icon = get_theme_mod( 'benefit_icon_'.$li ); ?>
		<?php $benefit_image = get_theme_mod( 'benefit_image_'.$li ); ?>
		<?php $benefit_url = get_theme_mod( 'benefit_url_'.$li ); ?>
		<?php $benefit_title = get_theme_mod( 'benefit_title_'.$li ); ?>
		<?php $benefit_description = get_theme_mod( 'benefit_description_'.$li ); ?>
		<?php $delay = (pow($li, 2)); ?>
		<div class="benefit-box-list box-list wow fadeIn" data-wow-duration="1s" data-wow-delay="0.<?php echo $delay; ?>s">
			<?php if ( $benefit_url ) { ?><a href="<?php echo esc_url( $benefit_url ); ?>"><?php } ?>
			<?php if( $benefit_icon && empty( $benefit_image ) ): ?>
			<div class="benefit-box-icon">
				<i class="<?php echo esc_html( $benefit_icon ); ?>"></i>
			</div>
			<?php endif; ?>
			<?php if( $benefit_image && empty( $benefit_icon ) ): ?>
			<div class="benefit-box-icon">
				<img src="<?php echo esc_url( $benefit_image ); ?>" alt="<?php echo esc_html( $benefit_title ); ?>">
			</div>
			<?php endif; ?>
			<div class="benefit-box-detail">
				<h3><?php echo esc_html( $benefit_title ); ?></h3>
				<p><?php echo nl2br( $benefit_description ); ?></p>
			</div>
			<?php if ( $benefit_url ) { ?></a><?php } ?>
		</div>
		<?php } ?>
	</div>
</div>
<!--end benefit section-->
<?php endif; ?>
