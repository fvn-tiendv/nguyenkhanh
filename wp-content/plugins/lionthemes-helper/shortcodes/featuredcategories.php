<?php
function orienko_featuredcategories_shortcode( $atts ) {
	global $orienko_opt;
	
	$atts = shortcode_atts( array(
							'title' => '',
							'show_icon'=>'',
							'icon'=>'',
							'number' => 10,
							'columns'=> '5',
							'showon_effect' => '',
							'rows'=> '1',
							'el_class' => '',
							'style'=>'carousel',
							'desksmall' => '4',
							'tablet_count' => '4',
							'tabletsmall' => '3',
							'mobile_count' => '2',
							'margin' => '0',
							'viewmore_txt' => 'View more',
							), $atts, 'featuredcategories' ); 
	extract($atts);

	$terms = get_terms( array(
		'taxonomy' => 'product_cat',
		'hide_empty' => false,
		'meta_query'=> array(
			array(
			 'key' => '_featured',
			 'value' => '1',
			 'compare' => '='
			 )
		)
	) );
	$showon_effect = ($showon_effect) ? ' wow ' . $showon_effect : '';
	$el_class .= $showon_effect;
	$owl_data = 'data-owl="slide" data-desksmall="' . esc_attr($desksmall) . '" data-tabletsmall="'. esc_attr($tabletsmall) .'" data-mobile="'. esc_attr($mobile_count) .'" data-tablet="'. esc_attr($tablet_count) . '" data-margin="'. esc_attr($margin) .'" data-item-slide="'. esc_attr($columns) . '"';
	if ( !empty($terms) ){ 
		$duration = 100;
		ob_start();
	?>
		<div class="vc-categories <?php echo esc_attr($el_class); ?>" data-wow-delay="<?php echo $duration; ?>ms" data-wow-duration="0.5s">
			<?php if($title){ ?>
				<h3 class="vc_widget_title vc_categories_title">
					<?php if($show_icon && $icon){ ?><i class="<?php echo esc_attr($icon); ?>"></i><?php } ?>
					<span><?php echo esc_html($title); ?></span>
				</h3>
			<?php } ?>
			<div class="inner-content">
				<div <?php echo $owl_data; ?> class="owl-carousel owl-theme categories-slide">
				<?php foreach($terms as $cat){
				$image = get_term_meta($cat->term_id, '_square_image');
				
				?>
					<div class="cat-item">
						<?php if ( !empty($image[0]) ) { ?>
						<div class="cat-image"><img src="<?php echo esc_url($image[0]); ?>" alt="" /></div>
						<?php } ?>
						<h3 class="cat-title text-center"><a href="<?php echo get_term_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></h3>
						<a class="btn btn-default btn-viewmore" href="<?php echo get_term_link($cat->term_id); ?>"><?php echo esc_html($viewmore_txt); ?></a>
					</div>
				<?php $duration = $duration + 100; } ?>
				</div>
			</div>
		</div>
	<?php 
		$content = ob_get_contents();
		ob_end_clean();
		wp_reset_postdata();
		return $content;
	} 
} 
add_shortcode( 'featuredcategories', 'orienko_featuredcategories_shortcode' );
?>