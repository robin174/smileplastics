<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

	<!-- Off Canvas Right -->
	<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
	
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	 	<div class="offcanvas-header">
	    	<figure>
				<img class="logo-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smileplastics-dark.svg" alt="Logo - Smile Plastics">
			</figure>
			<div>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fal fa-2x fa-times"></i></button>
	 		</div>
	 	</div>
		<div class="offcanvas-body justify-content-end">
			<?php
	            wp_nav_menu(array(
	                'theme_location' => 'main-menu',
	                'container' => false,
	                'menu_class' => '',
	                'fallback_cb' => '__return_false',
	                'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
	                'depth' => 2,
	                'walker' => new bootstrap_5_wp_nav_menu_walker()
	            ));
            ?>
	    </div>
	</div>
	<?php /*
	<!-- Collapse -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-menu">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
        ?>
    </div>
    */ ?>
</nav>