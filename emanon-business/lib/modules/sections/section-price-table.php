<?php
/**
* Price table section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Pro 1.2
*/
	$price_table_section_title = get_theme_mod( 'price_table_section_title', '' );
	$price_table_section_description = get_theme_mod( 'price_table_section_description', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--price table section-->
<div id="price-section" class="eb-price-section">
	<div class="container inner">
		<div class="price-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
		<?php if ( $price_table_section_title ): ?>
		<h2><?php echo esc_html( $price_table_section_title ); ?></h2>
		<?php endif; ?>
		<?php if ( $price_table_section_description ): ?>
		<p><?php echo nl2br( esc_html( $price_table_section_description ) ); ?></p>
		<?php endif; ?>
		</div>
		<table>
			<tbody>
				<tr>
					<?php for( $li=1; $li<3; $li++ ) { ?>
					<?php $price_item = get_theme_mod( 'price_item_'.$li ); ?>
					<?php $delay = (pow($li, 2)); ?>
					<?php if( $price_item ): ?>
					<td	 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.<?php echo $delay; ?>s">
					<div class="price-item"><?php echo esc_html( $price_item ); ?></div>
					<?php endif; ?>
					<?php $price_selling = get_theme_mod( 'price_selling_'.$li ); ?>
					<?php if( $price_selling ): ?>
					<div class="price-selling"><?php echo esc_html( $price_selling ); ?></div>
					<?php endif; ?>
					<?php $price_description = get_theme_mod( 'price_description_'.$li ); ?>
					<?php if( $price_description ): ?>
					<div class="price-description"><?php echo nl2br( esc_html( $price_description )	 ); ?></div>
					<?php endif; ?>
					</td>
				<?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="bottom-arrow"></div>
</div>
<!--end price table section-->
<?php endif; ?>
