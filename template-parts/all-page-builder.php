<!-- All Page Builder -->
<?php while(has_sub_field("hpg_page_builder")): ?>
	<section class="org--material-builder">

		<?php if(get_row_layout() == 'hpg_50-50'): ?>
			<?php if( get_sub_field('halfhpg_bg_color')) { ?>
				<!-- this you need to set. -->
				<section style="background-color:<?php the_sub_field('halfhpg_bg_color_value');?>">
					<?php /* <section style="background-color:<?php the_field('halfhpg_background_color');?>">*/ ?>
			<?php } else { ?>
				<section>
			<?php } ?>
				<div class="container">
					<?php if( get_sub_field('halfhpg_image_position') == 'imageleft' ) { ?>
						<div class="row g-0 d-flex">
							<div class="col-12 col-md-6 align-self-center">
								<div class="d-flex justify-content-end">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('halfhpg_image_file')?>">
										<?php if( get_sub_field('halfhpg_image_caption_pos') == 'overlaylight' && get_sub_field('halfhpg_image_caption_lr') == 'captionleft' ) { ?>
											<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'overlaylight' && get_sub_field('halfhpg_image_caption_lr') == 'captionright' ) { ?>
											<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'overlaydark' && get_sub_field('halfhpg_image_caption_lr') == 'captionleft' ) { ?>
											<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'overlaydark' && get_sub_field('halfhpg_image_caption_lr') == 'captionright' ) { ?>
											<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'rotated' ) { ?>
											<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'default' && get_sub_field('halfhpg_image_caption_lr') == 'captionleft') { ?>
											<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'default' && get_sub_field('halfhpg_image_caption_lr') == 'captionright') { ?>
											<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } ?>
									</figure>
								</div>
							</div>
							<div class="col-12 col-md-6 align-self-center">
								<section class="mol--5050-content">
									<?php if( get_sub_field('halfhpg_add_content') == 'titletext' ) { ?>
										<?php get_template_part('template-parts/repeater-titletext'); ?>
									<?php } elseif( get_sub_field('halfhpg_add_content') == 'blockquote' ) { ?>
										<?php get_template_part('template-parts/part-blockquote'); ?>
									<?php } ?>
									<?php if (get_sub_field('halfp_cta')): ?>
										<div class="atm--button-cta d-flex">
											<a class="button button-cta" href="<?php the_sub_field('halfp_cta_cta_link'); ?>"><?php the_sub_field('halfp_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
										</div>
									<?php endif; ?>
								</section>
							</div>
						</div>
					<?php } elseif( get_sub_field('halfhpg_image_position') == 'imageright' ) { ?>
						<div class="row g-0 d-flex">
							<div class="col-12 col-md-6 align-self-center">
								<section class="mol--5050-content">
									<?php if( get_sub_field('halfhpg_add_content') == 'titletext' ) { ?>
										<?php get_template_part('template-parts/repeater-titletext'); ?>
									<?php } elseif( get_sub_field('halfhpg_add_content') == 'blockquote' ) { ?>
										<?php get_template_part('template-parts/part-blockquote'); ?>
									<?php } ?>
									<?php if (get_sub_field('halfp_cta')): ?>
										<div class="atm--button-cta d-flex">
											<a class="button button-cta" href="<?php the_sub_field('halfp_cta_cta_link'); ?>"><?php the_sub_field('halfp_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
										</div>
									<?php endif; ?>
								</section>
							</div>
							<div class="col-12 col-md-6 align-self-center">
								<div class="d-flex justify-content-start">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('halfhpg_image_file')?>">
										<?php if( get_sub_field('halfhpg_image_caption_pos') == 'overlaylight' && get_sub_field('halfhpg_image_caption_lr') == 'captionleft' ) { ?>
											<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'overlaylight' && get_sub_field('halfhpg_image_caption_lr') == 'captionright' ) { ?>
											<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'overlaydark' && get_sub_field('halfhpg_image_caption_lr') == 'captionleft' ) { ?>
											<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'overlaydark' && get_sub_field('halfhpg_image_caption_lr') == 'captionright' ) { ?>
											<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'rotated' ) { ?>
											<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'default' && get_sub_field('halfhpg_image_caption_lr') == 'captionleft') { ?>
											<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('halfhpg_image_caption_pos') == 'default' && get_sub_field('halfhpg_image_caption_lr') == 'captionright') { ?>
											<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_caption'); ?></figcaption>
										<?php } ?>
									</figure>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if(get_row_layout() == 'hpg_img50-img50'): ?>
			<div class="container">
				<div class="row g-0 d-flex">
					<div class="col-12 col-md-6">
						<div class="d-flex justify-content-center justify-content-lg-start">
							<figure>
								<img class="mw-100" <?php if(get_sub_field('halfhpg_imglft_mw')) { ?>style="width:<?php the_sub_field('halfhpg_imglft_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfhpg_image_left'); ?>">
								<figcaption class="atm--fc-default"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
							</figure>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="d-flex justify-content-center justify-content-lg-start">
							<figure class="rotate-figcaption">
								<img class="mw-100" <?php if(get_sub_field('halfhpg_imgrgt_mw')) { ?>style="width:<?php the_sub_field('halfhpg_imgrgt_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfhpg_image_right'); ?>">
								<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if(get_row_layout() == 'hpg_block_template'): ?>
			<?php if( get_sub_field('whole_template_select') == 'materialssmall' ) { ?>
				<?php get_template_part('template-parts/materials-classic-sm'); ?>
			<?php } elseif( get_sub_field('whole_template_select') == 'materialslarge' ) { ?>
				<?php get_template_part('template-parts/materials-classic-lg'); ?>
			<?php } ?>	
		<?php endif; ?>

	</section>
<?php endwhile; ?>
