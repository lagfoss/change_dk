<?php
/*Template Name: Team*/
get_header();
query_posts(array(
   'post_type' => 'team'
)); ?>
<?php
while (have_posts()) : the_post(); ?>

<h1>HVIS DU KAN SE DET HER VIRKER SKIDTET</h1>

<h2>Shila kan du se det her</h2>

<?php endwhile;
get_footer();
?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
