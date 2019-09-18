<?php
/**
 * Helper functions.
 *
 * @package Beatsmandu Shop
 */


/**
 *
 * Helper function for Contextual Control
 * Whether the static page is set to a front displays
 * https://developer.wordpress.org/reference/classes/wp_customize_control/active_callback/
 */


if ( ! function_exists( 'beatsmandu_shop_header_page_title' ) ) :

	/**
	 * Display page title on header.
	 *
	 * @since 1.0.0
	 */
	function beatsmandu_shop_header_page_title() {
		if ( is_front_page() ) :
			return;
		elseif ( is_home() ) :
			?>
<div class="page-content">
    <div class="container">
        <h1 class="header-heading uppercase"><?php single_post_title(); ?></h1>
        <p>The Music Maker WordPress Theme is a powerful website template that allows you to sell beats, music, loops, products, and more.</p>
    </div>
</div>
<?php
		elseif ( is_archive() ) :
			?>
<div class="page-content">
    <div class="container">
        <h1 class="header-heading uppercase"><?php the_archive_title(); ?></h1>
    </div>
</div>
<?php

elseif ( is_single() ) :
    ?>
<div class="page-content">
    <div class="container">
        <h1 class="header-heading uppercase"><?php printf( esc_html__( 'Single Blog', 'beatsmandu-shop' ), get_search_query() ); ?></h1>
        <p>The Music Maker WordPress Theme is a powerful website template that allows you to sell beats, music, loops, products, and more.</p>
    </div>
</div>
<?php
		elseif ( is_search() ) :
			?>
<div class="page-content">
    <div class="container">
        <h1 class="header-heading uppercase">
            <?php printf( esc_html__( 'Search Results for: %s', 'beatsmandu-shop' ), get_search_query() ); ?>
        </h1>
    </div>
</div>
<?php
		elseif ( is_404() ) :
			?>
<div class="page-content">
    <div class="container">
        <h1 class="header-heading uppercase">
            <span><?php echo __( 'Oops!', 'beatsmandu-shop' ); ?></span><?php echo esc_html__( ' That page can&#39;t be found.', 'beatsmandu-shop' ); ?>
        </h1>

        <div class="error-404 not-found">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<?php
		endif;
	}

endif;