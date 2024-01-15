<?php
/**
* Template Name: Page - Journal Two
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">

	<div class="container" style="background-color:#f7f7f7;">
		<div class="row"> 
			<div class="col-sm-12 col-md-12 col-lg-12">
				<section class="block--journal">
					<div class="row grid new-grid are-images-unloaded" data-masonry='{"percentPosition": true }'>	

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				            <!-- https://stackoverflow.com/questions/53437554/custom-wp-query-with-working-pagination-on-a-page-template -->
				            <!-- https://wordpress.stackexchange.com/questions/120407/how-to-fix-pagination-for-custom-loops -->
				            <?php        
				                if ( get_query_var('paged') ) {
				                	$paged = get_query_var('paged');
				                } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
				                	$paged = get_query_var('page');
				                } else {
				                	$paged = 1;
				                }
				                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				                $loop = new WP_Query(
				                    array(
				                        'post_type' => 'post',
				                        'posts_per_page' => get_option('posts_per_page'),
				                        'paged' => $paged,
				                        'post_status' => 'publish',
				                        'orderby' => 'DESC',
				                    )
				                );
				            ?>

				            <?php if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post(); ?>
					            <div class="masonry-brick new-div col-12 col-md-6 col-lg-4 col-xxl-3">
									<?php get_template_part('template-parts/part-journal'); ?>
								</div>
				            <?php endwhile; ?>

				            
					            <?php if ($loop->max_num_pages > 1) : // custom pagination  ?>
					                <?php
					                	$orig_query = $wp_query; // fix for pagination to work
					                	$wp_query = $loop;
					                	$big = 999999999;
					                	echo paginate_links(array(
					                    	'base' => str_replace($big, '%#%', get_pagenum_link($big)),
					                   		'format' => '?paged=%#%',
					                    	'current' => max(1, get_query_var('paged')),
					                    	'type'=>'list',
					                    	'total' => $wp_query->max_num_pages
					                  	));                  
					                  $wp_query = $orig_query; // fix for pagination to work
					                ?>
					            <?php endif; ?>
				        	
				            <?php wp_reset_postdata(); else: echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>'; endif; ?>
				            <div class="page-load-status">
  <div class="loader-ellips infinite-scroll-request">
    <span class="loader-ellips__dot"></span>
    <span class="loader-ellips__dot"></span>
    <span class="loader-ellips__dot"></span>
    <span class="loader-ellips__dot"></span>
  </div>
  <p class="infinite-scroll-last">End of content</p>
  <p class="infinite-scroll-error">No more pages to load</p>
</div>

						    <?php endwhile; ?>
						<?php endif; ?>

				    </div>
				   
				</section>
			</div>
		</div>
	</div>
</section> <!-- https://github.com/desandro/masonry/issues/747 -->

<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>

<script>
	/* 
	let elem = document.querySelector('.new-grid');
	let infScroll = new InfiniteScroll( elem, {
	 	// options
		path: '.next',
		append: '.new-div',
		history: false,
		prefill: true
	});
	*/

	//-------------------------------------//
	// https://codepen.io/desandro/pen/NWRYWgd
	// init Masonry
	$(window).on('load', function(){
		let $grid = $('.new-grid').masonry({
			itemSelector: 'none', // select none at first
			//percentPosition: true,
			//columnWidth: '.col-12',
			//gutter: '.grid__gutter-sizer',
			
			//stagger: 30,
			// nicer reveal transition
			//visibleStyle: { transform: 'translateY(0)', opacity: 1 },
			//hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
		});

		// get Masonry instance
		let msnry = $grid.data('masonry');

		// initial items reveal
		$grid.imagesLoaded().progress( function() {
			$grid.removeClass('are-images-unloaded');
			$grid.masonry( 'option', { itemSelector: '.masonry-brick' });
			let $items = $grid.find('.masonry-brick');
			$grid.masonry( 'appended', $items );
		});

		// init Infinte Scroll
		$grid.infiniteScroll({
			path: '.next',
			append: '.new-div',
			//outlayer: msnry,
			hideNav: '.page-numbers',
			status: '.page-load-status',
		});
	});
</script>

<?php get_footer(); // to counter php close tag issue