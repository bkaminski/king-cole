<?php 
/**
 * Template Name: Venue &amp; Property
 *
 * @package WordPress
 * @subpackage King Cole Farm
 * 
 */
get_header() ;?>
	<div class="venue-img pt-5 pb-5">
		<div class="hero-text-alt text-center">
			<p class="text-offwhite serif-heading text-center pb-5 hero-text hero-text-heading">Venue &amp; Property</p>
		</div>
	</div>
	<section>
		<div class="container pt-5 pb-5">
			<?php echo get_template_part('parts/page', 'loop-img-right'); ?>
			<br />
			<div class="row pt-5">
				<div class="col-md-4">
					<h1 class="serif-heading">Four Bedrooms</h1>
				</div>
				<div class="d-none d-md-block col-md-8 pt-4" style="margin-top:5px;">
					<div class="horizon-bar"></div>
				</div>
			</div>
			<?php echo get_template_part('parts/page', 'main-rooms'); ?>

			<?php echo get_template_part('parts/page', 'main-rooms-bottom'); ?>
		</div>
	</section>
	
<?php get_footer(); ?>
