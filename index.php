<?php get_header(); ?>
<?php get_header_image(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php 
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } 
?>

  

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


<?php the_content(); ?>

<?php endwhile; else : ?>

<p>Der blev ikke fundet noget indhold</p>

<?php endif;?>


<?php get_footer(); ?>