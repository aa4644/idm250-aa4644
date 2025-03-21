<?php get_header(); ?>

<div class="wrapper">
    <div class="about-me-container">
        <!-- Left section: Title and Paragraph -->
        <div class="about-me-content">
            <h1 class="page-header">
                <?php echo get_the_title(); ?> 
            </h1>

            <div class="about-me-text">
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

        <!-- Right section: Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Other Content Below -->
    <div class="other-content">
        <?php get_template_part('dist/components/content'); ?>
    </div>
</div>

<?php get_footer(); ?>
