<?php
/**
 * Beatsmandu-shop Theme Customizer
 *
 * @param WP_Customize_Manager $wp_customize the Customizer object.
 *
 * @package Beatsmandu-shop
 */

/**
 * Register different customizer features.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function beatsmandu_shop_customize_register( $wp_customize ) {

	/**
	 *
	 * Add postMessage support for site title and description for the Theme Customizer.
	 */
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.navbar-brand',
				'render_callback' => 'beatsmandu_shop_customize_partial_blogname',
			)
		);
	}

	/**
	 *
	 * Add settings to Colors section
	 */
	$theme_colors = array();

	$theme_colors[] = array(
		'slug'      => 'menu_bar_bgcolor',
		'default'   => '#ffffff',
		'label'     => esc_html__( 'Main Menu Bar Background', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'menu_color',
		'default'   => '#ffffff',
		'label'     => esc_html__( 'Main Menu Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'menu_hover_color',
		'default'   => '#f3ca7a',
		'label'     => esc_html__( 'Main Menu Hover Color', 'beatsmandu-shop' ),
		'transport' => 'refresh',
	);
	$theme_colors[] = array(
		'slug'      => 'site_title_color',
		'default'   => '#ffffff',
		'label'     => esc_html__( 'Site Title Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'main_color',
		'default'   => '#ffffff',
		'label'     => esc_html__( 'Main Text Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'title_color',
		'default'   => '#212529',
		'label'     => esc_html__( 'Entry/Post/Page Title Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'entry_bgcolor',
		'default'   => '#ffffff',
		'label'     => esc_html__( 'Entry Card Background', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'entry_footer_bgcolor',
		'default'   => '#ffffff',
		'label'     => esc_html__( 'Entry Card: Footer Background', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'wgt_title_color',
		'default'   => '#212529',
		'label'     => esc_html__( 'Widget Title Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'link_color',
		'default'   => '#007bff',
		'label'     => esc_html__( 'Text Link Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'link_hover_color',
		'default'   => '#0056b3',
		'label'     => esc_html__( 'Text Link Hover Color', 'beatsmandu-shop' ),
		'transport' => 'refresh',
	);
	$theme_colors[] = array(
		'slug'      => 'meta_color',
		'default'   => '#212529',
		'label'     => esc_html__( 'Meta Text Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'beatsmandu_shop_btn_color',
		'default'   => '#0062cc',
		'label'     => esc_html__( 'Beatsmandu Shop Button Background Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'beatsmandu_shop_btn_hover_color',
		'default'   => '#0069d9',
		'label'     => esc_html__( 'Beatsmandu Shop Button Background: Hover Color', 'beatsmandu-shop' ),
		'transport' => 'refresh',
	);
	$theme_colors[] = array(
		'slug'      => 'footer_bgcolor',
		'default'   => '#343a40',
		'label'     => esc_html__( 'Footer Background', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);
	$theme_colors[] = array(
		'slug'      => 'footer_color',
		'default'   => '#6c757d',
		'label'     => esc_html__( 'Footer Text Color', 'beatsmandu-shop' ),
		'transport' => 'postMessage',
	);

	foreach ( $theme_colors as $color ) {
		$wp_customize->add_setting(
			$color['slug'],
			array(
				'default'           => $color['default'],
				'type'              => 'theme_mod', // 'option'
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => $color['transport'],
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$color['slug'],
				array(
					'label'    => $color['label'],
					'section'  => 'colors',
					'settings' => $color['slug'],
				)
			)
		);
	}

	/**
	 *
	 * Add Section
	 */
	$wp_customize->add_section(
		'general_options',
		array(
			'title'      => __( 'General Settings', 'beatsmandu-shop' ),
			'capability' => 'edit_theme_options',
			'priority'   => 160,
		)
	);

	$wp_customize->add_setting(
		'menubar_mode',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'beatsmandu_shop_sanitize_menubar_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'menubar_mode',
			array(
				'label'    => __( 'Main Menu Bar Mode', 'beatsmandu-shop' ),
				'section'  => 'general_options',
				'settings' => 'menubar_mode',
				'type'     => 'select',
				'choices'  => array(
					'standard' => __( 'Standard', 'beatsmandu-shop' ),
					'alt'      => __( 'Alternative', 'beatsmandu-shop' ),
				),
				'priority' => '10',
			)
		)
	);

	$wp_customize->add_setting(
		'mainmenu_dropdown_mode',
		array(
			'default'           => 'default',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'beatsmandu_shop_sanitize_mainmenu_dropdown_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mainmenu_dropdown_mode',
			array(
				'label'       => __( 'Main Menu: drop-down mode', 'beatsmandu-shop' ),
				'description' => __( 'Default a drop-down submenu by hover, parent link is active. Bootstrap mode: a drop-down submenu by click, the parent link is not active.', 'beatsmandu-shop' ),
				'section'     => 'general_options',
				'settings'    => 'mainmenu_dropdown_mode',
				'type'        => 'select',
				'choices'     => array(
					'default'   => __( 'Default', 'beatsmandu-shop' ),
					'bootstrap' => __( 'Bootstrap', 'beatsmandu-shop' ),
				),
				'priority'    => '10',
			)
		)
	);

	$wp_customize->add_setting(
		'sidebar_position',
		array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'beatsmandu_shop_sanitize_sidebar_position',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sidebar_position',
			array(
				'label'    => __( 'Sidebar Displays', 'beatsmandu-shop' ),
				'section'  => 'general_options',
				'settings' => 'sidebar_position',
				'type'     => 'select',
				'choices'  => array(
					'right' => __( 'Right sidebar', 'beatsmandu-shop' ),
					'left'  => __( 'Left sidebar', 'beatsmandu-shop' ),
					'none'  => __( 'No sidebar', 'beatsmandu-shop' ),
				),
				'priority' => '15',
			)
		)
	);

	/**
	 *
	 * Add Section
	 */
	$wp_customize->add_section(
		'blog_options',
		array(
			'title'      => __( 'Posts page Settings', 'beatsmandu-shop' ),
			'capability' => 'edit_theme_options',
			'priority'   => 170,
		)
	);

	// Settings.

	$wp_customize->add_setting(
		'blog_pagination_mode',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'beatsmandu_shop_sanitize_blog_pagination_mode',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'blog_pagination_mode',
			array(
				'label'    => __( 'Posts page navigation', 'beatsmandu-shop' ),
				'section'  => 'blog_options',
				'settings' => 'blog_pagination_mode',
				'type'     => 'select',
				'choices'  => array(
					'standard' => __( 'Standard', 'beatsmandu-shop' ),
					'numeric'  => __( 'Numeric', 'beatsmandu-shop' ),
				),
				'priority' => '20',
			)
		)
	);

	$wp_customize->add_setting(
		'more_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'more_link',
			array(
				'label'       => __( 'Read More button', 'beatsmandu-shop' ),
				'description' => __( 'Enter the button name which is a link to the full post. You can leave this blank if you want to hide the button.', 'beatsmandu-shop' ),
				'section'     => 'blog_options',
				'type'        => 'text',
			)
		)
	);

	/**
	 * Post List helper function.
	 *
	 * @param array $args posts.
	 */
	function beatsmandu_shop_post_list( $args = array() ) {
		$args       = wp_parse_args( $args, array( 'numberposts' => '-1' ) );
		$posts      = get_posts( $args );
		$output     = array();
		$output[''] = esc_html__( '&mdash; Select Post &mdash;', 'beatsmandu-shop' );
		foreach ( $posts as $post ) {
			$thetitle  = $post->post_title;
			$getlength = strlen( $thetitle );
			$thelength = 32;

			$thetitle = substr( $thetitle, 0, $thelength );
			if ( $getlength > $thelength ) {
				$thetitle .= '...';
			};
			$output[ $post->ID ] = sprintf( '%s', esc_html( $thetitle ) );
		}
		return $output;
	}

	$wp_customize->add_setting(
		'post_dropdown_setting',
		array(
			'default'           => '',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'post_dropdown_setting',
			array(
				'label'    => __( 'Featured Post', 'beatsmandu-shop' ),
				'section'  => 'blog_options',
				'settings' => 'post_dropdown_setting',
				'type'     => 'select',
				'choices'  => beatsmandu_shop_post_list(),
				'priority' => '10',
			)
		)
	);

	$wp_customize->add_setting(
		'blog_layout',
		array(
			'default'           => 'standard',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'beatsmandu_shop_sanitize_blog_layout',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'blog_layout',
			array(
				'label'    => __( 'Layout Style', 'beatsmandu-shop' ),
				'section'  => 'blog_options',
				'settings' => 'blog_layout',
				'type'     => 'select',
				'choices'  => array(
					'list'     => esc_html__( 'List', 'beatsmandu-shop' ),
					'standard' => esc_html__( 'Standard', 'beatsmandu-shop' ),
				),
				'priority' => '15',
			)
		)
	);

	/**
	 *
	 * Add Panel Front Page Settings
	 */
	$wp_customize->add_panel(
		'frontpage_options',
		array(
			'title'           => __( 'Front Page Settings', 'beatsmandu-shop' ),
			'priority'        => 190,
			'active_callback' => 'beatsmandu_shop_set_front_page',
		)
	);

	/**
	 *
	 * Add Section General to Panel
	 */
	$wp_customize->add_section(
		'frontpage_general',
		array(
			'title'    => __( 'General', 'beatsmandu-shop' ),
			'panel'    => 'frontpage_options',
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'hide_page_title',
		array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'beatsmandu_shop_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'hide_page_title',
		array(
			'type'    => 'checkbox',
			'label'   => esc_html__( 'Hide Page Title', 'beatsmandu-shop' ),
			'section' => 'frontpage_general',
		)
	);

	/**
	 *
	 * Add Section Head Banner to Panel
	 */
	$wp_customize->add_section(
		'frontpage_banner',
		array(
			'title'    => __( 'Head Banner', 'beatsmandu-shop' ),
			'panel'    => 'frontpage_options',
			'priority' => 20,
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_title',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_title',
			array(
				'label'    => __( 'Heading', 'beatsmandu-shop' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_title',
				'type'     => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_subtitle',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_subtitle',
			array(
				'label'    => __( 'Sub-Heading', 'beatsmandu-shop' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_subtitle',
				'type'     => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_button_label',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_button_label',
			array(
				'label'    => __( 'Button Label', 'beatsmandu-shop' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_button_label',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'banner_button_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_button_link',
			array(
				'label'    => __( 'Button Link', 'beatsmandu-shop' ),
				'section'  => 'frontpage_banner',
				'settings' => 'banner_button_link',
				'type'     => 'text',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_bg_color',
		array(
			'default'           => '#FFF',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'banner_bg_color',
			array(
				'label'   => esc_html__( 'Background Color', 'beatsmandu-shop' ),
				'section' => 'frontpage_banner',
			)
		)
	);

	// Setting.
	$wp_customize->add_setting(
		'banner_bg_image',
		array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'banner_bg_image',
			array(
				'section' => 'frontpage_banner',
				'label'   => __( 'Background Image', 'beatsmandu-shop' ),
				'width'   => 1900,
				'height'  => 1080,
			)
		)
	);

	// END Options.
}
add_action( 'customize_register', 'beatsmandu_shop_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function beatsmandu_shop_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Sanitize the menu bar layout options.
 *
 * @param string $input Menu bar layout.
 */
function beatsmandu_shop_sanitize_menubar_mode( $input ) {
	$valid = array(
		'standard' => __( 'Standard', 'beatsmandu-shop' ),
		'alt'      => __( 'Alternative', 'beatsmandu-shop' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the main menu drop-down mode option.
 *
 * @param string $input options.
 */
function beatsmandu_shop_sanitize_mainmenu_dropdown_mode( $input ) {
	$valid = array(
		'default'   => __( 'Default', 'beatsmandu-shop' ),
		'bootstrap' => __( 'Bootstrap', 'beatsmandu-shop' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the sidebar position options.
 *
 * @param string $input Sidebar position options.
 */
function beatsmandu_shop_sanitize_sidebar_position( $input ) {
	$valid = array(
		'right' => __( 'Right sidebar', 'beatsmandu-shop' ),
		'left'  => __( 'Left sidebar', 'beatsmandu-shop' ),
		'none'  => __( 'No sidebar', 'beatsmandu-shop' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the navigation mode options.
 *
 * @param string $input navigation mode options.
 */
function beatsmandu_shop_sanitize_blog_pagination_mode( $input ) {
	$valid = array(
		'standard' => __( 'Standard', 'beatsmandu-shop' ),
		'numeric'  => __( 'Numeric', 'beatsmandu-shop' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the blog layout options.
 *
 * @param string $input blog layout options.
 */
function beatsmandu_shop_sanitize_blog_layout( $input ) {
	$valid = array(
		'list'     => esc_html__( 'List', 'beatsmandu-shop' ),
		'standard' => esc_html__( 'Standard', 'beatsmandu-shop' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Checkbox sanitization callback example.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function beatsmandu_shop_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 *
 * Helper function for Contextual Control
 * Whether the static page is set to a front displays
 * https://developer.wordpress.org/reference/classes/wp_customize_control/active_callback/
 */
function beatsmandu_shop_set_front_page() {
	if ( 'page' === get_option( 'show_on_front' ) ) {
		return true;
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function beatsmandu_shop_customize_preview_js() {
	wp_enqueue_script( 'beatsmandu-shop-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '25032018', true );
}
add_action( 'customize_preview_init', 'beatsmandu_shop_customize_preview_js' );

/**
 * This will generate a line of CSS for use in header output. If the setting
 * ($mod_name) has no defined value, the CSS will not be output.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API#Sample_Theme_Customization_Class
 *
 * @uses get_theme_mod()
 * @param string $selector CSS selector.
 * @param string $style The name of the CSS *property* to modify.
 * @param string $mod_name The name of the 'theme_mod' option to fetch.
 * @param string $prefix Optional. Anything that needs to be output before the CSS property.
 * @param string $postfix Optional. Anything that needs to be output after the CSS property.
 * @param bool   $echo Optional. Whether to print directly to the page (default: true).
 * @return string Returns a single line of CSS with selectors and a property.
 */
function beatsmandu_shop_generate_css( $selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true ) {
	$return = '';
	$mod    = esc_html( get_theme_mod( $mod_name ) );
	if ( ! empty( $mod ) ) {
		$return = sprintf(
			'%s { %s:%s; }',
			$selector,
			$style,
			$prefix . $mod . $postfix
		);
		if ( $echo ) {
			echo $return; // WPCS: XSS OK.
		}
	}
	return $return;
}


/**
 * Output generated a line of CSS from customizer values in header output.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API#Sample_Theme_Customization_Class
 *
 * Used by hook: 'wp_head'
 *
 * @see add_action('wp_head',$func)
 */
function beatsmandu_shop_customizer_css() {
	?>
	<!--Customizer CSS--> 
	<style type="text/css">
		<?php
			beatsmandu_shop_generate_css( '.front-page .jumbotron', 'background-color', 'banner_bg_color' );
			beatsmandu_shop_generate_css( '.navbar', 'background-color', 'menu_bar_bgcolor' );
			beatsmandu_shop_generate_css( '.navbar .navbar-nav .nav-link', 'color', 'menu_color' );
			beatsmandu_shop_generate_css( '.menu-item-has-children:after', 'color', 'menu_color' );
			beatsmandu_shop_generate_css( '.navbar .navbar-nav .nav-link:hover', 'color', 'menu_hover_color' );
			beatsmandu_shop_generate_css( '.navbar .navbar-brand, .navbar .navbar-brand:hover', 'color', 'site_title_color' );
			beatsmandu_shop_generate_css( 'body', 'color', 'main_color' );
			beatsmandu_shop_generate_css( '.entry-title, .entry-title a, .page-title', 'color', 'title_color' );
			beatsmandu_shop_generate_css( 'a', 'color', 'link_color' );
			beatsmandu_shop_generate_css( 'a:hover', 'color', 'link_hover_color' );
			beatsmandu_shop_generate_css( '.entry-footer, .entry-meta', 'color', 'meta_color' );
			beatsmandu_shop_generate_css( '.post .card-body', 'background-color', 'entry_bgcolor' );
			beatsmandu_shop_generate_css( '.post .card-footer', 'background-color', 'entry_footer_bgcolor' );
			beatsmandu_shop_generate_css( '.widget-title', 'color', 'wgt_title_color' );
			beatsmandu_shop_generate_css( '.btn', 'background-color', 'beatsmandu_shop_btn_color' );
			beatsmandu_shop_generate_css( '.btn:hover', 'background-color', 'beatsmandu_shop_btn_hover_color' );
			beatsmandu_shop_generate_css( '#footer', 'background-color', 'footer_bgcolor' );
			beatsmandu_shop_generate_css( '#footer', 'color', 'footer_color' );
		?>

	</style>
	<?php
}
add_action( 'wp_head', 'beatsmandu_shop_customizer_css' );
