<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="page-header">
          <h1><?php the_title(); ?>
        </div>

        <?php the_content(); ?>

        <?php endwhile; else: ?>

        <div class="page-header">
          <h1>Oh no!</h1>
        </div>

        <p>No content is here</p>

        <?php endif; ?>

      </div>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
