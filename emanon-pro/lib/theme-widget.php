<?php
/**
* Theme Widet
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

/*------------------------------------------------------------------------------------
/* ウィジェット
/*----------------------------------------------------------------------------------*/
if ( !function_exists( 'emanon_widgets_init' ) ):
function emanon_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar','emanon' ),
		'id' => 'sidebar-widget',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar［Fixed］','emanon' ),
		'id' => 'sidebar-widget-fixed',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar［SP］','emanon' ),
		'id' => 'sidebar-widget-sp',
		'description' => __( 'It is a sidebar for smartphone. Displayed in priority over widgets of sidebar and sidebar [fixed].', 'emanon' ),
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Common','emanon' ),
		'id' => 'ad-300',
		'description' => __( 'Display common ads. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Sidebar','emanon' ),
		'id' => 'ad-sidebar',
		'description' => __( 'Display ads in the sidebar. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad h2 Left','emanon' ),
		'id' => 'ad-h2-left',
		'description' => __( 'Display ad on top left of h2. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad h2 Right','emanon' ),
		'id' => 'ad-h2-right',
		'description' => __( 'Display ad on top right of h2. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Page Bottom Left','emanon' ),
		'id' => 'ad-bottom-left',
		'description' => __( 'Display ad in the bottom left of page body. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Page Bottom Right','emanon' ),
		'id' => 'ad-bottom-right',
		'description' => __( 'Display ad in the bottom right of page body. Add a text widget and paste the ad code. Ad size: 300 250', 'emanon' ),
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Page Bottom Area','emanon' ),
		'id' => 'page-bottom',
		'description' => __( 'It is a widget dedicated to the page bottom area.', 'emanon' ),
		'before_widget' => '<aside><div class="page-bottom-widget">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Header Right Area','emanon' ),
		'id' => 'header-r-widget',
		'description' => __( 'It is a widget dedicated to the right margin of the header. Set up header layout setting as "left layout".', 'emanon' ),
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
	) );

	register_sidebar( array(
		'name' => __( 'Hamburger Menu Area','emanon' ),
		'id' => 'mobile-menu-widget',
		'description' => __( 'It is a widget for hamburger menu. It is displayed in the modal window.', 'emanon' ),
		'before_widget' => '<div class="mobile-menu-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Hamburger Menu Area for LP','emanon' ),
		'id' => 'lp-mobile-menu-widget',
		'description' => __( 'It is a widget for LP hamburger menu. It is displayed in the modal window.', 'emanon' ),
		'before_widget' => '<div class="mobile-menu-widget clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Top Area［PC］','emanon' ),
		'id' => 'front-top-widge-pc',
		'description' => __( 'Front page first view lower part(PC/Tablet):Max size 790px.', 'emanon' ),
		'before_widget' => '<div class="front-top-widget-box clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Bottom Area［PC］','emanon' ),
		'id' => 'front-bottom-widget-pc',
		'description' => __( 'Front page footer top(PC/Tablet):Max size 790px.', 'emanon' ),
		'before_widget' => '<div class="front-bottom-widget-box clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Top Area［SP］','emanon' ),
		'id' => 'front-top-widget-sp',
		'description' => __( 'Front page first view lower part(SP).', 'emanon' ),
		'before_widget' => '<div class="front-top-widget-box clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page Bottom Area［SP］','emanon' ),
		'id' => 'front-bottom-widget-sp',
		'description' => __( 'Front page footer top(SP).', 'emanon' ),
		'before_widget' => '<div class="front-bottom-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<div class="entry-header"><h2><span>',
		'after_title' => '</span></h2></div>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Left Area','emanon' ),
		'id' => 'footer-w-left',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Center Area［1］','emanon' ),
		'id' => 'footer-w-center',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Center Area［2］','emanon' ),
		'id' => 'footer-w-center-2',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Right Area','emanon' ),
		'id' => 'footer-w-right',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area［SP］','emanon' ),
		'id' => 'footer-w-sp',
		'description' => __( 'It is a sidebar for smartphone. Displayed in priority over widgets of Footer left area, Footer center area and Footer right area.', 'emanon' ),
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'emanon_widgets_init' );
endif;

/*------------------------------------------------------------------------------------
/* ユーザープロフィール項目の追加
/*----------------------------------------------------------------------------------*/
function emanon_user_meta( $item ) {
	$item[ 'user_twitter' ] = __( 'Twitter profile url:', 'emanon' );
	$item[ 'user_facebook' ] = __( 'Facebook profile url:', 'emanon' );
	$item[ 'user_googleplus' ] = __( 'GooglePlus profile url:' ,'emanon' );
	$item[ 'user_instagram' ] = __( 'Instagram profile url:', 'emanon' );
	$item[ 'user_position' ] = __( 'Position', 'emanon' );
	return $item;
	}
add_filter( 'user_contactmethods', 'emanon_user_meta', 10, 1 );


// 名姓の項目を姓名の順に変更
function emanon_user_name() {
	?><script>
	jQuery(function($){
	$('#last_name').closest('tr').after($('#first_name').closest('tr'));
	});
	</script><?php
}
add_action( 'admin_footer-user-new.php', 'emanon_user_name' );
add_action( 'admin_footer-user-edit.php', 'emanon_user_name' );
add_action( 'admin_footer-profile.php', 'emanon_user_name' );

add_action( 'admin_footer', 'render_japan_style_name_order' );
function render_japan_style_name_order() {
// ユーザー一覧以外ではjavascriptを出力しない
	global $pagenow;
	if( "users.php" !== $pagenow ) return;

	$html =<<<EOF
	<script type="text/javascript">
			jQuery(document).ready(function(){
					jQuery("td.column-name").each(function(){
							name = String(jQuery(this).text()).replace(/(^\s+)|(\s+$)/g,'');
							if( name ) {
									arr = name.split(" ");
									if( arr.length === 2 ) {
											jQuery(this).text(arr[1]+" "+arr[0]);
									}
							}
					});
			});
	</script>
EOF;
	echo $html;
}

/*------------------------------------------------------------------------------------
/* ウィジェット Myプロフィール
/*----------------------------------------------------------------------------------*/
class My_Profile extends WP_Widget {
function __construct() {
	$widget_ops = array( 'classname' => 'widget_profile', 'description' => __( 'Profile widget','emanon' ) );
	parent::__construct(
	'',
	__( '［E］Profile widget','emanon' ),
	$widget_ops
	);
}

function widget( $args, $instance ) {
	extract( $args );
	$title = apply_filters( 'widget_title', $instance['title'] );
	$my_name = apply_filters( 'widget_my_name', $instance['my_name'] );
	$my_image = apply_filters( 'widget_my_image', $instance['my_image'] );
	$link = apply_filters( 'widget_link', $instance['link'] );
	$my_profile = apply_filters( 'widget_my_profile', $instance['my_profile'] );
	$twitter = apply_filters( 'widget_twitter', $instance['twitter'] );
	$facebook = apply_filters( 'widget_facebook', $instance['facebook'] );
	$googleplus = apply_filters( 'widget_googleplus', $instance['googleplus'] );
	$instagram = apply_filters( 'widget_instagram', $instance['instagram'] );
?>

<?php echo $args[ 'before_widget' ];
if ( ! empty( $title ) ) {
	echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
} ?>
<div id="my-profile">
<?php if( $my_image ) { ?><div><?php if( $link ){ ?><a href="<?php echo $link ?>"><?php } ?><img src="<?php echo $my_image; ?>" alt="<?php echo $my_name; ?>"><?php if( $link ){ ?></a><?php } ?></div><?php } ?>
	<h4><?php if( $link ){ ?><a href="<?php echo $link ?>"><?php } ?><?php echo $my_name; ?><?php if( $link ){ ?></a><?php } ?></h4>
		<?php if( $twitter || $facebook || $googleplus || $instagram ){ ?>
		<ul>
			<?php } ?>
			<?php if( $twitter ){ ?>
			<li class="widget-twitter"><a href="<?php echo $twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php } ?>
			<?php if( $facebook ){ ?>
			<li class="widget-facebook"><a href="<?php echo $facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			<?php if( $googleplus ){ ?>
			<li class="widget-googleplus"><a href="<?php echo $googleplus ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php } ?>
			<?php if( $instagram ){ ?>
			<li class="widget-instagram"><a href="<?php echo $instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<?php } ?>
			<?php if( $twitter || $facebook || $googleplus || $instagram){ ?>
		</ul>
		<?php } ?>
	<div class="profile-text">
		<p><?php echo nl2br( $my_profile ); ?></p>
	</div>
</div>

<?php echo $after_widget; ?>
<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['my_name'] = trim( $new_instance['my_name'] );
	$instance['my_image'] = trim( $new_instance['my_image'] );
	$instance['link'] = trim( $new_instance['link'] );
	$instance['my_profile'] = ( $new_instance['my_profile'] );
	$instance['twitter'] = trim( $new_instance['twitter'] );
	$instance['facebook'] = trim( $new_instance['facebook'] );
	$instance['googleplus'] = trim( $new_instance['googleplus'] );
	$instance['instagram'] = trim( $new_instance['instagram'] );
	return $instance;
}

function form( $instance ) {
	if( empty( $instance ) ){
	$instance = array('title' => '', 'my_name' => '', 'my_image' => '', 'link' => '', 'my_profile' => '', 'twitter' => '', 'facebook' => '', 'googleplus' => '', 'instagram' => '');
	}
	$title = esc_attr( $instance['title'] );
	$my_name = esc_attr( $instance['my_name'] );
	$my_image = esc_url_raw( $instance['my_image'] );
	$link = esc_url( $instance['link'] );
	$my_profile = esc_textarea($instance['my_profile'] );
	$twitter = esc_url( $instance['twitter'] );
	$facebook = esc_url( $instance['facebook'] );
	$googleplus = esc_url( $instance['googleplus'] );
	$instagram = esc_url( $instance['instagram'] );
?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e( 'Title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'my_name' ); ?>">
		<?php _e( 'Name:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'my_name' ); ?>" name="<?php echo $this->get_field_name( 'my_name' ); ?>" type="text" value="<?php echo $my_name; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'my_image' ); ?>">
		<?php _e( 'Upload image URL:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'my_image' ); ?>" name="<?php echo $this->get_field_name( 'my_image' ); ?>" type="text" value="<?php echo $my_image; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'my_profile' ); ?>">
		<?php _e( 'Profile text:','emanon' ); ?>
		</label>
		<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'my_profile' ); ?>" name="<?php echo $this->get_field_name( 'my_profile' ); ?>"><?php echo $my_profile; ?></textarea>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">
		<?php _e( 'Twitter profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo $twitter; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">
		<?php _e( 'Facebook profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo $facebook; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>">
		<?php _e( 'GooglePlus profile url:' ,'emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" type="text" value="<?php echo $googleplus; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'instagram' ); ?>">
		<?php _e( 'Instagram profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo $instagram; ?>">
	</p>

	<?php
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "My_Profile" );' ));

/*------------------------------------------------------------------------------------
/* ウィジェット Webサイトプロフィール
/*----------------------------------------------------------------------------------*/
class Website_Profile extends WP_Widget {
function __construct() {
	$widget_ops = array( 'classname' => 'widget_website_profile', 'description' => __( 'Website Profile widget','emanon' ) );
	parent::__construct(
	'',
	__( '［E］Website Profile widget','emanon' ),
	$widget_ops
	);
}

function widget( $args, $instance ) {
	extract( $args );
	$title = apply_filters( 'widget_title', $instance['title'] );
	$website_title = apply_filters( 'widget_website_title', $instance['website_title'] );
	$website_logo = apply_filters( 'widget_website_logo', $instance['website_logo'] );
	$website_profile = apply_filters( 'widget_website_profile', $instance['website_profile'] );
	$website_twitter = apply_filters( 'widget_website_twitter', $instance['website_twitter'] );
	$website_facebook = apply_filters( 'widget_website_facebook', $instance['website_facebook'] );
	$website_googleplus = apply_filters( 'widget_website_googleplus', $instance['website_googleplus'] );
	$website_instagram = apply_filters( 'widget_website_instagram', $instance['website_instagram'] );
	$website_contact = apply_filters( 'widget_website_contact', $instance['website_contact'] );
?>

<?php echo $args[ 'before_widget' ];
if ( ! empty( $title ) ) {
	echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
} ?>
<div id="website-profile">
<?php if( $website_logo ) { ?><div class="website-logo"><a href="<?php echo home_url( '/' ) ; ?>"><img src="<?php echo $website_logo; ?>" alt="<?php echo $website_title; ?>"></a></div><?php } ?>
	<h4><a href="<?php echo home_url( '/' ) ; ?>"><?php echo $website_title; ?></a></h4>
		<div class="website-profile-text">
		<p><?php echo nl2br( $website_profile ); ?></p>
		</div>
		<?php if( $website_twitter || $website_facebook || $website_googleplus || $website_instagram || $website_contact ){ ?>
		<ul>
			<?php } ?>
			<?php if( $website_twitter ){ ?>
			<li class="widget-twitter"><a href="<?php echo $website_twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php } ?>
			<?php if( $website_facebook ){ ?>
			<li class="widget-facebook"><a href="<?php echo $website_facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			<?php if( $website_googleplus ){ ?>
			<li class="widget-googleplus"><a href="<?php echo $website_googleplus ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php } ?>
			<?php if( $website_instagram ){ ?>
			<li class="widget-instagram"><a href="<?php echo $website_instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<?php } ?>
			<?php if( $website_contact ){ ?>
			<li class="widget-contact"><a href="<?php echo $website_contact ?>"><i class="fa fa-envelope-o"></i></a></li>
			<?php } ?>
			<?php if( $website_twitter || $website_facebook || $website_googleplus || $website_instagram	|| $website_contact ){ ?>
		</ul>
		<?php } ?>
</div>

<?php echo $after_widget; ?>
<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['website_title'] = strip_tags( $new_instance['website_title'] );
	$instance['website_logo'] = trim( $new_instance['website_logo'] );
	$instance['website_profile'] = ( $new_instance['website_profile'] );
	$instance['website_twitter'] = trim( $new_instance['website_twitter'] );
	$instance['website_facebook'] = trim( $new_instance['website_facebook'] );
	$instance['website_googleplus'] = trim( $new_instance['website_googleplus'] );
	$instance['website_instagram'] = trim( $new_instance['website_instagram'] );
	$instance['website_contact'] = trim( $new_instance['website_contact'] );
	return $instance;
}

function form( $instance ) {
	if( empty( $instance ) ){
	$instance = array('title' => '', 'website_title' => '', 'website_logo' => '', 'website_profile' => '', 'website_twitter' => '', 'website_facebook' => '', 'website_googleplus' => '', 'website_instagram' => '', 'website_contact' => '');
	}
	$title = esc_attr( $instance['title'] );
	$website_title = esc_attr( $instance['website_title'] );
	$website_logo = esc_url_raw( $instance['website_logo'] ) ;
	$website_profile = esc_textarea($instance['website_profile'] );
	$website_twitter = esc_url( $instance['website_twitter'] );
	$website_facebook = esc_url( $instance['website_facebook'] );
	$website_googleplus = esc_url( $instance['website_googleplus'] );
	$website_instagram = esc_url( $instance['website_instagram'] );
	$website_contact = esc_url( $instance['website_contact'] );
?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e( 'Title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_logo' ); ?>">
		<?php _e( 'Upload image URL:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_logo' ); ?>" name="<?php echo $this->get_field_name( 'website_logo' ); ?>" type="text" value="<?php echo $website_logo; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_title' ); ?>">
		<?php _e( 'Website title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_title' ); ?>" name="<?php echo $this->get_field_name( 'website_title' ); ?>" type="text" value="<?php echo $website_title; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_profile' ); ?>">
		<?php _e( 'Profile text:','emanon' ); ?>
		</label>
		<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'website_profile' ); ?>" name="<?php echo $this->get_field_name( 'website_profile') ; ?>"><?php echo $website_profile; ?></textarea>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_twitter' ); ?>">
		<?php _e( 'Twitter profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_twitter' ); ?>" name="<?php echo $this->get_field_name( 'website_twitter' ); ?>" type="text" value="<?php echo $website_twitter; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_facebook' ); ?>">
		<?php _e( 'Facebook profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_facebook' ); ?>" name="<?php echo $this->get_field_name( 'website_facebook' ); ?>" type="text" value="<?php echo $website_facebook; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_googleplus' ); ?>">
		<?php _e( 'GooglePlus profile url:' ,'emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_googleplus' ); ?>" name="<?php echo $this->get_field_name( 'website_googleplus' ); ?>" type="text" value="<?php echo $website_googleplus; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_instagram' ); ?>">
		<?php _e( 'Instagram profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_instagram' ); ?>" name="<?php echo $this->get_field_name( 'website_instagram' ); ?>" type="text" value="<?php echo $website_instagram; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'website_contact' ); ?>">
		<?php _e( 'Contact url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'website_contact' ); ?>" name="<?php echo $this->get_field_name( 'website_contact' ); ?>" type="text" value="<?php echo $website_contact; ?>">
	</p>

	<?php
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "Website_Profile" );' ));

/*------------------------------------------------------------------------------------
/* ウィジェット サイドバーCTA
/*----------------------------------------------------------------------------------*/
class Sidebar_CTA extends WP_Widget {
function __construct() {
	$widget_ops = array( 'classname' => 'widget_sidebar_cta', 'description' => __( 'Sidebar CTA widget','emanon' ) );
	parent::__construct(
	'',
	__( '［E］Sidebar CTA widget','emanon' ),
	$widget_ops
	);
}

function widget( $args, $instance ) {
	extract( $args );
	$title = apply_filters( 'widget_title', $instance['title'] );
	$sidebar_cta_image = apply_filters( 'widget_sidebar_cta_image', $instance['sidebar_cta_image'] );
	$sidebar_cta_title = apply_filters( 'widget_sidebar_cta_title', $instance['sidebar_cta_title'] );
	$sidebar_cta_description = apply_filters( 'widget_sidebar_cta_description', $instance['sidebar_cta_description'] );
	$sidebar_cta_btn_text = apply_filters( 'widget_sidebar_cta_btn_text', $instance['sidebar_cta_btn_text'] );
	$sidebar_cta_btn_url = apply_filters( 'widget_sidebar_cta_btn_url', $instance['sidebar_cta_btn_url'] );
?>

<?php echo $args[ 'before_widget' ];
if ( ! empty( $title ) ) {
	echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
} ?>
<div id="sidebar-cta">
<?php if( $sidebar_cta_image ) { ?>
<div><?php if( $sidebar_cta_btn_url ){ ?><a href="<?php echo $sidebar_cta_btn_url ?>"><?php } ?><img src="<?php echo $sidebar_cta_image; ?>" alt="<?php echo $sidebar_cta_title; ?>"><?php if( $sidebar_cta_btn_url ){ ?></a><?php } ?></div><?php } ?>
	<h4><?php echo $sidebar_cta_title; ?></h4>
		<p><?php echo nl2br( $sidebar_cta_description ); ?></p>
		<?php if( $sidebar_cta_btn_url ){ ?>
		<div class="sidebar-cta-btn">
		<span class="btn"><a href="<?php echo esc_url( $sidebar_cta_btn_url ); ?>" ><?php echo esc_html( $sidebar_cta_btn_text ); ?></a></span>
		</div>
		<?php } ?>
</div>

<?php echo $after_widget; ?>
<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['sidebar_cta_image'] = trim( $new_instance['sidebar_cta_image'] );
	$instance['sidebar_cta_title'] = strip_tags( $new_instance['sidebar_cta_title'] );
	$instance['sidebar_cta_description'] = ( $new_instance['sidebar_cta_description'] );
	$instance['sidebar_cta_btn_text'] = strip_tags( $new_instance['sidebar_cta_btn_text'] );
	$instance['sidebar_cta_btn_url'] = trim( $new_instance['sidebar_cta_btn_url'] );
	return $instance;
}

function form($instance) {
	if( empty( $instance ) ){
	$instance = array('title' => '', 'sidebar_cta_image' => '', 'sidebar_cta_title' => '', 'sidebar_cta_description' => '', 'sidebar_cta_btn_text' => '', 'sidebar_cta_btn_url' => '' );
	}
	$title = esc_attr( $instance['title'] );
	$sidebar_cta_image = esc_url_raw( $instance['sidebar_cta_image'] );
	$sidebar_cta_title = esc_attr( $instance['sidebar_cta_title'] );
	$sidebar_cta_description = esc_textarea($instance['sidebar_cta_description'] );
	$sidebar_cta_btn_text = esc_attr( $instance['sidebar_cta_btn_text'] );
	$sidebar_cta_btn_url = esc_url( $instance['sidebar_cta_btn_url'] );
?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e( 'Title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'sidebar_cta_imagee' ); ?>">
		<?php _e( 'Upload image URL:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_imagee' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_image' ); ?>" type="text" value="<?php echo $sidebar_cta_image; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'sidebar_cta_title' ); ?>">
		<?php _e( 'CTA Title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_title' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_title' ); ?>" type="text" value="<?php echo $sidebar_cta_title; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'sidebar_cta_description' ); ?>">
		<?php _e( 'Description:','emanon' ); ?>
		</label>
		<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'sidebar_cta_description' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_description' ); ?>"><?php echo $sidebar_cta_description; ?></textarea>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'sidebar_cta_btn_text' ); ?>">
		<?php _e( 'Btn text:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_btn_text' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_btn_text' ); ?>" type="text" value="<?php echo $sidebar_cta_btn_text; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'sidebar_cta_btn_url' ); ?>">
		<?php _e( 'Btn url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_btn_url' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_btn_url' ); ?>" type="text" value="<?php echo $sidebar_cta_btn_url; ?>">
	</p>

	<?php
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "Sidebar_CTA" );' ));

/*------------------------------------------------------------------------------------
/* ウィジェット サムネイル付き記事一覧
/*----------------------------------------------------------------------------------*/
class New_Post extends WP_Widget {
function __construct() {
	$widget_ops = array( 'classname' => 'widget_new_post', 'description' => __( 'List of articles with thumbnails','emanon' ) );
	parent::__construct(
	'',
	__( '［E］New Posts widget','emanon' ),
	$widget_ops
	);
}

function widget( $args, $instance ) {
	extract( $args );
	$title = apply_filters( 'widget_title', $instance['title'] );
	$number = apply_filters( 'widget_number', $instance['number'] );
	$length = apply_filters( 'widget_length', $instance['length'] );
	$show_date = apply_filters( 'widget_show_date', $instance['show_date'] );
	$query = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
?>

<?php echo $args[ 'before_widget' ];
if ( ! empty( $title ) ) {
	echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
} ?>
<div id="new-post">
	<ul class="new-post-list">
		<?php if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<li class="clearfix">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail( 'square-thumbnail', 'class=new-post-thumbnail' ); ?>
			<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" class="new-post-thumbnail">
			<?php endif; ?>
			<span class="new-post-title"><?php echo mb_strimwidth( get_the_title(), 0, $length, "…" ); ?></span>
			<?php if ( $show_date ): ?>
			<span class="new-post-date"><?php echo get_the_date(); ?></span>
			<?php endif; ?>
			</a>
		</li>
		<?php endwhile;
		else :
		echo '<p>'. __( 'No new post' , 'emanon') .'</p>';
		endif; ?>
		<?php wp_reset_query(); ?>
	</ul>
</div>
<?php echo $after_widget; ?>
<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['number'] = (int) $new_instance['number'];
	$instance['length'] = (int) $new_instance['length'];
	$instance['show_date'] = (bool) $new_instance['show_date'];
	return $instance;
}

function form($instance) {
	if( empty( $instance ) ){
	$instance = array( 'title' => '', 'number' => '5', 'length' => '46', 'show_date' => true );
	}
	$title = esc_attr( $instance['title'] );
	$number = absint( $instance['number'] );
	$length = absint( $instance['length'] );
	$show_date = $instance['show_date'];
?>
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>">
	<?php _e( 'Title:','emanon' ); ?>
	</label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
</p>

<p>
	<label for="<?php echo $this->get_field_id( 'number' ); ?>">
	<?php _e( 'Number:','emanon' ); ?>
	</label>
	<br>
	<input class="widefat" style="width:50px!important" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" /> <?php _e( 'Posts','emanon' ); ?>
</p>

<p>
	<label for="<?php echo $this->get_field_id( 'length' ); ?>">
	<?php _e( 'Length:','emanon' ); ?>
	<br>
	</label>
	<input class="widefat" style="width:50px!important" id="<?php echo $this->get_field_id( 'length' ); ?>" name="<?php echo $this->get_field_name( 'length' ); ?>" type="text" value="<?php echo $length; ?>" /> <?php _e( '※ To restrict title display to 23 characters, enter 46','emanon' ); ?>
</p>

<p>
	<label for="<?php echo $this->get_field_id( 'show_date' ); ?>">
	</label>
	<input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />	<?php _e( 'Display post date','emanon' ); ?>
</p>

	<?php
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "New_Post" );' ));

/*------------------------------------------------------------------------------------
/* ウィジェット 画像バナー
/*----------------------------------------------------------------------------------*/
class Banner extends WP_Widget {
function __construct() {
	$widget_ops = array( 'classname' => 'widget_banner', 'description' => __( 'Banner widget','emanon' ) );
	parent::__construct(
	'',
	__( '［E］Banner widget','emanon' ),
	$widget_ops
	);
}

function widget( $args, $instance ) {
	extract( $args );
	$title = apply_filters( 'widget_title', $instance['title'] );
	$banner_alt = apply_filters( 'widget_banner_alt', $instance['banner_alt'] );
	$banner_image = apply_filters( 'widget_banner_image', $instance['banner_image'] );
	$banner_url = apply_filters( 'widget_banner_url', $instance['banner_url'] );
	$target_blank = apply_filters( 'widget_target_blank', $instance['target_blank'] );
?>

<?php echo $args[ 'before_widget' ];
if ( ! empty( $title ) ) {
	echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
} ?>
<?php if( $banner_image && $target_blank ) { ?><div class="text-center"><a href="<?php echo $banner_url ?>" target="_blank"><img src="<?php echo $banner_image; ?>" alt="<?php echo $banner_alt; ?>"></a></div><?php } elseif( $banner_image && !$target_blank ) { ?><div class="text-center"><a href="<?php echo $banner_url ?>"><img src="<?php echo $banner_image; ?>" alt="<?php echo $banner_alt; ?>"></a></div><?php } ?>
<?php echo $after_widget; ?>
<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['banner_alt'] = strip_tags( $new_instance['banner_alt'] );
	$instance['banner_image'] = trim( $new_instance['banner_image'] );
	$instance['banner_url'] = trim( $new_instance['banner_url'] );
	$instance['target_blank'] = (bool) $new_instance['target_blank'];
	return $instance;
}

function form( $instance ) {
	if( empty( $instance ) ){
	$instance = array('title' => '', 'banner_alt' => '', 'banner_image' => '', 'banner_url' => '', 'target_blank' => '');
	}
	$title = esc_attr( $instance['title'] );
	$banner_image = esc_url_raw( $instance['banner_image'] ) ;
	$banner_alt = esc_attr( $instance['banner_alt'] );
	$banner_url = esc_url( $instance['banner_url'] );
	$target_blank = $instance['target_blank'];
?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e( 'Title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'banner_image' ); ?>">
		<?php _e( 'Upload image URL:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'banner_image' ); ?>" name="<?php echo $this->get_field_name( 'banner_image' ); ?>" type="text" value="<?php echo $banner_image; ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'banner_alt' ); ?>">
		<?php _e( 'Image alt:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'banner_alt' ); ?>" name="<?php echo $this->get_field_name( 'banner_alt' ); ?>" type="text" value="<?php echo $banner_alt; ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'banner_url' ); ?>">
		<?php _e( 'Banner url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'banner_url' ); ?>" name="<?php echo $this->get_field_name( 'banner_url' ); ?>" type="text" value="<?php echo $banner_url; ?>">
	</p>

<p>
	<label for="<?php echo $this->get_field_id( 'target_blank' ); ?>">
	</label>
	<input class="checkbox" type="checkbox" <?php checked( $target_blank ); ?> id="<?php echo $this->get_field_id( 'target_blank' ); ?>" name="<?php echo $this->get_field_name( 'target_blank' ); ?>" />	<?php _e( 'Target blank link','emanon' ); ?>
</p>

	<?php
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "Banner" );' ));
