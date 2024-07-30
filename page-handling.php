<?php
/**
* Template Name: Page - Handling Guidelines
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">

	<!-- Homepage Hero -->
	<?php get_template_part('template-parts/header-hero'); ?>

	<!-- Page Introduction -->
	<?php get_template_part('template-parts/page-introduction'); ?>

	<!-- Handling Guidelines Builder -->
	<?php while(has_sub_field('hnd_handling_builder')): ?>
		<section class="org--page-builder ut--block-margin">

			<?php if(get_row_layout() == 'hnd_intro-row'): ?>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10 mol--handling-unit text-center">
							<h2><?php the_sub_field('hnd_introduction_title'); ?></h2>
							<p class="atm--hnd-introduction"><?php the_sub_field('hnd_introduction_description'); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if(get_row_layout() == 'hnd_img-row'): ?>
				<?php $total_rows = count(get_sub_field('hnd_repeater_clips')); ?>

				<?php if( have_rows('hnd_repeater_clips') ):
				$i = 1; // Set the increment variable ?>
					<div class="container">
					 	<div class="row justify-content-center">
					    	<?php while ( have_rows('hnd_repeater_clips') ) : the_row();
					    		$modal_id = get_sub_field('hnd_clip_id');
								$modal_title = get_sub_field('hnd_clip_title');
								$modal_body = get_sub_field('hnd_clip_embed'); ?>
								<?php if($total_rows == ('2')){ ?>
									<div class="col-6 mol--handling-unit text-center">
							    		<div class="atm--handling-image">
											<button class="atm--placeholder-button" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $modal_id ?>">
												<img class="atm--placeholder-img mw-100" src="<?php the_sub_field('hnd_clip_image'); ?>">
												<div class="atm--handling-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/use-play-button.png">
												</div>
											</button>
										</div>
										<?php if(get_sub_field('hnd_clip_title')): ?>
											<h3><?php the_sub_field('hnd_clip_title'); ?></h3>
										<?php endif; ?>
										<?php if(get_sub_field('hnd_clip_description')): ?>
											<p><?php the_sub_field('hnd_clip_description'); ?></p>
										<?php endif; ?>
										<div class="atm--button-cta">
											<a class="button button-cta" href="<?php the_sub_field('hnd_clip_pdf'); ?>">Launch PDF<i class="far fa-long-arrow-right"></i></a>
										</div>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal-<?php echo $modal_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg modal-dialog-centered">
												<div class="modal-content">
												    <div class="modal-header">
												    	<?php /* <?php echo $modal_title; ?> */ ?>
												    	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												    </div>
													<div class="modal-body">
														<div class="ratio ratio-16x9">
															<?php echo $modal_body; ?>
														</div>
													</div>

										    	</div>
											</div>
										</div>
									</div>
								<?php } elseif($total_rows == ('3')){ ?>
									<div class="col-4 mol--handling-unit text-center">
							    		<div class="atm--handling-image">
											<button class="atm--placeholder-button" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $modal_id ?>">
												<img class="atm--placeholder-img mw-100" src="<?php the_sub_field('hnd_clip_image'); ?>">
												<div class="atm--handling-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/use-play-button.png">
												</div>
											</button>
										</div>
										<?php if(get_sub_field('hnd_clip_title')): ?>
											<h3><?php the_sub_field('hnd_clip_title'); ?></h3>
										<?php endif; ?>
										<?php if(get_sub_field('hnd_clip_description')): ?>
											<p><?php the_sub_field('hnd_clip_description'); ?></p>
										<?php endif; ?>
										<div class="atm--button-cta">
											<a class="button button-cta" href="<?php the_sub_field('hnd_clip_pdf'); ?>">Launch PDF<i class="far fa-long-arrow-right"></i></a>
										</div>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal-<?php echo $modal_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg modal-dialog-centered">
												<div class="modal-content">
												    <div class="modal-header">
												    	<?php /* <?php echo $modal_title; ?> */ ?>
												    	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												    </div>
													<div class="modal-body">
														<div class="ratio ratio-16x9">
															<?php echo $modal_body; ?>
														</div>
													</div>

										    	</div>
											</div>
										</div>
									</div>
								<?php } ?>
							<?php $i++; endwhile; ?>
						</div>
					</div>
				<?php endif; ?>

			<?php endif; ?>

			<?php // can we loop through the rows like you do on CPTs? and then clear? ?>
			<?php // https://wpbeaches.com/create-an-acf-repeater-loop-of-bootstrap-modals-in-wordpress/ ?>

			<?php // For each ?>
			<?php 
				$rows = get_field('repeater_field_name');
				if( $rows ) {
				    echo '<ul class="slides">';
				    foreach( $rows as $row ) {
				        $image = $row['image'];
				        echo '<li>';
				            echo wp_get_attachment_image( $image, 'full' );
				            echo wp_kses_post( wpautop( $row['caption'] ) );
				        echo '</li>';
				    }
				    echo '</ul>';
				} ?>


			<?php if(get_row_layout() == 'hnd_50-50'): 
				$modal_5050_id = get_sub_field('hnd_5050_clip_id');
				$modal_5050_title = get_sub_field('hnd_5050_clip_title');
				$modal_5050_body = get_sub_field('hnd_5050_clip_embed'); ?>

				<?php if( get_sub_field('hnd_5050_bg_color')) { ?>
					<section style="background-color:<?php the_sub_field('hnd_5050_bg_color_value');?>">
				<?php } else { ?>
					<section>
				<?php } ?>
					<div class="container">
						<?php if( get_sub_field('hnd_5050_image_position') == 'imageleft' ) { ?>
							<div class="row g-0 d-flex">
								<div class="col-12 col-md-6 align-self-center order-2 order-md-1">
									<div class="d-flex justify-content-end mol--handling-unit">
										<div class="atm--handling-image">
											<button class="atm--placeholder-button" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $modal_id ?>">
												<img class="atm--placeholder-img mw-100" src="<?php the_sub_field('hnd_5050_image_file'); ?>">
												<div class="atm--handling-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/use-play-button.png">
												</div>
											</button>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
									<section class="mol--5050-content">
										<section class="mol--repeater-text">
											<?php if(get_sub_field('hnd_5050_clip_title')): ?>
												<h3><?php the_sub_field('hnd_5050_clip_title'); ?></h3>
											<?php endif; ?>
											<?php if(get_sub_field('hnd_5050_clip_description')): ?>
												<p><?php the_sub_field('hnd_5050_clip_description'); ?></p>
											<?php endif; ?>
											<div class="atm--button-cta">
												<a class="button button-cta" href="<?php the_sub_field('hnd_5050_clip_pdf'); ?>">Launch PDF<i class="far fa-long-arrow-right"></i></a>
											</div>
										</section>
										<?php if (get_sub_field('hnd_cta')): ?>
											<div class="atm--button-cta">
												<?php if(get_sub_field('hnd_cta_select') == 'link' ) { ?>
													<a class="button button-cta" href="<?php the_sub_field('hnd_cta_link'); ?>"><?php the_sub_field('hnd_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
												<?php } elseif(get_sub_field('hnd_cta_select') == 'file' ) { ?>
													<a class="button button-cta" target="_blank" href="<?php the_sub_field('hnd_cta_file'); ?>"><?php the_sub_field('hnd_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
												<?php } ?> 
											</div>
										<?php endif; ?>
									</section>
								</div>
							</div>
						<?php } elseif( get_sub_field('hnd_5050_image_position') == 'imageright' ) { ?>
							<div class="row g-0 d-flex">
								<div class="col-12 col-md-6 align-self-center order-1">
									<section class="mol--5050-content">
										<section class="mol--repeater-text">
											<?php if(get_sub_field('hnd_5050_clip_title')): ?>
												<h3><?php the_sub_field('hnd_5050_clip_title'); ?></h3>
											<?php endif; ?>
											<?php if(get_sub_field('hnd_5050_clip_description')): ?>
												<p><?php the_sub_field('hnd_5050_clip_description'); ?></p>
											<?php endif; ?>
											<div class="atm--button-cta">
												<a class="button button-cta" href="<?php the_sub_field('hnd_5050_clip_pdf'); ?>">Launch PDF<i class="far fa-long-arrow-right"></i></a>
											</div>
										</section>
										<?php if (get_sub_field('hnd_cta')): ?>
											<div class="atm--button-cta">
												<?php if(get_sub_field('hnd_cta_select') == 'link' ) { ?>
													<a class="button button-cta" href="<?php the_sub_field('hnd_cta_link'); ?>"><?php the_sub_field('hnd_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
												<?php } elseif(get_sub_field('hnd_cta_select') == 'file' ) { ?>
													<a class="button button-cta" target="_blank" href="<?php the_sub_field('hnd_cta_file'); ?>"><?php the_sub_field('hnd_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
												<?php } ?> 
											</div>
										<?php endif; ?>
									</section>
								</div>
								<div class="col-12 col-md-6 align-self-center order-2">
									<div class="d-flex justify-content-start mol--handling-unit">

										<div class="atm--handling-image">
											<button class="atm--placeholder-button" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $modal_id ?>">
												<img class="atm--placeholder-img mw-100" src="<?php the_sub_field('hnd_5050_image_file'); ?>">
												<div class="atm--handling-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/use-play-button.png">
												</div>
											</button>
										</div>

									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</section>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal-<?php echo $modal_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
						    <div class="modal-header">
						    	<?php /* <?php echo $modal_title; ?> */ ?>
						    	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						    </div>
							<div class="modal-body">
								<div class="ratio ratio-16x9">
									<?php echo $modal_body; ?>
								</div>
							</div>

				    	</div>
					</div>
				</div>

			<?php endif; ?>

		</section>
	<?php endwhile; ?>
</section>

<!-- Need the below to stop the video when modal is closed -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	// Use jQuery to listen for the modal hide event
	$('[id*="exampleModal"]').on('hidden.bs.modal', function () {
		var $iframe = $(this).find('iframe');
		$iframe.attr('src', $iframe.attr('src'));
	});
</script>

<?php get_footer(); // to counter php close tag issue