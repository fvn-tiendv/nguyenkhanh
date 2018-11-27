<?php
add_action( 'vc_before_init', 'orienko_vc_shortcodes' );

function orienko_vc_shortcodes() {
	vc_add_param( 'vc_row', array(
		'type' => 'checkbox',
		'heading' => esc_html__('Full Width','orienko'),
		'param_name' => 'fullwidth',
		'value' => array(
					'Yes, please' => true
				)
	));
	vc_add_params( 'vc_tta_tabs', array(
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
				'group' => esc_html__( 'Orienko options', 'orienko' ),
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
				'group' => esc_html__( 'Orienko options', 'orienko' ),
			),
	) );
	//Brand logos
	vc_map( array(
		'name' => esc_html__( 'Brand Logos', 'orienko' ),
		'base' => 'ourbrands',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'orienko' ),
				'param_name' => 'colsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
						'6'	=> '6',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'orienko' ),
				'param_name' => 'rows',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Style', 'orienko' ),
				'param_name' => 'style',
				'value' => array(
						esc_html__( 'Grid', 'orienko' )	 	=> 'grid',
						esc_html__( 'Carousel', 'orienko' ) 	=> 'carousel',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count desktop small', 'orienko' ),
				'param_name' => 'desksmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet', 'orienko' ),
				'param_name' => 'tablet_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet small', 'orienko' ),
				'param_name' => 'tabletsmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count mobile', 'orienko' ),
				'param_name' => 'mobile_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Margin', 'orienko' ),
				'param_name' => 'margin',
				'value' => '30',
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	
	//Specify Products
	vc_map( array(
		'name' => esc_html__( 'Specify Products', 'orienko' ),
		'base' => 'specifyproducts',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Type', 'orienko' ),
				'param_name' => 'type',
				'value' => array(
						esc_html__( 'Best Selling', 'orienko' )		=> 'best_selling',
						esc_html__( 'Featured Products', 'orienko' ) => 'featured_product',
						esc_html__( 'Top Rate', 'orienko' ) 			=> 'top_rate',
						esc_html__( 'Recent Products', 'orienko' ) 	=> 'recent_product',
						esc_html__( 'On Sale', 'orienko' ) 			=> 'on_sale',
						esc_html__( 'Recent Review', 'orienko' ) 	=> 'recent_review',
						esc_html__( 'Product Deals', 'orienko' )		 => 'deals',
						esc_html__( 'Product IDs', 'orienko' )		 => 'ids'
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Only In Category', 'orienko' ),
				'param_name' => 'in_category',
				'value' => orienko_get_all_taxonomy_terms('product_cat', true),
				'save_always' => true,
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'List Ids', 'orienko' ),
				'description' => esc_html__( 'This option only apply for Product IDs type, separator comma for each value ex: 123, 456, ...', 'orienko' ),
				'param_name' => 'ids',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of products to display', 'orienko' ),
				'param_name' => 'number',
				'value' => '10',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Style', 'orienko' ),
				'param_name' => 'style',
				'value' => array(
						esc_html__( 'Grid', 'orienko' )	 	=> 'grid',
						esc_html__( 'List', 'orienko' ) 		=> 'list',
						esc_html__( 'Carousel', 'orienko' ) 	=> 'carousel',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Item layout', 'orienko' ),
				'param_name' => 'item_layout',
				'value' => array(
						esc_html__( 'Box', 'orienko' ) 		=> 'box',
						esc_html__( 'List', 'orienko' ) 	=> 'list',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'orienko' ),
				'param_name' => 'rows',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns', 'orienko' ),
				'param_name' => 'columns',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count desktop small', 'orienko' ),
				'param_name' => 'desksmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet', 'orienko' ),
				'param_name' => 'tablet_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet small', 'orienko' ),
				'param_name' => 'tabletsmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count mobile', 'orienko' ),
				'param_name' => 'mobile_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Margin', 'orienko' ),
				'param_name' => 'margin',
				'value' => '0',
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	//Products Category
	vc_map( array(
		'name' => esc_html__( 'Products Category', 'orienko' ),
		'base' => 'productscategory',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Category', 'orienko' ),
				'param_name' => 'category',
				'value' => orienko_get_all_taxonomy_terms(),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of products to show', 'orienko' ),
				'param_name' => 'number',
				'value' => '10',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Style', 'orienko' ),
				'param_name' => 'style',
				'value' => array(
						esc_html__( 'Grid', 'orienko' )	 	=> 'grid',
						esc_html__( 'List', 'orienko' ) 		=> 'list',
						esc_html__( 'Carousel', 'orienko' ) 	=> 'carousel',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Item layout', 'orienko' ),
				'param_name' => 'item_layout',
				'value' => array(
						esc_html__( 'Box', 'orienko' ) 		=> 'box',
						esc_html__( 'List', 'orienko' ) 	=> 'list',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'orienko' ),
				'param_name' => 'rows',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns', 'orienko' ),
				'param_name' => 'columns',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count desktop small', 'orienko' ),
				'param_name' => 'desksmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet', 'orienko' ),
				'param_name' => 'tablet_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet small', 'orienko' ),
				'param_name' => 'tabletsmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count mobile', 'orienko' ),
				'param_name' => 'mobile_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Margin', 'orienko' ),
				'param_name' => 'margin',
				'value' => '0',
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	
	//Products Featured Categories
	vc_map( array(
		'name' => esc_html__( 'Products Featured Categories', 'orienko' ),
		'base' => 'featuredcategories',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of products to show', 'orienko' ),
				'param_name' => 'number',
				'value' => '10',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'View more text', 'orienko' ),
				'param_name' => 'viewmore_txt',
				'value' => 'View more',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'orienko' ),
				'param_name' => 'rows',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns', 'orienko' ),
				'param_name' => 'columns',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
						'6'	=> '6',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count desktop small', 'orienko' ),
				'param_name' => 'desksmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet', 'orienko' ),
				'param_name' => 'tablet_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet small', 'orienko' ),
				'param_name' => 'tabletsmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count mobile', 'orienko' ),
				'param_name' => 'mobile_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Margin', 'orienko' ),
				'param_name' => 'margin',
				'value' => '0',
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	
	//Testimonials
	vc_map( array(
		'name' => esc_html__( 'Orienko Testimonials', 'orienko' ),
		'base' => 'testimonials',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of products to show', 'orienko' ),
				'param_name' => 'number',
				'value' => '10',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Order', 'orienko' ),
				'param_name' => 'order',
				'value' => array(
						esc_html__( 'Latest first', 'orienko' ) 	=> '',
						esc_html__( 'Random', 'orienko' ) 		=> 'rand',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Item Style', 'orienko' ),
				'param_name' => 'item_style',
				'value' => array(
						esc_html__( 'Style 1', 'orienko' ) 	=> '',
						esc_html__( 'Style 2', 'orienko' ) 		=> 'style-2',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Style', 'orienko' ),
				'param_name' => 'style',
				'value' => array(
						esc_html__( 'Carousel', 'orienko' ) 	=> 'carousel',
						esc_html__( 'List', 'orienko' ) 		=> 'list',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns', 'orienko' ),
				'param_name' => 'columns',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count desktop small', 'orienko' ),
				'param_name' => 'desksmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet', 'orienko' ),
				'param_name' => 'tablet_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet small', 'orienko' ),
				'param_name' => 'tabletsmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count mobile', 'orienko' ),
				'param_name' => 'mobile_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Margin', 'orienko' ),
				'param_name' => 'margin',
				'value' => '0',
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	
	//MailPoet Newsletter Form
	vc_map( array(
		'name' => esc_html__( 'Newsletter Form (MailPoet)', 'orienko' ),
		'base' => 'wysija_form',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Form ID', 'orienko' ),
				'param_name' => 'id',
				'value' => esc_html__( '', 'orienko' ),
				'description' => esc_html__( 'Enter form ID here', 'orienko' ),
			)
		)
	) );
	
	//Feature content widget
	vc_map( array(
		'name' => esc_html__( 'Feature content', 'orienko' ),
		'base' => 'featuredcontent',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Feature text', 'orienko' ),
				'param_name' => 'feature_text',
				'value' => '',
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Short description', 'orienko' ),
				'param_name' => 'short_desc',
				'value' => '',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Layout style', 'orienko' ),
				'param_name' => 'style',
				'value' => array(
						esc_html__('Style 1', 'orienko')	=> '',
						esc_html__('Style 2', 'orienko')	=> 'style_2',
						esc_html__('Style 3', 'orienko')	=> 'style_3',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option for list style defined help for theme design.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	
	//Get menu by location
	vc_map( array(
		'name' => esc_html__( 'Menus', 'orienko' ),
		'base' => 'menu_location',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Location', 'orienko' ),
				'param_name' => 'location',
				'value' => array(
					array('value' => 'primary', 'label' => esc_html__( 'Primary Menu', 'orienko' )),
					array('value' => 'categories', 'label' => esc_html__( 'Categories Menu', 'orienko' )),
					array('value' => 'mobilemenu', 'label' => esc_html__( 'Mobile Menu', 'orienko' ))
				)
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Limit first level items', 'orienko' ),
				'param_name' => 'limit_items',
				'value' => '0',
				'description' => esc_html__( 'This option to display show more function to display full menu items. Set 0 for un-limit.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show more text', 'orienko' ),
				'param_name' => 'showmore_text',
				'value' => 'More items',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
	
	//Latest posts
	vc_map( array(
		'name' => esc_html__( 'Blog posts', 'orienko' ),
		'base' => 'blogposts',
		'class' => '',
		'category' => esc_html__( 'Orienko Theme', 'orienko'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Title', 'orienko' ),
				'param_name' => 'title',
				'value' => '',
			),
			array(
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show icon', 'orienko' ),
				'param_name' => 'show_icon',
				'value' => '1',
			),
			array(
				'type' => 'iconpicker',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Icon', 'orienko' ),
				'param_name' => 'icon',
				'value' => '',
			),
			
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of post to show', 'orienko' ),
				'param_name' => 'number',
				'value' => '5',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Style', 'orienko' ),
				'param_name' => 'style',
				'value' => array(
						esc_html__( 'Carousel', 'orienko' ) 	=> 'carousel',
						esc_html__( 'List', 'orienko' ) 		=> 'list',
						esc_html__( 'Grid', 'orienko' )	 	=> 'grid',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Content Style', 'orienko' ),
				'param_name' => 'content_style',
				'value' => array(
						esc_html__( 'Default', 'orienko' ) 	=> '',
						esc_html__( 'Vertical', 'orienko' ) 		=> 'vertical_style',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'orienko' ),
				'param_name' => 'rows',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns', 'orienko' ),
				'param_name' => 'columns',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Show on effect', 'orienko' ),
				'param_name' => 'showon_effect',
				'value' => orienko_get_effect_list(),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image scale', 'orienko' ),
				'param_name' => 'image',
				'value' => array(
						esc_html__( 'Wide', 'orienko' )	=> 'wide',
						esc_html__( 'Square', 'orienko' ) => 'square',
					),
				'save_always' => true,
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Excerpt length', 'orienko' ),
				'param_name' => 'length',
				'value' => '20',
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Order by', 'orienko' ),
				'param_name' => 'orderby',
				'value' => array(
						esc_html__( 'Posted Date', 'orienko' )	=> 'date',
						esc_html__( 'Ordering', 'orienko' ) => 'menu_order',
						esc_html__( 'Random', 'orienko' ) => 'rand',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Order Direction', 'orienko' ),
				'param_name' => 'order',
				'value' => array(
						esc_html__( 'Descending', 'orienko' )	=> 'DESC',
						esc_html__( 'Ascending', 'orienko' ) => 'ASC',
					),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count desktop small', 'orienko' ),
				'param_name' => 'desksmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet', 'orienko' ),
				'param_name' => 'tablet_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count tablet small', 'orienko' ),
				'param_name' => 'tabletsmall',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Columns count mobile', 'orienko' ),
				'param_name' => 'mobile_count',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
						'5'	=> '5',
					),
				'save_always' => true,
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Margin', 'orienko' ),
				'param_name' => 'margin',
				'value' => '0',
				'description' => esc_html__( 'This option only apply for Carousel Stype.', 'orienko' )
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Extra class name', 'orienko' ),
				'param_name' => 'el_class',
				'value' => '',
				'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'orienko' )
			)
		)
	) );
}
// Filter to replace default css class names for vc_row shortcode and vc_column
add_filter( 'vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
function custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
  $class_string = preg_replace( '/vc_col-sm-(\d{1,2})/', 'col-sm-$1', $class_string ); // This will replace "vc_col-sm-%" with "my_col-sm-%"
  $class_string = str_replace('vc_column_container', 'column_container', $class_string);
  return $class_string; // Important: you should always return modified or original $class_string
}
?>