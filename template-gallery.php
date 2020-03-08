<?php

/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

<div class="container" style="margin-top:20px">
    <h1 class="custom-h1"><?php the_title(); ?></h1>
</div>

<div class="container">
    <?php get_template_part('includes/section','content');?>
</div>

<?php get_footer(); ?>

