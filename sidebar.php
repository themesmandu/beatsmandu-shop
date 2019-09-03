<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beatsmandu-shop
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || get_theme_mod( 'sidebar_position' ) === 'none' ) {
	return;
}

if ( get_theme_mod( 'sidebar_position' ) === 'right' ) {
	$beatsmandu_shop_sidebar_order = 'order-last';
} elseif ( get_theme_mod( 'sidebar_position' ) === 'left' ) {
	$beatsmandu_shop_bar_order = 'order-first';
} else {
	$beatsmandu_shop_bar_order = 'order-last';
}
?>

<aside id="secondary" class="widget-area col-md-4 <?php echo esc_attr( $beatsmandu_shop_bar_order ); ?>">		
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
