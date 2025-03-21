<?php

/**
 * Enable support for a custom logo.
 *
 * This function allows users to set a custom logo via the WordPress Customizer.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
 */
function theme_add_logo()
{
    add_theme_support('custom-logo', [
        'height' => 250,
        'width' => 250,
        'flex-width' => true, 
        'flex-height' => true, 
    ]);
}
add_action('after_setup_theme', 'theme_add_logo');

/**
 * Registers Theme Customizer settings.
 *
 * - Adds color options for primary and secondary theme colors.
 * - Enables custom logo support.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @link https://developer.wordpress.org/reference/hooks/customize_register/
 */
function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section('theme_colors', [
        'title' => __('Theme Colors', 'mytheme'),
        'priority' => 30,
    ]);

    $colors = [
        'primary_color' => [
            'label' => __('Primary Color', 'mytheme'),
            'default' => '#0498DC',
        ],
        'secondary_color' => [
            'label' => __('Secondary Color', 'mytheme'),
            'default' => '#ba7e15',
        ],
    ];

    foreach ($colors as $color_id => $color) {
        $wp_customize->add_setting($color_id, [
            'default' => $color['default'],
            'sanitize_callback' => 'sanitize_hex_color',
        ]);

        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            $color_id,
            [
                'label' => $color['label'],
                'section' => 'theme_colors',
                'settings' => $color_id,
            ]
        ));
    }
}
add_action('customize_register', 'mytheme_customize_register');

/**
 * Outputs dynamic theme colors to the site's CSS.
 *
 * Injects `--primary-color` and `--secondary-color` into the CSS variables.
 */
function mytheme_customizer_css()
{
    ?>
<style>
:root {
    --primary-color:
        <?php echo esc_attr(get_theme_mod('primary_color', '#0498DC'));
    ?>;
    --secondary-color:
        <?php echo esc_attr(get_theme_mod('secondary_color', '#ba7e15'));
    ?>;
}
</style>
<?php
}
add_action('wp_head', 'mytheme_customizer_css');