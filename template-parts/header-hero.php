<section class="org--hero-page ut--block-margin">
	<div class="container">
		<div class="row g-0">
			<div class="col-12">

				<?php if(get_field('hdn_header_select') == 'fullwidthimage' ) { ?>
					<?php if(have_rows('hdn_header_image')): ?>
						<?php while(have_rows('hdn_header_image')): the_row(); ?>

							<?php if(get_sub_field('hdn_image_type') == 'imagejpeg' ) { ?>
								<figure>
									<img class="mw-100" src="<?php the_sub_field('hdn_image_file');?>">
									<?php if (get_sub_field('overlay_text')): ?>
										<section class="mol--hero-overlay">
											<h2><?php the_sub_field('overlay_text_heading'); ?></h2>
											<h4><?php the_sub_field('overlay_text_subheading'); ?></h4>
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
				<?php } elseif(get_field('hdn_header_select') == 'fullwidthvideo' ) { ?>
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
				<?php } ?>

			</div>
		</div>
	</div>
</section>