<?php
$fields = array();

	/*
	// Exported field: 'node-kkrabb_event-field_event_att'.
	$fields['node-kkrabb_event-field_event_att'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_att',
			'foreign keys' => array(
				'tid' => array(
					'columns' => array(
						'tid' => 'tid',
					),
					'table' => 'taxonomy_term_data',
				),
			),
			'indexes' => array(
				'tid' => array(
					0 => 'tid',
				),
			),
			'locked' => '0',
			'module' => 'taxonomy',
			'settings' => array(
				'allowed_values' => array(
					0 => array(
						'vocabulary' => 'harpa_web_module_event_att',
						'parent' => '0',
					),
				),
				'options_list_callback' => 'i18n_taxonomy_allowed_values',
			),
			'translatable' => '0',
			'type' => 'taxonomy_term_reference',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'i18n_taxonomy',
					'settings' => array(),
					'type' => 'i18n_taxonomy_term_reference_link',
					'weight' => 56,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_att',
			'label' => 'Tímamerking',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_buttons',
				'weight' => '20',
			),
		),
	);
	*/
	/*
	// Exported field: 'node-kkrabb_event-field_event_description_attnbox'.
	$fields['node-kkrabb_event-field_event_description_attnbox'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_description_attnbox',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'text_long',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 46,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_description_attnbox',
			'label' => 'Grár kassi með texta sem birtist neðst í viðburðarlýsingu',
			'required' => 0,
			'settings' => array(
				'text_processing' => '1',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'rows' => '5',
				),
				'type' => 'text_textarea',
				'weight' => '9',
			),
		),
	);
	*/
	/*
	// Exported field: 'node-kkrabb_event-field_event_description_box1'.
	$fields['node-kkrabb_event-field_event_description_box1'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_description_box1',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'text_long',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 47,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_description_box1',
			'label' => 'Efni sem birtist í hægri dálki - box 1',
			'required' => 0,
			'settings' => array(
				'text_processing' => '1',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'rows' => '5',
				),
				'type' => 'text_textarea',
				'weight' => '10',
			),
		),
	);
	*/
	/*
	// Exported field: 'node-kkrabb_event-field_event_description_box2'.
	$fields['node-kkrabb_event-field_event_description_box2'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_description_box2',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'text_long',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 48,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_description_box2',
			'label' => 'Efni sem birtist í hægri dálki - box 2',
			'required' => 0,
			'settings' => array(
				'text_processing' => '1',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'rows' => '5',
				),
				'type' => 'text_textarea',
				'weight' => '11',
			),
		),
	);
	*/
	// Exported field: 'node-kkrabb_event-field_event_description_media'.
	$fields['node-kkrabb_event-field_event_description_media'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_description_media',
			'foreign keys' => array(
				'file_managed' => array(
					'columns' => array(
						'fid' => 'fid',
					),
					'table' => 'file_managed',
				),
			),
			'indexes' => array(
				'fid' => array(
					0 => 'fid',
				),
			),
			'locked' => '0',
			'module' => 'mediafield',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'media',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'mediafield',
					'settings' => array(
						'file_view_mode' => 'default',
					),
					'type' => 'media',
					'weight' => 43,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_description_media',
			'label' => 'Event description media',
			'required' => 0,
			'settings' => array(
				'file_extensions' => 'jpg jpeg gif png txt doc docx xls xlsx pdf ppt pptx pps ppsx odt ods odp mp3 mov mp4 m4a m4v mpeg avi ogg oga ogv wmv ico',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'media',
				'settings' => array(
					'allowed_schemes' => array(
						'public' => 'public',
						'youtube' => 'youtube',
					),
					'allowed_types' => array(
						'audio' => 'audio',
						'document' => 0,
						'image' => 'image',
						'video' => 'video',
					),
					'browser_plugins' => array(
						'media_default--media_browser_1' => 0,
						'media_default--media_browser_my_files' => 0,
						'media_internet' => 0,
						'upload' => 0,
						'youtube' => 0,
					),
					'progress_indicator' => 'throbber',
				),
				'type' => 'media_generic',
				'weight' => '30',
			),
		),
	);

	/*
	// Exported field: 'node-kkrabb_event-field_event_description_more1'.
	$fields['node-kkrabb_event-field_event_description_more1'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_description_more1',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'text_long',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 45,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_description_more1',
			'label' => 'Nánari lýsing á viðburði aðskilið með gulri línu',
			'required' => 0,
			'settings' => array(
				'text_processing' => '1',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'rows' => '5',
				),
				'type' => 'text_textarea',
				'weight' => '8',
			),
		),
	);
	*/
	/*
	// Exported field: 'node-kkrabb_event-field_event_festival_tax_tid'.
	$fields['node-kkrabb_event-field_event_festival_tax_tid'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_festival_tax_tid',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'number',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'number_integer',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'number',
					'settings' => array(
						'decimal_separator' => '.',
						'prefix_suffix' => TRUE,
						'scale' => 0,
						'thousand_separator' => ' ',
					),
					'type' => 'number_integer',
					'weight' => 49,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_festival_tax_tid',
			'label' => 'Event festival tax tid',
			'required' => 0,
			'settings' => array(
				'max' => '',
				'min' => '',
				'prefix' => '',
				'suffix' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 0,
				'module' => 'number',
				'settings' => array(),
				'type' => 'number',
				'weight' => '31',
			),
		),
	);
	*/
	/*
	// Exported field: 'node-kkrabb_event-field_event_performers_list'.
	$fields['node-kkrabb_event-field_event_performers_list'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_performers_list',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '255',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 58,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_performers_list',
			'label' => 'Event Performers List',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '32',
			),
		),
	);
	*/

	// Exported field: 'node-kkrabb_event-field_event_ref_other_events'.
	/*
	$fields['node-kkrabb_event-field_event_ref_other_events'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_ref_other_events',
			'foreign keys' => array(
				'node' => array(
					'columns' => array(
						'target_id' => 'nid',
					),
					'table' => 'node',
				),
			),
			'indexes' => array(
				'target_id' => array(
					0 => 'target_id',
				),
			),
			'locked' => '0',
			'module' => 'entityreference',
			'settings' => array(
				'handler' => 'base',
				'handler_settings' => array(
					'behaviors' => array(
						'views-select-list' => array(
							'status' => 0,
						),
					),
					'sort' => array(
						'type' => 'none',
					),
					'target_bundles' => array(
						'kkrabb_event' => 'kkrabb_event',
					),
				),
				'target_type' => 'node',
			),
			'translatable' => '0',
			'type' => 'entityreference',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Birtast í hægri dálki.',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'entityreference',
					'settings' => array(
						'link' => FALSE,
					),
					'type' => 'entityreference_label',
					'weight' => 51,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_ref_other_events',
			'label' => 'Tengdir viðburðir',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'entityreference',
				'settings' => array(
					'match_operator' => 'CONTAINS',
					'path' => '',
					'size' => '60',
				),
				'type' => 'entityreference_autocomplete',
				'weight' => '15',
			),
		),
	);
	*/

	/*
	// Exported field: 'node-kkrabb_event-field_event_resident'.
	$fields['node-kkrabb_event-field_event_resident'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_resident',
			'foreign keys' => array(
				'tid' => array(
					'columns' => array(
						'tid' => 'tid',
					),
					'table' => 'taxonomy_term_data',
				),
			),
			'indexes' => array(
				'tid' => array(
					0 => 'tid',
				),
			),
			'locked' => '0',
			'module' => 'taxonomy',
			'settings' => array(
				'allowed_values' => array(
					0 => array(
						'vocabulary' => 'harpa_web_module_residents',
						'parent' => '0',
					),
				),
				'options_list_callback' => 'i18n_taxonomy_allowed_values',
			),
			'translatable' => '0',
			'type' => 'taxonomy_term_reference',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'i18n_taxonomy',
					'settings' => array(),
					'type' => 'i18n_taxonomy_term_reference_link',
					'weight' => 55,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_resident',
			'label' => 'Íbúi',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_buttons',
				'weight' => '19',
			),
		),
	);
	*/

	// Exported field: 'node-kkrabb_event-field_event_video_youtube'.
	$fields['node-kkrabb_event-field_event_video_youtube'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_event_video_youtube',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '255',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Setjið inn ID á youtube myndbandi. 
			Dæmi: Ef hlekkur á myndband er http://www.youtube.com/watch?v=NM-fDCYzstA
			Þá á að setja inn NM-fDCYzstA',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 57,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_event_video_youtube',
			'label' => 'Youtube Video',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '7',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_image_background'.
	$fields['node-kkrabb_event-field_image_background'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_image_background',
			'foreign keys' => array(
				'fid' => array(
					'columns' => array(
						'fid' => 'fid',
					),
					'table' => 'file_managed',
				),
			),
			'indexes' => array(
				'fid' => array(
					0 => 'fid',
				),
			),
			'locked' => '0',
			'module' => 'image',
			'settings' => array(
				'default_image' => '4510',
				'uri_scheme' => 'public',
			),
			'translatable' => '0',
			'type' => 'image',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'deleted' => '0',
			'description' => 'Stór bakgrunnsmynd af viðburði eða sal - Stærð skal vera 1350x550',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'image',
					'settings' => array(
						'image_link' => '',
						'image_style' => '',
					),
					'type' => 'image',
					'weight' => 50,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_image_background',
			'label' => 'Bakgrunnsmynd (Stór)',
			'required' => 0,
			'settings' => array(
				'alt_field' => 0,
				'default_image' => 0,
				'file_directory' => '',
				'file_extensions' => 'png gif jpg jpeg',
				//'max_filesize' => '8 MB',
				//'max_resolution' => '2000x550',
				//'min_resolution' => '1024x300',
				'title_field' => 0,
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'media',
				'settings' => array(
					'allowed_schemes' => array(
						'public' => 'public',
						'youtube' => 0,
					),
					'allowed_types' => array(
						'audio' => 0,
						'document' => 0,
						'image' => 'image',
						'video' => 0,
					),
					'browser_plugins' => array(
						'media_default--media_browser_1' => 0,
						'media_default--media_browser_my_files' => 0,
						'media_internet' => 0,
						'upload' => 0,
						'youtube' => 0,
					),
					'progress_indicator' => 'throbber',
				),
				'type' => 'media_generic',
				'weight' => '1',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_address1'.
	$fields['node-kkrabb_event-field_kkrabb_event_address1'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_address1',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '512',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => '',
				),
			),
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 14,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_address1',
			'label' => 'Address',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '39',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_address2'.
	$fields['node-kkrabb_event-field_kkrabb_event_address2'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_address2',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '512',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Address (continued)',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 15,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_address2',
			'label' => 'Address (cont.)',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '40',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_beg_unixtime'.
	$fields['node-kkrabb_event-field_kkrabb_event_beg_unixtime'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_beg_unixtime',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'number',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'number_integer',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'number',
					'settings' => array(
						'decimal_separator' => '.',
						'prefix_suffix' => TRUE,
						'scale' => 0,
						'thousand_separator' => ' ',
					),
					'type' => 'number_integer',
					'weight' => 38,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_beg_unixtime',
			'label' => 'kkrabb_event_beg_unixtime',
			'required' => 0,
			'settings' => array(
				'max' => '',
				'min' => '',
				'prefix' => '',
				'suffix' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 0,
				'module' => 'number',
				'settings' => array(),
				'type' => 'number',
				'weight' => '47',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_date_from'.
	$fields['node-kkrabb_event-field_kkrabb_event_date_from'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_date_from',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'date',
			'settings' => array(
				'cache_count' => '4',
				'cache_enabled' => 0,
				'granularity' => array(
					'day' => 'day',
					'hour' => 'hour',
					'minute' => 'minute',
					'month' => 'month',
					'second' => 0,
					'year' => 'year',
				),
				'timezone_db' => 'UTC',
				'todate' => '',
				'tz_handling' => 'site',
			),
			'translatable' => '0',
			'type' => 'datestamp',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'deleted' => '0',
			'description' => 'Fyrir stakan viðburð',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'date',
					'settings' => array(
						'format_type' => 'long',
						'fromto' => 'both',
						'multiple_from' => '',
						'multiple_number' => '',
						'multiple_to' => '',
					),
					'type' => 'date_default',
					'weight' => 53,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_date_from',
			'label' => 'Date from',
			'required' => 1,
			'settings' => array(
				'default_value' => 'now',
				'default_value2' => 'same',
				'default_value_code' => '',
				'default_value_code2' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'date',
				'settings' => array(
					'increment' => '15',
					'input_format' => 'm/d/Y - H:i:s',
					'input_format_custom' => '',
					'label_position' => 'above',
					'text_parts' => array(),
					'year_range' => '-3:+3',
				),
				'type' => 'date_popup',
				'weight' => '22',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_date_to'.
	$fields['node-kkrabb_event-field_kkrabb_event_date_to'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_date_to',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'date',
			'settings' => array(
				'cache_count' => '4',
				'cache_enabled' => 0,
				'granularity' => array(
					'day' => 'day',
					'hour' => 'hour',
					'minute' => 'minute',
					'month' => 'month',
					'second' => 0,
					'year' => 'year',
				),
				'timezone_db' => 'UTC',
				'todate' => '',
				'tz_handling' => 'site',
			),
			'translatable' => '0',
			'type' => 'datestamp',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'date',
					'settings' => array(
						'format_type' => 'long',
						'fromto' => 'both',
						'multiple_from' => '',
						'multiple_number' => '',
						'multiple_to' => '',
					),
					'type' => 'date_default',
					'weight' => 54,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_date_to',
			'label' => 'Date to',
			'required' => 0,
			'settings' => array(
				'default_value' => 'now',
				'default_value2' => 'same',
				'default_value_code' => '',
				'default_value_code2' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'date',
				'settings' => array(
					'increment' => '15',
					'input_format' => 'm/d/Y - H:i:s',
					'input_format_custom' => '',
					'label_position' => 'above',
					'text_parts' => array(),
					'year_range' => '-3:+3',
				),
				'type' => 'date_popup',
				'weight' => '23',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_description'.
	$fields['node-kkrabb_event-field_kkrabb_event_description'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_description',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'text_long',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 9,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_description',
			'label' => 'Allur texti um viðburð',
			'required' => 1,
			'settings' => array(
				'text_processing' => '1',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'rows' => '5',
				),
				'type' => 'text_textarea',
				'weight' => '6',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_disabled_nice'.
	$fields['node-kkrabb_event-field_kkrabb_event_disabled_nice'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_disabled_nice',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					0 => '0',
					1 => '1',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_boolean',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => 0,
				),
			),
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 28,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_disabled_nice',
			'label' => 'Easy access for disabled people',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(
					'display_label' => 1,
				),
				'type' => 'options_onoff',
				'weight' => '37',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_facebook_id'.
	$fields['node-kkrabb_event-field_kkrabb_event_facebook_id'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_facebook_id',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'number',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'number_integer',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'number',
					'settings' => array(
						'decimal_separator' => '.',
						'prefix_suffix' => TRUE,
						'scale' => 0,
						'thousand_separator' => ' ',
					),
					'type' => 'number_integer',
					'weight' => 24,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_facebook_id',
			'label' => 'Facebook Event URL',
			'required' => 0,
			'settings' => array(
				'max' => '',
				'min' => '',
				'prefix' => '',
				'suffix' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 0,
				'module' => 'number',
				'settings' => array(),
				'type' => 'number',
				'weight' => '41',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_facebook_page'.
	$fields['node-kkrabb_event-field_kkrabb_event_facebook_page'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_facebook_page',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '1024',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 26,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_facebook_page',
			'label' => 'Facebook Page URL',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '44',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_festival'.
	/*
	$fields['node-kkrabb_event-field_kkrabb_event_festival'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_festival',
			'foreign keys' => array(
				'tid' => array(
					'columns' => array(
						'tid' => 'tid',
					),
					'table' => 'taxonomy_term_data',
				),
			),
			'indexes' => array(
				'tid' => array(
					0 => 'tid',
				),
			),
			'locked' => '0',
			'module' => 'taxonomy',
			'settings' => array(
				'allowed_values' => array(
					0 => array(
						'vocabulary' => 'h_t_',
						'parent' => '0',
					),
				),
				'options_list_callback' => 'i18n_taxonomy_allowed_values',
			),
			'translatable' => '0',
			'type' => 'taxonomy_term_reference',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Hakið við hátið ef viðburður er hluti af hátið. Ef hátíð vantar í listan þarf að stofna hana í Taxanomy.',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'i18n_taxonomy',
					'settings' => array(),
					'type' => 'i18n_taxonomy_term_reference_link',
					'weight' => 59,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_festival',
			'label' => 'Hátíð',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_buttons',
				'weight' => '21',
			),
		),
	);
	*/

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_free'.
	$fields['node-kkrabb_event-field_kkrabb_event_free'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_free',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					0 => '0',
					1 => '1',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_boolean',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => 0,
				),
			),
			'deleted' => '0',
			'description' => 'Is the event free?',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 2,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_free',
			'label' => 'Free event',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(
					'display_label' => 1,
				),
				'type' => 'options_onoff',
				'weight' => '34',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_gps_lat'.
	$fields['node-kkrabb_event-field_kkrabb_event_gps_lat'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_gps_lat',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'number',
			'settings' => array(
				'decimal_separator' => ',',
			),
			'translatable' => '0',
			'type' => 'number_float',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'number',
					'settings' => array(
						'decimal_separator' => '.',
						'prefix_suffix' => TRUE,
						'scale' => 2,
						'thousand_separator' => ' ',
					),
					'type' => 'number_decimal',
					'weight' => 17,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_gps_lat',
			'label' => 'GPS position (latitude)',
			'required' => 0,
			'settings' => array(
				'max' => '',
				'min' => '',
				'prefix' => '',
				'suffix' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 0,
				'module' => 'number',
				'settings' => array(),
				'type' => 'number',
				'weight' => '42',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_gps_long'.
	$fields['node-kkrabb_event-field_kkrabb_event_gps_long'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_gps_long',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'number',
			'settings' => array(
				'decimal_separator' => ',',
			),
			'translatable' => '0',
			'type' => 'number_float',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'number',
					'settings' => array(
						'decimal_separator' => '.',
						'prefix_suffix' => TRUE,
						'scale' => 2,
						'thousand_separator' => ' ',
					),
					'type' => 'number_decimal',
					'weight' => 18,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_gps_long',
			'label' => 'GPS position (longitude)',
			'required' => 0,
			'settings' => array(
				'max' => '',
				'min' => '',
				'prefix' => '',
				'suffix' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 0,
				'module' => 'number',
				'settings' => array(),
				'type' => 'number',
				'weight' => '43',
			),
		),
	);
	/*
	// Exported field: 'node-kkrabb_event-field_kkrabb_event_ical_link'.
	$fields['node-kkrabb_event-field_kkrabb_event_ical_link'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_ical_link',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					0 => '0',
					1 => '1',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_boolean',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => 1,
				),
			),
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 30,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_ical_link',
			'label' => 'Display iCal download link',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(
					'display_label' => 1,
				),
				'type' => 'options_onoff',
				'weight' => '17',
			),
		),
	);
	*/

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_id'.
	$fields['node-kkrabb_event-field_kkrabb_event_id'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_id',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '30',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 39,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_id',
			'label' => 'Event ID',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '46',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_imgs'.
	$fields['node-kkrabb_event-field_kkrabb_event_imgs'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_imgs',
			'foreign keys' => array(
				'fid' => array(
					'columns' => array(
						'fid' => 'fid',
					),
					'table' => 'file_managed',
				),
			),
			'indexes' => array(
				'fid' => array(
					0 => 'fid',
				),
			),
			'locked' => '0',
			'module' => 'image',
			'settings' => array(
				'default_image' => 0,
				'uri_scheme' => 'public',
			),
			'translatable' => '0',
			'type' => 'image',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'deleted' => '0',
			'description' => 'Mynd fyrir viðburð, Verður að vera portrait-mynd (eins og plaggat eða passamynd.',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'image',
					'settings' => array(
						'image_link' => '',
						'image_style' => '',
					),
					'type' => 'image',
					'weight' => 12,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_imgs',
			'label' => 'Lítil mynd',
			'required' => 0,
			'settings' => array(
				'alt_field' => 0,
				'default_image' => 0,
				'file_directory' => '',
				'file_extensions' => 'png gif jpg jpeg',
				'max_filesize' => '2 MB',
				'max_resolution' => '',
				'min_resolution' => '',
				'title_field' => 0,
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'media',
				'settings' => array(
					'allowed_schemes' => array(
						'public' => 'public',
						'youtube' => 0,
					),
					'allowed_types' => array(
						'audio' => 0,
						'document' => 0,
						'image' => 'image',
						'video' => 0,
					),
					'browser_plugins' => array(
						'media_default--media_browser_1' => 0,
						'media_default--media_browser_my_files' => 0,
						'media_internet' => 0,
						'upload' => 0,
						'youtube' => 0,
					),
					'progress_indicator' => 'throbber',
				),
				'type' => 'media_generic',
				'weight' => '2',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_language'.
	$fields['node-kkrabb_event-field_kkrabb_event_language'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_language',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '128',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'In what language is the event held?',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 29,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_language',
			'label' => 'Language',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '33',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_price_kr'.
	$fields['node-kkrabb_event-field_kkrabb_event_price_kr'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_price_kr',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'number',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'number_integer',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => '0',
				),
			),
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'number',
					'settings' => array(
						'decimal_separator' => '.',
						'prefix_suffix' => TRUE,
						'scale' => 0,
						'thousand_separator' => ' ',
					),
					'type' => 'number_integer',
					'weight' => 42,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_price_kr',
			'label' => 'Miðaverð',
			'required' => 0,
			'settings' => array(
				'max' => '',
				'min' => '0',
				'prefix' => '',
				'suffix' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 0,
				'module' => 'number',
				'settings' => array(),
				'type' => 'number',
				'weight' => '12',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_registr_email'.
	$fields['node-kkrabb_event-field_kkrabb_event_registr_email'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_registr_email',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '128',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => '',
				),
			),
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 6,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_registr_email',
			'label' => 'Email of the person who accepts registrations',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '38',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_registr_req'.
	$fields['node-kkrabb_event-field_kkrabb_event_registr_req'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_registr_req',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					0 => '0',
					1 => '1',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_boolean',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => 0,
				),
			),
			'deleted' => '0',
			'description' => 'Is registration for the event required',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 5,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_registr_req',
			'label' => 'Registration required',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(
					'display_label' => 1,
				),
				'type' => 'options_onoff',
				'weight' => '36',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_rep_hours'.
	$fields['node-kkrabb_event-field_kkrabb_event_rep_hours'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_rep_hours',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					'00' => '00',
					'01' => '01',
					'02' => '02',
					'03' => '03',
					'04' => '04',
					'05' => '05',
					'06' => '06',
					'07' => '07',
					'08' => '08',
					'09' => '09',
					10 => '10',
					11 => '11',
					12 => '12',
					13 => '13',
					14 => '14',
					15 => '15',
					16 => '16',
					17 => '17',
					18 => '18',
					19 => '19',
					20 => '20',
					21 => '21',
					22 => '22',
					23 => '23',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_integer',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 33,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_rep_hours',
			'label' => 'Repeat Hours',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_select',
				'weight' => '24',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_rep_irregular'.
	$fields['node-kkrabb_event-field_kkrabb_event_rep_irregular'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_rep_irregular',
			'foreign keys' => array(),
			'indexes' => array(),
			'locked' => '0',
			'module' => 'date',
			'settings' => array(
				'cache_count' => '4',
				'cache_enabled' => 0,
				'granularity' => array(
					'day' => 'day',
					'hour' => 'hour',
					'minute' => 'minute',
					'month' => 'month',
					'second' => 0,
					'year' => 'year',
				),
				'timezone_db' => 'UTC',
				'todate' => '',
				'tz_handling' => 'site',
			),
			'translatable' => '0',
			'type' => 'datestamp',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'default' => array(
					'label' => 'above',
					'module' => 'date',
					'settings' => array(
						'format_type' => 'long',
						'fromto' => 'both',
						'multiple_from' => '',
						'multiple_number' => '',
						'multiple_to' => '',
					),
					'type' => 'date_default',
					'weight' => 52,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_rep_irregular',
			'label' => 'Repeated Irregular Dates',
			'required' => 0,
			'settings' => array(
				'default_value' => 'blank',
				'default_value2' => 'same',
				'default_value_code' => '',
				'default_value_code2' => '',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'date',
				'settings' => array(
					'increment' => '15',
					'input_format' => 'm/d/Y - H:i:s',
					'input_format_custom' => '',
					'label_position' => 'above',
					'text_parts' => array(),
					'year_range' => '-3:+3',
				),
				'type' => 'date_popup',
				'weight' => '29',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_rep_minutes'.
	$fields['node-kkrabb_event-field_kkrabb_event_rep_minutes'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_rep_minutes',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					'00' => '00',
					'01' => '01',
					'02' => '02',
					'03' => '03',
					'04' => '04',
					'05' => '05',
					'06' => '06',
					'07' => '07',
					'08' => '08',
					'09' => '09',
					10 => '10',
					11 => '11',
					12 => '12',
					13 => '13',
					14 => '14',
					15 => '15',
					16 => '16',
					17 => '17',
					18 => '18',
					19 => '19',
					20 => '20',
					21 => '21',
					22 => '22',
					23 => '23',
					24 => '24',
					25 => '25',
					26 => '26',
					27 => '27',
					28 => '28',
					29 => '29',
					30 => '30',
					31 => '31',
					32 => '32',
					33 => '33',
					34 => '34',
					35 => '35',
					36 => '36',
					37 => '37',
					38 => '38',
					39 => '39',
					40 => '40',
					41 => '41',
					42 => '42',
					43 => '43',
					44 => '44',
					45 => '45',
					46 => '46',
					47 => '47',
					48 => '48',
					49 => '49',
					50 => '50',
					51 => '51',
					52 => '52',
					53 => '53',
					54 => '54',
					55 => '55',
					56 => '56',
					57 => '57',
					58 => '58',
					59 => '59',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_integer',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 34,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_rep_minutes',
			'label' => 'Repeat Minutes',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_select',
				'weight' => '25',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_rep_monthdays'.
	$fields['node-kkrabb_event-field_kkrabb_event_rep_monthdays'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '7',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_rep_monthdays',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					'01' => '1',
					'02' => '2',
					'03' => '3',
					'04' => '4',
					'05' => '5',
					'06' => '6',
					'07' => '7',
					'08' => '8',
					'09' => '9',
					10 => '10',
					11 => '11',
					12 => '12',
					13 => '13',
					14 => '14',
					15 => '15',
					16 => '16',
					17 => '17',
					18 => '18',
					19 => '19',
					20 => '20',
					21 => '21',
					22 => '22',
					23 => '23',
					24 => '24',
					25 => '25',
					26 => '26',
					27 => '27',
					28 => '28',
					29 => '29',
					30 => '30',
					31 => '31',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 35,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_rep_monthdays',
			'label' => 'Repeat Monthdays',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_select',
				'weight' => '26',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_rep_months'.
	$fields['node-kkrabb_event-field_kkrabb_event_rep_months'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_rep_months',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					'January' => 'January',
					'February' => 'February',
					'March' => 'March',
					'April' => 'April',
					'May' => 'May',
					'June' => 'June',
					'July' => 'July',
					'August' => 'August',
					'September' => 'September',
					'October' => 'October',
					'November' => 'November',
					'December' => 'December',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 37,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_rep_months',
			'label' => 'Repeat Months',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_select',
				'weight' => '28',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_rep_weekdays'.
	$fields['node-kkrabb_event-field_kkrabb_event_rep_weekdays'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_rep_weekdays',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					'Mon' => 'Monday',
					'Tue' => 'Tuesday',
					'Wed' => 'Wednesday',
					'Thu' => 'Thursday',
					'Fri' => 'Friday',
					'Sat' => 'Saturday',
					'Sun' => 'Sunday',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 36,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_rep_weekdays',
			'label' => 'Repeat Weekdays',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_buttons',
				'weight' => '27',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_suite'.
	$fields['node-kkrabb_event-field_kkrabb_event_suite'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_suite',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '255',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Where exactly at the site the event will be held (room, hall, etc.).',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 19,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_suite',
			'label' => 'Salur',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '13',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_taxonomy'.
	$fields['node-kkrabb_event-field_kkrabb_event_taxonomy'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '-1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_taxonomy',
			'foreign keys' => array(
				'tid' => array(
					'columns' => array(
						'tid' => 'tid',
					),
					'table' => 'taxonomy_term_data',
				),
			),
			'indexes' => array(
				'tid' => array(
					0 => 'tid',
				),
			),
			'locked' => '0',
			'module' => 'taxonomy',
			'settings' => array(
				'allowed_values' => array(
					0 => array(
						'vocabulary' => 'kkrabb_vocabulary',
						'parent' => '0',
					),
				),
				'options_list_callback' => 'i18n_taxonomy_allowed_values',
			),
			'translatable' => '0',
			'type' => 'taxonomy_term_reference',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'taxonomy',
					'settings' => array(),
					'type' => 'taxonomy_term_reference_link',
					'weight' => 32,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_taxonomy',
			'label' => 'Tegund',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(),
				'type' => 'options_buttons',
				'weight' => '18',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_teaser_capt'.
	$fields['node-kkrabb_event-field_kkrabb_event_teaser_capt'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_teaser_capt',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '255',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Hámark 60 slög',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 7,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_teaser_capt',
			'label' => 'Stutt lýsing á viðburði',
			'required' => 1,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '4',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_teaser_text'.
	$fields['node-kkrabb_event-field_kkrabb_event_teaser_text'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_teaser_text',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(),
			'translatable' => '0',
			'type' => 'text_long',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Hámark 230 slög',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 31,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_teaser_text',
			'label' => 'Stuttur texti um viðburð',
			'required' => 1,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'rows' => '5',
				),
				'type' => 'text_textarea',
				'weight' => '5',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_tickets_avail'.
	$fields['node-kkrabb_event-field_kkrabb_event_tickets_avail'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_tickets_avail',
			'foreign keys' => array(),
			'indexes' => array(
				'value' => array(
					0 => 'value',
				),
			),
			'locked' => '0',
			'module' => 'list',
			'settings' => array(
				'allowed_values' => array(
					0 => '0',
					1 => '1',
				),
				'allowed_values_function' => '',
			),
			'translatable' => '0',
			'type' => 'list_boolean',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => array(
				0 => array(
					'value' => 0,
				),
			),
			'deleted' => '0',
			'description' => 'Are tickets available for the event',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'list',
					'settings' => array(),
					'type' => 'list_default',
					'weight' => 3,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_tickets_avail',
			'label' => 'Tickets available',
			'required' => 0,
			'settings' => array(
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'options',
				'settings' => array(
					'display_label' => 1,
				),
				'type' => 'options_onoff',
				'weight' => '35',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_tickets_url'.
	$fields['node-kkrabb_event-field_kkrabb_event_tickets_url'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_tickets_url',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '1024',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Dæmi: http://midi.is/ref/?r=DE67DFE81E0F433588F77CE770B7F057&p=15/NÚMER-FRÁ-MIDI.IS',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 4,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_tickets_url',
			'label' => 'URL - Hlekkur á miðasölu',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '120',
				),
				'type' => 'text_textfield',
				'weight' => '14',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_title_short'.
	$fields['node-kkrabb_event-field_kkrabb_event_title_short'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_title_short',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '255',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => 'Hámark 50 slög',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 1,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'ds_extras_field_template' => '',
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_title_short',
			'label' => 'Stutt heiti',
			'required' => 1,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '50',
				),
				'type' => 'text_textfield',
				'weight' => '3',
			),
		),
	);

	// Exported field: 'node-kkrabb_event-field_kkrabb_event_url'.
	$fields['node-kkrabb_event-field_kkrabb_event_url'] = array(
		'field_config' => array(
			'active' => '1',
			'cardinality' => '1',
			'deleted' => '0',
			'entity_types' => array(),
			'field_name' => 'field_kkrabb_event_url',
			'foreign keys' => array(
				'format' => array(
					'columns' => array(
						'format' => 'format',
					),
					'table' => 'filter_format',
				),
			),
			'indexes' => array(
				'format' => array(
					0 => 'format',
				),
			),
			'locked' => '0',
			'module' => 'text',
			'settings' => array(
				'max_length' => '1024',
			),
			'translatable' => '0',
			'type' => 'text',
		),
		'field_instance' => array(
			'bundle' => 'kkrabb_event',
			'default_value' => NULL,
			'deleted' => '0',
			'description' => '',
			'display' => array(
				'another_teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'default' => array(
					'label' => 'above',
					'module' => 'text',
					'settings' => array(),
					'type' => 'text_default',
					'weight' => 27,
				),
				'splashpage_list' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
				'teaser' => array(
					'label' => 'above',
					'settings' => array(),
					'type' => 'hidden',
					'weight' => 0,
				),
			),
			'entity_type' => 'node',
			'field_name' => 'field_kkrabb_event_url',
			'label' => 'Event Homepage URL',
			'required' => 0,
			'settings' => array(
				'text_processing' => '0',
				'user_register_form' => FALSE,
			),
			'widget' => array(
				'active' => 1,
				'module' => 'text',
				'settings' => array(
					'size' => '60',
				),
				'type' => 'text_textfield',
				'weight' => '45',
			),
		),
	);

	// Translatables
	// Included for use with string extractors like potx.
	t('Address');
	t('Address (cont.)');
	t('Address (continued)');
	t('Allur texti um viðburð');
	t('Are tickets available for the event');
	t('Bakgrunnsmynd (Stór)');
	t('Birtast í hægri dálki.');
	t('Date from');
	t('Date to');
	t('Display iCal download link');
	t('Dæmi: http://midi.is/ref/?r=DE67DFE81E0F433588F77CE770B7F057&p=15/NÚMER-FRÁ-MIDI.IS');
	t('Easy access for disabled people');
	t('Efni sem birtist í hægri dálki - box 1');
	t('Efni sem birtist í hægri dálki - box 2');
	t('Email of the person who accepts registrations');
	t('Event Homepage URL');
	t('Event ID');
	t('Event Performers List');
	t('Event description media');
	t('Event festival tax tid');
	t('Facebook Event URL');
	t('Facebook Page URL');
	t('Free event');
	t('Fyrir stakan viðburð');
	t('GPS position (latitude)');
	t('GPS position (longitude)');
	t('Grár kassi með texta sem birtist neðst í viðburðarlýsingu');
	t('Hakið við hátið ef viðburður er hluti af hátið. Ef hátíð vantar í listan þarf að stofna hana í Taxanomy.');
	t('Hámark 230 slög');
	t('Hámark 50 slög');
	t('Hámark 60 slög');
	t('Hátíð');
	t('In what language is the event held?');
	t('Is registration for the event required');
	t('Is the event free?');
	t('Language');
	t('Lítil mynd');
	t('Miðaverð');
	t('Mynd fyrir viðburð, Verður að vera portrait-mynd (eins og plaggat eða passamynd.');
	t('Nánari lýsing á viðburði aðskilið með gulri línu');
	t('Registration required');
	t('Repeat Hours');
	t('Repeat Minutes');
	t('Repeat Monthdays');
	t('Repeat Months');
	t('Repeat Weekdays');
	t('Repeated Irregular Dates');
	t('Salur');
	t('Setjið inn ID á youtube myndbandi. 
		Dæmi: Ef hlekkur á myndband er http://www.youtube.com/watch?v=NM-fDCYzstA
		Þá á að setja inn NM-fDCYzstA');
	t('Stutt heiti');
	t('Stutt lýsing á viðburði');
	t('Stuttur texti um viðburð');
	t('Stór bakgrunnsmynd af viðburði eða sal - Stærð skal vera 1350x550');
	t('Tegund');
	t('Tengdir viðburðir');
	t('Tickets available');
	t('Tímamerking');
	t('URL - Hlekkur á miðasölu');
	t('Where exactly at the site the event will be held (room, hall, etc.).');
	t('Youtube Video');
	t('kkrabb_event_beg_unixtime');
	t('Íbúi');

	return $fields;