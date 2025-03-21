<?php
/**
 * The template part for displaying blog cards in the archive page
 */
?>

<article class="blog-card">
    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="blog-card-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?> 
            </a>
        </div>
    <?php endif; ?>

    <!-- Post Title -->
    <h2 class="blog-card-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <!-- Post Excerpt -->
    <div class="blog-card-excerpt">
        <?php 
            if ( function_exists('get_field') ) {
                $custom_excerpt = get_field('custom_excerpt'); 
                    if ( $custom_excerpt ) {
                        echo $custom_excerpt;
                    } else {
                        the_excerpt();
                    }
                        } else {
                    the_excerpt();
            }
        ?>
    </div>

    <!-- Post Metadata: Date and Category -->
    <div class="blog-card-meta">
        <span class="blog-card-date"><?php echo get_the_date(); ?></span>
        <span class="blog-card-category"><?php the_category(', '); ?></span>
    </div>

    <a href="<?php the_permalink(); ?>" class="blog-card-read-more">Read More</a>
</article>
