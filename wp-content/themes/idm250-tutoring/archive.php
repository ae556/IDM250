<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);

echo get_header();

$loop = new WP_Query($args);

?>

<div class="p-5 d-flex flex-column gap-3">
    <h1>Posts Archive</h1>
    <?php
    while ($loop->have_posts()) : $loop->the_post(); ?>

        <div class="post-box">
            <h2><?php the_title(); ?></h2>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
            <a class="btn btn-primary" href='<?php echo get_permalink(); ?>'>Read</a>
        </div>

    <?php endwhile;
    ?>
</div>

<style>
    .post-box {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 10px;
        margin-bottom: 20px;
    }
</style>