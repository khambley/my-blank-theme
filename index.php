<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<div class="container content">
      <div class="row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tekpocket-banner-1.jpg" alt="tekPocket Banner" />
        
      </div> <!--End Row-->
      <div class="row">
        <div class="col-md-12 colorbar">

        </div>
      </div>
      <!--Start Row 2-->
      <div class="row content-row">
        <div class="col-md-4">
          <h2>Latest Posts</h2>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
          <?php endwhile; else : ?>
	          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div>
        <div class="col-md-4">
          <h2>What are TekPockets?</h2>
          <p>TekPockets are high quality quilted neck pouchs/wallets made of cotton fabric. Durable but stylish, they come in a huge assortment of fabrics, and are fully
            customizable. 
          </p>
          <p>Show your team spirit or create your own style! Makes a great gift for anyone or purchase a gift card so they can design their own.</p>
        </div>
        <div class="col-md-4">
        <h2>TekPocket Image - Back</h2>
        </div>
      </div> <!--End Row 2-->
      <!--Start Row 3-->
      <div class="row">
        <div class="col-md-4">
        
        </div>
      </div>

<?php get_footer(); ?>