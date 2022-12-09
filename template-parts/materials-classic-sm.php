<section class="org--materials-display-sm">
	<div class="container">
		<div class="row g-0">
			<?php
		        $args=array(
		            'post_type' => 'materials',
		            'collection' => 'classic',
		            'post_status' => 'publish',
		            'order' => 'asc',
		            'orderby' => 'menu_order'
		        );
		        $my_query = null;
		        $my_query = new WP_Query($args);
		        if( $my_query->have_posts() ) {
		        while ($my_query->have_posts()) : $my_query->the_post(); ?>
		        	<div class="col-3 col-lg">
		        		<!-- Put a gradient over the top, Barkers style? --> 
		        		<?php if( get_field('mat_contrast') == 'light' ) { ?>
			        		<div class="atm--relative atm--contrast-light">
			        			<?php get_template_part('template-parts/part-material-sm');?>
			        		</div>
		        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
		        			<div class="atm--relative atm--contrast-dark">
		        				<?php get_template_part('template-parts/part-material-sm');?>
			        		</div>
			        	<?php } ?>
		        	</div>
		        <?php endwhile; }
				wp_reset_query(); ?>
		</div>
	</div>
</section>