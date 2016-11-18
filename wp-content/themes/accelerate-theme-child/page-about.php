<?php
/**
 * The template for displaying the About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<div class='aboutpage-banner'>
			<?php while ( have_posts() ) : the_post();
				$banner = get_field ("banner");?>

				<p><?php echo $banner; ?></p>

			<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- .container -->
</section><!-- .about-page -->


<section class="about-services">
	<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class='aboutpage-text'>
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>

			<ul class="about-services-list">
				<?php query_posts('posts_per_page=4&post_type=about_services'); ?>
					<?php while (have_posts()) : the_post();
						$image_1 = get_field("image_1");
						$size = "thumb";?>

					<li class="individual-service clearfix">
						<figure>
							<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
						<div class="service-text">
							<h5><?php the_title(); ?></h5>
							<p><?php the_content(); ?></p>
						</div>
					</li>

					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>

	</div><!-- .site-content -->
</section> <!-- about services -->

<section class="contact-us">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post();
			$contact = get_field ("contact");?>

			<h2><?php echo $contact; ?></h2>

		<?php endwhile; // end of the loop. ?>

		<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>

	</div><!-- .site-content -->
</section><!-- Contact us -->

<?php get_footer(); ?>
