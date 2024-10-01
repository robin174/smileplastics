<?php
/**
* Template Name: Page - Journal Test 2
* @package smileplastics
*/
get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<section class="templ--single-page mol--page-main">
	<div class="container" style="background-color:#f7f7f7;">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<section class="block--journal">
					<div class="row grid" data-masonry='{"percentPosition": true }'>
						<?php
				            $args=array(
				 				'post_type' => 'post',
								'order' => 'DESC',
								'posts_per_page' => 12,
								'post_status' => 'publish',
								'paged' => $paged,
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            while ($my_query->have_posts()) : $my_query->the_post(); ?>
				            	<?php get_template_part('template-parts/part-journal-test'); ?>
						    <?php endwhile; }
				       		wp_reset_query();  // Restore global post data stomped by the_post().
				        ?>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<section class="d-block">
					<button id="load-more-button">Load More</button>
				</section>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); // to counter php close tag issue