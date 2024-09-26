<?php 
/**
 * Conceptions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Conceptions
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Define Constants
 */
define( 'CONCEPTION_THEME_VERSION', '1.0.2' );

/**
 * Register style and js file
 */
if (! function_exists('conception_enqueue_script_style')) {
    function conception_enqueue_script_style(){
        wp_enqueue_style('vendor-css', get_template_directory_uri() .'/css/vendor.css',array(), CONCEPTION_THEME_VERSION, 'all' );
        wp_enqueue_style('main-css', get_template_directory_uri() .'/css/main.css',array(), CONCEPTION_THEME_VERSION, 'all' );
        wp_enqueue_script( 'vendor-js', get_template_directory_uri() . '/js/vendor.js', array( 'jquery' ),CONCEPTION_THEME_VERSION, true );
        wp_enqueue_script( 'components-js', get_template_directory_uri() . '/js/components.js', array( 'jquery' ),CONCEPTION_THEME_VERSION, true );
    }
add_action('wp_enqueue_scripts', 'conception_enqueue_script_style');
}
/**
 * Register nav menu
 */
if (! function_exists('conception_nev_menus')) {
    function conception_nev_menus(){
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'ci'),
        ));
    }
    add_action('after_setup_theme','conception_nev_menus');
}

add_theme_support( 'custom-logo' );
// =========================================================================
// REGISTER CUSTOMIZER - PANEL, SECTION, SETTINGS AND CONTROL
// =========================================================================
function theme_name_register_theme_customizer( $wp_customize ) {
    // Create custom panel.
    $wp_customize->add_panel( 'home_text', array(
        'priority'       => 10,
        'title'          => __( 'Home page', 'ci' ),
        'description'    => __( 'Set editable text for certain content.', 'ci' ),
    ) );
    
    // For header section 
    $wp_customize->add_section( 'custom_header_text' , array(
        'title'    => __('Header area','ci'),
        'panel'    => 'home_text',
        'priority' => 10
    ));
    
    // Add left section setting.
    $wp_customize->add_setting( 'facebook_url', array(
         'default'           => __( 'https://www.facebook.com/conceptionsindia/', 'ci' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    
    // Add left section control.
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'facebook_url',
        array(
            'label'    => __( 'Facebook url', 'ci' ),
            'section'  => 'custom_header_text',
            'settings' => 'facebook_url',
            'type'     => 'text'
        )
    ));
    
    
    // Add right section setting.
    $wp_customize->add_setting( 'right_text_block', array(
         'default'           => __( 'Drop Request', 'ci' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    
    // Add right section control.
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_right_text',
        array(
            'label'    => __( 'Right section', 'ci' ),
            'section'  => 'custom_header_text',
            'settings' => 'right_text_block',
            'type'     => 'text'
        )
    ));


        // Add right section setting.
    $wp_customize->add_setting( 'phone_number', array(
         'default'           => __( '+917829467676', 'ci' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    
    // Add right section control.
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'phone_number',
        array(
            'label'    => __( 'Phone Number', 'ci' ),
            'section'  => 'custom_header_text',
            'settings' => 'phone_number',
            'type'     => 'text'
        )
    ));
    $wp_customize->selective_refresh->add_partial( 'phone_number', array(
    'selector' => '.footer_left', // You can also select a css class
) );
    $wp_customize->add_setting( 'home_email', array(
         'default'           => __( 'info@conceptionsindia.com', 'ci' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'home_email',
        array(
            'label'    => __( 'Email', 'ci' ),
            'section'  => 'custom_header_text',
            'settings' => 'home_email',
            'type'     => 'email'
        )
    ));

$wp_customize->selective_refresh->add_partial( 'home_email', array(
    'selector' => '.footer_right', // You can also select a css class
) );

// For footer section
    $wp_customize->add_section('footer_copyright_text', array(
        'title' => __('Footer Copyright', 'ci'),
        'panel' =>'home_text',
        'priority'=>11,
    ));
    // Add left section setting.
    $wp_customize->add_setting( 'copyright_text', array(
         'default'           => __( '&copy; 2023. All rights reserved', 'ci' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    
    // Add left section control.
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'copyright_text_footer',
        array(
            'label'    => __( 'Copyright Text', 'ci' ),
            'section'  => 'footer_copyright_text',
            'settings' => 'copyright_text',
        )
    ));
    // For social media customize
    $wp_customize->add_section('footer_social_media', array(
        'title' => __('Footer Social media','ci'),
        'panel' => 'home_text',
        'priority'=>12
    ));
    $wp_customize->add_setting('footer_facebook_link', array(
        'default' => __('https://www.facebook.com/conceptionsindia/','ci'),
        'sanitize_callback '=> 'sanitize_text',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_facebook_url',
        array(
            'label' =>__('Facebook Url', 'ci'),
            'section' =>'footer_social_media',
            'settings'=> 'footer_facebook_link',
            'type'    =>'text'
        )
    ));
    $wp_customize->add_setting('footer_twitter', array(
        'default' => __('https://twitter.com/conceptions_ind', 'ci'),
        'sanitize_callback' => 'sanitize_text',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_twitter_url',
        array(
            'label' =>__('Twitter Url','ci'),
            'section' => 'footer_social_media',
            'settings' =>'footer_twitter',
            'type' =>'text',
        )
        ));
    $wp_customize->add_setting('footer_instagram', array(
        'default' => __('https://www.instagram.com/conceptionsindia/', 'ci'),
        'sanitize_callback' => 'sanitize_text',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_instagram_url',
        array(
            'label' =>__('Instagram Url','ci'),
            'section' => 'footer_social_media',
            'settings' =>'footer_instagram',
            'type' =>'text',
        )
        ));

    $wp_customize->add_setting('footer_youtube', array(
        'default' => __('https://www.youtube.com/channel/UCkkWoOPvoNfWnw8mPphU7jg', 'ci'),
        'sanitize_callback' => 'sanitize_text',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_youtube_url',
        array(
            'label' =>__('Youtube Url','ci'),
            'section' => 'footer_social_media',
            'settings' =>'footer_youtube',
            'type' =>'text',
        )
        ));
    // Sanitize text.
    function sanitize_text( $text ) {
        return sanitize_text_field( $text );
    }
}
add_action( 'customize_register', 'theme_name_register_theme_customizer' );

/**
 * For Image slider home page 
 * */ 

 function add_slider_metabox() {
    add_meta_box(
        'slider_metabox',
        'Image Slider',
        'render_slider_metabox',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_slider_metabox');

function render_slider_metabox($post) {
    $slider_images = get_post_meta($post->ID, 'slider_images', true);
    ?>
    <label for="slider_images">Slider Images:</label>
    <input type="text" id="slider_images" name="slider_images" value="<?php echo esc_attr($slider_images); ?>" style="width: 100%;">
    <p class="description">Enter the image URLs separated by commas.</p>
    <?php
}

function save_slider_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['slider_images'])) {
        $slider_images = sanitize_text_field($_POST['slider_images']);
        update_post_meta($post_id, 'slider_images', $slider_images);
    }
}
add_action('save_post', 'save_slider_metabox');