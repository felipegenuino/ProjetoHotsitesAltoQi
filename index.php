<?php get_header(); ?>


<ul>
<?php query_posts('showposts=4&post_type=page');
// The Loop
while ( have_posts() ) : the_post(); ?>
  <h1><a href="<?php the_permalink(); ?>">  <?php the_title(); ?> </a></h1>
<?php endwhile;  ?>
<?php wp_reset_query(); ?>
</ul>


<?php get_footer(); ?>
