<?php get_header(); ?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-12">
          <img class="logo" src="images/ztt-store-header-resize.png" alt="Logo for Zeig, Tucker & Theisen Publishers">
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      </div><!-- end container -->
    </div><!-- end jumbotron -->
<?php get_footer(); ?>

     