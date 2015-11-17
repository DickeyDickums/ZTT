<?php get_header(); ?>

    <div class="container page">
      <div class="row">

          <?php   if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-7">
                      <h1><?php the_title(); ?> </h1>
        </div>
          <div class = 'page-header'>

            <img class="medium_logo" src="../images/ztt_header_logo.png">
          </div> <!-- end page header -->
          <?php the_content(); ?>
          <?php endwhile; else: ?>
          <p>content not yet added.</p>
          <?php endif; ?>

      </div><!-- end row -->


<?php get_footer(); ?>

     