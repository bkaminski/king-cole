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
			<p class="text-offwhite serif-heading text-center pb-5 hero-text hero-text-heading text-shadow">Venue &amp; Property</p>
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

	<aside class="pt-5 pb-5">
		<div class="pt-5 pb-5">
			<?php if ( is_page(91) ) {
				echo do_shortcode('[envira-gallery id="23"]');
			} elseif ( is_page(137) ); {
				echo do_shortcode('[envira-gallery id="130"]');
			} else {
				// do nothing
			}?>
		</div>
	</aside>
	
<?php get_footer(); ?>
