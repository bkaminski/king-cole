<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <section>
			<div class="row">
				<div class="col-md-12">
					<div class="row pt-5 pb-5">
						<?php if (is_page(91) ) { 
							echo "<div class='d-none d-md-block col-3 pt-3' style='margin-top:5px;'>";
						 	} else {
						 	echo "<div class='d-none d-md-block col-4 pt-4' style='margin-top:5px;'>";
						 	} ?>
						 <div class="horizon-bar"></div>
					</div>
					<?php if (is_page(91) ) { 
							echo "<div class='col-6' style='margin-top:-12px;'>";
						 	} else {
						 	echo "<div class='col-4'>";
						 	} ?>
						<h3 class="text-center serif-heading h1"><?php the_title(); ?></h3>
					</div>
					<?php if (is_page(91) ) { 
							echo "<div class='d-none d-md-block col-3 pt-3 style='margin-top:5px;''>";
							} else {
						 	echo "<div class='d-none d-md-block col-4 pt-4' style='margin-top:5px;'>";
						 	} ?>
						<div class="horizon-bar"></div>
					</div>
				</div>
			</div>
		</section>
		<main>
			<div class="row">
				<div class="col-md-6 pt-5 pb-5">
					<div class="pt-5">
						<?php the_content(); ?>

					</div>
				</div>
				<div class="col-md-6 pt-4">
					<picture>
						<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid brown-border' ) ); ?>
							
					</picture>
				</div>
			</div>
		</main>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
