<?php
/**
 * Template Name: Front Page
 */
?>

<?php get_header(); ?> 

<main id="main-content">
    <!-- Static Page Content -->
    <section class="content">
        <?php
        while (have_posts()) : the_post();
            // Display the featured image for the static front page
            if (has_post_thumbnail()) : ?>
                <div class="front-page-featured-image">
                    <?php the_post_thumbnail('full'); // You can change the size if needed ?>
                </div>
            <?php endif; ?>
            
            <?php the_content(); // Displays content from the static front page 
        endwhile;
        ?>
    </section>

        <!-- Latest Blog Posts Section -->
        <section class="latest-posts">
        <h2>My Latest Posts</h2>
        <div class="post-list">
            <?php
            $posts_args = array(
                'post_type'      => 'post', // Default blog posts
                'posts_per_page' => 4,      // Adjust as needed
            );
            $posts_query = new WP_Query($posts_args);

            if ($posts_query->have_posts()) :
                while ($posts_query->have_posts()) : $posts_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?> 
                            </a>
                        <?php endif; ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post-excerpt">
                            <?php 
                            if ( function_exists('get_field') ) {
                                $custom_excerpt = get_field('custom_excerpt'); 
                                if ( $custom_excerpt ) {
                                    echo $custom_excerpt;
                                } else {
                                    the_excerpt();
                                }
                            } else {
                                // Fallback to the default excerpt if ACF is not active
                                the_excerpt();
                            }
                            ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No blog posts found.</p>';
            endif;
            ?>
        </div>
    </section>

    <!-- Latest Projects Section -->
    <section class="latest-projects">
        <h2>My Latest Projects</h2>
        <div class="post-list">
            <?php
            $projects_args = array(
                'post_type'      => 'projects',  // Ensure this matches your custom post type slug
                'posts_per_page' => 4,           // Adjust as needed
            );
            $projects_query = new WP_Query($projects_args);

            if ($projects_query->have_posts()) :
                while ($projects_query->have_posts()) : $projects_query->the_post();
                    ?>
                    <article id="project-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?> 
                            </a>
                        <?php endif; ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="project-excerpt">
                        <?php 
                            if ( function_exists('get_field') ) {
                                $custom_excerpt = get_field('custom_excerpt'); 
                                if ( $custom_excerpt ) {
                                    echo $custom_excerpt;
                                } else {
                                    the_excerpt();
                                }
                            } else {
                                // Fallback to the default excerpt if ACF is not active
                                the_excerpt();
                            }
                            ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No projects found.</p>';
            endif;
            ?>
        </div>
    </section>


</main>

<?php get_footer(); ?>
