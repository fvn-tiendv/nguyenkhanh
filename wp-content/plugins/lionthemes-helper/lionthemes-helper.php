<?php
/**
 * Plugin Name: LionThemes Helper
 * Plugin URI: http://lion-themes.com/
 * Description: The helper plugin for LionThemes themes.
 * Version: 1.0.2
 * Author: LionThemes
 * Author URI: http://lion-themes.com/
 * Text Domain: lionthemes
 * License: GPL/GNU.
 *  Copyright 2016  LionThemes  (email : support@lion-themes.com)
*/

define('IMPORT_LOG_PATH', plugin_dir_path( __FILE__ ) . 'wbc_importer');

// add placeholder for input social icons 
add_action("redux/field/orienko_opt/sortable/fieldset/after/orienko_opt", 'lionthemes_helper_redux_add_placeholder_sortable', 0);
function lionthemes_helper_redux_add_placeholder_sortable($data){
	$fieldset_id = $data['id'] . '-list';
	$base_name = 'orienko_opt['. $data['id'] .']';
	echo "<script type=\"text/javascript\">
			jQuery('#$fieldset_id li input[type=\"text\"]').each(function(){
				var my_name = jQuery(this).attr('name');
				placeholder = my_name.replace('$base_name', '').replace('[','').replace(']','');
				jQuery(this).attr('placeholder', placeholder);
				jQuery(this).next('span').attr('title', placeholder);
			});
		</script>";
}

//Redux wbc importer for import data one click.
function lionthemes_helper_redux_register_extension_loader($ReduxFramework) {
	
	if ( ! class_exists( 'ReduxFramework_extension_wbc_importer' ) ) {
		$class_file = plugin_dir_path( __FILE__ ) . 'wbc_importer/extension_wbc_importer.php';
		$class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/wbc_importer', $class_file );
		if ( $class_file ) {
			require_once( $class_file );
		}
	}
	if ( ! isset( $ReduxFramework->extensions[ 'wbc_importer' ] ) ) {
		$ReduxFramework->extensions[ 'wbc_importer' ] = new ReduxFramework_extension_wbc_importer( $ReduxFramework );
	}
}
add_action("redux/extensions/orienko_opt/before", 'lionthemes_helper_redux_register_extension_loader', 0);

// Import slider, setup menu locations, setup home page
function lionthemes_helper_wbc_extended_example( $demo_active_import , $demo_directory_path ) {

	reset( $demo_active_import );
	$current_key = key( $demo_active_import );

	// Revolution Slider import all
	if ( class_exists( 'RevSlider' ) ) {
		$wbc_sliders_array = array(
			'Orienko' => array('home-slider-shop-1.zip', 'home-slider-shop-2.zip', 'home-slider-shop-3.zip'),
		);

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_sliders_array ) ) {
			$wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];
			foreach($wbc_slider_import as $file_backup){
				if ( file_exists( $demo_directory_path . $file_backup ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $demo_directory_path . $file_backup );
				}
			}
		}
	}
	// menu localtion settings
	$wbc_menu_array = array( 'Orienko' );

	if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {
		$primary_menu = get_term_by( 'name', 'Main menu', 'nav_menu' );
		$cat_menu = get_term_by( 'name', 'Categories', 'nav_menu' );

		if ( isset( $primary_menu->term_id ) && isset( $cat_menu->term_id )) {
			set_theme_mod( 'nav_menu_locations', array(
					'primary' => $primary_menu->term_id,
					'mobilemenu'  => $primary_menu->term_id,
					'categories' => $cat_menu->term_id
				)
			);
		}
		
		// update option top menu & footer menus
		$_menu1 = get_term_by( 'name', 'Information', 'nav_menu' );
		$_menu2 = get_term_by( 'name', 'My Account', 'nav_menu' );
		$_menu3 = get_term_by( 'name', 'Our Services', 'nav_menu' );
		$orienko_opt = get_option( 'orienko_opt' );
		if(!empty( $orienko_opt )){
			if ( !empty( $_menu1->term_id ) ) {
				$orienko_opt['footer_menu1'] = $_menu1->term_id;
			}
			if ( !empty( $_menu2->term_id ) ) {
				$orienko_opt['footer_menu2'] = $_menu2->term_id;
				$orienko_opt['top_menu'] = $_menu2->term_id;
			}
			if ( !empty( $_menu3->term_id ) ) {
				$orienko_opt['footer_menu3'] = $_menu3->term_id;
			}
			update_option( 'orienko_opt', $orienko_opt );
		}
	}
	
	// megamenu options
	global $mega_main_menu;
	
	$exported_file = $demo_directory_path . 'mega-main-menu-settings.json';
	
	if ( file_exists( $exported_file ) ) {
		$backup_file_content = file_get_contents ( $exported_file );
		
		if ( $backup_file_content !== false && ( $options_backup = json_decode( $backup_file_content, true ) ) ) {
			update_option( $mega_main_menu->constant[ 'MM_OPTIONS_NAME' ], $options_backup );
		}
	}

	// Home page setup default
	$wbc_home_pages = array(
		'Orienko' => 'Home Shop 1',
	);
	$wbc_blog_page = array(
		'Orienko' => 'Blog',
	);

	if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
		$page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
		$blogpage = get_page_by_title( $wbc_blog_page[$demo_active_import[$current_key]['directory']] );
		if ( isset( $page->ID ) ) {
			update_option( 'page_on_front', $page->ID );
			update_option( 'show_on_front', 'page' );
			update_option( 'page_for_posts', $blogpage->ID );
		}
	}
	update_option( 'yith_woocompare_compare_button_in_products_list', 'no' );
}
add_action( 'wbc_importer_after_content_import', 'lionthemes_helper_wbc_extended_example', 10, 2 );

//admin datepicker lib
add_action('admin_head', 'lionthemes_helper_datepicker_script');
function lionthemes_helper_datepicker_script(){
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css');
}

add_action("redux/orienko_opt/panel/after", 'lionthemes_helper_redux_after_panel_gender', 0);
function lionthemes_helper_redux_after_panel_gender(){
	echo "<script type=\"text/javascript\">
			jQuery(document).ready(function($){
				$('#new_pro_from').datepicker({
					dateFormat : 'yy-mm-dd'
				});
			});
		</script>";
}

//Less compiler
function compileLess($input, $output, $params){
    // input and output location
	$inputFile = get_template_directory().'/less/'.$input;
	$outputFile = get_template_directory().'/css/'.$output;
	if(!file_exists($inputFile)) return;
	// include Less Lib
	if(file_exists( plugin_dir_path( __FILE__ ) . 'less/lessc.inc.php' )){
		require_once( plugin_dir_path( __FILE__ ) . 'less/lessc.inc.php' );
		try{
			$less = new lessc;
			$less->setVariables($params);
			$less->setFormatter("compressed");
			$cache = $less->cachedCompile($inputFile);
			file_put_contents($outputFile, $cache["compiled"]);
			$last_updated = $cache["updated"];
			$cache = $less->cachedCompile($cache);
			if ($cache["updated"] > $last_updated) {
				file_put_contents($outputFile, $cache["compiled"]);
			}
		}catch(Exception $e){
			$error_message = $e->getMessage();
			echo $error_message;
		}
	}
	return;
}

$shortcodes = array(
	'brands.php',
	'blogposts.php',
	'products.php',
	'productscategory.php',
	'testimonials.php',
	'menus.php',
	'featurecontent.php',
	'featuredcategories.php',
);
//Shortcodes for Visual Composer
foreach($shortcodes as $shortcode){
	if ( file_exists( plugin_dir_path( __FILE__ ). 'shortcodes/' . $shortcode ) ) {
		require_once plugin_dir_path( __FILE__ ) . 'shortcodes/' . $shortcode;
	}
}

// install table when active plugin
register_activation_hook( __FILE__, 'lionthemes_new_like_post_table' );
function lionthemes_new_like_post_table(){
	global $wpdb;
	$table_name = $wpdb->prefix . 'lionthemes_user_like_ip';
	if($wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") != $table_name) {
		 //table not in database. Create new table
		 $charset_collate = $wpdb->get_charset_collate();
		 $sql = "CREATE TABLE `{$table_name}` (
			  `post_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
			  `user_ip` VARCHAR(100) NOT NULL DEFAULT '',
			  PRIMARY KEY (`post_id`,`user_ip`)
		 ) {$charset_collate}";
		 require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		 dbDelta( $sql );
	}
}
// function display number like of posts.
function lionthemes_get_liked($postID){
	global $wpdb;
    $table_name = $wpdb->prefix . 'lionthemes_user_like_ip';
	if($wpdb->get_var($wpdb->prepare("SHOW TABLES LIKE %s", $table_name)) != $table_name) {
		lionthemes_new_like_post_table();
		return 0;
	}else{
		$safe_sql = $wpdb->prepare("SELECT COUNT(*) FROM {$table_name} WHERE post_id = %s", $postID);
		$results = $wpdb->get_var( $safe_sql );
		return $results;
	}
}


//ajax like count
add_action( 'wp_footer', 'lionthemes_add_js_like_post');
function lionthemes_add_js_like_post(){
	?>
    <script type="text/javascript">
    jQuery(document).on('click', 'a.lionthemes_like_post', function(e){
		var like_title;
		if(jQuery(this).hasClass('liked')){
			jQuery(this).removeClass('liked');
			like_title = jQuery(this).data('unliked_title');
		}else{
			jQuery(this).addClass('liked');
			like_title = jQuery(this).data('liked_title');
		}
        var post_id = jQuery(this).data("post_id");
		var me = jQuery(this);
        jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            url: '<?php echo esc_js(admin_url('admin-ajax.php')); ?>',
            data: 'action=lionthemes_update_like&post_id=' + post_id, 
			success: function(data){
				me.children('.number').text(data);
				me.parent('.likes-counter').attr('title', '').attr('data-original-title', like_title);
            }
        });
		e.preventDefault();
        return false;
    });
    </script>
<?php 
} 
add_action( 'wp_ajax_lionthemes_update_like', 'lionthemes_update_like' );
add_action( 'wp_ajax_nopriv_lionthemes_update_like', 'lionthemes_update_like' );
function lionthemes_get_the_user_ip(){
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function lionthemes_check_liked_post($postID){
	global $wpdb;
    $table_name = $wpdb->prefix . 'lionthemes_user_like_ip';
	if($wpdb->get_var($wpdb->prepare("SHOW TABLES LIKE %s", $table_name)) != $table_name) {
		lionthemes_new_like_post_table();
		return 0;
	}else{
		$user_ip = lionthemes_get_the_user_ip();
		$safe_sql = $wpdb->prepare("SELECT COUNT(*) FROM {$table_name} WHERE post_id = %s AND user_ip = %s", $postID, $user_ip);
		$results = $wpdb->get_var( $safe_sql );
		return $results;
	}
}

function lionthemes_update_like(){
	$count_key = 'post_like_count';
	if(empty($_POST['post_id'])){
	   die('0');
	}else{
		global $wpdb;
		$table_name = $wpdb->prefix . 'lionthemes_user_like_ip';
		$postID = intval($_POST['post_id']);
		$check = lionthemes_check_liked_post($postID);
		$ip = lionthemes_get_the_user_ip();
		$data = array('post_id' => $postID, 'user_ip' => $ip);
		if($check){
			//remove like record
			$wpdb->delete( $table_name, $data ); 
		}else{
			//add new like record
			$wpdb->insert( $table_name, $data );
		}
		echo lionthemes_get_liked($postID);
		die();
	}
}
add_action('lionthemes_like_button', 'lionthemes_like_button_html');
function lionthemes_like_button_html($id){
	$liked = lionthemes_check_liked_post($id); ?>
	<div class="likes-counter" title="<?php echo (!$liked) ?  esc_html__('Like this post', 'oneclick') : esc_html__('Unlike this post', 'oneclick'); ?>" data-toggle="tooltip">
		<a class="lionthemes_like_post<?php echo ($liked) ? ' liked':''; ?>" href="javascript:void(0)" data-post_id="<?php echo $id; ?>" data-liked_title="<?php echo esc_html__('Unlike this post', 'oneclick') ?>" data-unliked_title="<?php echo esc_html__('Like this post', 'oneclick') ?>">
			<i class="fa fa-heart"></i><span class="number"><?php echo lionthemes_get_liked($id); ?></span>
		</a>
	</div>
	<?php
}


// remove redux ads
add_action('admin_enqueue_scripts','lionthemes_remove_redux_ads', 10, 1);
function lionthemes_remove_redux_ads(){
	$remove_redux = 'jQuery(document).ready(function($){
						setTimeout(
							function(){
								$(".rAds, .redux-notice, .vc_license-activation-notice, #js_composer-update").remove();
								$("tr[data-slug=\"js_composer\"]").removeClass("update");
								$("tr[data-slug=\"slider-revolution\"]").next(".plugin-update-tr").remove();
								$("tr[data-slug=\"slider-revolution\"]").next(".plugin-update-tr").remove();
							}, 500);
					});';
	if ( ! wp_script_is( 'jquery', 'done' ) ) {
		wp_enqueue_script( 'jquery' );
	}
	wp_add_inline_script( 'jquery-migrate', $remove_redux );
}

add_action( 'woocommerce_after_single_product', 'lionthemes_brand_logos');
add_action( 'woocommerce_after_cart', 'lionthemes_brand_logos');
add_action( 'woocommerce_after_shop', 'lionthemes_brand_logos');

function lionthemes_brand_logos(){
	global $orienko_opt;
	if(empty($orienko_opt['brand_enable'])) return;
	?>
	<div class="brands-logo">
	<h3 class="widget-title"><span><?php echo esc_html( $orienko_opt['brand_title'] ); ?></span></h3>
	<?php 
		echo do_shortcode( '[ourbrands rows="1" colsnumber="6" style="carousel"]' );
	?>
	</div>
<?php }

add_action( 'init', 'lionthemes_remove_upsell' );
function lionthemes_remove_upsell(){
	global $orienko_opt;
	if(!empty($orienko_opt['enable_upsells'])){
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	}
}

function lionthemes_get_excerpt($post_id, $limit){
    $the_post = get_post($post_id);
    $the_excerpt = do_shortcode($the_post->post_content);
    $the_excerpt = strip_tags($the_excerpt);
    $words = explode(' ', $the_excerpt, $limit + 1);

    if(count($words) > $limit) :
        array_pop($words);
        array_push($words, '…');
        $the_excerpt = implode(' ', $words);
    endif;

    $the_excerpt = '<p>' . $the_excerpt . '</p>';

    return $the_excerpt;
}
