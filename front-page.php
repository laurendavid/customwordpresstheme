<?php get_header();  ?>

<section>
  <div class='hero' style="background-image: url('<?php hackeryou_get_thumbnail_url( $post )?>');">
    <div class="wrapper">
      <h1><?php bloginfo('description'); ?></h1>
    </div>
  </div>
</section>
<main class='about'>
  <div class='wrapper'>
    <div class='about-content'>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php get_the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    
  </div> <!-- /.wrapper -->
</main> <!-- /.main -->

<?php get_footer(); ?>