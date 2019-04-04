<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5bcf9eff364c8',
	'title' => 'Sway',
	'fields' => array(
		array(
			'key' => 'field_5c7c2ff6cb17c',
			'label' => 'BroadStreet (Legacy)',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5c7c3092cb17d',
			'label' => 'Enable Broadstreet',
			'name' => 'wc_broadstreet_enabled',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
		),
		array(
			'key' => 'field_5bcfa9e3d2147',
			'label' => 'Instructions',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
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
		array(
			'key' => 'field_5bcf9f06fdbd6',
			'label' => 'Leaderboard',
			'name' => 'leaderboard',
			'type' => 'text',
			'instructions' => 'Top of the page between the nav and the main content',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5bcf9f4efdbd7',
			'label' => 'Feedboard 1',
			'name' => 'feedboard_3',
			'type' => 'text',
			'instructions' => 'In the main loop between posts 2 and 3',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5bcf9f67fdbd8',
			'label' => 'Feedboard 2',
			'name' => 'feedboard_6',
			'type' => 'text',
			'instructions' => 'In the main loop between posts 5 and 6',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5bd5cb05a7a40',
			'label' => 'Footer',
			'name' => 'footer',
			'type' => 'text',
			'instructions' => 'Posts Single - This goes right below post comments',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5bd5cb0ca7a41',
			'label' => 'Related',
			'name' => 'related',
			'type' => 'text',
			'instructions' => 'Posts Single - This goes right below "read this next"',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5bd5cb10a7a42',
			'label' => 'Popout 1',
			'name' => 'popout_1',
			'type' => 'text',
			'instructions' => 'Automatically appended to the page for popout ads',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5bd5cb16a7a43',
			'label' => 'Popout 2',
			'name' => 'popout_2',
			'type' => 'text',
			'instructions' => 'Automatically appended to the page for popout ads',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3092cb17d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c7c311e795cd',
			'label' => 'Doubleclick for Publishers',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5c7c3143795ce',
			'label' => 'Enable DFP Ads',
			'name' => 'wc_gfp_enabled',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
		),
		array(
			'key' => 'field_5c7c4e190d1ff',
			'label' => 'Network Id',
			'name' => 'wc_gfp_network_id',
			'type' => 'text',
			'instructions' => 'Default Network 21792965829',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3143795ce',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 21792965829,
			'placeholder' => 21792965829,
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c7c32c0840fd',
			'label' => 'Website Key',
			'name' => 'wc_gfp_website_key',
			'type' => 'text',
			'instructions' => 'Set the website key for ad placement and reporting. Possible Values:
https://admanager.google.com/21792965829#inventory/customTargeting/keyId=11874917',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3143795ce',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c7c318a840f3',
			'label' => 'Advanced - Ad Zone Settings',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3143795ce',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<hr/>
<p>You should NOT need to change any of these settings. but if a zone code needs to be changed, you can overwrite it here.</p>
<p> <a href="https://dfpgpt.appspot.com/g/$Vuvn5A2_">Default zone codes are generated here.</a><br/>
<a href="https://admanager.google.com/21792965829?pli=1#inventory/inventory/adSlotId=21800674777">Ad units can be managed here.</a>
</p>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5c7c68b66ab65',
			'label' => 'Ad units',
			'name' => 'wc_gfp_ad_units',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7c3143795ce',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5c7c3207840f4',
					'label' => 'Leaderboard',
					'name' => 'gfp_leaderboard',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c3d0a067c1',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_lb_1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c3d1c067c2',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[300,100]',
								1 => '[320,50]',
								2 => '[468,60]',
								3 => '[728,90]',
								4 => '[970,90]',
								5 => '[970,250]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c3e76067c3',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c4122dba73',
					'label' => 'Feedboard 1',
					'name' => 'gfp_feedboard_3',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c4122dba74',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_fb_1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c4122dba75',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[300,100]',
								2 => '[320,50]',
								3 => '[468,60]',
								4 => '[728,90]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c4122dba76',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-2',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c4142dba77',
					'label' => 'Feedboard 2',
					'name' => 'gfp_feedboard_6',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5ca666cbf65fc',
							'label' => 'Code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_fb_2',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c4142dba79',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[300,100]',
								2 => '[320,50]',
								3 => '[468,60]',
								4 => '[728,90]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c4142dba7a',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-3',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c4168dba83',
					'label' => 'Sidebar 1',
					'name' => 'gfp_sidebar_1',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c4168dba84',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_sb_1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c4168dba85',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[120,60]',
								2 => '[120,90]',
								3 => '[120,240]',
								4 => '[120,600]',
								5 => '[125,125]',
								6 => '[160,600]',
								7 => '[180,150]',
								8 => '[200,200]',
								9 => '[234,60]',
								10 => '[240,400]',
								11 => '[250,250]',
								12 => '[300,100]',
								13 => '[300,250]',
								14 => '[300,600]',
								15 => '[320,50]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c4168dba86',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-6',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c4178dba87',
					'label' => 'Sidebar 2',
					'name' => 'gfp_sidebar_2',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c4178dba88',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_sb_2',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c4178dba89',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[120,60]',
								2 => '[120,90]',
								3 => '[120,240]',
								4 => '[120,600]',
								5 => '[125,125]',
								6 => '[160,600]',
								7 => '[180,150]',
								8 => '[200,200]',
								9 => '[234,60]',
								10 => '[240,400]',
								11 => '[250,250]',
								12 => '[300,100]',
								13 => '[300,250]',
								14 => '[300,600]',
								15 => '[320,50]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c4178dba8a',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-7',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c417cdba8b',
					'label' => 'Sidebar 3',
					'name' => 'gfp_sidebar_3',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c417cdba8c',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_sb_3',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c417cdba8d',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[120,60]',
								2 => '[120,90]',
								3 => '[120,240]',
								4 => '[120,600]',
								5 => '[125,125]',
								6 => '[160,600]',
								7 => '[180,150]',
								8 => '[200,200]',
								9 => '[234,60]',
								10 => '[240,400]',
								11 => '[250,250]',
								12 => '[300,100]',
								13 => '[300,250]',
								14 => '[300,600]',
								15 => '[320,50]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c417cdba8e',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-8',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c414fdba7b',
					'label' => 'Footer',
					'name' => 'gfp_footer',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c414fdba7c',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_ft_1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c414fdba7d',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[120,60]',
								2 => '[120,90]',
								3 => '[120,240]',
								4 => '[120,600]',
								5 => '[125,125]',
								6 => '[180,150]',
								7 => '[200,200]',
								8 => '[234,60]',
								9 => '[468,60]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c414fdba7e',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-4',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c415bdba7f',
					'label' => 'Related',
					'name' => 'gfp_related',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c415bdba80',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_rc_1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c415bdba81',
							'label' => 'sizes',
							'name' => 'sizes',
							'type' => 'checkbox',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'[88,31]' => '88x31',
								'[120,60]' => '120x60',
								'[120,90]' => '120x90',
								'[120,240]' => '120x240',
								'[120,600]' => '120x600',
								'[125,125]' => '125x125',
								'[160,600]' => '160x600',
								'[180,150]' => '180x150',
								'[200,200]' => '200x200',
								'[234,60]' => '234x60',
								'[240,400]' => '240x400',
								'[250,250]' => '250x250',
								'[300,100]' => '300x100',
								'[300,250]' => '300x250',
								'[300,600]' => '300x600',
								'[320,50]' => '320x50',
								'[336,280]' => '336x280',
								'[468,60]' => '468x60',
								'[728,90]' => '728x90',
								'[970,90]' => '970x90',
							),
							'allow_custom' => 0,
							'default_value' => array(
								0 => '[88,31]',
								1 => '[120,60]',
								2 => '[120,90]',
								3 => '[120,240]',
								4 => '[120,600]',
								5 => '[125,125]',
								6 => '[180,150]',
								7 => '[200,200]',
								8 => '[234,60]',
								9 => '[468,60]',
							),
							'layout' => 'horizontal',
							'toggle' => 0,
							'return_format' => 'value',
							'save_custom' => 0,
						),
						array(
							'key' => 'field_5c7c415bdba82',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-5',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c417fdba8f',
					'label' => 'Popout 1',
					'name' => 'gfp_popout_1',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c417fdba91',
							'label' => 'Enabled',
							'name' => 'po_enabled',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 1,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_5c7c417fdba90',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_po_1',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c417fdba92',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-9',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5c7c41a1dba93',
					'label' => 'Popout 2',
					'name' => 'gfp_popout_2',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7c3143795ce',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c7c41a1dba95',
							'label' => 'Enabled',
							'name' => 'po_enabled',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 1,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_5c7c41a1dba94',
							'label' => 'code',
							'name' => 'code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'wc_po_2',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c7c41a1dba96',
							'label' => 'Unit Id',
							'name' => 'unit_id',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'div-gpt-ad-3687159-10',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
			),
		),
		array(
			'key' => 'field_5c7dd6a1de33c',
			'label' => 'Pubwise',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5c7dd6cade33e',
			'label' => 'Enable Pubwise',
			'name' => 'wc_pw_enabled',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
		),
		array(
			'key' => 'field_5c7dd6b3de33d',
			'label' => 'Scripts',
			'name' => 'wc_pw_scripts',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c7dd6cade33e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5ca280df0b7a1',
			'label' => 'Amazon',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5ca280f40b7a2',
			'label' => 'Enable Amazon UAM',
			'name' => 'wc_uam_enabled',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
		),
		array(
			'key' => 'field_5ca281300b7a3',
			'label' => 'Publisher ID',
			'name' => 'wc_uam_publisher_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ca280f40b7a2',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'ef625688-2729-4bf1-b3f5-d5b297fdc4a9',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-sway',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;