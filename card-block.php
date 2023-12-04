<?php
/**
 * Register ACF PRO card block
 */

 function hwcoe_register_card_blocks() {
 	register_block_type( __DIR__ . '/blocks/card' );
 }

 add_action( 'init', 'hwcoe_register_card_blocks', 5 );

 add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}


	acf_add_local_field_group( array(
	'key' => 'group_656a32b03b99c',
	'title' => 'Card',
	'fields' => array(
		array(
			'key' => 'field_656e2f4674ca5',
			'label' => 'Card Width',
			'name' => 'card_width',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				4 => '25%',
				3 => '33.3%',
				2 => '50%',
			),
			'default_value' => 3,
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_656a32f22adbb',
			'label' => 'Image',
			'name' => 'card_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => 'Upload card image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_656a32b02adba',
			'label' => 'Headline',
			'name' => 'card_headline',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_656a33939bb5e',
			'label' => 'Card URL',
			'name' => 'card_url',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_656e2c634823e',
			'label' => 'Open in new window',
			'name' => 'link_new_window',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_656a33939bb5e',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_656e2d708c1a3',
			'label' => 'Animate on hover',
			'name' => 'animate_on_hover',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_656a33939bb5e',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/card',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );
