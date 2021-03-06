<?php get_header();  ?>

<div class="main">
  <div class="hero2" style="background-image: url('<?php echo hackeryou_get_thumbnail_url( $post ) ?>');"></div>
  <div class="wrapper">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php get_the_title(); ?></h2>
        <?php the_content( ); ?>


      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php dynamic_sidebar('contact-widget-area') ?>

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>