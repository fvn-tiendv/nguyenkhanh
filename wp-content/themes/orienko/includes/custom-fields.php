<?php
// new post meta data callback
function orienko_post_meta_box_callback( $post ) {
	wp_nonce_field( 'orienko_meta_box', 'orienko_meta_box_nonce' );
	$value = get_post_meta( $post->ID, 'orienko_featured_post_value', true );
	echo '<label for="orienko_post_intro">';
	esc_html_e( 'This content will be used to replace the featured image, use shortcode here', 'orienko' );
	echo '</label><br />';
	wp_editor( $value, 'orienko_post_intro', $settings = array() );
}
// register new meta box
add_action( 'add_meta_boxes', 'orienko_add_post_meta_box' );
function orienko_add_post_meta_box(){
	$screens = array( 'post' );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'orienko_post_intro_section',
			esc_html__( 'Post featured content', 'orienko' ),
			'orienko_post_meta_box_callback',
			$screen
		);
	}
	add_meta_box(
		'orienko_page_config_section',
		esc_html__( 'Page config', 'orienko' ),
		'orienko_page_meta_box_callback',
		'page',
		'normal',
		'high'
	);
}
// new page meta data callback
function orienko_page_meta_box_callback( $post ) {
	wp_nonce_field( 'orienko_meta_box', 'orienko_meta_box_nonce' );
	$header_val = get_post_meta( $post->ID, 'orienko_header_page', true );
	$footer_val = get_post_meta( $post->ID, 'orienko_footer_page', true );
	$layout_val = get_post_meta( $post->ID, 'orienko_layout_page', true );
	$logo_val = get_post_meta( $post->ID, 'orienko_logo_page', true );
	echo '<div class="bootstrap">';
		echo '<div class="option row">';
			echo '<div class="option_label col-md-3 col-sm-12"><label for="custom_header_option">' . esc_html__('Custom header:', 'orienko') . '</label></div>';
			echo '<div class="option_field col-md-9 col-sm-12"><select id="custom_header_option" name="orienko_header_page">';
			echo '<option value="">'. esc_html__('Inherit theme options', 'orienko') .'</option>';
			echo '<option value="first"'. (($header_val == 'first') ? ' selected="selected"' : '') .'>'. esc_html__('Header first (Default)', 'orienko') .'</option>';
			echo '<option value="second"'. (($header_val == 'second') ? ' selected="selected"' : '') .'>'. esc_html__('Header second', 'orienko') .'</option>';
			echo '<option value="third"'. (($header_val == 'third') ? ' selected="selected"' : '') .'>'. esc_html__('Header third', 'orienko') .'</option>';
			echo '</select></div>';
		echo '</div>';
		
		echo '<div class="option row">';
			echo '<div class="option_label col-md-3 col-sm-12"><label for="custom_footer_option">' . esc_html__('Custom footer:', 'orienko') . '</label></div>';
			echo '<div class="option_field col-md-9 col-sm-12"><select id="custom_footer_option" name="orienko_footer_page">';
			echo '<option value="">'. esc_html__('Inherit theme options', 'orienko') .'</option>';
			echo '<option value="first"'. (($footer_val == 'first') ? ' selected="selected"' : '') .'>'. esc_html__('Footer first (Default)', 'orienko') .'</option>';
			echo '<option value="second"'. (($footer_val == 'second') ? ' selected="selected"' : '') .'>'. esc_html__('Footer second', 'orienko') .'</option>';
			echo '</select></div>';
		echo '</div>';
		
		echo '<div class="option row">';
			echo '<div class="option_label col-md-3 col-sm-12"><label for="custom_layout_option">' . esc_html__('Custom layout:', 'orienko') . '</label></div>';
			echo '<div class="option_field col-md-9 col-sm-12"><select id="custom_layout_option" name="orienko_layout_page">';
			echo '<option value="">'. esc_html__('Inherit theme options', 'orienko') .'</option>';
			echo '<option value="full"'. (($layout_val == 'full') ? ' selected="selected"' : '') .'>'. esc_html__('Full (Default)', 'orienko') .'</option>';
			echo '<option value="box"'. (($layout_val == 'box') ? ' selected="selected"' : '') .'>'. esc_html__('Box', 'orienko') .'</option>';
			echo '</select></div>';
		echo '</div>';
		
		echo '<div class="option row">';
			echo '<div class="option_label col-md-3 col-sm-12"><label for="custom_logo_option">' . esc_html__('Custom logo:', 'orienko') . '</label></div>';
			echo '<div class="option_field col-md-9 col-sm-12"><input type="hidden" name="orienko_logo_page" id="custom_logo_option" value="'. esc_attr($logo_val) . '" />';
			echo '<div class="wp-media-buttons"><button id="orienko_media_button" class="button" type="button"/>'. esc_html__('Upload Logo', 'orienko') .'</button><button id="orienko_remove_media_button" class="button" type="button">'. esc_html__('Remove', 'orienko') .'</button></div>';
			echo '<div id="orienko_page_selected_media">'. (($logo_val) ? '<img width="150" src="'. esc_url($logo_val) .'" />':'') .'</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}
// save new meta box value
add_action( 'save_post', 'orienko_save_meta_box_data' );
function orienko_save_meta_box_data( $post_id ) {
	// Check if our nonce is set.
	if ( ! isset( $_POST['orienko_meta_box_nonce'] ) ) {
		return;
	}
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['orienko_meta_box_nonce'], 'orienko_meta_box' ) ) {
		return;
	}
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( isset( $_POST['orienko_post_intro'] ) ) {
		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['orienko_post_intro'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'orienko_featured_post_value', $my_data );
	}
	if ( isset( $_POST['orienko_header_page'] ) ) {
		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['orienko_header_page'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'orienko_header_page', $my_data );
	}
	if ( isset( $_POST['orienko_footer_page'] ) ) {
		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['orienko_footer_page'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'orienko_footer_page', $my_data );
	}
	if ( isset( $_POST['orienko_layout_page'] ) ) {
		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['orienko_layout_page'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'orienko_layout_page', $my_data );
	}
	if ( isset( $_POST['orienko_logo_page'] ) ) {
		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['orienko_logo_page'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'orienko_logo_page', $my_data );
	}
	
	return;
}



// custom featured field for product category
if(class_exists( 'WooCommerce' )){
	add_action( 'product_cat_add_form_fields', 'orienko_product_cat_add_new_meta_field', 10, 2 );
	add_action( 'product_cat_edit_form_fields', 'orienko_product_cat_edit_meta_field', 10, 2 );
	add_action( 'edited_product_cat', 'orienko_save_taxonomy_custom_meta', 10, 2 );  
	add_action( 'create_product_cat', 'orienko_create_taxonomy_custom_meta', 10, 2 );
	add_filter('manage_product_cat_custom_column', 'orienko_add_product_cat_column',10,3);
	add_filter('manage_edit-product_cat_columns', 'orienko_add_product_cat_columns');
}  
//add field
function orienko_product_cat_add_new_meta_field() {
	?>
	<div class="form-field">
		<label for="cat_featured"><?php echo esc_html__( 'Featured', 'orienko' ); ?> <input type="checkbox" name="_featured" id="cat_featured" value="1"></label>
	</div>
	<div class="form-field">
		<label for="cat_square_image"><?php echo esc_html__( 'Square image', 'orienko' ); ?></label>
		<input type="hidden" name="_square_image" id="orienko_cat_square_image" value="" />
		<div class="wp-media-buttons">
			<button id="orienko_square_image_media_button" class="button" type="button"/><?php echo esc_html__('Upload Image', 'orienko') ?></button>
			<button id="orienko_square_image_remove_media_button" class="button" type="button"><?php echo esc_html__('Remove', 'orienko') ?></button>
		</div>
		<div id="orienko_cat_selected_media"></div>
	</div>
	<script type = "text/javascript">
        
    </script>
<?php
}
// edit field
function orienko_product_cat_edit_meta_field($term) {
	$t_id = $term->term_id;
	$_featured = get_term_meta($t_id, '_featured');
	$_square_image = get_term_meta($t_id, '_square_image'); 
	
	?>
	<tr class="form-field"> 
	<th scope="row" valign="top"><label for="cat_featured"><?php echo esc_html__( 'Featured', 'orienko' ); ?></label></th>
		<td>
			<input type="checkbox" name="_featured" id="cat_featured" value="1"<?php echo ($_featured) ? ' checked="checked"' : ''; ?>>
		</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="cat_square_image"><?php echo esc_html__( 'Square image', 'orienko' ); ?></label></th>
		<td>
			<input type="hidden" name="_square_image" id="orienko_cat_square_image" value="<?php echo (!empty($_square_image[0])) ? esc_attr($_square_image[0]) : ''; ?>" />
			<div class="wp-media-buttons">
				<button id="orienko_square_image_media_button" class="button" type="button"/><?php echo esc_html__('Upload Image', 'orienko') ?></button>
				<button id="orienko_square_image_remove_media_button" class="button" type="button"><?php echo esc_html__('Remove', 'orienko') ?></button>
			</div>
			<div id="orienko_cat_selected_media"><?php if(!empty($_square_image[0])){ ?><img width="150" src="<?php echo esc_url($_square_image[0]) ?>" alt="" /><?php } ?></div>
		</td>
	</tr>
<?php
}
// Save field
function orienko_save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['_featured'] ) ) {
		$check = get_term_meta($term_id, '_featured', true);
		if(!$check){
			delete_term_meta($term_id, '_featured');
			add_term_meta($term_id, '_featured', $_POST['_featured']);
		}else{
			update_term_meta($term_id, '_featured', $_POST['_featured']);
		}
	}else{
		update_term_meta($term_id, '_featured', '0');
	}
	if ( isset( $_POST['_square_image'] ) ) {
		$check = get_term_meta($term_id, '_square_image', true);
		if(!$check){
			delete_term_meta($term_id, '_square_image');
			add_term_meta($term_id, '_square_image', $_POST['_square_image']);
		}else{
			update_term_meta($term_id, '_square_image', $_POST['_square_image']);
		}
	}
}
//add new
function orienko_create_taxonomy_custom_meta( $term_id ){
	if ( isset( $_POST['_featured'] ) ) {
		add_term_meta($term_id, '_featured', $_POST['_featured']);
	}
	if ( isset( $_POST['_square_image'] ) ) {
		add_term_meta($term_id, '_square_image', $_POST['_square_image']);
	}
}
//render column value
function orienko_add_product_cat_column($content,$column_name,$term_id){
    $term_meta = get_term_meta($term_id, '_featured');
    switch ($column_name) {
        case 'featured':
            $content = ($term_meta) ? esc_html__('Yes', 'orienko') : esc_html__('No', 'orienko');
            break;
        default:
            break;
    }
    return $content;
}
//new column
function orienko_add_product_cat_columns($columns){
    $columns['featured'] = esc_html__('Featured', 'orienko');
    return $columns;
}


function orienko_custom_media_upload_field_js($hook) {
	global $post;
	
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
	
	if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
		if('page' === $post->post_type){
			$media_upload_js = '
				var file_frame;
				jQuery(document).on(\'click\', \'#orienko_remove_media_button\', function(e){
					e.preventDefault();
					jQuery(\'#custom_logo_option\').val(\'\');
					jQuery(\'#orienko_page_selected_media\').html(\'\');
				});
				jQuery(document).on(\'click\', \'#orienko_media_button\', function(e){
					
					if (file_frame){
						file_frame.open();
						return;
					}
					file_frame = wp.media.frames.file_frame = wp.media({
						title: jQuery(this).data(\'uploader_title\'),
						button: {
							text: jQuery(this).data(\'uploader_button_text\'),
						},
						multiple: false
					});
					file_frame.on(\'select\', function(){
						attachment = file_frame.state().get(\'selection\').first().toJSON();
						var url = attachment.url;
						var field = document.getElementById("custom_logo_option");
						field.value = url;
						jQuery(\'#orienko_page_selected_media\').html(\'<img width="150" src="\'+ url +\'" />\');
						file_frame.close();
					});
					file_frame.open();
					e.preventDefault();
				});
			';
			wp_add_inline_script( 'media-upload', $media_upload_js );
		}
	}
	$cat_upload_js = '
		jQuery(document).ready(function($){
			var file_frame;
			$(document).on("click", "#orienko_square_image_remove_media_button", function(e){
				e.preventDefault();
				$("#orienko_cat_square_image").val("");
				$("#orienko_cat_selected_media").html("");
			});
			$(document).on("click", "#orienko_square_image_media_button", function(e){

				if (file_frame){
					file_frame.open();
					return;
				}
				file_frame = wp.media.frames.file_frame = wp.media({
					title: $(this).data("uploader_title"),
					button: {
						text: $(this).data("uploader_button_text"),
					},
					multiple: false
				});

				file_frame.on("select", function(){

					var attachment = file_frame.state().get("selection").first().toJSON();
					var url = attachment.url;
					var field = document.getElementById("orienko_cat_square_image");
					field.value = url;
					$("#orienko_cat_selected_media").html("<img width=\'150\' src=\'"+ url +"\' />");
					file_frame.close();
				});

				file_frame.open();
				e.preventDefault();
			});
		});
	';
	wp_add_inline_script( 'media-upload', $cat_upload_js );
}
add_action('admin_enqueue_scripts','orienko_custom_media_upload_field_js', 10, 1);