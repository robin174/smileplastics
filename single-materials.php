<?php
/**
* The template for displaying a single material
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-material mol--page-main"><!-- New template class in place -->
	<section class="org--hero-material ut--block-margin">
		<div class="container p-0">
			<div class="row g-0 d-flex">
				<div class="col-12 col-lg-6 align-self-center">
					<!-- if left = justify-content-end, if right = justify-content-start -->
					<div class="d-flex justify-content-end"><!-- set this for each block, in case image not square -->
						<figure>
							<img class="mw-100" src="<?php the_field('hm_image_file');?>" alt="<?php the_field('hm_image_caption'); ?>">
								<?php if( get_field('hm_image_caption_pos') == 'overlaylight' && get_field('hm_image_caption_pos_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } elseif( get_field('hm_image_caption_pos') == 'overlaydark' && get_field('hm_image_caption_pos_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } elseif( get_field('hm_image_caption_pos') == 'overlaydark' && get_field('hm_image_caption_pos_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } elseif( get_field('hm_image_caption_pos') == 'overlaydark' && get_field('hm_image_caption_pos_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } elseif( get_field('hm_image_caption_pos') == 'rotated' ) { ?>
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } elseif( get_field('hm_image_caption_pos') == 'default' && get_field('hm_image_caption_pos_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } elseif( get_field('hm_image_caption_pos') == 'default' && get_field('hm_image_caption_pos_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('hm_image_caption'); ?></figcaption>
								<?php } ?>
						</figure>
					</div>
				</div>
				<div class="col-12 col-lg-6 align-self-center">
					<section class="mol--5050-content mol--hero-material">
						<div class="atm--material-title">
							<h2><?php the_title();?></h2>
							<span class="atm--madefrom">Made from</span>
							<h4><?php the_field('hm_made_from');?></h4>
						</div>
						<div>
							<?php the_field('hm_mat_desc');?>
						</div>
						<?php if (get_field('hm_cta_button')): ?>
							<div class="atm--button-cta">
								<a class="button button-cta" href="<?php the_field('hm_cta_link');?>">Shop Samples<i class="far fa-long-arrow-right"></i></a>
							</div>
						<?php endif; ?>
					</section>
				</div>
			</div>
		</div>
	</section>

	<!-- Page Builder -->
	<?php while(has_sub_field("sm_page_builder")): ?>
		<section class="org--builder-material ut--block-margin">
			<?php if(get_row_layout() == 'sm_50-50'): ?>
				<?php if( get_sub_field('halfm_bg_color')) { ?>
					<div style="background-color:<?php the_field('hm_background_color');?>">
				<?php } else { ?>
					<div>
				<?php } ?>
					<div class="container">
						<?php if( get_sub_field('halfm_image_position') == 'imageleft' ) { ?>
							<div class="row g-0 d-flex">
								<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
									<div class="d-flex justify-content-end">
										<figure>
											<img class="mw-100" src="<?php the_sub_field('halfm_image_file')?>" alt="<?php the_sub_field('halfm_image_caption'); ?>">
											<?php if (get_sub_field('halfm_image_caption')): ?>
												<?php if( get_sub_field('halfm_caption_pos') == 'overlaylight' && get_sub_field('halfm_caption_pos_lr') == 'captionleft' ) { ?>
													<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } elseif( get_sub_field('halfm_caption_pos') == 'overlaylight' && get_sub_field('halfm_caption_pos_lr') == 'captionright' ) { ?>
													<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } elseif( get_sub_field('halfm_caption_pos') == 'overlaydark' && get_sub_field('halfm_caption_pos_lr') == 'captionleft' ) { ?>
													<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } elseif( get_sub_field('halfm_caption_pos') == 'overlaydark' && get_sub_field('halfm_caption_pos_lr') == 'captionright' ) { ?>
													<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } elseif( get_sub_field('halfm_caption_pos') == 'rotated' ) { ?>
													<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } elseif( get_sub_field('halfm_caption_pos') == 'default' && get_sub_field('halfm_caption_pos_lr') == 'captionleft') { ?>
													<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } elseif( get_sub_field('halfm_caption_pos') == 'default' && get_sub_field('halfm_caption_pos_lr') == 'captionright') { ?>
													<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption'); ?></figcaption>
												<?php } ?>
											<?php endif; ?>
										</figure>
									</div>
								</div>
								<div class="col-12 col-md-6 col-xl-5 align-self-center order-1 order-md-2">
									<section class="mol--5050-content">
										<?php if( get_sub_field('halfm_add_content') == 'titletext' ) { ?>
											<?php get_template_part('template-parts/repeater-titletext'); ?>
										<?php } elseif( get_sub_field('halfm_add_content') == 'blockquote' ) { ?>
											<?php get_template_part('template-parts/part-blockquote'); ?>
										<?php } ?>
									</section>
								</div>
							</div>
						<?php } elseif( get_sub_field('halfm_image_position') == 'imageright' ) { ?>
							<div class="row g-0 d-flex">
								<div class="col-12 col-md-5 align-self-center order-1">
									<section class="mol--5050-content">
										<?php if( get_sub_field('halfm_add_content') == 'titletext' ) { ?>
											<?php get_template_part('template-parts/repeater-titletext'); ?>
										<?php } elseif( get_sub_field('halfm_add_content') == 'blockquote' ) { ?>
											<?php get_template_part('template-parts/part-blockquote'); ?>
										<?php } ?>
									</section>
								</div>
								<div class="col-12 col-md-6 offset-md-1 align-self-center order-2">
									<div class="d-flex justify-content-start">
										<figure>
											<img class="mw-100" src="<?php the_sub_field('halfm_image_file')?>">
											<?php if (get_sub_field('halfm_image_caption')): ?>
												<figcaption class="atm--fc-overlaydark"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_caption')?></figcaption>
											<?php endif; ?>
										</figure>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if(get_row_layout() == 'sm_img50-img50'): ?>
				<div class="container">
					<div class="row g-0 d-flex">
						<div class="col-12 col-md-6">
							<div class="d-flex justify-content-center justify-content-lg-start">
								<figure>
									<img class="mw-100" <?php if(get_sub_field('halfm_imglft_mw')) { ?>style="width:<?php the_sub_field('halfm_imglft_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfm_image_left'); ?>" alt="<?php the_sub_field('halfm_image_left_cap'); ?>">
									<?php if( get_sub_field('halfm_image_left_cap_pos') == 'overlaylight' && get_sub_field('halfm_image_left_cap_pos_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_left_cap_pos') == 'overlaylight' && get_sub_field('halfm_image_left_cap_pos_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_left_cap_pos') == 'overlaydark' && get_sub_field('halfm_image_left_cap_pos_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_left_cap_pos') == 'overlaydark' && get_sub_field('halfm_image_left_cap_pos_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_left_cap_pos') == 'rotated' ) { ?>
										<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_left_cap_pos') == 'default' && get_sub_field('halfm_image_left_cap_pos_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_left_cap_pos') == 'default' && get_sub_field('halfm_image_left_cap_pos_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_left_cap'); ?></figcaption>
									<?php } ?>
								</figure>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="d-flex justify-content-center justify-content-lg-start">
								<figure class="rotate-figcaption">
									<img class="mw-100" <?php if(get_sub_field('halfm_imgrgt_mw')) { ?>style="width:<?php the_sub_field('halfm_imgrgt_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfm_image_right'); ?>" alt="<?php the_sub_field('halfm_image_right_cap'); ?>">
									<?php if( get_sub_field('halfm_image_right_cap_pos') == 'overlaylight' && get_sub_field('halfm_image_right_cap_pos_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_right_cap_pos') == 'overlaylight' && get_sub_field('halfm_image_right_cap_pos_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_right_cap_pos') == 'overlaydark' && get_sub_field('halfm_image_right_cap_pos_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_right_cap_pos') == 'overlaydark' && get_sub_field('halfm_image_right_cap_pos_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_right_cap_pos') == 'rotated' ) { ?>
										<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_right_cap_pos') == 'default' && get_sub_field('halfm_image_right_cap_pos_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } elseif( get_sub_field('halfm_image_right_cap_pos') == 'default' && get_sub_field('halfm_image_right_cap_pos_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfm_image_right_cap'); ?></figcaption>
									<?php } ?>
								</figure>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</section>
	<?php endwhile; ?>

	<?php get_template_part('template-parts/material-specifics'); ?>

	<section class="org--pattern-material ut--block-margin">
		<div class="container">
			<div class="row g-0 d-flex">
				<div class="col-12 col-md-6 align-self-center">
					<div class="row g-3">
						<?php if( have_rows('pattern_examples') ): ?>
							<?php while( have_rows('pattern_examples') ): the_row(); ?>
								<div class="col-6">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('pattern_image_tl'); ?>">
									</figure>
								</div>
								<div class="col-6">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('pattern_image_tr'); ?>">
									</figure>
								</div>
								<div class="col-6">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('pattern_image_bl'); ?>">
									</figure>
								</div>
								<div class="col-6">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('pattern_image_br'); ?>">
									</figure>
								</div>
							<?php endwhile; ?>		
						<?php endif; ?>
					</div>
				</div>
				<div class="col-12 col-md-6 align-self-center">
					<section class="mol--5050-content">
						<?php if( have_rows('pattern_introduction') ): ?>
							<?php while( have_rows('pattern_introduction') ): the_row(); ?>
								<section class="mol--pattern-intro">
									<h3><?php the_sub_field('pattern_title'); ?></h3>
									<p><?php the_sub_field('pattern_description'); ?></p>
								</section>
							<?php endwhile; ?>		
						<?php endif; ?>
					</section>
				</div>
			</div>
		</div>
	</section>

	<section class="org--footer-material ut--block-margin">
		<div class="container">
			<div class="mol--footer-material">
				<div class="row">
					<!-- the count might need to sit outside the 'repeater' have_rows if there is an issue (came up on CT site) -->
					<?php if( have_rows('fm_titletext') ): ?>
	    				<?php while( have_rows('fm_titletext') ): the_row(); ?>
	    					<?php $total_rows = count(get_field('fm_titletext')); ?>
							<?php if($total_rows == ('3')){ ?>
								<div class="col-12 col-md-6 col-lg-4">
									<div class="atm--footer-material">
			    						<h3><?php the_sub_field('footerm_title');?></h3>
			    						<p><?php the_sub_field('footerm_text');?></p>
			    						<?php if (get_sub_field('footerm_cta_button')): ?>
			    							<a class="button button-cta" href="<?php the_sub_field('footerm_cta_link');?>"><?php the_sub_field('footerm_cta_text');?><i class="far fa-long-arrow-right"></i></a>
			    						<?php endif; ?>
			    					</div>
		    					</div>
							<?php } elseif($total_rows == ('4')) { ?>
								<div class="col-12 col-md-6 col-lg-3">
									<div class="atm--footer-material">
			    						<h3><?php the_sub_field('footerm_title');?></h3>
			    						<p><?php the_sub_field('footerm_text');?></p>
			    						<?php if (get_sub_field('footerm_cta_button')): ?>
			    							<a class="button button-cta" href="<?php the_sub_field('footerm_cta_link');?>"><?php the_sub_field('footerm_cta_text');?><i class="far fa-long-arrow-right"></i></a>
			    						<?php endif; ?>
			    					</div>
		    					</div>
							<?php } ?>
	    				<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Materials: Small -->
	<?php get_template_part('template-parts/materials-classic-sm'); ?>

</section>

<?php get_footer(); // to counter php close tag issue