<?php /* Template Name: page with search widget */ ?>


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
        <?php if ( ! dynamic_sidebar ( 'uptop' )); ?>
        <div class="col-md-2 col-md-offset-9">
            <div class='close-box'>
              <h4>Please enter product values to search for</h4>
              <button id="close" type="button">Close</button> 
            </div>
          </div>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p>content not yet added.</p>
        <?php endif; ?>    
          
        </div>
      </div><!-- end row -->

<?php get_footer(); ?>

     