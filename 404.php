<?php get_header(); ?>

<div class="error-page">
    <h1 class="error-title">
        <?php 
        $error_heading = get_theme_mod('kismet_404_heading', '404');
        echo esc_html($error_heading); 
        ?>
    </h1>
    <h2 class="error-subtitle">
        <?php 
        // (default is 'PAGE NOT FOUND' if not set)
        $error_subheading = get_theme_mod('kismet_404_subheading', 'PAGE NOT FOUND');
        echo esc_html($error_subheading); 
        ?>
    </h2>
    <p class="error-message">
        <?php 
        // 
        echo esc_html__('Sorry, the page you’re looking for doesn’t exist!', 'kismet'); 
        ?>
    </p>
    <div class="wp-block-button">
        <a href="<?php echo esc_url(home_url()); ?>" class="wp-block-button__link">
            <?php 
            // (default is 'Back to Home' if not set)
            $button_text = get_theme_mod('kismet_404_button_text', 'Back to Home');
            echo esc_html($button_text); 
            ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>
