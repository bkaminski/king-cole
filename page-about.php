<?php 
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage King Cole Farm
 * 
 */
get_header() ;?>
	<div class="about-img pt-5 pb-5">
		<div class="hero-text-alt text-center">
			<p class="text-offwhite serif-heading text-center pb-5 hero-text hero-text-heading text-shadow">Welcome to King Cole Farm</p>
		</div>
	</div>
	<section>
		<div class="container pt-5 pb-5">
			<?php echo get_template_part('parts/page', 'loop-img-right'); ?>

			<?php echo get_template_part('parts/page', 'about-loop2'); ?>

		</div>
		
		<?php echo get_template_part('parts/page', 'visit-us'); ?>

	</section>
<?php get_footer(); ?>
