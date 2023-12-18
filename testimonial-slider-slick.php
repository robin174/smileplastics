<section class="org--slider-testimonials">
	<div class="mol--slider-testimonials" style="margin-bottom:40px;padding-bottom:20px;border-bottom: 10px solid red;">

		<h1>Testimonial slider - Development (Slick)</h1>
		<p>Over 4 years old</p>

		<section class="org--blockquote-brand slider-quote slider">
			<div class="org--blockquote-brand-inner" style="background-color:#f8eee4;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-9 col-lg-6">
							<div class="text-center" style="margin-bottom:30px;">
								<figure>
									<img class="logo-brand" style="height:48px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-monc-dk.svg" alt="Logo - Smile Plastics">
								</figure>
							</div>
							<h3 class="text-center">Collaboration for a brighter future 1</h3>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-md-9 col-lg-8">
							<!-- convert into template part... and add an if statement to the template... if x, else y -->
							<div class="text-center">
								<blockquote>&ldquo;Smile Plastics’ values very much mirror our own, and its materials – made of would-be waste – contribute to our zero-waste mission, while also being incredibly beautiful.&rdquo;<cite>&mdash;&nbsp;designer, Nina Woodcroft, MONC Eyewear</cite></blockquote>
								<div class="atm--button-cta">
									<a class="button button-cta" href="#">See our latest projects<i class="far fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="org--blockquote-brand-inner" style="background-color:#eef8e4;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-9 col-lg-6">
							<div class="text-center" style="margin-bottom:30px;">
								<figure>
									<img class="logo-brand" style="height:48px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-monc-dk.svg" alt="Logo - Smile Plastics">
								</figure>
							</div>
							<h3 class="text-center">Collaboration for a brighter future 2</h3>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-md-9 col-lg-8">
							<!-- convert into template part... and add an if statement to the template... if x, else y -->
							<div class="text-center">
								<blockquote>&ldquo;Smile Plastics’ values very much mirror our own, and its materials – made of would-be waste – contribute to our zero-waste mission, while also being incredibly beautiful.&rdquo;<cite>&mdash;&nbsp;designer, Nina Woodcroft, MONC Eyewear</cite></blockquote>
								<div class="atm--button-cta">
									<a class="button button-cta" href="#">See our latest projects<i class="far fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>

		<!-- Format of one slide -->
		<!-- where is it served from? -->

		<!-- Slider: https://www.advancedcustomfields.com/blog/building-a-custom-slider-block-in-30-minutes-with-acf/ -->
		<!-- https://en-gb.wordpress.org/plugins/wp-slick-slider-and-image-carousel/ -->

		<!-- Temp: Slick (JS)
 		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script><!-- seemingly jquery v3 breaks this. When was the lat time updated? -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.js" type="text/javascript"/></script>

		<script type="text/javascript">
    		$(document).on('ready', function() {
		    	$('.slider-quote').slick({
		        	dots: true,
					infinite: true,
			    });
			});
		</script>

	</div>
</section>