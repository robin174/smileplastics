<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package smileplastics
*/ 
?>
        <section>
            <?php if(in_array('banneradvert', get_field('add_section')) == true) { ?>
                <?php get_template_part('template-parts/banner-advert'); ?>
            <?php } ?> 
            <?php if(in_array('newslettersignup', get_field('add_section')) == true) { ?>
                <?php get_template_part('template-parts/newsletter'); ?>
            <?php } ?>
        </section>
		</main><!-- end main -->
		<footer>
			<div class="container">
                <div class="row">
                    <div class="col-12 col-md-2 col-lg-1">
                        <figure>
                        	<img class="logo-s" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-s-white.svg" alt="Logo - Smile Plastics 'S'">
                        </figure>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="block--details">
                        	<!-- <h4>Additional</h4> -->
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-column01' ) ); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="block--details">
                        	<!-- <h4>Who we are</h4> -->
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-column02' ) ); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 offset-lg-3">
                    	<section class="col-big">
	                    	<!-- <h4>Stay in touch</h4> -->
	                    	<a href="" class="icon-social" title=""><i class="fab fa-2x fa-facebook"></i></a>
	                    	<a href="" class="icon-social" title=""><i class="fab fa-2x fa-instagram"></i></a>
	                    	<a href="" class="icon-social" title=""><i class="fab fa-2x fa-pinterest"></i></a>
	                    	<a href="" class="icon-social" title=""><i class="fab fa-2x fa-twitter"></i></a>
                   		</section>
                        <section class="col-big">
                           
                            
                        </section>
                   		<section class="col-big">
                   			<figure>
								<img class="logo-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smileplastics-white.svg" alt="Logo - Smile Plastics">
							</figure>
                   			<p><?php the_field('footer_address', 'options'); ?><br>
							VAT number: <?php the_field('footer_company_number', 'options'); ?><br>
							Company number: <?php the_field('footer_vat_number', 'options'); ?></p>
                            <div style="margin-top: 24px;margin-bottom: 20px;">
                                <figure class="iso-certification">
                                    <img class="logo-iso" src="<?php echo get_template_directory_uri(); ?>/assets/images/UKAS-ISOQAR-Mark-cl-27_Mono-inverse.svg" alt="Logo - Smile Plastics">
                                    <figcaption class="iso-details">
                                        <?php the_field('footer_certificate_number', 'options'); ?><br>
                                         <?php the_field('footer_iso_number', 'options'); ?>
                                    </figcaption>
                                </figure>
                            </div>
							<p class="copyright">&copy;&nbsp;<?php echo date('Y'); ?>.&nbsp;<?php the_field('footer_copyright', 'options'); ?></p>
                   		</section>
                    </div>
                </div>  
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>