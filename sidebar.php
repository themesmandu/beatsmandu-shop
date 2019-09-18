<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beatsmandu-shop
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || get_theme_mod( 'sidebar_position' ) === 'none' ) {
	return;
}

if ( get_theme_mod( 'sidebar_position' ) === 'right' ) {
	$beatsmandu_shop_sidebar_order = 'order-last';
} elseif ( get_theme_mod( 'sidebar_position' ) === 'left' ) {
	$beatsmandu_shop_sidebar_order = 'order-first';
} else {
	$beatsmandu_shop_sidebar_order = 'order-last';
}
?>

<aside id="sidebar" class="widget-area col-lg-4 <?php echo esc_attr( $beatsmandu_shop_sidebar_order ); ?>">
    <div class="sidebar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>