<?php
function orienko_productscategory_shortcode( $atts ) {
	global $orienko_opt;
	
	$atts = shortcode_atts( array(
							'title' => '',
							'show_icon'=>'',
							'icon'=>'',
							'category' => '',
							'item_layout'=>'box',
							'number' => 10,
							'columns'=> '4',
							'showon_effect' => '',
							'rows'=> '1',
							'el_class' => '',
							'style'=>'grid',
							'desksmall' => '4',
							'tablet_count' => '3',
							'tabletsmall' => '2',
							'mobile_count' => '1',
							'margin' => '0'
							), $atts, 'productscategory' ); 
	extract($atts);
	switch ($columns) {
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
	
	if($category=='') return;
	$_id = orienko_make_id();
	$loop = orienko_woocommerce_query('',$number, $category);
	if ( $loop->have_posts() ){ 

		ob_start();
	?>
		<?php $_total = $loop->found_posts; ?>
		<div class="woocommerce<?php echo esc_attr($el_class); ?>">
			<?php if($title){ ?>
				<h3 class="vc_widget_title vc_products_title">
					<?php if($show_icon && $icon){ ?><i class="<?php echo esc_attr($icon); ?>"></i><?php } ?>
					<span><?php echo esc_html($title); ?></span>
				</h3>
			<?php } ?>
			<div class="inner-content">
				
				<?php wc_get_template( 'product-layout/'.$style.'.php', array( 
							'show_rating' => true,
							'_id'=>$_id,
							'loop'=>$loop,
							'columns_count'=>$columns,
							'class_column' => $class_column,
							'_total'=>$_total,
							'number'=>$number,
							'rows'=>$rows,
							'margin'=>$margin,
							'desksmall'=>$desksmall,
							'tabletsmall'=>$tabletsmall,
							'tablet_count'=>$tablet_count,
							'mobile_count'=>$mobile_count,
							'itemlayout'=> $item_layout,
							'showon_effect'=> $showon_effect,
							 ) ); ?>
				
			</div>
		</div>
	<?php 
		$content = ob_get_contents();
		ob_end_clean();
		wp_reset_postdata();
		return $content;
	} 
} 
add_shortcode( 'productscategory', 'orienko_productscategory_shortcode' );
?>