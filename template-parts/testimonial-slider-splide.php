<section class="org--slider-testimonials">
	<div class="mol--slider-testimonials">

		<!-- https://splidejs.com/guides/getting-started/ (https://github.com/Splidejs/splide) -->
		<section class="org--blockquote-brand splide" style="background-color:<?php the_field('testimonial_bg_color', 'option'); ?>">
			<div class="splide__track" >
				<ul class="splide__list">

					<?php if( have_rows('repeater_testimonial', 'option') ): ?>
						<?php while( have_rows('repeater_testimonial', 'option')): the_row(); ?>

							<li class="splide__slide">
								<div class="org--blockquote-brand-inner">
									<div class="container">
										<div class="row justify-content-center">
											<div class="col-12 col-md-9 col-lg-6">
												<div class="text-center" style="margin-bottom:30px;">
													<figure>
														<img class="logo-brand" style="height:48px;" src="<?php the_sub_field('test_logo', 'option'); ?>" alt="Logo">
													</figure>
												</div>
												<h3 class="text-center"><?php the_sub_field('test_title', 'option'); ?></h3>
											</div>
										</div>
										<div class="row justify-content-center">
											<div class="col-12 col-md-9 col-lg-8">
												<!-- convert into template part... and add an if statement to the template... if x, else y -->
												<div class="text-center">
													<blockquote>&ldquo;<?php the_sub_field('test_quote', 'option'); ?>&rdquo;<cite>&mdash;&nbsp;<?php the_sub_field('test_cite', 'option'); ?></cite></blockquote>
													<div class="atm--button-cta">
														<a class="button button-cta" href="<?php the_sub_field('test_cta_destination', 'option'); ?>"><?php the_sub_field('test_cta_text', 'option'); ?><i class="far fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</li>
							
						<?php endwhile; ?>		
					<?php endif; ?>

				</ul>
			</div>
		</section>

		<!-- Temp: Splide (JS)
 		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide/splide.min.js" type="text/javascript"/></script>
		<script type="text/javascript">
			var splide = new Splide( '.splide', {
				type: 'loop',
				speed: 700,
				autoplay: true,
				perPage: 1
			});
			splide.mount();
		</script>

	</div>
</section>