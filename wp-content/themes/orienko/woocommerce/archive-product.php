<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>
<?php
global $orienko_opt, $orienko_shopclass, $wp_query, $woocommerce_loop, $orienko_viewmode;

$shoplayout = 'sidebar';
if(isset($orienko_opt['shop_layout']) && $orienko_opt['shop_layout']!=''){
	$shoplayout = $orienko_opt['shop_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$shoplayout = $_GET['layout'];
}
$shopsidebar = 'left';
if(isset($orienko_opt['sidebarshop_pos']) && $orienko_opt['sidebarshop_pos']!=''){
	$shopsidebar = $orienko_opt['sidebarshop_pos'];
}
if(isset($_GET['side']) && $_GET['side']!=''){
	$shopsidebar = $_GET['side'];
}
switch($shoplayout) {
	case 'fullwidth':
		$orienko_shopclass = 'shop-fullwidth';
		$shopcolclass = 12;
		$shopsidebar = 'none';
		$productcols = 4;
		break;
	default:
		$orienko_shopclass = 'shop-sidebar';
		$shopcolclass = 9;
		$productcols = 3;
}

$orienko_viewmode = 'grid-view';
if(isset($orienko_opt['default_view'])) {
	if($orienko_opt['default_view']=='list-view'){
		$orienko_viewmode = 'list-view';
	}
}
if(isset($_GET['view']) && $_GET['view']=='list-view'){
	$orienko_viewmode = $_GET['view'];
}

$shop_view = get_option('woocommerce_shop_page_display');
$cat_view = get_option('woocommerce_category_archive_display');
$detect_pro_view = true;
if (is_product_category()) {
	$detect_pro_view = ($cat_view != 'subcategories');
	$cate = get_queried_object();
	$cateID = $cate->term_id;
	$display_type = get_term_meta($cateID, 'display_type'); 
	if(!empty($display_type[0]) && ($display_type[0] == 'products' || $display_type[0] == 'both')) $detect_pro_view = true;
	if(!empty($display_type[0]) && $display_type[0] == 'subcategories') $detect_pro_view = false;
}
if(is_shop() && $shop_view == 'subcategories'){
	$detect_pro_view = false;
}
if(is_search() || count(WC_Query::get_layered_nav_chosen_attributes()) > 0) $detect_pro_view = true;
?>
<div class="main-container">
	<div class="page-content">
		<div class="container">
			<?php
				/**
				 * woocommerce_before_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action( 'woocommerce_before_main_content' );
			?>
		</div>
		<div class="shop_content">
				
				<div class="row">
					<?php if( $shopsidebar == 'left' ) :?>
						<?php get_sidebar('shop'); ?>
					<?php endif; ?>
					<div id="archive-product" class="col-xs-12 <?php echo 'col-md-'.$shopcolclass; ?>">
						<div class="category-desc <?php echo esc_attr($shoplayout);?>">
							<?php do_action( 'woocommerce_archive_description' ); ?>
						</div>
						<div class="archive-border">
							<?php if ( have_posts() ) : ?>
								
								<?php
									/**
									* remove message from 'woocommerce_before_shop_loop' and show here
									*/
									do_action( 'woocommerce_show_message' );
								?>
								<div class="shop-categories categories row">
									<?php woocommerce_product_subcategories();
									//reset loop
									$woocommerce_loop['loop'] = 0; ?>
								</div>
								<?php if($detect_pro_view){ ?>
								<div class="toolbar">
									<div class="view-mode">
										<label><?php esc_html_e('View on', 'orienko');?></label>
										<a href="javascript:void(0)" class="grid <?php if($orienko_viewmode=='grid-view'){ echo ' active';} ?>" title="<?php echo esc_attr__( 'Grid', 'orienko' ); ?>"><i class="fa fa-th-large"></i><?php esc_html_e('Grid', 'orienko');?></a>
										<a href="javascript:void(0)" class="list <?php if($orienko_viewmode=='list-view'){ echo ' active';} ?>" title="<?php echo esc_attr__( 'List', 'orienko' ); ?>"><i class="fa fa-list"></i><?php esc_html_e('List', 'orienko');?></a>
									</div>
									<?php
										/**
										 * woocommerce_before_shop_loop hook
										 *
										 * @hooked woocommerce_result_count - 20
										 * @hooked woocommerce_catalog_ordering - 30
										 */
										do_action( 'woocommerce_before_shop_loop' );
									?>
									<div class="clearfix"></div>
								</div>
							
							
								<?php //woocommerce_product_loop_start(); ?>
								<div class="shop-products products row <?php echo esc_attr($orienko_viewmode);?> <?php echo esc_attr($shoplayout);?>">
									
									<?php $woocommerce_loop['columns'] = $productcols; ?>
									
									<?php while ( have_posts() ) : the_post(); ?>

										<?php wc_get_template_part( 'content', 'product-archive' ); ?>

									<?php endwhile; // end of the loop. ?>
								</div>
								<?php //woocommerce_product_loop_end(); ?>
								
								<div class="toolbar tb-bottom<?php echo (!empty($orienko_opt['enable_loadmore'])) ? ' hide':''; ?>">
									<?php
										/**
										 * woocommerce_before_shop_loop hook
										 *
										 * @hooked woocommerce_result_count - 20
										 * @hooked woocommerce_catalog_ordering - 30
										 */
										do_action( 'woocommerce_after_shop_loop' );
										//do_action( 'woocommerce_before_shop_loop' );
									?>
									<div class="clearfix"></div>
								</div>
									<?php if(!empty($orienko_opt['enable_loadmore'])){ ?>
										<div class="load-more-product text-center <?php echo $orienko_opt['enable_loadmore']; ?>">
											<?php if($orienko_opt['enable_loadmore'] == 'button-more'){ ?>
												<img class="hide" src="<?php echo get_template_directory_uri() ?>/images/small-loading.gif" alt="" />
												<a class="button" href="javascript:loadmoreProducts()"><?php echo esc_html__('Load more', 'orienko'); ?></a>
											<?php }else{ ?>
												<img width="100" class="hide" src="<?php echo get_template_directory_uri() ?>/images/big-loading.gif" alt="" />
											<?php } ?>
										</div>
									<?php } ?>
								<?php } ?>
							<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

								<?php wc_get_template( 'loop/no-products-found.php' ); ?>

							<?php endif; ?>
						</div>
					</div>
					<?php if($shopsidebar == 'right') :?>
						<?php get_sidebar('shop'); ?>
					<?php endif; ?>
				</div>
				
				<?php do_action( 'woocommerce_after_shop' ); ?>

		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>