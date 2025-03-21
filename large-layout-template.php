<?php
/*
    Template Name: Large Layout Template
*/
?>

<?php get_header(); ?>

<div class="wrapper"> 
    <div class="large-wrapper"> 
        <div class="large-about-me-container">
            <div class="large-about-me-content">
                <h1 class="large-page-header">
                    <?php echo get_the_title(); ?>
                </h1>

                <!-- Left Section: Title and Paragraph -->
                <div class="large-about-me-text">
                    <?php 
                    $about_me_text = get_post_meta(get_the_ID(), 'about_me_text', true);
                    if ($about_me_text) {
                        echo '<p>' . esc_html($about_me_text) . '</p>';
                    } else {
                        echo '<p>' . get_the_content() . '</p>';
                    }
                    ?>
                </div>
            </div>
            
            <!-- Right Section: Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="large-featured-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Other Content Below -->
        <div class="other-content">
            <?php echo get_the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
