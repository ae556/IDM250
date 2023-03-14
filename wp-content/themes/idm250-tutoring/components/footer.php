<?php
// Get footer menu
$menu = get_theme_menu('footer-menu');
?>
<footer>
  <nav class="" aria-label="Footer">
    <?php foreach ($menu as $item) {
      echo "<div class='pb-6'>
          <a href='{$item->url}' class=''>{$item->title}</a>
        </div>";
    }  ?>
  </nav>
  <p class="">&copy;
    <?php echo date('Y'); ?>
    <?php bloginfo(); ?>,
    Inc. All rights reserved.
  </p>
</footer>