<?php
/**
* Template Comments
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

if ( post_password_required() ) {
	return;
}
?>
<?php if ( have_comments() ) : ?>
<div id="comment-area">
	<h2 id="comments"><i class="fa fa-comments-o"></i><?php _e( 'Comments', 'emanon' ); ?></h2>
	<ul>
	<?php wp_list_comments( 'callback=emanon_comment' ); ?>
	</ul>
	<div class="comment-page-link">
	<?php paginate_comments_links(); ?>
	</div>
</div>
<?php endif; ?>
<?php
$comments_args = array(
	'comment_notes_before' => '<span>' . __( 'Never e-mail address is published', 'emanon' ) . '</span>' ,
	'fields' => array(
		'author' => '<dt>' . '<label for="author">' . __( 'Commenter name', 'emanon' ) . ( $req ? '<span class="required">' . __( 'Required', 'emanon' ) . '</span>' : '' )	 . '</label></dt> '.
		 '<dd><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="50" /></dd>',
		 'email'	=> '<dt><label for="email">' . __(	'Commenter email', 'emanon' ). ( $req ? '<span class="required">' . __( 'Required', 'emanon' ) . '</span>' : '' ) . '</label></dt> '.
		 '<dd><input id="email" name="email" type="text" value="' . esc_attr(	 $commenter['comment_author_email'] ) . '" size="50" /></dd></dl>',
		 'url'	=> '',),
	 'comment_field' => '<dl><dt><label for="comment">' . __( 'comment', 'emanon' ) . '</label></dt>
	 <dd><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></dd>',
 );
comment_form( $comments_args ); ?>
