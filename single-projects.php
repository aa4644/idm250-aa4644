<?php
/**
 * Single Custom Post Type Template
 *
 * This template displays single posts for a **custom post type**.
 * Example: For a custom post type "projects," this file would be `single-projects.php`.
 *
 * 🔥 **When is this file used?**
 * - When a user views a single post belonging to a custom post type (`projects`).
 *
 * 🏗️ **Template Hierarchy for Custom Post Types:**
 *   1. single-{post_type}.php   ✅ (e.g., single-projects.php)
 *   2. single.php               (generic single post template)
 *   3. singular.php             (generic template for all single items)
 *   4. index.php                (fallback)
 *
 * 💡 **Key Features:**
 * - Custom layouts specific to your custom post type.
 * - Ideal for displaying detailed project information, portfolios, etc.
 *
 * 🌐 **Further Reading:**
 * https://developer.wordpress.org/themes/template-files-section/custom-post-type-template-files/
 *
 * @package YourThemeName
 */
?>
<?php get_header(); ?>

<main class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="single-project">
            
            <!-- Featured Image First -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="project-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <!-- Title Below the Featured Image -->
            <h1 class="project-title"><?php the_title(); ?></h1>

            <!-- Post Meta Information -->
            <p class="post-meta">
                Published on <?php the_date(); ?> 
                <?php if (get_the_category()) : ?>
                    in <?php the_category(', '); ?>
                <?php endif; ?>
            </p>

            <!-- Post Content -->
            <div class="post-content container-fluid">
                <?php the_content(); ?>
            </div>

            <!-- Post Tags -->
            <div class="post-tags container-fluid">
                <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            </div>

        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
