<?php
/**
* The template for displaying a single project
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-project mol--page-main">
	<section class="org--hero-project ut--block-margin" style="background-color:<?php the_field('hp_background_color');?>">
		<div class="container">
			<div class="row g-0">
				<div class="col-12">
					<figure>
						<img class="mw-100" src="<?php the_field('hp_image_file');?>" alt="<?php the_field('hp_image_caption'); ?>">
						<?php if( get_field('hp_image_caption_pos') == 'overlaylight' && get_field('hp_image_caption_pos_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('hp_image_caption'); ?></figcaption>
						<?php } elseif( get_field('hp_image_caption_pos') == 'overlaylight' && get_field('hp_image_caption_pos_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('hp_image_caption'); ?></figcaption>
						<?php } elseif( get_field('hp_image_caption_pos') == 'overlaydark' && get_field('hp_image_caption_pos_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('hp_image_caption'); ?></figcaption>
						<?php } elseif( get_field('hp_image_caption_pos') == 'overlaydark' && get_field('hp_image_caption_pos_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('hp_image_caption'); ?></figcaption>
						<?php } elseif( get_field('hp_image_caption_pos') == 'rotated' ) { ?>
							<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_field('hp_image_caption'); ?></figcaption>
						<?php } ?>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<?php if( have_rows('hp_metadata') ): ?>
		<?php while( have_rows('hp_metadata') ): the_row(); ?>
			<section class="org--specifics-project ut--block-margin">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="row justify-content-center">
								<div class="col-12 col-md-10 col-lg-9 col-xl-8">
									<div class="row g-0">
										<div class="col-12 col-md-4">
											<div class="atm--specifics-project text-center text-md-start h-100">
												<h4>Client</h4>
												<span><?php the_sub_field('md_client'); ?></span>
											</div>
										</div>
										<div class="col-12 col-md-4">
											<div class="atm--specifics-project text-center text-md-start h-100">
												<h4>Location</h4>
												<span><?php the_sub_field('md_location'); ?></span>
											</div>
										</div>
										<div class="col-12 col-md-4">
											<div class="atm--specifics-project ut-end-sp text-center text-md-start h-100">
												<h4>Material</h4>
												<span><?php the_sub_field('md_material'); ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		
		<?php endwhile; ?>
	<?php endif; ?>

	<section class="org--title-project ut--block-margin">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-9">
					<h2><?php the_field('hp_title'); ?></h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Page Builder -->
	<?php while(has_sub_field("sp_page_builder")): ?>
		<section class="org--builder-project ut--block-margin">
			<?php if(get_row_layout() == 'sp_50-50'): ?>
				<?php if( get_sub_field('halfp_background_color')) { ?>
					<div style="background-color:<?php the_field('hp_background_color');?>">
				<?php } else { ?>
					<div>
				<?php } ?>
					<div class="container">
						<?php if( get_sub_field('halfp_image_position') == 'imageleft' ) { ?>
							<div class="row g-0 d-flex">
								<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
									<div class="d-flex justify-content-end">
										<figure>
											<img class="mw-100" src="<?php the_sub_field('halfp_image_file')?>">
											<?php if (get_sub_field('halfp_image_caption')): ?>
												<figcaption class="atm--fc-overlaydark"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfp_image_caption')?></figcaption>
											<?php endif; ?>
										</figure>
									</div>
								</div>
								<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
									<section class="mol--5050-content">
										<?php if( get_sub_field('halfp_add_content') == 'titletext' ) { ?>
											<?php get_template_part('template-parts/repeater-titletext'); ?>
										<?php } elseif( get_sub_field('halfp_add_content') == 'blockquote' ) { ?>
											<?php get_template_part('template-parts/part-blockquote'); ?>
										<?php } ?>
									</section>
								</div>
							</div>
						<?php } elseif( get_sub_field('halfp_image_position') == 'imageright' ) { ?>
							<div class="row g-0 d-flex">
								<div class="col-12 col-md-6 align-self-center order-1">
									<section class="mol--5050-content">
										<?php if( get_sub_field('halfp_add_content') == 'titletext' ) { ?>
											<?php get_template_part('template-parts/repeater-titletext'); ?>
										<?php } elseif( get_sub_field('halfp_add_content') == 'blockquote' ) { ?>
											<?php get_template_part('template-parts/part-blockquote'); ?>
										<?php } ?>
									</section>
								</div>
								<div class="col-12 col-md-6 align-self-center order-2">
									<div class="d-flex justify-content-start">
										<figure>
											<img class="mw-100" src="<?php the_sub_field('halfp_image_file')?>">
											<?php if (get_sub_field('halfp_image_caption')): ?>
												<figcaption class="atm--fc-overlaydark"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfp_image_caption')?></figcaption>
											<?php endif; ?>
										</figure>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if(get_row_layout() == 'sp_img50-img50'): ?>
				<div class="container">
					<div class="row g-0 d-flex">
						<div class="col-12 col-md-6">
							<div class="d-flex justify-content-center justify-content-lg-start">
								<figure>
									<img class="mw-100" <?php if(get_sub_field('halfp_imglft_mw')) { ?>style="width:<?php the_sub_field('halfp_imglft_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfp_image_left'); ?>">
									<figcaption class="atm--fc-default"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfp_image_left_cap'); ?></figcaption>
								</figure>	
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="d-flex justify-content-center justify-content-lg-start">
								<figure class="rotate-figcaption">
									<img class="mw-100" <?php if(get_sub_field('halfp_imgrgt_mw')) { ?>style="width:<?php the_sub_field('halfp_imgrgt_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfp_image_right'); ?>">
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfp_image_right_cap'); ?></figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</section>
	<?php endwhile; ?>

	<section class="org--blockquote-project ut--block-margin">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-9 col-lg-6">
					<h3 class="text-center"><?php the_field('fp_title');?></h3>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-9 col-lg-8">
					<!-- convert into template part... and add an if statement to the template... if x, else y -->
					<blockquote class="atm--blockquote-project text-center">&ldquo;<?php the_field('fp_blockquote'); ?>&rdquo;<cite>&mdash;&nbsp;<?php the_field('fp_blockquote_cite'); ?></cite></blockquote>
				</div>
			</div>
		</div>
	</section>
	
</section>

<?php get_footer(); // to counter php close tag issue