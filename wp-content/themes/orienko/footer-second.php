<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package LionThemes
 * @subpackage Orienko_Themes
 * @since Orienko Themes 1.3.7
 */
?>
<?php 
$orienko_opt = get_option( 'orienko_opt' );
$ft_col_class = '';
?>
	<div class="footer layout2">
	
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<?php if(!empty($orienko_opt['newsletter_form'])){ ?>
					<div class="col-md-6">
							<?php if(isset($orienko_opt['newsletter_title']) && $orienko_opt['newsletter_title']!=''){ ?>
								<h3 class="widget-title newsletter-title">
									<?php echo wp_kses($orienko_opt['newsletter_title'], array(
									  'strong' => array(),
									 )); ?>
							
								</h3>
							<?php } ?>
	
							<?php 
								$short_code = (!empty($orienko_opt['use_mailchimp_form'])) ? 'mc4wp_form' : 'wysija_form';
								echo do_shortcode( '['. $short_code .' id="'. $orienko_opt['newsletter_form'] .'"]' ); 
							?>
					</div>
					<?php } ?>
					<div class="col-md-6">
						<?php if(isset($orienko_opt['social_icons']) && $orienko_opt['social_icons']!=''){ ?>
							<div class="widget widget-social">
								<h3 class="widget-title"><?php echo esc_html($orienko_opt['follow_title']);?></h3>
								<?php
								if(isset($orienko_opt['social_icons'])) {
									echo '<ul class="social-icons">';
									foreach($orienko_opt['social_icons'] as $key=>$value ) {
										if($value!=''){
											if($key=='vimeo'){
												echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
											} else {
												echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									}
									echo '</ul>';
								}
								?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	
		<?php if(isset($orienko_opt)) { ?>
		<div class="footer-menu">
			<div class="container">
				<div class="row">
					<?php
					if( isset($orienko_opt['footer_menu1']) && $orienko_opt['footer_menu1']!='' ) {
						$menu1_object = wp_get_nav_menu_object( $orienko_opt['footer_menu1'] );
						$menu1_args = array(
							'menu_class'      => 'nav_menu',
							'menu'         => $orienko_opt['footer_menu1'],
						);
						if (is_object($menu1_object)) {
						?>
						<div class="col-sm-6  col-md-3">
							<div class="widget widget_menu">
								<h3 class="widget-title"><span><?php echo esc_html($menu1_object->name); ?></span></h3>
								<?php wp_nav_menu( $menu1_args ); ?>
							</div>
						</div>
					<?php }
					}
					if( isset($orienko_opt['footer_menu2']) && $orienko_opt['footer_menu2']!='' ) {
						$menu2_object = wp_get_nav_menu_object( $orienko_opt['footer_menu2'] );
						$menu2_args = array(
							'menu_class'      => 'nav_menu',
							'menu'         => $orienko_opt['footer_menu2'],
						);
						if (is_object($menu2_object)) {
						?>
						<div class="col-sm-6  col-md-3">
							<div class="widget widget_menu">
								<h3 class="widget-title"><span><?php echo esc_html($menu2_object->name); ?></span></h3>
								<?php wp_nav_menu( $menu2_args ); ?>
							</div>
						</div>
					<?php }
					}
					if( isset($orienko_opt['footer_menu3']) && $orienko_opt['footer_menu3']!='' ) {
						$menu3_object = wp_get_nav_menu_object( $orienko_opt['footer_menu3'] );
						$menu3_args = array(
							'menu_class'      => 'nav_menu',
							'menu'         => $orienko_opt['footer_menu3'],
						);
						if (is_object($menu3_object)) {
						?>
						<div class="col-sm-6  col-md-3">
							<div class="widget widget_menu">
								<h3 class="widget-title"><span><?php echo esc_html($menu3_object->name); ?></span></h3>
								<?php wp_nav_menu( $menu3_args ); ?>
							</div>
						</div>
					<?php }
					}
					?>
					
					<?php if(isset($orienko_opt['about_us']) && $orienko_opt['about_us']!=''){ ?>
						<div class="col-sm-6  col-md-3">
							<div class="widget widget_about">
								<h3 class="widget-title"><span><?php echo esc_html($orienko_opt['about_us_title']);?></span></h3>
								<?php echo wp_kses($orienko_opt['about_us'], array(
									'a' => array(
										'href' => array(),
										'title' => array()
									),
									'img' => array(
										'src' => array(),
										'alt' => array()
									),
									'ul' => array(),
									'li' => array(),
									'i' => array(
										'class' => array()
									),
									'br' => array(),
									'em' => array(),
									'strong' => array(),
									'p' => array(),
								)); ?>
							</div>

						</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
		<?php } ?>
		
		<?php if(isset($orienko_opt['payment_icons']) && $orienko_opt['payment_icons']!=''){ ?>
			<div class="footer-top">
				<div class="container">
					<div class="footer-top-inner text-center">
						<div class="widget-payment">
							<?php if(isset($orienko_opt['payment_icons']) && $orienko_opt['payment_icons']!='' ) {
								echo wp_kses($orienko_opt['payment_icons'], array(
									'a' => array(
										'href' => array(),
										'title' => array()
									),
									'img' => array(
										'src' => array(),
										'alt' => array()
									),
								)); 
							} ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
		<?php if(isset($orienko_opt)) { ?>
		<div class="footer-bottom">
			<div class="container">

				<div class="widget-copyright text-center">
					<?php 
					if( isset($orienko_opt['copyright']) && $orienko_opt['copyright']!='' ) {
						echo wp_kses($orienko_opt['copyright'], array(
							'a' => array(
								'href' => array(),
								'title' => array()
							),
							'br' => array(),
							'em' => array(),
							'strong' => array(),
						));
					} else {
						echo 'Copyright <a href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo('name').'</a> '.date('Y').'. All Rights Reserved';
					}
					?>
				</div>
			</div>
		</div>
		<?php } ?>
		
	</div>