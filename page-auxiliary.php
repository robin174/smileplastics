<?php
/**
* Template Name: Page - Auxiliary
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">
	<!-- Homepage Hero -->
	<?php get_template_part('template-parts/header-hero'); ?>

	<!-- Page Introduction -->
	<?php get_template_part('template-parts/page-introduction'); ?>

	<div class="container">
		<div class="row justify-content-center">
			<?php if(get_field('pa_column_select') == 'one' ) { ?>
				<?php if( have_rows('pa_one_titletext') ): ?>
					<div class="col-11 col-md-9 col-lg-8">
					    <?php while( have_rows('pa_one_titletext') ): the_row(); ?>
					    	<section class="org--5050-auxiliary">
								<div class="row g-0 d-flex">
									<div class="col-12 align-self-start">
										<h3><?php the_sub_field('block_title')?></h3>
										<?php the_sub_field('block_text')?>
									</div>
								</div>
							</section>
					    <?php endwhile; ?>
					</div>
				<?php endif; ?>
			<?php } elseif(get_field('pa_column_select') == 'two' ) { ?>
				<?php if( have_rows('pa_two_titletext') ): ?>
					<div class="col-11 col-md-10">
					    <?php while( have_rows('pa_two_titletext') ): the_row(); ?>
							<section class="org--5050-auxiliary">
								<div class="row g-0 d-flex">
									<div class="col-12 col-md-6 align-self-start">
										<h3 ><?php the_sub_field('column_title')?></h3>
									</div>
									<div class="col-12 col-md-6 align-self-start">
										<?php if( have_rows('block_repeater') ): ?>
					    					<?php while( have_rows('block_repeater') ): the_row(); ?>
												<h5><?php the_sub_field('block_title')?></h5>
												<?php the_sub_field('block_text')?>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</section>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			<?php } elseif(get_field('pa_column_select') == 'twoflex' ) { ?>
				<div class="col-11 col-md-10">
					<div>
						<?php while(has_sub_field('pa_two_titletext_flex')): ?>
							<?php if(get_row_layout() == 'title_single_column'): ?>
								<section class="org--5050-auxiliary">
									<div class="row g-0 d-flex">
										<div class="col-12 col-md-6 align-self-start">
											<h3><?php the_sub_field('column_title')?></h3>
										</div>
										<div class="col-12 col-md-6 align-self-start">
											<?php if( have_rows('block_repeater') ): ?>
						    					<?php while( have_rows('block_repeater') ): the_row(); ?>
													<h5><?php the_sub_field('block_title')?></h5>
													<?php the_sub_field('block_text')?>
												<?php endwhile; ?>
											<?php endif; ?>
										</div>
									</div>
								</section>
							<?php endif; ?>
							<?php if(get_row_layout() == 'title_double_column'): ?>

								<section class="org--5050-auxiliary">
									<div class="row g-0 d-flex">
										<div class="col-12 col-md-6 align-self-start">
											<h3 class="aux-title"><?php the_sub_field('column_title')?></h3>
										</div>
										<div class="col-12 col-md-6 align-self-start">
											<div class="row">
												<div class="col-12 col-lg-6">
													<?php if( have_rows('double_column_one') ): ?>
    													<?php while( have_rows('double_column_one') ): the_row(); ?>

															<h4><?php the_sub_field('column_title')?></h4>
															<?php if( have_rows('column_repeater') ): ?>
										    					<?php while( have_rows('column_repeater') ): the_row(); ?>
																	<h5><?php the_sub_field('column_repeater_title')?></h5>
																	<?php the_sub_field('column_repeater_text')?>
																<?php endwhile; ?>
															<?php endif; ?>

														<?php endwhile; ?>
													<?php endif; ?>
												</div>
												<div class="col-12 col-lg-6">
													<?php if( have_rows('double_column_two') ): ?>
    													<?php while( have_rows('double_column_two') ): the_row(); ?>

															<h4><?php the_sub_field('column_title')?></h4>
															<?php if( have_rows('column_repeater') ): ?>
										    					<?php while( have_rows('column_repeater') ): the_row(); ?>
																	<h5><?php the_sub_field('column_repeater_title')?></h5>
																	<?php the_sub_field('column_repeater_text')?>
																<?php endwhile; ?>
															<?php endif; ?>
														
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</section>

							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
			<?php } ?>
			<?php if(is_page('terms-and-conditions') || is_page('terms-and-conditions-of-sale')): { ?>
				<div class="col-11 col-md-9 col-lg-8">
			        <p style="font-size:90%;">
			        	<br>
			            ---<br>
			            <i>This page was last updated: <?php the_modified_date(); ?></i>
			        </p>
		    	</div>
			<?php } endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); // to counter php close tag issue