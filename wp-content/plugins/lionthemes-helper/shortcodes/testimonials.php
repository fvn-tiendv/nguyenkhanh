<?php
function orienko_testimonials_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'title'=>'',
		'show_icon'=>'',
		'icon'=>'',
		'el_class' => '',
		'number' => 10,
		'order' => '',
		'style'=>'carousel',
		'columns' => 1,
		'showon_effect' => '',
		'item_style' => '',
		'desksmall' => '1',
		'tablet_count' => '1',
		'tabletsmall' => '1',
		'mobile_count' => '1',
		'margin' => '0'
	), $atts, 'testimonials' ) );

	$_id = orienko_make_id();
	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => $number,
		'post_status' => 'publish'
	);
	if($order){
		$args['orderby'] = $order;
	}
$query = new WP_Query($args);
$showon_effect = ($showon_effect) ? ' wow ' . $showon_effect : '';
$item_style .= $showon_effect;
?>
<?php if($query->have_posts()){ ob_start(); ?>
	<div class="testimonials <?php echo esc_attr($el_class); ?>">
		<?php if($title){ ?>
			<h3 class="vc_widget_title vc_testimonial_title">
				<?php if($show_icon && $icon){ ?><i class="<?php echo esc_attr($icon); ?>"></i><?php } ?>
				<span><?php echo esc_html($title); ?></span>
			</h3>
		<?php } ?>
		<div <?php echo ($style == 'carousel') ? 'data-dots="true" data-desksmall="'. $desksmall .'" data-tabletsmall="'. $tabletsmall .'" data-mobile="'. $mobile_count .'" data-tablet="'. $tablet_count .'" data-margin="'. $margin .'" data-nav="true" data-owl="slide" data-item-slide="'. $columns .'" data-ow-rtl="false"':'' ?> id="testimonial-<?php echo esc_attr($_id); ?>" class="testimonials-list<?php echo ($style == 'carousel') ? ' owl-carousel owl-theme':'' ?>">
			<?php $i=0; while($query->have_posts()): $query->the_post(); $i++; ?>
				<!-- Wrapper for slides -->
				<div class="quote <?php echo ($item_style) ? $item_style : ''; ?>" data-wow-delay="100ms" data-wow-duration="0.5s">
					
					<div class="testitop">
						<div class="image pull-left">
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						</div>
						<cite class="author media-body">
							<span class="author-name"><?php the_title(); ?></span>
							<?php if(get_post_meta(get_the_ID(), '_byline', true)){ ?>
							<br/>
							<span class="author-byline"><?php echo get_post_meta(get_the_ID(), '_byline', true); ?></span>
							<?php } ?>
						</cite>
						<div class="testidate orienko-widget-date">
							<span class="day"><?php echo get_the_date('d', get_the_ID()); ?></span>
							<span class="month"><?php echo get_the_date('M', get_the_ID()); ?></span>
						</div>
					</div>
					<blockquote class="testimonials-text">
						<?php the_content(); ?>
					</blockquote>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php 
	$content = ob_get_contents();
	ob_end_clean();
	wp_reset_postdata();
	return $content;
	}
}
add_shortcode( 'testimonials', 'orienko_testimonials_shortcode' );
?>