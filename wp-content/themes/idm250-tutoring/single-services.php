<?php get_header(); ?>


<div class="hero-image">
  <img src="hero-image.jpg" alt="Hero Image">
</div>
<style>
  body {
    font-family: 'Barlow', sans-serif;
  }

  .container {
    text-align: left;
  }

  .content {
    width: 80%;
    margin: 0 auto;
  }
</style>


<div class="container">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>

      <h2>Heading 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</p>

      <h3>Heading 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</p>

      <h4>Heading 4</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</p>

      <h5>Heading 5</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</p>

      <h6>Heading 6</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</p>



      <div class="lorem-ipsum">

        <h3>Ordered List </h3>
        <?php
        $orderedListItems = [
          "Lorem ipsum dolor sit amet",
          "Consectetur adipiscing elit",
          "Nulla sed lorem vel neque semper lobortis ac sed magna",
          "Etiam fringilla lorem ut libero semper, in convallis enim pellentesque"
        ];
        echo "<ol>";
        foreach ($orderedListItems as $item) {
          echo "<li>" . $item . "</li>";
        }
        echo "</ol>";
        ?>
        <h3>Unordered List </h3>
        <?php
        $unorderedListItems = [
          "Lorem ipsum dolor sit amet",
          "Consectetur adipiscing elit",
          "Nulla sed lorem vel neque semper lobortis ac sed magna",
          "Etiam fringilla lorem ut libero semper, in convallis enim pellentesque"
        ];
        echo "<ul>";
        foreach ($unorderedListItems as $item) {
          echo "<li>" . $item . "</li>";
        }
        echo "</ul>";
        ?>
      </div>

      <h2>Bold</h2>
      <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</b>

      <h2>Italicized</h2>
      <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mauris ut ipsum semper consequat. Nulla ut nulla lectus. Donec quis semper nisl.</i>






      <div class="content">
        <?php the_content(); ?>
      </div>



      <!-- <?php endwhile;
        else : ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

  <?php endif; ?> -->

</div>

<?php get_footer(); ?>