<?php
	return array(
		/*
		'h_t_' => array(
			'name' => 'Hátíð',
			'bundle' => 'field_kkrabb_event_festival',
			'machine_name' => 'h_t_',
			'description' => 'Hér er flokkun sem heldur utan um hátíðir. Ef hátíð er ekki til þarf að stofna hana í taxanomy, sem heitir Hátíð',
			'hierarchy' => '0',
			'module' => 'taxonomy',
			'weight' => '0',
			'language' => 'und',
			'i18n_mode' => '4',
			'rdf_mapping' => array(
				'rdftype' => array(
					0 => 'skos:ConceptScheme',
				),
				'name' => array(
					'predicates' => array(
						0 => 'dc:title',
					),
				),
				'description' => array(
					'predicates' => array(
						0 => 'rdfs:comment',
					),
				),
			),
		),
		'harpa_web_module_event_att' => array(
			'name' => 'Tímamerking viðburða',
			'bundle' => 'field_event_att',
			'machine_name' => 'harpa_web_module_event_att',
			'description' => 'Tilgreinir: Nýtt, síðust forvöð og væntanlega viðburði',
			'hierarchy' => '0',
			'module' => 'taxonomy',
			'weight' => '-9',
			'language' => 'und',
			'i18n_mode' => '4',
			'rdf_mapping' => array(
				'rdftype' => array(
					0 => 'skos:ConceptScheme',
				),
				'name' => array(
					'predicates' => array(
						0 => 'dc:title',
					),
				),
				'description' => array(
					'predicates' => array(
						0 => 'rdfs:comment',
					),
				),
			),
		),
		'harpa_web_module_residents' => array(
			'name' => 'Íbúi',
			'bundle' => 'field_event_resident',
			'machine_name' => 'harpa_web_module_residents',
			'description' => 'Hakið við ef Íbúi Hörpu er hluti af viðburði.',
			'hierarchy' => '0',
			'module' => 'taxonomy',
			'weight' => '-8',
			'language' => 'und',
			'i18n_mode' => '4',
			'rdf_mapping' => array(
				'rdftype' => array(
					0 => 'skos:ConceptScheme',
				),
				'name' => array(
					'predicates' => array(
						0 => 'dc:title',
					),
				),
				'description' => array(
					'predicates' => array(
						0 => 'rdfs:comment',
					),
				),
			),
		),
		*/
		'kkrabb_vocabulary' => array(
			'name' => 'Tegund viðburða',
			'machine_name' => 'kkrabb_vocabulary',
			'description' => '',
			'hierarchy' => '0',
			'module' => 'taxonomy',
			'weight' => '-10',
			'language' => 'und',
			'i18n_mode' => '4',
			'rdf_mapping' => array(
				'rdftype' => array(
					0 => 'skos:ConceptScheme',
				),
				'name' => array(
					'predicates' => array(
						0 => 'dc:title',
					),
				),
				'description' => array(
					'predicates' => array(
						0 => 'rdfs:comment',
					),
				),
			),
		),
	);