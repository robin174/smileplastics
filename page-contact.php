<?php
/**
* Template Name: Page - Contact
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">
	<?php get_template_part('template-parts/header-hero'); ?>
		
	<?php get_template_part('template-parts/page-introduction'); ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-6">
				<figure>
					<img class="mw-100" src="<?php the_field('contact_map', 'option'); ?>">
				</figure>
			</div>
			<div class="col-11 col-md-6">
				<section class="atm--contact">
					<?php if(get_field('email_press')): ?>
						<div>
							<h4>General</h4>
							<p><a href="mailto:<?php the_field('email_general'); ?>?subject=Website enquiry"><?php the_field('email_general'); ?></a>
							</p>
						</div>
					<?php endif; ?>
					<?php if(get_field('email_press')): ?>
						<div>
							<h4>Press</h4>
							<p><a href="mailto:<?php the_field('email_press'); ?>"><?php the_field('email_press'); ?></a>
							</p>
						</div>
					<?php endif; ?>
					<?php if(get_field('phone_office')): ?>
						<div>
							<h4>Phone</h4>
							<p><?php the_field('phone_office'); ?></p>
						</div>
					<?php endif; ?>
					<?php if(get_field('address_factory')): ?>
						<div>
							<h4>Address</h4>
							<p><?php the_field('address_factory'); ?></p>
						</div>
					<?php endif; ?>
					<?php if(get_field('opening_hours')): ?>
						<div>
							<h4>Opening Hours</h4>
							<p><?php the_field('opening_hours'); ?></p>
						</div>
					<?php endif; ?>

					<div class="atm--form">
						<?php echo do_shortcode('[contact-form-7 html_class="form-custome" id="443" title="Contact us"]'); ?>
						<script>
							let contOpt = document.createElement("option");
							contOpt.selected = true;
							document.querySelector('.contact__form .countries').prepend(contOpt);
							document.querySelector('.contact__form .countries').setAttribute('data-tags', "true");
							document.querySelector('.contact__form .countries').setAttribute('data-placeholder', "Country");
						</script>
					</div>

					<div class="atm--disclaimer">
						<p><?php the_field('disclaimer'); ?></p>
					</div>
				</section>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); // to counter php close tag issue