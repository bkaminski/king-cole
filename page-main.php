<?php 
/**
 * Template Name: Welcome Page
 *
 * @package WordPress
 * @subpackage King Cole Farm
 * 
 */
get_header() ;?>
	<div class="welcome-img pt-5 pb-5">
		<div class="hero-text text-center">
			<p class="text-center text-uppercase text-offwhite">Opening Our Doors to</p>
			<p class="text-offwhite serif-heading text-center pb-5 hero-text-heading">your memorable occasion</p>
			<a class="btn btn-white px-5 text-uppercase" href="#">Book Now</a>
		</div>
	</div>
	<section>
		<div class="container pt-5 pb-5">
			<?php echo get_template_part('parts/page', 'loop-img-left'); ?>
		</div>
	</section>
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="d-none d-md-block col-md-3 pt-4">
				<div class="horizon-bar" style="margin-top: 0.3rem;"></div>
			</div>
			<div class="col-md-2">
				<h2 class="serif-heading italic h1">Gallery</h2>
			</div>
			<div class="col-md-4 text-left">
				<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</em></p>
			</div>
		</div>
	</div>
	<div class="gallery">
		<?php echo do_shortcode('[envira-gallery id="39"]'); ?>

		<div class="col-md-12 text-center pt-3 pb-5">
			<a href="#" class="btn btn-white px-5 text-uppercase">View Gallery</a>
		</div>

	</div>
<?php get_footer(); ?>
