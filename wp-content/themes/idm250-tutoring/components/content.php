<div class="content-blocks">
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
