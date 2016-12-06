



<?php get_footer(); ?>

<?php
get_header() ?>
<?php
while (have_posts()) :
    the_post();
?>
<h1><?php echo $post->post_title; ?></h1>
<?php
endwhile;
?>
<?php get_footer() ?>

