<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="wrapper">

    <div class="content">
        <div class="blog-wrapper">
           
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <article class="post">
                <div class="image">
                 
                  <!-- Image goes here -->
                  <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="text">
                  <h2><?php the_title(); ?></h2>
                  <?php hackeryou_continue_reading_link(); ?> 
                  <?php the_excerpt(); ?>
                </div>
              </article>
              <!-- loads in content from the database/ user content -->
              
            <?php endwhile; // end the loop?>
        </div>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>



