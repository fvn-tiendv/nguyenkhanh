<?php
function orienko_products_shortcode( $atts ) {
	global $orienko_opt;
	$atts = shortcode_atts( array(
							'title'=>'',
							'show_icon'=>'',
							'icon'=>'',
							'type'=>'best_selling',
							'in_category'=>'',
							'number'=> 10,
							'style'=>'grid',
							'item_layout'=>'box',
							'rows'=>'1',
							'columns'=>'4',
							'showon_effect' => '',
							'desksmall' => '4',
							'tablet_count' => '3',
							'tabletsmall' => '2',
							'mobile_count' => '1',
							'margin' => '0',
							'el_class' => ''
							), $atts, 'specifyproducts' );
	extract($atts);
	switch ($columns) {
		case '5':
			$class_column='col-sm-20 col-xs-6';
			break;
		case '4':
			$class_column='col-sm-3 col-xs-6';
			break;
		case '3':
			$class_column='col-lg-4 col-md-4 col-sm-4 col-xs-6';
			break;
		case '2':
			$class_column='col-lg-6 col-md-6 col-sm-6 col-xs-6';
			break;
		default:
			$class_column='col-lg-12 col-md-12 col-sm-12 col-xs-6';
			break;
	}
	if($type=='') return;

	global $woocommerce;

	$_id = orienko_make_id();
	$_count = 1;
	$show_rating = $is_deals = false;
	if($type=='top_rate') $show_rating=true;
	if($type=='deals') $is_deals=true;
	
	$loop = orienko_woocommerce_query($type, $number, $in_category);
	
	if ( $loop->have_posts() ) : 
		ob_start();
	?>
		<?php $_total = $loop->found_posts; ?>
		<div class="woocommerce<?php echo (($el_class!='')?' '.$el_class:''); ?>">
			<?php if($title){ ?>
				<h3 class="vc_widget_title vc_products_title">
					<?php if($show_icon && $icon){ ?><i class="<?php echo esc_attr($icon); ?>"></i><?php } ?>
					<span><?php echo esc_html($title); ?></span>
				</h3>
			<?php } ?>
			<div class="inner-content">
				
				<?php wc_get_template( 'product-layout/'.$style.'.php', array( 
							'show_rating' => $show_rating,
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
							'is_deals' => $is_deals,
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
	endif; 
}
add_shortcode( 'specifyproducts', 'orienko_products_shortcode' );
?>