<?php 
/**
 * Template Name: Venue Pages Template
 *
 * @package WordPress
 * @subpackage King Cole Farm
 * 
 */
get_header() ;?>
	<div class="property-hero pt-5 pb-5" style="background-image:url('<?php echo the_field('venue_hero_image'); ?>'); no-repeat">
		<div class="hero-text-alt text-center">
			<h1 class="text-offwhite serif-heading text-center pb-5 hero-text hero-text-heading text-shadow">Venue &amp; Property</h1>
		</div>
	</div>
	<section class="container pt-5 pb-5">
		<?php echo get_template_part('parts/page', 'loop-img'); ?>
	
	</section>
	<section>
		<div class="container">
			<?php echo the_field('text_area_2'); ?>
		</div>
	</section>

	<aside class="pb-5">
		<div class="pt-5 pb-5">
			<?php if ( is_page(91) ) {
				echo do_shortcode('[envira-gallery id="261"]');
			} elseif ( is_page(137) ) {
				echo do_shortcode('[envira-gallery id="130"]');
			} elseif ( is_page(141) ) {
				echo do_shortcode('[envira-gallery id="184"]');
			} elseif ( is_page(151) ) {
				echo do_shortcode('[envira-gallery id="186"]');
			} elseif ( is_page(156) ) {
				echo do_shortcode('[envira-gallery id="187"]');
			} elseif ( is_page(160) ) {
				echo do_shortcode('[envira-gallery id="188"]');
			} elseif ( is_page(164) ) {
				echo do_shortcode('[envira-gallery id="189"]');
			} elseif ( is_page(93) ) {
				echo do_shortcode('[envira-gallery id="276"]');
			} elseif ( is_page(272) ) {
				echo do_shortcode('[envira-gallery id="277"]');
			} elseif ( is_page(270) ) {
				echo do_shortcode('[envira-gallery id="278"]');
			} elseif ( is_page(147) ) {
				echo do_shortcode('[envira-gallery id="185"]');
			}; ?>
		</div>
	</aside>
	
<?php get_footer(); ?>
