<?php
/**
 * Template Name: Project Listing
 */

get_header(); ?>


<div class="centered-container">
        <h1>Projects</h1>
</div>

<div class="project-listing">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $args = [
        'post_type' => ['post', 'projects'], 
        'posts_per_page' => 10,
        'paged' => $paged,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('dist/components/blog-card');
        endwhile;

        the_posts_pagination();

        wp_reset_postdata(); 
    else : ?>
        <p>
            <?php esc_html_e('No projects found.', 'idm250-2025'); ?>
        </p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
