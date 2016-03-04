<?php get_header();  ?>

<section>
  <div class='hero' style="background-image: url('<?php echo hackeryou_get_thumbnail_url( $post )?>');">
    <div class="wrapper">
      <h1><?php bloginfo('description'); ?></h1>
    </div>
  </div>
</section>
 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<main id="aboutMe" class='about'>
  <div class='wrapper about-wrapper'>
    <div class="about-image">
      <img src=" <?php bloginfo('template_directory') ?>/images/about.jpg" alt="">
    </div>
    <div class='about-content'>
      <?php // Start the loop ?>
     

        <h2><?php get_the_title(); ?></h2>
        <?php the_content(); ?>

      
    </div> <!-- /,content -->
    <div class="feature">
      <h2>Featured Posts</h2>
      <div class="feature-posts">
          <?php
              $onePageQuery = new WP_Query(
          array(
                  'posts_per_page' => 3,
                  'category_name' => 'featured',
                  'order' => 'ASC'
                  )
          ); ?>

          <?php if ( $onePageQuery->have_posts() ) : ?>

              <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

                  <section id="<?php echo $post->post_name; ?>">
                      <a href="<?php the_permalink(); ?>" <?php esc_attr(the_title_attribute()); ?> rel="bookmark"><?php the_post_thumbnail('medium'); ?></a>
                      <h3><?php the_title(); ?></h3>
                      <?php the_excerpt(); ?>
                      
                  </section>
              <?php endwhile; ?>

              <?php wp_reset_postdata(); ?>

          <?php else:  ?>
              [stuff that happens if there aren't any posts]
          <?php endif; ?>
      </div> <!-- /.feature-posts -->
    </div> <!-- /.feature -->
  </div> <!-- /.wrapper -->
</main> <!-- /.main -->
<?php endwhile; // end the loop?>

<?php get_footer(); ?>