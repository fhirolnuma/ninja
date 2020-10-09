<?php
/**
* Eye catch Section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3.2
*/
	$eyecatch_layout_reverse = get_theme_mod( 'eyecatch_layout_reverse', '' );
	$eyecatch_image = get_theme_mod( 'eyecatch_image', '' );
	$eyecatch_title = get_theme_mod( 'eyecatch_title', 'Welcome to Emanon' );
	$eyecatch_sub_title = get_theme_mod( 'eyecatch_sub_title', 'Ready to Start Your Own Business?' );
	$eyecatch_btn_url = get_theme_mod( 'eyecatch_btn_url', '' );
	$eyecatch_btn_text = get_theme_mod( 'eyecatch_btn_text', '' );
	$eyecatch_background_image = get_theme_mod( 'eyecatch_background_image', get_theme_file_uri('/lib/images/emanon-header-img.jpg') );
	$display_sp_eyecatch_image = get_theme_mod( 'display_sp_eyecatch_image', true );
	$mobile_eyecatch_background_image = get_theme_mod( 'mobile_eyecatch_background_image', '' );

?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--eye catch-->
<?php if( wp_is_mobile() && $mobile_eyecatch_background_image ) :?>
<div class="header-eyecatch" data-parallax="scroll" data-image-src="<?php echo esc_url( $mobile_eyecatch_background_image ) ;?>">
<?php else : ?>
<div class="header-eyecatch" data-parallax="scroll" data-image-src="<?php echo esc_url( $eyecatch_background_image ) ;?>">
<?php endif; ?>

	<div class="header-eyecatch-container">

		<?php if( $eyecatch_layout_reverse ) :?>
			<!--eye catch message-->
			<?php if ( $eyecatch_title || $eyecatch_sub_title ): ?>
			<div class="header-eyecatch-message">
				<h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s"><?php echo nl2br( esc_html( $eyecatch_title ) ); ?></h2>
				<p class="wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="1.2s"><?php echo nl2br( esc_html( $eyecatch_sub_title ) ); ?></p>
			</div>
			<?php endif; ?>
			<!--end eye catch message-->
			<!--eye catch image-->
			<?php if ( $eyecatch_image || $eyecatch_btn_url ): ?>
			<div class="header-eyecatch-image">
				<?php if ( !is_mobile() && $eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
				<?php if ( is_mobile() && $eyecatch_image && $display_sp_eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
				<?php if ( $eyecatch_btn_url ): ?>
				<div class="header-eyecatch-btn wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s">
					<span class="btn <?php if ( $eyecatch_title || $eyecatch_sub_title ) : ?>btn-mid<?php else : ?>btn-sm<?php endif; ?> header-eyecatch-btn-bg"><a href="<?php echo esc_url( $eyecatch_btn_url ); ?>"><?php echo esc_html( $eyecatch_btn_text ); ?></a></span>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end eyecatch image-->

		<?php else : ?>

			<!--eye catch image-->
			<?php if ( $eyecatch_image ): ?>
			<div class="header-eyecatch-image">
				<?php if ( !is_mobile() && $eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
				<?php if ( is_mobile() && $eyecatch_image && $display_sp_eyecatch_image ): ?>
				<img src="<?php echo esc_url( $eyecatch_image ); ?>">
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end eyecatch image-->
			<!--eye catch message-->
			<?php if ( $eyecatch_title || $eyecatch_sub_title ): ?>
			<div class="header-eyecatch-message">
				<h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.8s"><?php echo nl2br( esc_html( $eyecatch_title ) ); ?></h2>
				<p class="wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="1.2s"><?php echo nl2br( esc_html( $eyecatch_sub_title ) ); ?></p>
				<?php if ( $eyecatch_btn_url ): ?>
				<div class="header-eyecatch-btn wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s">
					<span class="btn <?php if ( $eyecatch_image ) : ?>btn-mid<?php else : ?>btn-sm<?php endif; ?> header-eyecatch-btn-bg"><a href="<?php echo esc_url( $eyecatch_btn_url ); ?>"><?php echo esc_html( $eyecatch_btn_text ); ?></a></span>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end eye catch message-->

		<?php endif; ?>

	</div>
	<div class="container inner">
		<div class="solution-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			<a name="guide"></a>
			<div class="clearfix">
				<div class="col6 first">
					<div class="import-guide-box">
						<div class="box-title">輸入プラン</div>
						<center><img src="http://localhost/ninja-express-test/wp-content/uploads/2020/10/us_to_jp.png"></center>
						<div class="import-export-guide-box-inner">
							輸入プランは<font color="#ff6060" size="4"><b>「アメリカ」から「日本」向け</b></font>のお荷物をお届けいたします。アメリカ国内のお荷物を、ご指定の日本の住所までお届けいたします。
							<span class="btn btn-mid"><a href="http://localhost/ninja-express-test/guide/import-guide/">詳しくは見る</a></span>
						</div>
					</div>
				</div>
				<div class="col6">
					<div class="export-guide-box">
						<div class="box-title">輸出プラン</div>
							<center><img src="http://localhost/ninja-express-test/wp-content/uploads/2020/10/jp_to_us.png"></center>
							<div class="import-export-guide-box-inner">
							輸出プランは<font color="#ff6060" size="4"><b>「日本」から「アメリカ」向け</b></font>のお荷物をお届けいたします。日本国内のお荷物を、ご指定のアメリカの住所までお届けします。US AmazonへFBA納品ももちろん対応可能！
							<span class="btn btn-mid"><a href="http://localhost/ninja-express-test/export-guide/price/">詳しくは見る</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="loading-wrapper"></div>
	<div class="header-eyecatch-overlay"></div>
</div>
<!--end eye catch-->
<?php endif; ?>