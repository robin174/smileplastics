<?php if( get_field('halfb_background_color_sel')) { ?>
	<section class="org--block-default" style="background-color:<?php the_field('halfb_background_color');?>;">
<?php } else { ?>
	<section class="org--block-default">
<?php } ?>
		<div class="container">
			<?php if(get_field('halfb_image_position') == 'imageleft' ) { ?>
				<div class="row g-0 d-flex">
					<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
						<div class="d-flex justify-content-end">
							<figure>
								<img class="mw-100" src="<?php the_field('halfb_image_file')?>" alt="<?php the_field('halfb_image_caption'); ?>">
								<?php /*
								<?php if (get_field('halfb_image_caption')): ?>
									<figcaption class="atm--fc-overlaydark"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption')?></figcaption>
								<?php endif; ?>
								*/ ?>

								<?php if( get_field('halfb_image_caption_pos') == 'overlaylight' && get_field('halfb_image_caption_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'overlaylight' && get_field('halfb_image_caption_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'overlaydark' && get_field('halfb_image_caption_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'overlaydark' && get_field('halfb_image_caption_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'rotated' ) { ?>
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'default' && get_field('halfb_image_caption_lr') == 'captionleft') { ?>
									<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'default' && get_field('halfb_image_caption_lr') == 'captionright') { ?>
									<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } ?>
							</figure>
						</div>
					</div>
					<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
						<section class="mol--5050-content">
							<?php if(get_field('halfb_add_content') == 'titletext') { ?>
								<?php if( have_rows('halfb_titletext')): ?>
								    <?php while( have_rows('halfb_titletext')): the_row(); ?>
								    	<section>
											<h3><?php the_sub_field('halfb_title')?></h3>
											<?php the_sub_field('halfb_text')?>
											<?php if (get_sub_field('halfb_button_add')): ?>
												<div class="atm--button-cta">
													<?php if(get_sub_field('halfb_button_select') == 'link' ) { ?>
														<a class="button button-cta" href="<?php the_sub_field('halfb_button_link'); ?>"><?php the_sub_field('halfb_button_command'); ?><i class="far fa-long-arrow-right"></i></a>
													<?php } elseif(get_sub_field('halfb_button_select') == 'file' ) { ?>
														<a class="button button-cta" target="_blank" href="<?php the_sub_field('halfb_button_file'); ?>"><?php the_sub_field('halfb_button_command'); ?><i class="far fa-long-arrow-right"></i></a>
													<?php } ?> 
												</div>
											<?php endif; ?>
											</div>
										</section>
								    <?php endwhile; ?>
								<?php endif; ?>
							<?php } elseif(get_field('halfb_add_content') == 'blockquote') { ?>
								<?php get_template_part('template-parts/part-blockquote'); ?>
							<?php } ?>
						</section>
					</div>
				</div>
			<?php } elseif(get_field('halfb_image_position') == 'imageright') { ?>
				<div class="row g-0 d-flex">
					<div class="col-12 col-md-6 align-self-center order-1">
						<section class="mol--5050-content">
							<?php if(get_field('halfb_add_content') == 'titletext') { ?>
								<?php if( have_rows('halfb_titletext')): ?>
								    <?php while( have_rows('halfb_titletext')): the_row(); ?>
								    	<section>
											<h3><?php the_sub_field('halfb_title')?></h3>
											<?php the_sub_field('halfb_text')?>
											<?php if (get_sub_field('halfb_button_add')): ?>
												<div class="atm--button-cta">
													<?php if(get_sub_field('halfb_button_select') == 'link' ) { ?>
														<a class="button button-cta" href="<?php the_sub_field('halfb_button_link'); ?>"><?php the_sub_field('halfb_button_command'); ?><i class="far fa-long-arrow-right"></i></a>
													<?php } elseif(get_sub_field('halfb_button_select') == 'file' ) { ?>
														<a class="button button-cta" target="_blank" href="<?php the_sub_field('halfb_button_file'); ?>"><?php the_sub_field('halfb_button_command'); ?><i class="far fa-long-arrow-right"></i></a>
													<?php } ?> 
												</div>
											<?php endif; ?>
										</section>
								    <?php endwhile; ?>
								<?php endif; ?>
							<?php } elseif(get_field('halfb_add_content') == 'blockquote') { ?>
								<?php get_template_part('template-parts/part-blockquote'); ?>
							<?php } ?>
						</section>
					</div>
					<div class="col-12 col-md-6 align-self-center order-2">
						<div class="d-flex justify-content-start">
							<figure>
								<img class="mw-100" src="<?php the_field('halfb_image_file')?>" alt="<?php the_field('halfb_image_caption_lr'); ?>">
								<?php if( get_field('halfb_image_caption_pos') == 'overlaylight' && get_field('halfb_image_caption_lr') == 'captionleft' ) { ?>
										<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption_lr'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'overlaylight' && get_field('halfb_image_caption_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'overlaydark' && get_field('halfb_image_caption_lr') == 'captionleft' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'overlaydark' && get_field('halfb_image_caption_lr') == 'captionright' ) { ?>
									<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'rotated' ) { ?>
									<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'default' && get_field('halfb_image_caption_lr') == 'captionleft') { ?>
									<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } elseif( get_field('halfb_image_caption_pos') == 'default' && get_field('halfb_image_caption_lr') == 'captionright') { ?>
									<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('halfb_image_caption'); ?></figcaption>
								<?php } ?>
							</figure>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>