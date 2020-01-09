<?php
/**
 * The template for displaying search forms
 *
 * @package Beatsmandu-shop
 */

?>

<!-- Search Form Widget -->
<div class="beats-search">
    <h2 class="form-title"><?php esc_html_e( 'Search ', 'beatsmandu-shop' ); ?></h2>
    <div class="content">
        <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <div class="input-group">
                <input class="field form-control" id="s" name="s" type="text"
                    placeholder="<?php esc_attr_e( 'Search &hellip;', 'beatsmandu-shop' ); ?>"
                    value="<?php the_search_query(); ?>">
                <span class="input-group-append">
                    <input class="submit btn-ubi" id="searchsubmit" name="submit" type="submit"
                        value="<?php esc_attr_e( 'Search', 'beatsmandu-shop' ); ?>">
                </span>
            </div>
        </form>
    </div>
</div>


