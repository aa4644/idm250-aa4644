<?php
/**
 * Archive Template
 * This file is used by WordPress to display archive pages.
 */

get_header(); ?>
<div class="archive-wrapper">
    <div class="archive-header">
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description(); ?>
    </div>

    <?php
    if (have_posts()) :
        if (is_category()) {
            $category = get_queried_object(); 
            $args = array(
                'post_type' => array('post', 'projects'), 
                'posts_per_page' => 10,  
                'category_name' => $category->slug,  
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
            );
            $query = new WP_Query($args);
        } else {
            $query = new WP_Query(array(
                'post_type' => array('post', 'projects'), 
                'posts_per_page' => 10,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            ));
        }

        if ($query->have_posts()) : ?>

            <div class="post-list">  
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="grid-item">
                        <?php get_template_part('dist/components/blog-card'); ?>
                    </div>
                <?php endwhile; ?>
            </div> 

            <?php
            the_posts_pagination();
            wp_reset_postdata();  
        else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
