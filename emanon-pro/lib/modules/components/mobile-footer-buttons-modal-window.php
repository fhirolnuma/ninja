<?php
/**
* Mobile Footer Buttons Modal Window
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.4.5
*/
	$display_follow_btn_mobile = get_theme_mod( 'display_follow_btn_mobile', '' );
	$follow_modal_window_title = get_theme_mod( 'follow_modal_window_title', __( 'Follow me on sns', 'emanon' ) );
	$display_share_btn_mobile = get_theme_mod( 'display_share_btn_mobile', '' );
	$share_modal_window_title = get_theme_mod( 'share_modal_window_title', __( 'To share', 'emanon' ) );
	$display_search_btn_mobile = get_theme_mod( 'display_search_btn_mobile', '' );
	$search_modal_window_title = get_theme_mod( 'search_modal_window_title', __( 'Search this site', 'emanon' ) );
	$display_twitter_btn_mobile = get_theme_mod( 'display_twitter_btn_mobile', '' );
	$display_facebook_btn_mobile = get_theme_mod( 'display_facebook_btn_mobile', '' );
	$display_google_plus_btn_mobile = get_theme_mod( 'display_google_plus_btn_mobile', '' );
	$display_hatena_btn_mobile = get_theme_mod( 'display_hatena_btn_mobile', '' );
	$display_pocket_btn_mobile = get_theme_mod( 'display_pocket_btn_mobile', '' );
	$url_encoded = urlencode( get_permalink() );
	$title_encoded = urlencode( get_the_title() .' | ' . get_bloginfo( 'name' ) );
?>

<?php if ( $display_follow_btn_mobile ): ?>
<!--sns follow-->
<div class="remodal" data-remodal-id="modal-follow-btn" data-remodal-options="hashTracking:false">
	<button data-remodal-action="close" class="remodal-close modal-global-nav-close"></button>
		<div class="modal-sns-follow-btn">
			<?php if ( $follow_modal_window_title ): ?>
			<h3><?php echo esc_html( $follow_modal_window_title ); ?></h3>
			<?php endif; ?>
			<ul>
				<?php if ( get_emanon_twitter_profile_url() ): ?>
				<li class="twitter"><a href="<?php echo esc_html( get_emanon_twitter_profile_url() ); ?>" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
				<?php endif; ?>
				<?php if ( get_emanon_facebook_profile_url() ): ?>
				<li class="facebook"><a href="<?php echo esc_url( get_emanon_facebook_profile_url() ); ?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
				<?php endif; ?>
				<?php if ( get_emanon_instagram_profile_url() ): ?>
				<li class="instagram"><a href="<?php echo esc_url( get_emanon_instagram_profile_url() ); ?>" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
				<?php endif; ?>
				<?php if ( get_emanon_googlePlus_profile_url() ): ?>
				<li class="googleplus"><a href="<?php echo esc_url( get_emanon_googlePlus_profile_url() ); ?>" target="_blank"><i class="fa fa-google-plus"></i>Google+</a></li>
				<?php endif; ?>
				<?php if ( get_emanon_feedly_url() ): ?>
				<li class="feedly"><a href="http://feedly.com/index.html#subscription%2Ffeed%2F<?php echo esc_url( get_emanon_feedly_url() ); ?>" target="_blank"><i class="fa fa fa-rss"></i>Feedly</a></li>
				<?php endif; ?>
			</ul>
		</div>
</div>
<!--end sns follow-->
<?php endif; ?>

<?php if ( $display_share_btn_mobile ): ?>
<!--share btn moodal window-->
<div class="remodal" data-remodal-id="modal-share-btn" data-remodal-options="hashTracking:false">
	<button data-remodal-action="close" class="remodal-close modal-global-nav-close"></button>
		<div class="modal-share-btn">
			<?php if ( $share_modal_window_title ): ?> 
			<h3><?php echo esc_html( $share_modal_window_title ); ?></h3>
			<?php endif; ?>
			<ul>
				<?php if ( $display_twitter_btn_mobile ): ?>
				<li class="twitter">
				<a href="http://twitter.com/intent/tweet?url=<?php echo $url_encoded; ?>&text=<?php echo $title_encoded; ?>&tw_p=tweetbutton" onclick="window.open(this.href, 'TWwindow', 'height=300, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa fa-twitter"></i></a>
				</li>
				<?php endif; ?>
				<?php if (	$display_facebook_btn_mobile ): ?>
				<li class="facebook">
				<a href="http://www.facebook.com/sharer.php?u=<?php echo $url_encoded; ?>&t=<?php echo $title_encoded; ?>" onclick="window.open( this.href,'FBwindow','height=450, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes'); return false;" ><i class="fa fa-facebook"></i></a>
				</li>
				<?php endif; ?>
				<?php if ( $display_google_plus_btn_mobile ): ?>
				<li class="googleplus">
				<a href="https://plus.google.com/share?url=<?php echo $url_encoded; ?>" onclick="window.open( this.href, 'GPwindow', 'height=450, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa fa-google-plus"></i></a>
				</li>
				<?php endif; ?>
				<?php if ( $display_hatena_btn_mobile ): ?>
				<li class="hatebu">
				<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>" onclick="window.open( this.href, 'HBwindow', 'height=350, width=510,menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa hatebu-icon"></i></a>
				</li>
				<?php endif; ?>
				<?php if ( $display_pocket_btn_mobile ): ?>
				<li class="pocket">
				<a href="http://getpocket.com/edit?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>" onclick="window.open( this.href, 'PCwindow', 'height=350, width=550, scrollbars=yes,menubar=no,toolbar=no,resizable=yes,scrollbars=yes'); return false;" ><i class="fa fa-get-pocket"></i></a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
</div>
<!--end share btn moodal-->
<?php endif; ?>

<?php if ( $display_search_btn_mobile ): ?>
<!--search button moodal window-->
<div class="remodal" data-remodal-id="modal-search-btn" data-remodal-options="hashTracking:false">
	<button data-remodal-action="close" class="remodal-close modal-global-nav-close"></button>
	<div class="modal-search-btn">
	<?php if ( $search_modal_window_title ): ?> 
	<h3><?php echo esc_html( $search_modal_window_title ); ?></h3>
	<?php endif; ?>
	<?php get_search_form(); ?>
	</div>
</div>
<!--end search button moodal window-->
<?php endif; ?>