<?php if ( is_front_page() ) {
echo(''); 
} else {  ?>
<header>
	<nav class="navbar navbar-expand-lg fixed-top kc-navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>/welcome-king-cole-farm" >
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/kc-icon.png" alt="King Cole Farms" class="img-fluid nav-icon" width="55">	
			</a>
			<button class="navbar-toggler rounded-0 brown-text" type="button" data-bs-toggle="collapse" data-bs-target="#dmiNav" aria-controls="dmiNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars fa-2x"></i>
			</button>
			<div class="collapse navbar-collapse text-uppercase" id="dmiNav">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav ms-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				
			</div>
		</div>
	</nav>
</header>
<?php } ?>
