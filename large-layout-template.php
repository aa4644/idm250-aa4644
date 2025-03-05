<?php
/*
    Template Name: Large Layout Template
*/
?>

<?php get_header(); ?>

<div class="large-wrapper">
    <h1 class="page-header">
        <?php echo get_the_title(); ?>
    </h1>

    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
