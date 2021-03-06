<?php
/**
* Thumb Card
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<!--thumbnail-->
<?php if ( has_post_thumbnail() ): ?>
<div class="eye-catch">
	<a class="image-link-border" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
<?php emanonn_entry_meta_category(); ?>
</div>
<?php else: ?>
<div class="eye-catch">
	<a class="image-link-border" href="<?php the_permalink(); ?>"><img width="544" height="262" src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/small-no-img.png" alt="no image" /></a>
<?php emanonn_entry_meta_category(); ?>
</div>
<?php endif; ?>
<!--end thumbnail-->