<?php 
/**
 * Extract text value from field
 * @param $param $param['und']
 * @return stdClass
 */
function _extract_text($param, $lang='und'){

	if(isset($param['und'][0])){
		return (object)array(
			'value' => $param['und'][0]['value'],
			//'safe' => $param['und'][0]['safe_value'],
			'format' =>  (isset($param['und'][0]['format']))?$param['und'][0]['format']:'string',
			'lang' => $lang
		);
	}else{
		return (object)array(
			'value' => null,
			//'safe' => null,
			'format' => 'string',
			'lang' => $lang
		);
	}
}

/**
 * Extract date value from field
 * @param $param $param['und']
 * @return stdClass
 */
function _extract_date($param, $lang='und'){

	if(isset($param['und'][0])){
		$d = null;
		if( is_numeric($param['und'][0]['value']) ){
			$d = new DateTime();
			$d->setTimestamp($param['und'][0]['value']);
		}else if( is_string($param['und'][0]['value']) ){
			try{
				$d = new DateTime($param['und'][0]['value']);
			}catch(Exception $e){}
		}else{

		}
		return (object)array(
			'value' => ($d instanceof DateTime) ? $d->format('c') : null,
			//'safe' => ($d instanceof DateTime) ? $d->format('F j. Y H:m') : null,
			'format' => 'ISO 8601',
			'lang' => $lang
		);
	}else{
		return (object)array(
			'value' => null,
			//'safe' => null,
			'format' => 'ISO 8601',
			'lang' => $lang
		);
	}
}

/**
 * Extract bool value from field
 * @param $param $param['und']
 * @return stdClass
 */
function _extract_bool($param, $lang='und'){
	if(isset($param['und'][0])){
		return (object)array(
			'value' => (bool)$param['und'][0]['value'],
			//'safe' => (bool)$param['und'][0]['value'],
			'format' => 'bool',
			'lang' => $lang
		);		
	}else{
		return (object)array(
			'value' => null,
			//'safe' => null,
			'format' => 'bool',
			'lang' => $lang
		);
	}
}

/**
 * Extract int value from field
 * @param $param $param['und']
 * @return stdClass
 */
function _extract_int($param, $lang='und'){
	if(isset($param['und'][0])){
		return (object)array(
			'value' => (int)$param['und'][0]['value'],
			//'safe' => (int)$param['und'][0]['value'],
			'format' => 'int',
			'lang' => $lang
		);		
	}else{
		return (object)array(
			'value' => null,
			//'safe' => null,
			'format' => 'int',
			'lang' => $lang
		);
	}
}

/**
 * Extract float value from field
 * @param $param $param['und']
 * @return stdClass
 */
function _extract_float($param, $lang='und'){
	if(isset($param['und'][0])){
		return (object)array(
			'value' => (float)$param['und'][0]['value'],
			//'safe' => (float)$param['und'][0]['value'],
			'format' => 'float',
			'lang' => $lang
		);		
	}else{
		return (object)array(
			'value' => null,
			//'safe' => null,
			'format' => 'float',
			'lang' => $lang
		);
	}
}

/**
 * Extract image value from field
 * @param $param $param['und']
 * @return stdClass
 */
function _extract_img($param, $lang='und'){
	if(isset($param['und'][0])){
		$obj = file_load($param['und'][0]['fid']);
		return (object)array(
			'value' => (object) array(
				'title' => isset($param['und'][0]['title'])
					? $param['und'][0]['title']
					: null ,
				'width' => (isset($param['und'][0]['width']))
					? (int)$param['und'][0]['width']
					: null,
				'height' => (isset($param['und'][0]['height']))
					? (int)$param['und'][0]['height']
					: null,
				'filename' => (isset($obj->filename))
					? $obj->filename
					: null,
				'uri' => isset($obj->uri)
					? file_create_url($obj->uri)
					: null,
				'filemime' => isset($obj->filemime)
					? $obj->filemime
					: null,
				'filesize' => isset($obj->filesize)
					? (int)$obj->filesize
					: null
			),
			//'safe' => null,
			'format' => 'image',
			'lang' => $lang
		);		
	}else{
		return (object)array(
			'value' => (object) array(
				'title' => null,
				'width' => null,
				'height' => null,
				'filename' => null,
				'uri' => null,
				'filemime' => null,
				'filesize' => null
			),
			//'safe' => null,
			'format' => 'image',
			'lang' => $lang
		);
	}	
}

/**
 * Array of nodes is spliced to geter
 * and formatted into cachable object
 * @param $data Array
 * @return stdClass
 */
function _util_format_event( $data ){	
	
	//PRESET
	//	preset return object
	$var = (object)array(
		'id' 				=> null,
		'nid' 				=> null,
		'title' 			=> array(),
		'title_short' 		=> array(),
		'description' 		=> array(),
		'body' 				=> array(),
		'body_short'  		=> array(),
		'register_email' 	=> null,
		'register_req' 		=> null,
		'date_from' 		=> null,
		'date_to' 			=> null,
		'date_timestamp' 	=> null,
		'address' 			=> null,
		'address_cont' 		=> null,
		'youtube' 			=> null,
		'facebook_id' 		=> null,
		'facebook_page' 	=> null,
		'tickets_avail' 	=> null,
		'tickets_url'		=> null,
		'image' 			=> array(),
		'thumb' 			=> array(),
		'gps_long' 			=> null,
		'gps_lat' 			=> null,
		'price' 			=> null,
		'price_free' 		=> null,
		'event_url' 		=> null,
		'hall' 				=> null,
		'accessibility' 	=> null,
		'language' 			=> null,
		'category' 			=> array(),	
	);

	//FOR EVERY NODE
	//	for every node inject translations
	foreach($data as $n){

		$var->id = _extract_text($n->field_kkrabb_event_id);
		$var->nid = $n->nid;
		$var->title[] = (object)array(
				'value' => $n->title,
				//'save' 	=> $n->title,
				'format' => 'string',
				'lang' => $n->language);

		$var->title_short[] 	= _extract_text($n->field_kkrabb_event_title_short ,$n->language);
		$var->description[] 	= _extract_text($n->field_kkrabb_event_teaser_capt ,$n->language);
		$var->body[] 			= _extract_text($n->field_kkrabb_event_description ,$n->language);
		$var->body_short[] 		= _extract_text($n->field_kkrabb_event_teaser_text ,$n->language);

		$var->register_email 	= _extract_text($n->field_kkrabb_event_registr_email);
		$var->register_req 		= _extract_bool($n->field_kkrabb_event_registr_req);
		$var->date_from 		= _extract_date($n->field_kkrabb_event_date_from);
		$var->date_to 			= _extract_date($n->field_kkrabb_event_date_to);
		$var->date_timestamp 	= _extract_date($n->field_kkrabb_event_beg_unixtime);
		$var->address 			= _extract_text($n->field_kkrabb_event_address1);
		$var->address_cont 		= _extract_text($n->field_kkrabb_event_address2);
		$var->youtube 			= _extract_text($n->field_event_video_youtube);
		$var->facebook_id 		= _extract_text($n->field_kkrabb_event_facebook_id);
		$var->facebook_page 	= _extract_text($n->field_kkrabb_event_facebook_page);
		$var->tickets_avail 	= _extract_bool($n->field_kkrabb_event_tickets_avail);
		$var->tickets_url 		= _extract_text($n->field_kkrabb_event_tickets_url);
		$var->image[] 			= _extract_img($n->field_image_background ,$n->language);
		$var->thumb[] 			= _extract_img($n->field_kkrabb_event_imgs ,$n->language);
		$var->gps_long 			= _extract_float($n->field_kkrabb_event_gps_long);
		$var->gps_lat 			= _extract_float($n->field_kkrabb_event_gps_lat);
		$var->price 			= (object)array(
									'value' => array_map(function($i){
										return $i['value'];
									},$n->field_kkrabb_event_price_kr['und']),
									//'save' => null,
									'format' => 'int:array');
		$var->price_free 		= _extract_bool($n->field_kkrabb_event_free);
		$var->event_url 		= _extract_text($n->field_kkrabb_event_url);
		$var->hall 				= _extract_text($n->field_kkrabb_event_suite);
		$var->accessibility 	= _extract_bool($n->field_kkrabb_event_disabled_nice);
		$var->language 			= _extract_text($n->field_kkrabb_event_language);
		$var->category 			= (object)array(
									'value' => array_map(function($i){
										return $i['tid'];
									},$n->field_kkrabb_event_taxonomy['und']),
									//'save' => null,
									'format' => 'int:array');
		
	}

	return $var;
}
