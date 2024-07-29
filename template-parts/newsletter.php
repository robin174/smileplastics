<section class="org--newsletter">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<div class="mol--newsletter-intro text-center">
					<h2><?php the_field('title_newsletter', 'option'); ?></h2>
					<p><?php the_field('intro_newsletter', 'option'); ?></p>
				</div>
				<div class="mol--newsletter-form">

					<form action="https://smile-plastics.us10.list-manage.com/subscribe/post?u=51e5ca83f5b6f2464e256e251&amp;id=16abbc1b0f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div class="d-flex" id="mc_embed_signup_scroll">
							<input class="flex-grow-1 email" placeholder="<?php the_field('placeholder_newsletter', 'option'); ?>" name="EMAIL" id="mce-EMAIL required">
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_51e5ca83f5b6f2464e256e251_16abbc1b0f" tabindex="-1" value="">
							</div>
							<div class="newsletter--signup">
								<input type="submit" value="<?php the_field('button_newsletter', 'option'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
								<?php /*
								<button class="newsletter--signup"><?php the_field('button_newsletter', 'option'); ?></button>
								*/?>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>