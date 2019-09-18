<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beatsmandu-shop
 */

?>

</div><!-- #content -->


<footer id="footer">

    <div class="container">
        <?php
		$active = array();
	for ( $i = 1; $i <= 4; $i++ ) {
		if ( is_active_sidebar( 'footer-' . $i ) ) {
			$active[] = $i;
		}
	}
	?>
        <?php if ( 0 !== count( $active ) ) { ?>
        <div id="footer-widgets" class="row content">
            <?php foreach ( $active as $footer_widget_id ) : ?>
            <div class="col-lg-3 col-sm-6 column">
                <?php dynamic_sidebar( 'footer-' . $footer_widget_id ); ?>
            </div>
            <?php endforeach; ?>
        </div><!-- #footer-widgets -->
        <?php } ?>

        <div class="site-info">
            <?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Powered by %s', 'beatsmandu-shop' ), '<a href="https://wordpress.org/">WordPress</a>' );
				?>
            <span class="sep"> | </span>
            <?php
					/* translators: 1: Theme name, 2: Theme author. */
					sprintf( esc_html__( '&copy; %1$s %2$s by %3$s', 'beatsmandu-shop' ), date( 'Y' ), esc_html( wp_get_theme()->get( 'Name' ) ), '&nbsp;<a target="_blank" href="' . esc_url( wp_get_theme()->get( 'AuthorURI' ) ) . '">' . esc_html( ucwords( wp_get_theme()->get( 'Author' ) ) ) . '</a>' );
				?>
        </div><!-- .site-info -->
    </div><!-- .container -->
    <button class="up-btn" id="up-btn" title="<?php echo esc_html( __( 'Go to top', 'ghumgham' ) ); ?>"
        style="display: block;"><i class="fas fa-chevron-up"></i></button>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>