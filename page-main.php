<?php 
/**
 * Template Name: page-main.php
 *
 * @package WordPress
 * @subpackage King Cole Farm
 * 
 */
get_header() ;?>
	<div class="welcome-img pt-5 pb-5">
		<div class="hero-text text-center">
			<p class="text-center text-uppercase text-offwhite fw-bold">Opening Our Doors to</p>
			<p class="text-offwhite serif-heading text-center pb-5 hero-text-heading text-shadow">your memorable occasion</p>
			<a class="btn btn-white px-5 text-uppercase" href="booking-your-event">Book Now</a>
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
			<div class="col-md-5 text-left pt-3">
				<p class="fw-bold"><em>King Cole Farm is the place to create unforgettable memories!</em></p>
			</div>
		</div>
	</div>
	<div class="gallery">
		<?php echo do_shortcode('[envira-gallery id="23"]'); ?>

		<div class="col-md-12 text-center pt-3 pb-5">
			<a href="about-us" class="btn btn-white px-5 text-uppercase">More About Us</a>
		</div>
	</div>
<?php get_footer(); ?>
