<?php
/**
* Video Section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2.6
*/
	$header_video_mp4_id = get_theme_mod( 'header_video_mp4', '' );
	$header_video_mp4 = wp_get_attachment_url( $header_video_mp4_id );
	$substitution_image = get_theme_mod( 'substitution_image', get_theme_file_uri() . '/lib/images/emanon-header-img.jpg' );
	$video_title = get_theme_mod( 'video_title', 'Welcome to Emanon' );
	$video_sub_title = get_theme_mod( 'video_sub_title', 'Ready to Start Your Own Business?' );
	$video_btn_url = get_theme_mod( 'video_btn_url', '' );
	$video_btn_text = get_theme_mod( 'video_btn_text', '' );
	$video_down_btn = get_theme_mod( 'video_down_btn', 'fa fa-angle-down' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--video-->
<div class="video-section">
	<video autoplay loop muted class="header-video" poster="<?php echo esc_url( $substitution_image ); ?>" >
		<source src="<?php echo esc_url( $header_video_mp4 ); ?>" type="video/mp4" />
	</video>
	<?php if ( $video_title || $video_sub_title ): ?>
	<!--video message-->
	<div class="video-message">
		<ul>
			<?php if ( $video_title || $video_sub_title ): ?>
			<li>
				<h2 class="video-title wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s"><?php echo esc_html( $video_title ); ?></h2>
				<p class="video-sub-title wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="1.2s"><?php echo nl2br( esc_html( $video_sub_title ) ); ?></p>
			</li>
			<?php endif; ?>
		</ul>
		<!--cta btn-->
		<?php if ( $video_btn_url ): ?>
		<div class="video-btn wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s">
			<span class="btn btn-sm video-btn-bg"><a href="<?php echo esc_url( $video_btn_url ); ?>"><?php echo esc_html( $video_btn_text ); ?></a></span>
		</div>
		<?php endif; ?>
		<!--end cta btn-->
		<?php if ( $video_down_btn ): ?>
		<div class="video-down-icon wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.4s">
			<i class="fa fa-angle-down"></i>
		</div>
		<?php endif; ?>
	</div>
	<!--end video message-->
	<?php endif; ?>
	<div class="loading-wrapper"></div>
	<div class="slider-overlay"></div>
</div>
<!--end video-->
<?php endif; ?>