<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <div class="page-header">
          <h1><?php wp_title(''); ?>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><em>By <?php the_author(); ?> on <?php echo the_time('l, F jS, Y');?></em></p>

          <?php the_excerpt(); ?>
          <hr>

        </article>

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