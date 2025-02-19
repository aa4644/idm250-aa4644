<?php
/**
 * Enqueues all scripts and styles for the theme.
 * This function is called when WordPress loads the theme.
 *
 * @return void
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function theme_styles_and_scripts()
{
    wp_enqueue_style(
        'idm-normalize', // Handle for the stylesheet. Has to be unique
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', // URL for the stylesheet
        [], // No dependencies
        '8.0.1' // Version of Normalize.css
    );

    wp_enqueue_style(
        'idm-main', // Handle for the stylesheet
        get_template_directory_uri() . '/dist/css/main.css', // Path to the stylesheet
        [], // No dependencies
        filemtime(get_template_directory() . '/dist/css/main.css') // Cache-busting by file modification time
    );

    wp_enqueue_script(
        'idm-main-script', // Handle for the script
        get_template_directory_uri() . '/dist/js/main.js', // Path to the script
        [], // No dependencies
        filemtime(get_template_directory() . '/dist/js/main.js'), // Cache-busting by file modification time
        true // Load in the footer
    );
}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');


function theme_setup()
{
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');



function kismet_customize_register($wp_customize) {
    // Section for 404 Page Settings
    $wp_customize->add_section('kismet_error_page_settings', array(
        'title'    => __('404 Page Settings', 'kismet'),
        'priority' => 30,
    ));

    // 404 Heading
    $wp_customize->add_setting('kismet_404_heading', array(
        'default'   => "404",
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('kismet_404_heading', array(
        'label'    => __('404 Heading', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'type'     => 'text',
    ));

    // 404 Subheading
    $wp_customize->add_setting('kismet_404_subheading', array(
        'default'   => "PAGE NOT FOUND",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kismet_404_subheading', array(
        'label'    => __('404 Subheading', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'type'     => 'text',
    ));

    // 404 Button Text
    $wp_customize->add_setting('kismet_404_button_text', array(
        'default'   => "Back to Home",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kismet_404_button_text', array(
        'label'    => __('404 Button Text', 'kismet'),
        'section'  => 'kismet_error_page_settings',
        'type'     => 'text',
    ));

    // Section for Footer Settings
    $wp_customize->add_section('footer_settings', array(
        'title'    => __('Footer Settings', 'kismet'),
        'priority' => 40,
    ));

    // Footer Heading
    $wp_customize->add_setting('footer_heading', array(
        'default'   => 'Let\'s Connect!',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_heading', array(
        'label'    => __('Footer Heading', 'kismet'),
        'section'  => 'footer_settings',
        'type'     => 'text',
    ));

    // Footer Email
    $wp_customize->add_setting('footer_email', array(
        'default'   => 'Lorem@email.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('footer_email', array(
        'label'    => __('Footer Email', 'kismet'),
        'section'  => 'footer_settings',
        'type'     => 'email',
    ));
}

add_action('customize_register', 'kismet_customize_register');


function theme_customize_register($wp_customize) {
    // Section for social media links
    $wp_customize->add_section('theme_social_links', array(
        'title' => __('Social Media Links', 'theme'),
        'priority' => 30,
    ));

    // Facebook link
    $wp_customize->add_setting('facebook_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('facebook_link', array(
        'label' => __('Facebook URL', 'theme'),
        'section' => 'theme_social_links',
        'type' => 'url',
    ));

    // Twitter link
    $wp_customize->add_setting('twitter_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('twitter_link', array(
        'label' => __('Twitter URL', 'theme'),
        'section' => 'theme_social_links',
        'type' => 'url',
    ));

    // LinkedIn link
    $wp_customize->add_setting('linkedin_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('linkedin_link', array(
        'label' => __('LinkedIn URL', 'theme'),
        'section' => 'theme_social_links',
        'type' => 'url',
    ));

    // Instagram link
    $wp_customize->add_setting('instagram_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('instagram_link', array(
        'label' => __('Instagram URL', 'theme'),
        'section' => 'theme_social_links',
        'type' => 'url',
    ));
}

add_action('customize_register', 'theme_customize_register');



