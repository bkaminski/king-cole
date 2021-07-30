	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-md-6">
				<picture>
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid brown-border' ) ); ?>
						
				</picture>
			</div>
			<div class="col-md-6">
				<h1 class="serif-heading"><?php the_title(); ?></h1>
				<div class="pt-5 pb-5">
					<?php the_content(); ?>
				
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="property-overview" class="btn btn-green px-3 text-uppercase">View the Property</a>
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