<?php
/**
 * Template part for displaying Single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beatsmandu-shop
 */

?>

<article id="post-<?php the_ID(); ?>" class="single-article box-shadow">

    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="card-body">

        <div class="entry-links">
            <?php beatsmandu_shop_entry_footer(); ?>
        </div>
        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </header>

        <?php
if ( get_post_type() === 'post' ) {
	?>
        <div class="entry-meta mb-3">
			<?php
			beatsmandu_shop_posted_by();
			beatsmandu_shop_posted_on();
		?>
        </div>

        <?php
}
?>

        <?php
	if ( has_excerpt() ) :
		?>
        <div class="lead"><?php the_excerpt(); ?></div>
        <?php
		endif;
	?>

        <div class="entry-content">
            <?php
			the_content(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers */
					esc_html__( 'Continue reading%s', 'beatsmandu-shop' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'beatsmandu-shop' ),
					'after'  => '</div>',
				)
			);
			?>
        </div><!-- .entry-content -->

    </div><!-- .card-body -->
</article><!-- #post-<?php the_ID(); ?> -->