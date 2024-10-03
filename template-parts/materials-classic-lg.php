<section class="org--materials-display-lg">
	<div class="container">
		<div class="row g-3">
			<?php
		        $args=array(
		            'post_type' => 'materials',
		            //'collection' => 'classics',
		            'post_status' => 'publish',
		            'order' => 'asc',
		            'orderby' => 'menu_order'
		        );
		        $my_query = null;
		        $my_query = new WP_Query($args);
		        $total_materials = $my_query->found_posts; ?>

	        	<?php if( $my_query->have_posts() ) { ?>

			        <?php if($total_materials == ('6')) { ?>
		        		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		        			<div class="col-6 col-lg-4">
				        		<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
		        			</div>
		        		<?php endwhile; ?>
			        <?php } elseif($total_materials == ('7')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		        			<div class="col-6 col-lg-3">
				        		<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
		        			</div>
			        	<?php endwhile; ?>
			        	<div class="col-6 col-lg-3">
			        		<figure>
			        			<img class="mw-100" src="<?php the_field('additional_material', 'option'); ?>">
			        		</figure>
			        	</div>
			        <?php } elseif($total_materials == ('8')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		        			<div class="col-6 col-lg-3">
				        		<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
		        			</div>
			        	<?php endwhile; ?>
			        <?php } elseif($total_materials == ('9')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			        		<div class="col-6 col-md-4">
				        		<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
		        			</div>
		        		<?php endwhile; ?>
			        <?php } elseif($total_materials == ('10')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			        		<div class="col-6 col-lg-15">
			        			<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
			        		</div>
		        		<?php endwhile; ?>
			        <?php } elseif($total_materials == ('11')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			        		<div class="col-6 col-md-4 col-lg-3">
			        			<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
			        		</div>
		        		<?php endwhile; ?>
		        		<div class="col-6 col-md-4 col-lg-3">
			        		<figure>
			        			<img class="mw-100" src="<?php the_field('additional_material', 'option'); ?>">
			        		</figure>
			        	</div>
			        <?php } elseif($total_materials == ('12')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			        		<div class="col-6 col-md-4 col-lg-3">
			        			<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
			        		</div>
		        		<?php endwhile; ?>
		        	<?php } elseif($total_materials == ('19')) { ?>
			        	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			        		<div class="col-6 col-md-4 col-lg-3">
			        			<?php if( get_field('mat_contrast') == 'light' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
						        		<div class="atm--relative atm--contrast-light">
						        			<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
						        	</a>
				        		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
				        			<a href="<?php the_permalink(); ?>">
					        			<div class="atm--relative atm--contrast-dark">
					        				<?php get_template_part('template-parts/part-material-lg'); ?>
						        		</div>
					        		</a>
					        	<?php } ?>
			        		</div>
		        		<?php endwhile; ?>
		        		<div class="col-6 col-md-4 col-lg-3">
			        		<figure>
			        			<img class="mw-100" src="<?php the_field('additional_material', 'option'); ?>">
			        		</figure>
			        	</div>
			        <?php } ?>
			        
			    <?php } wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php /* 
<?php if($total_materials == '6' || '9') { ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<div class="col-6 col-lg-4">
    		<?php if( get_field('mat_contrast') == 'light' ) { ?>
    			<a href="<?php the_permalink(); ?>">
	        		<div class="atm--relative atm--contrast-light">
	        			<?php get_template_part('template-parts/part-material-lg'); ?>
	        		</div>
	        	</a>
    		<?php } elseif( get_field('mat_contrast') == 'dark' ) { ?>
    			<a href="<?php the_permalink(); ?>">
        			<div class="atm--relative atm--contrast-dark">
        				<?php get_template_part('template-parts/part-material-lg'); ?>
	        		</div>
        		</a>
        	<?php } ?>
		</div>
	<?php endwhile; ?>
*/?>