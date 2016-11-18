<?php
/**
 * The template for displaying single case studies page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">

  <?php while ( have_posts() ) : the_post();
    $image_1 = get_field('image_1');
    $size = "full"; ?>

    <article class="about-service">
      <div class="case-study-images">
          <?php if($image_1) { ?>
            <?php echo wp_get_attachment_image( $image_1, $size );
          } ?>
      </div>

      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>

    </article>




  <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->
