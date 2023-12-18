<!-- All Post Builder -->
<?php while(has_sub_field('new_post_content')): ?>

	<?php if(get_row_layout() == 'n_post_subheading_h3'): // Subheading: h2 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6"> 
				<div class="mol--post-text">
					<h3 class="bb__h3"><?php the_sub_field('n_unit_subheading_h3');?></h3>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_introduction'): // Paragraph Introduction ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6">
				<p class="atm--post-intro"><?php the_sub_field('n_unit_introduction'); ?></p>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_paragraph'): // Paragraph ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6"><?php the_sub_field('n_unit_paragraph'); ?></div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_image'): // Image ?>
		<div class="row justify-content-center">
			<div class="col-12">

				<div class="mol--post-block d-flex justify-content-center">
					<figure class="atm--post-img">
						<img class="mw-100" src="<?php the_sub_field('n_unit_image'); ?>" alt="<?php the_sub_field('n_unit_image_caption'); ?>">
						<?php if( get_sub_field('n_unit_image_caption_pos') == 'overlaylight' && get_sub_field('n_unit_image_caption_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } elseif( get_sub_field('n_unit_image_caption_pos') == 'overlaylight' && get_sub_field('n_unit_image_caption_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } elseif( get_sub_field('n_unit_image_caption_pos') == 'overlaydark' && get_sub_field('n_unit_image_caption_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } elseif( get_sub_field('n_unit_image_caption_pos') == 'overlaydark' && get_sub_field('n_unit_image_caption_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } elseif( get_sub_field('n_unit_image_caption_pos') == 'rotated' ) { ?>
							<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } elseif( get_sub_field('n_unit_image_caption_pos') == 'default' && get_sub_field('n_unit_image_caption_lr') == 'captionleft') { ?>
							<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } elseif( get_sub_field('n_unit_image_caption_pos') == 'default' && get_sub_field('n_unit_image_caption_lr') == 'captionright') { ?>
							<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_unit_image_caption'); ?></figcaption>
						<?php } ?>								
					</figure>
				</div>

			</div>
		</div>
	<?php endif; ?>

	<?php if(get_sub_field('n_post_video_type') == 'videomp4' ) { // Video: MP4 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-10">
				<video class="mw-100" src="<?php the_sub_field('n_post_video_file'); ?>" autoplay loop playsinline muted></video>
			</div>
		</div>
	<?php } elseif(get_sub_field('n_post_video_type') == 'videovimeo' ) { // Video: Vimeo ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div style="padding:56.25% 0 0 0;position:relative;">
					<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php the_sub_field('n_post_vimeo_file_id'); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
					<script src="https://player.vimeo.com/api/player.js"></script>
				</div>
			</div>
		</div>
	<?php } ?>

	 <?php if(get_row_layout() == 'n_post_conclusion'): // Conclusion ?>
    	<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6">
				<p><em><?php the_sub_field('n_unit_conclusion'); ?></em></p>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_image_two'): // Two images in a row  ?>
   		<section class="org--image-block">
	   		<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_two_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_two_two'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<?php if( get_sub_field('n_combined_image_caption_lr') == 'captionleft' ) { ?>
						<span class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_combined_image_caption'); ?></span>
					<?php } elseif( get_sub_field('n_combined_image_caption_lr') == 'captionright' ) { ?>
						<span class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_combined_image_caption'); ?></span>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_image_three'): // Three images in a row  ?>
		<section class="org--image-block">
			<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_three_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_three_two'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_three_three'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<?php if( get_sub_field('n_combined_image_caption_lr') == 'captionleft' ) { ?>
						<span class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_combined_image_caption'); ?></span>
					<?php } elseif( get_sub_field('n_combined_image_caption_lr') == 'captionright' ) { ?>
						<span class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_combined_image_caption'); ?></span>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_image_four'): // Four images in a row  ?>
		<section class="org--image-block">
			<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_four_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_four_two'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_four_three'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_four_four'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-9">
					<?php if( get_sub_field('n_combined_image_caption_lr') == 'captionleft' ) { ?>
						<span class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_combined_image_caption'); ?></span>
					<?php } elseif( get_sub_field('n_combined_image_caption_lr') == 'captionright' ) { ?>
						<span class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_sub_field('n_combined_image_caption'); ?></span>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php endwhile; ?>