<?php if(get_field('hdn_header_select') == 'fullwidthimage' ) { ?>
	<section class="org--hero-page ut--block-margin">
		<div class="container">
			<div class="row g-0">
				<div class="col-12">
					<?php if(have_rows('hdn_header_image')): ?>
						<?php while(have_rows('hdn_header_image')): the_row(); ?>

							<?php if(get_sub_field('hdn_image_type') == 'imagejpeg' ) { ?>
								<!-- if mobile image present, serve it -->
								<?php if(get_sub_field('hdn_mobile_only_image')) { ?>
									<figure class="d-none d-md-block">
								<?php } else { ?>
									<figure>
								<?php } ?>
										<img class="mw-100" src="<?php the_sub_field('hdn_image_file');?>">
										<?php if (get_sub_field('overlay_text')): ?>
											<section class="mol--hero-overlay">
												<h2><?php the_sub_field('overlay_text_heading'); ?></h2>
												<h4><?php the_sub_field('overlay_text_subheading'); ?></h4>
												<?php if (get_sub_field('overlay_cta')): ?>
													<div class="atm--button-cta">
														<a class="button button-cta" href="<?php the_sub_field('overlay_cta_link'); ?>"><?php the_sub_field('overlay_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
													</div>
												<?php endif; ?>
											</section>
										<?php endif; ?>
										<?php if( get_sub_field('hdn_image_caption_pos') == 'overlaylight' && get_sub_field('hdn_image_caption_lr') == 'captionleft' ) { ?>
											<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'overlaylight' && get_sub_field('hdn_image_caption_lr') == 'captionright' ) { ?>
											<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'overlaydark' && get_sub_field('hdn_image_caption_lr') == 'captionleft' ) { ?>
											<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'overlaydark' && get_sub_field('hdn_image_caption_lr') == 'captionright' ) { ?>
											<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'rotated' ) { ?>
											<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'default' && get_sub_field('hdn_image_caption_lr') == 'captionleft') { ?>
											<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'default' && get_sub_field('hdn_image_caption_lr') == 'captionright') { ?>
											<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
										<?php } ?>
									</figure>
								<!-- if mobile image present, serve it -->
								<?php if(get_sub_field('hdn_mobile_only_image')) : ?>
									<figure class="d-block d-md-none">
										<img class="mw-100" src="<?php the_sub_field('hdn_mobile_only_image');?>">
										<?php if (get_sub_field('overlay_text')): ?>
											<section class="mol--hero-overlay">
												<h2><?php the_sub_field('overlay_text_heading'); ?></h2>
												<h4><?php the_sub_field('overlay_text_subheading'); ?></h4>
											</section>
										<?php endif; ?>
									</figure>
								<?php endif; ?>
							<?php } elseif(get_sub_field('hdn_image_type') == 'imagegif' ) { ?>
								<figure>
									<img class="mw-100" src="<?php the_sub_field('hdn_image_file');?>">
									<?php if( get_sub_field('hdn_image_caption_pos') == 'overlaylight' && get_sub_field('hdn_image_caption_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'overlaylight' && get_sub_field('hdn_image_caption_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'overlaydark' && get_sub_field('hdn_image_caption_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'overlaydark' && get_sub_field('hdn_image_caption_lr') == 'captionright' ) { ?>
										<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'rotated' ) { ?>
										<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'default' && get_sub_field('hdn_image_caption_lr') == 'captionleft') { ?>
										<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } elseif( get_sub_field('hdn_image_caption_pos') == 'default' && get_sub_field('hdn_image_caption_lr') == 'captionright') { ?>
										<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('hdn_image_caption'); ?></figcaption>
									<?php } ?>
								</figure>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php } elseif(get_field('hdn_header_select') == 'fullwidthvideo' ) { ?>
	<section class="org--hero-page ut--block-margin">
		<div class="container">
			<div class="row g-0">
				<div class="col-12">

					<?php if(have_rows('hdn_header_video')): ?>
						<?php while(have_rows('hdn_header_video')): the_row(); ?>
							<?php if(get_sub_field('hdn_video_type') == 'videomp4' ) { ?>
								<div>
									<video class="mw-100" src="<?php the_sub_field('hdn_video_file'); ?>" autoplay loop playsinline muted></video>
								</div>
							<?php } elseif(get_sub_field('hdn_video_type') == 'videovimeo' ) { ?>
								<div style="padding:56.25% 0 0 0;position:relative;">
									<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php the_sub_field('hdn_vimeo_file_id'); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
									<script src="https://player.vimeo.com/api/player.js"></script>
								
								</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>
<?php } ?>