<!-- All Page Builder -->
<?php while(has_sub_field('hpg_page_builder')): ?>
	<section class="org--page-builder ut--block-margin">

		<?php if(get_row_layout() == 'hpg_50-50'): ?>
			<?php if( get_sub_field('halfhpg_bg_color')) { ?>
				<section style="background-color:<?php the_sub_field('halfhpg_bg_color_value');?>">
			<?php } else { ?>
				<section>
			<?php } ?>
				<div class="container">
					<?php if( get_sub_field('halfhpg_image_position') == 'imageleft' ) { ?>
						<div class="row g-0 d-flex">
							<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
								<div class="d-flex justify-content-end">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('halfhpg_image_file')?>" alt="<?php the_sub_field('halfhpg_image_caption'); ?>">
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
							<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
								<section class="mol--5050-content">
									<?php if( get_sub_field('halfhpg_add_content') == 'titletext' ) { ?>
										<?php get_template_part('template-parts/repeater-titletext'); ?>
									<?php } elseif( get_sub_field('halfhpg_add_content') == 'blockquote' ) { ?>
										<?php get_template_part('template-parts/part-blockquote'); ?>
									<?php } ?>
									<?php if (get_sub_field('halfp_cta')): ?>
										<div class="atm--button-cta">
											<?php if(get_sub_field('halfp_cta_select') == 'link' ) { ?>
												<a class="button button-cta" href="<?php the_sub_field('halfp_cta_link'); ?>"><?php the_sub_field('halfp_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
											<?php } elseif(get_sub_field('halfp_cta_select') == 'file' ) { ?>
												<a class="button button-cta" target="_blank" href="<?php the_sub_field('halfp_cta_file'); ?>"><?php the_sub_field('halfp_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
											<?php } ?> 
										</div>
									<?php endif; ?>
								</section>
							</div>
						</div>
					<?php } elseif( get_sub_field('halfhpg_image_position') == 'imageright' ) { ?>
						<div class="row g-0 d-flex">
							<div class="col-12 col-md-6 align-self-center order-1">
								<section class="mol--5050-content">
									<?php if( get_sub_field('halfhpg_add_content') == 'titletext' ) { ?>
										<?php get_template_part('template-parts/repeater-titletext'); ?>
									<?php } elseif( get_sub_field('halfhpg_add_content') == 'blockquote' ) { ?>
										<?php get_template_part('template-parts/part-blockquote'); ?>
									<?php } ?>
									<?php if (get_sub_field('halfp_cta')): ?>
										<div class="atm--button-cta">
											<?php if(get_sub_field('halfp_cta_select') == 'link' ) { ?>
												<a class="button button-cta" href="<?php the_sub_field('halfp_cta_link'); ?>"><?php the_sub_field('halfp_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
											<?php } elseif(get_sub_field('halfp_cta_select') == 'file' ) { ?>
												<a class="button button-cta" target="_blank" href="<?php the_sub_field('halfp_cta_file'); ?>"><?php the_sub_field('halfp_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
											<?php } ?> 
										</div>
									<?php endif; ?>
								</section>
							</div>
							<div class="col-12 col-md-6 align-self-center order-2">
								<div class="d-flex justify-content-start">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('halfhpg_image_file')?>" alt="<?php the_sub_field('halfhpg_image_caption'); ?>">
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
								<img class="mw-100" <?php if(get_sub_field('halfhpg_imglft_mw')) { ?>style="width:<?php the_sub_field('halfhpg_imglft_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfhpg_image_left'); ?>" alt="<?php the_sub_field('halfhpg_image_left_cap'); ?>">
								<?php if( get_sub_field('halfhpg_image_left_cap_pos') == 'overlaylight' && get_sub_field('halfhpg_image_left_cap_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_left_cap_pos') == 'overlaylight' && get_sub_field('halfhpg_image_left_cap_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_left_cap_pos') == 'overlaydark' && get_sub_field('halfhpg_image_left_cap_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_left_cap_pos') == 'overlaydark' && get_sub_field('halfhpg_image_left_cap_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_left_cap_pos') == 'rotated' ) { ?>
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_left_cap_pos') == 'default' && get_sub_field('halfhpg_image_left_cap_lr') == 'captionleft') { ?>
									<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_left_cap_pos') == 'default' && get_sub_field('halfhpg_image_left_cap_lr') == 'captionright') { ?>
									<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_left_cap'); ?></figcaption>
								<?php } ?>
							</figure>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="d-flex justify-content-center justify-content-lg-start">
							<figure class="rotate-figcaption">
								<img class="mw-100" <?php if(get_sub_field('halfhpg_imgrgt_mw')) { ?>style="width:<?php the_sub_field('halfhpg_imgrgt_mw'); ?>px;"<?php } ?> src="<?php the_sub_field('halfhpg_image_right'); ?>" alt="<?php the_sub_field('halfhpg_image_right_cap'); ?>">
								<?php if( get_sub_field('halfhpg_image_right_cap_pos') == 'overlaylight' && get_sub_field('halfhpg_image_right_cap_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_right_cap_pos') == 'overlaylight' && get_sub_field('halfhpg_image_right_cap_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_right_cap_pos') == 'overlaydark' && get_sub_field('halfhpg_image_right_cap_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_right_cap_pos') == 'overlaydark' && get_sub_field('halfhpg_image_right_cap_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_right_cap_pos') == 'rotated' ) { ?>
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_right_cap_pos') == 'default' && get_sub_field('halfhpg_image_right_cap_lr') == 'captionleft') { ?>
									<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } elseif( get_sub_field('halfhpg_image_right_cap_pos') == 'default' && get_sub_field('halfhpg_image_right_cap_lr') == 'captionright') { ?>
									<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('halfhpg_image_right_cap'); ?></figcaption>
								<?php } ?>
							</figure>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if(get_row_layout() == 'hpg_block_template'): ?>
			<?php if( get_sub_field('whole_template_select') == 'materialssmall' ) { ?>
				<?php if(get_sub_field('whole_template_title')) { ?>
					<h1 class="atm--template-title"><?php the_sub_field('whole_template_title') ?></h1>
				<?php } ?>
				<?php get_template_part('template-parts/materials-classic-sm'); ?>
			<?php } elseif( get_sub_field('whole_template_select') == 'materialslarge' ) { ?>
				<?php if(get_sub_field('whole_template_title')) { ?>
					<h1 class="atm--template-title"><?php the_sub_field('whole_template_title') ?></h1>
				<?php } ?>
				<?php get_template_part('template-parts/materials-classic-lg'); ?>
			<?php } elseif( get_sub_field('whole_template_select') == 'keystats' ) { ?>
				<?php if(get_sub_field('whole_template_title')) { ?>
					<h1 class="atm--template-title"><?php the_sub_field('whole_template_title') ?></h1>
				<?php } ?>
				<?php get_template_part('template-parts/part-key-stats'); ?>
			<?php } elseif( get_sub_field('whole_template_select') == 'chartcolumns' ) { ?>
				<?php get_template_part('template-parts/chart-columns'); ?>
			<?php } elseif( get_sub_field('whole_template_select') == 'workedwith' ) { ?>
				<?php get_template_part('template-parts/part-workedwith'); ?>
			<?php } elseif( get_sub_field('whole_template_select') == 'edgingdiagrams' ) { ?>
				<?php if(get_sub_field('whole_template_title')) { ?>
					<h1 class="atm--template-title"><?php the_sub_field('whole_template_title') ?></h1>
				<?php } ?>
				<?php if(get_sub_field('whole_template_introduction')) { ?>
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col-11 col-md-7">
								<p style="margin-bottom:30px;font-size: 1.4rem;"><?php the_sub_field('whole_template_introduction');?></p>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php get_template_part('template-parts/edging-diagrams'); ?>
			<?php } ?>
		<?php endif; ?>

		<?php if(get_row_layout() == 'hpg_block_fulltext'): ?>
			<div class="container">
				<div class="row g-0 justify-content-center">
					<div class="col-12 col-md-9">
						<section class="mol--fulltext">
							<?php if( get_sub_field('hpg_text_align') == 'aligncenter') { ?>
								<div class="text-center">
							<?php } elseif( get_sub_field('hpg_text_align') == 'alignleft') { ?>
								<div>
							<?php } ?>
								<p class="atm--text-fullwidth"><?php the_sub_field('hpg_text_full');?></p>
								<?php if(get_sub_field('hpg_text_cite')): ?>
									<p class="atm--text-cite"><?php the_sub_field('hpg_text_cite');?></p>
								<?php endif; ?>
						</section>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if(get_row_layout() == 'hpg_block_video'): ?>
			<?php if( get_sub_field('hpg_video_bg')) { ?>
				<section style="background-color:<?php the_sub_field('hpg_video_bgcolor');?>">
			<?php } else { ?>
				<section>
			<?php } ?>
					<div class="container">
						<div class="row g-0 d-flex">
							<div class="col-12">

								<?php if(get_sub_field('hpg_video_select') == 'videomp4' ) { ?>
									<div>
										<video class="mw-100" src="<?php the_sub_field('hpg_video_file'); ?>" autoplay loop playsinline muted></video>
									</div>
								<?php } elseif(get_sub_field('hpg_video_select') == 'videovimeo' ) { ?>
									<div style="padding:56.25% 0 0 0;position:relative;">
										<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php the_sub_field('hpg_vimeo_file_id'); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
										<script src="https://player.vimeo.com/api/player.js"></script>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</section>
		<?php endif; ?>

	</section>
<?php endwhile; ?>
