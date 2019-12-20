<?php
/**
 * The template for displaying my account page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beatsmandu-shop
 */

get_header();
?>

<div class="container">
	<div class="row">

	<div id="primary" class="content-area<?php beatsmandu_shop_content_class(); ?>">
		<main id="main" class="site-main">

<?php
if ( is_user_logged_in() ) {
	echo do_shortcode( '[purchase_history]' );
	echo do_shortcode( '[download_history]' );
} else {
	echo do_shortcode( '[edd_register]' );
	echo do_shortcode( '[edd_login]' );
}
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/* Get Sidebar #secondary */
get_sidebar();
?>

	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
