<?php
/* Template Name: Default666*/
?>

<?php get_header(); ?>


<h2>This is the default templeate</h2>

<?php while (have_posts()) : the_post(); ?>
  <div class="" style="max-width: 1920px; margin: 0 auto;">
    <h1 class=""><?php the_title(); ?>
    </h1>






    <?php the_content(); ?>
    <!-- end content -->
  </div>
  </div>
<?php endwhile; ?>

<?php get_footer();
