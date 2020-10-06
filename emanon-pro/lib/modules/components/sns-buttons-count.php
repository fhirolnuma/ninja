<?php
/**
* SNS Count Buttons (SNS Count Cache)
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2
*/
	$url_encoded = urlencode( get_permalink() );
	$title_encoded = urlencode( get_the_title() .' | ' . get_bloginfo( 'name' ) );
?>
<!--share btn-->
<aside class="share-btn">
	<ul>
		<?php if ( is_emanon_display_twitter_btn() ): ?>
		<li class="twitter">
		<a href="http://twitter.com/intent/tweet?url=<?php echo $url_encoded; ?>&text=<?php echo $title_encoded; ?>&tw_p=tweetbutton" onclick="window.open(this.href, 'TWwindow', 'height=300, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa fa-twitter"></i><span class="sns-name">Twitter</span><span class="count"><?php if( function_exists( 'scc_get_share_twitter' ) ) echo ( scc_get_share_twitter() == 0 ) ?'':scc_get_share_twitter(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_facebook_btn() ): ?>
		<li class="facebook">
		<a href="http://www.facebook.com/sharer.php?u=<?php echo $url_encoded; ?>&t=<?php echo $title_encoded; ?>" onclick="window.open( this.href,'FBwindow','height=450, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes'); return false;" ><i class="fa fa-facebook"></i><span class="sns-name">Facebook</span><span class="count"><?php if( function_exists( 'scc_get_share_facebook' ) ) echo ( scc_get_share_facebook() == 0 ) ?'':scc_get_share_facebook(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_google_plus_btn() ): ?>
		<li class="googleplus">
		<a href="https://plus.google.com/share?url=<?php echo $url_encoded; ?>" onclick="window.open( this.href, 'GPwindow', 'height=450, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa fa-google-plus"></i><span class="sns-name">Google+</span><span class="count"><?php if( function_exists( 'scc_get_share_gplus' ) ) echo ( scc_get_share_gplus() == 0 ) ?'':scc_get_share_gplus(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_hatena_btn() ): ?>
		<li class="hatebu">
		<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>" onclick="window.open( this.href, 'HBwindow', 'height=350, width=510,menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa hatebu-icon"></i><span class="sns-name"><?php _e( 'hatebu', 'emanon' ); ?></span><span class="count"><?php if( function_exists( 'scc_get_share_hatebu' ) ) echo ( scc_get_share_hatebu() == 0 ) ?'':scc_get_share_hatebu(); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_pocket_btn() ): ?>
		<li class="pocket">
		<a href="http://getpocket.com/edit?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>" onclick="window.open( this.href, 'PCwindow', 'height=350, width=550, scrollbars=yes,menubar=no,toolbar=no,resizable=yes,scrollbars=yes'); return false;" ><i class="fa fa-get-pocket"></i><span class="sns-name">Pocket</span><span class="count"><?php if( function_exists( 'scc_get_share_pocket' ) ) echo ( scc_get_share_pocket() == 0 ) ?'':scc_get_share_pocket(); ?></span></a></li>
		<?php endif; ?>
	</ul>
</aside>
<!--end share btn-->