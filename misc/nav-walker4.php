<!-- https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->

<nav class="navbar navbar-expand-md navbar-offcanvas"> 
	<div class="container">
		<?php if ( is_front_page() && is_home() ) : ?>
			<figure>
				<img class="logo-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smileplastics-dark.svg" alt="Logo - Smile Plastics">
			</figure>
		<?php else : ?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<figure>
					<img class="logo-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smileplastics-dark.svg" alt="Logo - Smile Plastics">
				</figure>
			</a>
		<?php endif; ?>
		
		<?php /* Toggle: And works with the below wp_nav_menu
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
			<span class="navbar-toggler-icon"></span> 
		</button>
		*/ ?>

		<div class="d-md-none">
			<button class="btn btn-primary atmButtonNav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fal fa-2x fa-bars"></i></button>
		</div>
		
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
			<div class="d-flex justify-content-end">
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fal fa-2x fa-times"></i></button>
		 	</div>
		 	<div class="offcanvas-header">
		    	<figure>
					<img class="logo-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smileplastics-dark.svg" alt="Logo - Smile Plastics">
				</figure>
		 	</div>
			<div class="offcanvas-body">
				<?php smileplastics_nav(); ?>
		    </div>
		</div>
		
		<?php /*
			1. Set wrapper 
			2. Get Template part 
			3. 4 to choose from: offcanvas, offcanvas-topbar, title-bar, topbar 
			4. Pulls in '<?php joints_top_nav(); ?>abd that is then stipulated from 'functions.php' via:
				// Register custom menus and menu walkers
				require_once(get_template_directory().'/functions/menu.php'); 
		*/ ?>
	</div> 
</nav>