<?php
/**
* Template Name: Page - Journal
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">		
	<?php if ( have_posts() ) : ?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<section class="mol--title-spacer">
						<?php the_archive_title( '<h1>', '</h1>' ); ?>
					</section>
				</div>
			</div>
		</div>
		<div class="container" style="background-color:#f7f7f7;">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<section class="block--news">
						<div class="row" data-masonry='{"percentPosition": true }'>		
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="masonry-brick col-12 col-md-6 col-lg-4 col-xxl-3">
					            	<?php get_template_part('template-parts/part-journal'); ?>
					            </div>
					        <?php endwhile; ?>
					    </div>
					</section>
				</div>
			</div>
		</div>
	<?php else :
		get_template_part( 'template-parts/content', 'none' );
	endif; ?>
</section>

<?php get_footer(); // to counter php close tag issue