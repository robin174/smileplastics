<?php
/**
* The template for displaying a single post
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-post mol--page-main"><!-- New template class in place -->
	<section class="org">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<section class="mol-post-meta text-center">
						<p class="atm--post-category"><?php the_category(' / '); ?></p>
						<h1 class="atm--post-title"><?php the_title(); ?></h1>
						<p class="atm--post-author"><span>Written by:</span><br><?php the_field('blog_post_author'); ?></p>
						<p class="atm--post-date"><?php the_time('d.m.y'); ?></p>
					</section>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<div class="mol--post-block">
						<figure class="atm--post-img">
							<img class="mw-100" src="<?php the_field('featured_image'); ?>" alt="<?php the_field('featured_image_caption'); ?>">
			            	<figcaption>
								<?php if( get_field('fi_image_caption_pos') == 'overlaylight' && get_field('fi_image_caption_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } elseif( get_field('fi_image_caption_pos') == 'overlaylight' && get_field('fi_image_caption_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } elseif( get_field('fi_image_caption_pos') == 'overlaydark' && get_field('fi_image_caption_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } elseif( get_field('fi_image_caption_pos') == 'overlaydark' && get_field('fi_image_caption_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } elseif( get_field('fi_image_caption_pos') == 'rotated' ) { ?>
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } elseif( get_field('fi_image_caption_pos') == 'default' && get_field('fi_image_caption_lr') == 'captionleft') { ?>
									<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } elseif( get_field('fi_image_caption_pos') == 'default' && get_field('fi_image_caption_lr') == 'captionright') { ?>
									<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?></figcaption>
								<?php } ?>
							</figcaption>
			        	</figure>
		        	</div>
				</div>
			</div>

			<?php get_template_part('template-parts/new-post-builder'); ?>
			
			<div class="row justify-content-center">
				<div class="col-11 col-md-9 col-lg-6">
					<p style="font-size:90%;">
			        	<br>
			            ---<br>
			            <i class="far fa-long-arrow-left"></i>&nbsp;<a href="<?php echo get_page_link( get_page_by_path( 'journal' ) ); ?>" title="Page - Journal">Back to &lsquo;Journal&rsquo;</a>
			        </p>
				</div>
			</div>
			
		</div>
	</section>
</section>

<?php get_footer(); // to counter php close tag issue