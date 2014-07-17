<?php
	/**
	 * Remember that the array structure needs the property: 'type' => 'kkrabb_event'
	 */
	return array(
		array(
			'type' => 'kkrabb_event',
			'name' => t('Kolkrabbinn - Viðburðardagatal (event)'),
			'base' => 'node_content',
			'description' => t('Viðburðadagatal'),
			'has_title' => '1',
			'title_label' => t('Heiti viðburðar'),
			'help' => '',
		)
	);