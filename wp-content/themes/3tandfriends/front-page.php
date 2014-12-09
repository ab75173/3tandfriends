<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action
    <div class="jumbotron">
      <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

      </div>
    </div> -->


    <!-- Adam's custom video div -->

      <div class="intro">
        <video autoplay loop muted poster="images/watch.mp4" id="bgvid">
          <source src="../3tandfriends/wp-content/themes/3tandfriends/images/watch.mp4" type="video/mp4">
        </video>
      </div>

      <div class="container">
        <h2>News</h2>
        <div class="row">
          <div class="col-md-6">

            <?php
              $args = array( 'post_type' => 'post' );
              $the_query = new WP_Query( $args );
              ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
              <hr>

            <?php endwhile; else: ?>
              <p>There are no posts or pages here</p>
            <?php endif; ?>
          </div>
        </div>


<?php get_footer(); ?>
