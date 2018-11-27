<?php
function orienko_brands_shortcode( $atts ) {
	global $orienko_opt;
	$brand_index = 0;
	if(!isset($orienko_opt['brand_logos'])) return;
	$brandfound = count($orienko_opt['brand_logos']);
	
	$atts = shortcode_atts( array(
							'title' => '',
							'show_icon'=>'',
							'icon'=>'',
							'rows' => '1',
							'colsnumber' => '6',
							'showon_effect' => '',
							'el_class' => '',
							'style'=>'grid',
							'desksmall' => '4',
							'tablet_count' => '3',
							'tabletsmall' => '3',
							'mobile_count' => '2',
							'margin' => '30'
							), $atts, 'ourbrands' );
	extract($atts);
	switch ($colsnumber) {
		case '6':
			$class_column='col-sm-2 col-xs-6';
			break;
		case '5':
			$class_column='col-md-20 col-sm-4 col-xs-6';
			break;
		case '4':
			$class_column='col-sm-3 col-xs-6';
			break;
		case '3':
			$class_column='col-sm-4 col-xs-6';
			break;
		case '2':
			$class_column='col-sm-6 col-xs-6';
			break;
		default:
			$class_column='col-sm-12 col-xs-6';
			break;
	}
	if($brandfound <= 0) return;
	
	$before_title = $after_title = '';
	if($show_icon && $icon){
		$before_title = '<i class="' . esc_attr($icon) . '"></i>';
	}
	$showon_effect = ($showon_effect) ? ' wow ' . $showon_effect : '';
	ob_start();
	echo '<div class="brand_widget '. esc_attr($el_class) .'">';
	echo ($title) ? '<h3 class="vc_widget_title vc_brands_title">'. $before_title .'<span>'. esc_html($title) .'</span></h3>' : '';
	if($style == 'grid'){
		$wrapdiv = '';
	}else{
		$class_column = '';
		$wrapdiv = '<div data-owl="slide" data-desksmall="'. esc_attr($desksmall) .'" data-tabletsmall="'. esc_attr($tabletsmall) .'" data-mobile="'. esc_attr($mobile_count) .'" data-tablet="'. esc_attr($tablet_count) .'" data-margin="'. intval($margin) .'" data-item-slide="'. esc_attr($colsnumber) .'" data-ow-rtl="false" class="owl-carousel owl-theme brands-slide ' . esc_attr($el_class) . '">';
	}
	if($orienko_opt['brand_logos']) { ?>
			<?php 
				echo $wrapdiv; 
				$duration = 0;
			?>
			<?php foreach($orienko_opt['brand_logos'] as $brand) {
				$duration = $duration + 100;
				if(is_ssl()){
					$brand['image'] = str_replace('http:', 'https:', $brand['image']);
				}
				$brand_index ++;
				?>
				<?php if($style == 'carousel' && $rows > 1){ ?>
					<?php if ( (0 == ( $brand_index - 1 ) % $rows ) || $brand_index == 1) { ?>
						<div class="group">
					<?php } ?>
				<?php } ?>
				<div class="brand_item<?php echo $showon_effect; ?> <?php echo $class_column; ?>" data-wow-delay="<?php echo $duration ?>ms" data-wow-duration="0.5s">
					<a href="<?php echo $brand['url']; ?>" title="<?php echo $brand['title']; ?>">
						<img src="<?php echo $brand['image'] ?>" alt="<?php echo $brand['title']; ?>" />
					</a>
				</div>
				<?php if($style == 'carousel' && $rows > 1){ ?>
					<?php if ( ( ( 0 == $brand_index % $rows || $brandfound == $brand_index ))  ) { ?>
						</div>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</div>
	<?php }
	echo '</div>';
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
add_shortcode( 'ourbrands', 'orienko_brands_shortcode' );
?>