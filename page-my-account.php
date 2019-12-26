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
		<main id="main" class="site-main row">

<?php
if ( is_user_logged_in() ) {
	?>
	<div class="purchase-history">
		<h3>Purchase History</h3>
	<?php
	echo do_shortcode( '[purchase_history]' );
	?>
	</div>
	
	<div class="download-history">
		<h3>Download History</h3>
		<?php
	echo do_shortcode( '[download_history]' );
	?>
	</div>
	<?php
} else {
	?>
	<div class="col-md-6">
	<?php
	echo do_shortcode( '[edd_register]' );
	?>
	</div>
	<div class="col-md-6">
	<?php
	echo do_shortcode( '[edd_login]' );
	?>
	</div>
	<?php
}
?>

		</main><!-- #main -->
</div><!-- /.container -->

<?php
get_footer();
