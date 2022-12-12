<?php
/**
* Template Name: Page - Blog
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">		
	<?php get_template_part('template-parts/header-hero'); ?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<section class="block--news">
					<div class="row" data-masonry='{"percentPosition": true }'>		
						<?php
				            $args=array(
				 				'post_type' => 'post',
								'order' => 'DESC',
								'post_status' => 'publish',
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            while ($my_query->have_posts()) : $my_query->the_post(); ?>
				            	<div class="masonry-brick col-12 col-md-6 col-lg-4 col-xxl-3">
				            		<?php the_title(); ?>
				            		<?php get_template_part('template-parts/unit-blog'); ?>
				            	</div>
				            <?php endwhile; }
				        wp_reset_query();  // Restore global post data stomped by the_post().
				        ?>
				    </div>
				</section>
			</div>
		</div>
	</div>


	<!-- To add to the ACF, on post content -->
	<div class="container">
		<div class="row g-0 justify-content-center">
			<div class="col-12 col-md-9 d-flex" style="background-color: #e6e6e6;">
				<div class="m-2 flex-1 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test01.jpg">
						</figure>
					</div>
				</div>
				<div class="m-2 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test02.jpg">
						</figure>
					</div>
				</div>
				<div class="m-2 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test03.jpg">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row g-0 justify-content-center">
			<div class="col-12 col-md-9 d-flex" style="background-color: #e6e6e6;">
				<div class="m-2 flex-1 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test01.jpg">
						</figure>
					</div>
				</div>
				<div class="m-2 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test02.jpg">
						</figure>
					</div>
				</div>
				<div class="m-2 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test03.jpg">
						</figure>
					</div>
				</div>
				<div class="m-2 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test03.jpg">
						</figure>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row g-0 justify-content-center">
			<div class="col-12 col-md-9 d-flex" style="background-color: #e6e6e6;">
				<div class="m-2 flex-1 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test-tree.jpg">
						</figure>
					</div>
				</div>
				<div class="m-2 flex-md-fill">
					<div class="d-flex justify-content-center">
						<figure>
							<img class="mw-100" src="http://localhost:10073/wp-content/uploads/2022/12/test02.jpg">
						</figure>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); // to counter php close tag issue