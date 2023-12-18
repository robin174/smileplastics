<div>
	<div class="atm--material-display">
		<figure>
			<img class="mw-100" src="<?php the_field('mat_img_flat'); ?>">
		</figure>
	</div>
	<?php /*  To do this: Have one as a background image (styled inline) and image set to opacity 0, and then hover (no transition) on top? 
	<div class="mat"><!-- figure 02 --><figure>
		<a href="" title="<?php the_title(); ?>"><img class="mw-100" src="<?php the_field('mat_img_flat'); ?>"></a>
	</figure></div> 
	*/ ?>
	<div class="d-flex flex-column justify-content-between mol--material-card">
		<h3><?php the_title(); ?></h3>
		<h4 style="position:relative"><?php echo strip_tags(get_the_term_list( $post->ID, 'collection', ' ',', ')); ?></h4>
		<div class="d-flex flex-column text-center">
			<h5>Thickness</h5>
			<ul>
				<?php /* <li><?php echo strip_tags(get_the_term_list( $post->ID, 'thickness', ' ','&nbsp;&nbsp;•&nbsp;&nbsp;')); ?></li> */ ?>
				<li>
				<?php $material_thicknesses = get_the_terms( get_the_ID(), 'thickness' );
					// Make sure we have terms and also check for WP_Error object
					if ( $material_thicknesses
					     && !is_wp_error( $material_thicknesses )
					) {
					    @usort( $material_thicknesses, function ( $a, $b )
					    {
					        return strcasecmp( 
					            $a->slug,
					            $b->slug
					        );
					    });

					    // Display your terms as normal
					    $term_list = [];
					    foreach ( $material_thicknesses as $term ) 
					        $term_list[] = esc_html( $term->name );

					    echo implode( '&nbsp;&nbsp;•&nbsp;&nbsp;', $term_list );
					} 
				?>
				</li>
			</ul>
			
		</div>
	</div>
</div>