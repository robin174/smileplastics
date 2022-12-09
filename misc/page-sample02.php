<?php
/**
* Template Name: Page - Sample 02
* @package smileplastics
*/

get_header(); ?>

<section class="mol--page-main">

	<section class="helper">
		<hr>
		<p>50/50 full width: G.F. Smith inspired</p>
	</section>
	<section style="background-color: #f7f7f7;">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-12 col-md-6">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6 offset-md-2">
							<section style="padding-top: 150px;">
								<h3 style="margin-bottom: 12px;">Etiam vulputate scelerisque</h3>
								<p class="var-size-test">Aliquam purus risus, fringilla nec mi et, pharetra rutrum nulla. Nullam egestas congue ornare. Praesent pellentesque turpis metus, eget semper sapien feugiat sed. Duis vulputate, massa nec facilisis dapibus, erat augue porta massa, nec ultricies nisi lacus vitae est. Fusce blandit aliquam massa a varius.</p>
								<button class="text-cta">Find out more<i class="far fa-long-arrow-right"></i></button>
							</section>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<figure class="overlay-figure">
						<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Grey-Mist-table-scaled-v2.jpg">
						<figcaption class="overlay-figcaption"><i class="far fa-long-arrow-up"></i>Meta Table by MARK Product. Imagery by Matt Jessop. Material: Grey Mist.</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Banner -->
	<?php get_template_part('template-parts/banner-advert'); ?>
</section>

<?php get_footer(); ?>