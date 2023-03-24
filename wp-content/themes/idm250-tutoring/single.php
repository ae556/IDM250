<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php get_header(); ?>


<?php get_template_part('components/content'); ?>




<?php get_footer(); ?>

<?php

$currentPostId = get_the_ID();

$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
	foreach ($terms as $term) {

		echo "<span>{$term->name},</span>";
	}
}
