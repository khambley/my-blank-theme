<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<div class="container content">
      <div class="row">
        <div class="col-md-12 content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h3 class="text-center"><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            <?php endwhile; else : ?>
	          <p><?php _e( 'Sorry, no pages found.' ); ?></p>
            <?php endif; ?>
        </div>
      </div> <!--End Row-->
      
      

<?php get_footer(); ?>