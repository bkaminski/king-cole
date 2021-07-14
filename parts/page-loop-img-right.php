	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-5">
						<h1 class="serif-heading"><?php the_title(); ?></h1>
					</div>
					<div class="d-none d-md-block col-md-7 pt-4" style="margin-top:5px;">
						<div class="horizon-bar"></div>
					</div>
					<div class="col-md-12 pt-5 pb-5">
						<?php the_content(); ?>
							
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<picture>
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid, brown-border' ) ); ?>
						
				</picture>
			</div>
		</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>