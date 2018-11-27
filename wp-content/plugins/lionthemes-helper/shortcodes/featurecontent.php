<?php
function orienko_feature_content_shortcode( $atts ) {
	
	$atts = shortcode_atts( array(
							'icon'=>'',
							'feature_text'=>'',
							'short_desc'=>'',
							'showon_effect' => '',
							'style'=>'',
							'el_class' => '',
							), $atts, 'featuredcontent' );
	extract($atts);
	
	if(!$feature_text) return;
	$showon_effect = ($showon_effect) ? ' wow ' . $showon_effect : '';
	$style .= $showon_effect;
	ob_start();
	echo '<div class="feature_text_widget '. $style . ' ' . esc_attr($el_class) .'" data-wow-delay="100ms" data-wow-duration="0.5s">';
		echo ($icon) ? '<div class="feature_icon"><span class="'. esc_attr($icon) .'"></span></div>':'';
		echo '<div class="feature_content">';
			echo '<div class="feature_text">' . urldecode(base64_decode($feature_text)) . '</div>';
			echo ($short_desc) ? '<div class="short_desc">' . urldecode(base64_decode($short_desc)) . '</div>':'';
		echo '</div>';
	echo '</div>';
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
add_shortcode( 'featuredcontent', 'orienko_feature_content_shortcode' );
?>