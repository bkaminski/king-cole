<?php get_header(); 
/**
 * Template Name: Welcome Page
 *
 * @package WordPress
 * @subpackage Booth House Tavern
 * 
 */
?>
<div class="welcome-img pt-5 pb-5">
	<div class="hero-text text-center">
		<p class="text-center text-uppercase text-white">Opening Our Doors to</p>
		<p class="text-white serif-heading text-center pb-5" style="font-size: 4.5rem;">your memorable occasion</p>
		<a class="btn btn-white px-5 text-uppercase" href="#">Book Now</a>
	</div>
</div>
<main>
	<div class="container pt-5 pb-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-md-6">
				<figure>
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
						
				</figure>
			</div>
			<div class="col-md-5">
				<h1 class="serif-heading"><?php the_title(); ?></h1>
				
				<div class="pt-5 pb-5">
					<?php the_content(); ?>
				
				</div>

				<div class="row">
					<div class="col-md-4">
						<a href="#" class="btn btn-white px-3 text-uppercase">Learn More</a>
					</div>
					<div class="d-none d-md-block col-md-8 pt-3">
						<div class="horizon-bar"></div>
					</div>
				</div>
				
			</div>
		</div>
		
		
		<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</main>
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
