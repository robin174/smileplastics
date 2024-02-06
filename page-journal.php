<?php
/**
* Template Name: Page - Journal
* @package smileplastics
*/
get_header(); ?>

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
								'post_status' => 'publish',
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            while ($my_query->have_posts()) : $my_query->the_post(); ?>
				            	<div class="masonry-brick col-12 col-md-6 col-lg-4 col-xxl-3">
				            		<?php get_template_part('template-parts/part-journal'); ?>
				            	</div>
				            <?php endwhile; }
				        wp_reset_query();  // Restore global post data stomped by the_post().
				        ?>
				    </div>
				</section>
			</div>
		</div>
	</div>
</section>

<script>
 	// From: https://github.com/desandro/masonry/issues/1147
	var $grid = $('.grid').masonry({
		itemSelector: '.masonry-brick',
		percentPosition: true
	});

	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.masonry();
	});
</script>

<?php get_footer(); // to counter php close tag issue