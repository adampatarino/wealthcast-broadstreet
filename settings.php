<?php
add_action('plugins_loaded', 'wealthcast_acf_settings');

function a2pop_acf_settings() {
    if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
    	'key' => 'group_5bcf9eff364c8',
    	'title' => 'Wealthcast',
    	'fields' => array (
    		array (
    			'key' => 'field_5bcfa9e3d2147',
    			'label' => 'Instructions',
    			'name' => '',
    			'type' => 'message',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'message' => 'Paste zone ids into the respective locations below

    Get Zone Ids Here: https://my.broadstreetads.com/networks/5672/zones

    Manage Sidebar Ads in Appearance -> Widgets with the Wealthcast Widget',
    			'new_lines' => 'wpautop',
    			'esc_html' => 0,
    		),
    		array (
    			'key' => 'field_5bcf9f06fdbd6',
    			'label' => 'Leaderboard',
    			'name' => 'leaderboard',
    			'type' => 'text',
    			'instructions' => 'Top of the page between the nav and the main content',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_5bcf9f4efdbd7',
    			'label' => 'Feedboard 1',
    			'name' => 'feedboard_3',
    			'type' => 'text',
    			'instructions' => 'In the main loop between posts 2 and 3',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_5bcf9f67fdbd8',
    			'label' => 'Feedboard 2',
    			'name' => 'feedboard_6',
    			'type' => 'text',
    			'instructions' => 'In the main loop between posts 5 and 6',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_5bd5cb05a7a40',
    			'label' => 'Footer',
    			'name' => 'footer',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_5bd5cb0ca7a41',
    			'label' => 'Related',
    			'name' => 'related',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_5bd5cb10a7a42',
    			'label' => 'Popout 1',
    			'name' => 'popout_1',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    		array (
    			'key' => 'field_5bd5cb16a7a43',
    			'label' => 'Popout 2',
    			'name' => 'popout_2',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array (
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    			'readonly' => 0,
    			'disabled' => 0,
    		),
    	),
    	'location' => array (
    		array (
    			array (
    				'param' => 'options_page',
    				'operator' => '==',
    				'value' => 'wealthcast',
    			),
    		),
    	),
    	'menu_order' => 0,
    	'position' => 'normal',
    	'style' => 'default',
    	'label_placement' => 'top',
    	'instruction_placement' => 'label',
    	'hide_on_screen' => '',
    	'active' => 1,
    	'description' => '',
    ));

    endif;
}
?>