<?php
function orienko_menu_location( $atts ) {
	global $orienko_opt;
	$atts = shortcode_atts( array(
							'title'=>'',
							'show_icon'=>'',
							'icon'=>'',
							'title_bg'=>'',
							'title_color'=>'',
							'location'=>'',
							'limit_items'=>'0',
							'showmore_text'=>'More items',
							'el_class' => ''
							), $atts, 'menu_location' );
	extract($atts);
	
	if($location=='') return;

	
	ob_start();
	wp_nav_menu( array( 'theme_location' => $location, 'container_class' => 'widget-menu-container', 'menu_class' => 'nav-menu' ) );
	$content = ob_get_contents();
	ob_end_clean();
	if(function_exists('orienko_make_id')){
		$get_id = orienko_make_id();
	}else{
		$get_id = substr(str_shuffle(md5(time())),0, 6);
	}
	
	$new_menu_id = 'id="mega_menu_widget_'. $get_id .'"';
	$new_menu_ul_id = 'id="mega_menu_ul_widget_'. $get_id .'"';
	$content = preg_replace('/id="mega_main_menu"/', $new_menu_id, $content, 1);
	$content = preg_replace('/id="mega_main_menu_ul"/', $new_menu_ul_id, $content, 1);
	
	$before_title = $after_title = '';
	if($show_icon && $icon){
		$before_title = '<i class="before ' . esc_attr($icon) . '"></i>';
	}
	$html = '<div id="vc-menu-'.$get_id.'" class="menu-widget-container vc-menu-widget ' . (($limit_items != '0') ? 'showmore-menu ':'') . esc_attr($el_class) .'">';
	$html .= ($title) ? '<h3 class="vc_widget_title vc_menu_title">'. $before_title .'<span>'. esc_html($title) .'</span></h3>' : '';
	$html .= $content;
	if($limit_items != '0'){
		$html .= '<div data-items="'. intval($limit_items) .'" class="showmore-items"><i class="fa fa-plus-square-o"></i><span>'. esc_html($showmore_text) .'</span></div>';
	}
	$html .= '</div>';
	
	return $html;
}
add_shortcode( 'menu_location', 'orienko_menu_location' );
?>