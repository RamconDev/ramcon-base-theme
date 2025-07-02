<?php get_header(); ?>

<div id="index-page">
    <h1><?php echo get_the_title(); ?></h1>
    <?php the_content(); ?>

    <?php echo do_shortcode('[example_shortcode message="Holas"]'); ?>
</div>
    
<?php get_footer(); ?>