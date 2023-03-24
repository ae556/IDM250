<div class="content-blocks p-5">
  <h1><?php echo get_the_title(); ?></h1>

  <?php
  if (have_posts()) {
    // Load posts loop. THIS IS PARAGRAPH PHP FOR WORDPRESS 
    while (have_posts()) {
      the_post();
      the_content();
    }
  } else {
    echo 'no posts found';
  }
  ?>
</div>