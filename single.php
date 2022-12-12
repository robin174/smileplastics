<?php
/**
* The template for displaying a single post
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-post mol--page-main"><!-- New template class in place -->
	<section class="org--">
		<div class="container">
			<div class="row">
				



				<div class="row justify-content-center">
					<div class="col-12 col-md-9 col-lg-8">
						

						<section class="block__intro">
							<p class="atm__category"><?php the_category(' / '); ?></p>
							<h1 class="atm__title-post"><?php the_title(); ?></h1>
							<p class="atm__author"><span>Written by:</span><br><?php the_field('blog_post_author'); ?></p>
							<p class="date"><?php the_time('d.m.y'); ?></p>
						</section>

					</div>
				</div>
				



				<div class="row justify-content-center">
					<div class="col-12">
						<?php if ( has_post_thumbnail() ) { ?>
							<figure class="fig__default">
				            	<?php the_post_thumbnail('normal'); ?>
				            	<figcaption class="fc__default">
									<i class="far fa-long-arrow-up"></i><?php the_field('featured_image_caption'); ?>
								</figcaption>
				        	</figure>
				        <?php } else { ?>
				        	<figure>
				            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/use-news-cs.jpg" alt="<?php the_title(); ?>">
				        	</figure>
				        <?php } ?>
					</div>
				</div>
				


				<div class="row justify-content-center">
					<?php get_template_part('template-parts/block-building-post'); ?>
				</div>



				<div class="row justify-content-center">
					<div class="col-12 col-md-9 col-lg-8">
						<section class="block__outro">
							<p class="paragraph--back">
								<i class="far fa-long-arrow-left"></i>&nbsp;<a href="<?php echo get_page_link( get_page_by_path( 'blog' ) ); ?>" title="Page - Blog">Back to &lsquo;Blog&rsquo;</a>
							</p>
						</section>
					</div>
				</div>
			


			
			</div>
		</div>
	</section>
</section>