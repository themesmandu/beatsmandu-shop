<?php

/**
 * The site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beatsmandu-shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header id="top-header" class="site-header" role="banner">
            <div class="header-wrap">
                <?php
				if ( get_theme_mod( 'menubar_mode' ) === 'alt' ) {
					// alternative navigation bar:
					// left: logo, main menu - right: search form or something.
					get_template_part( 'template-parts/navigation/main-navbar', 'alt' );
				} else {
					// standard navigation bar:
					// left: logo - right: main menu.
					get_template_part( 'template-parts/navigation/main-navbar' );
				}

				//header page title.
				beatsmandu_shop_header_page_title();
				?>
            </div>

            <?php
			// Header Image.
			the_custom_header_markup();

			if ( is_front_page() && ! is_home() ) {
				// head banner on the front page if it enabled.
				get_template_part( 'template-parts/jumbotron' );
			}
			?>

            <?php if ( is_front_page() && ! is_home() ) : ?>
            <div class="header-content align-center">
                <div class="container">
                    <h2 class="header-heading uppercase"> wordpress theme for beatsmakers</h2>

                    <p>Highly customizable template that enables you to create your music business. Build your brand and sell music, beats, loops, products, and more!</p>

                    <a href="#" class="btn btn-uni br-round">3 Demos</a>
                    <a href="#" class="btn btn-uni btn-white br-round">Features</a>
                </div>
            </div>
            <?php endif; ?>

        </header><!-- #masthead -->

        <div id="content" class="content-wrap">