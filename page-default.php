<?php
/**
* Template Name: Page - Default
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">

	<section class="org--hero-page">
		<div class="container p-0">
			<div class="row g-0">
				<div class="col-12">
					<figure>
						<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Another-Country_Work-Series-Two-Render_2-scaled.jpg">
						<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('hpg_image_caption') ?></figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row g-0 d-flex">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); // to counter php close tag issue