<?php
/**
 * Template Name: Front Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'frontpage'); ?>
<?php endwhile; ?>
