<?php

/**
 * Get metadata for Kolkrabbinn 
 * content type
 *
 * @return Array
 */
function kkrabb_type_info(){

	$array = array();
	foreach (array_keys( field_info_instances("node",'kkrabb_event')) as $value) {
		$struct = field_info_field($value);
		$type = null;
		switch ($struct['type']) {
			case 'image':
				$type = (object)array(
					'type' => 'image',
					'length' => null
				);
				break;
			case 'taxonomy_term_reference':
			case 'entityreference':
				$type = (object)array(
					'type' => 'foreign-key',
					'length' => null
				);
				break;
			case 'text':
			case 'text_long':
				$type = (object)array(
					'type' => $struct['columns']['value']['type'],
					'length' => (isset($struct['columns']['value']['length']))
						? (int)$struct['columns']['value']['length']
						: null
				);
				break;
			case 'number_integer':
			case 'number_float':
				$type = (object)array(
					'type' => $struct['columns']['value']['type'],
					'length' => null,
				);
				break;
			case 'datestamp':
				$type = (object)array(
					'type' => 'datetime',
					'length' => null,
				);
				break;
			case 'list_boolean':
				$type = (object)array(
					'type' => 'array:bool',
					'length' => null,
				);
				break;
			case 'list_integer':
				$type = (object)array(
					'type' => 'array:int',
					'length' => null,
				);
				break;
			case 'list_text':
				$type = (object)array(
					'type' => 'array:text',
					'length' => null,
				);
				break;
			default:
				$type = (object)array(
					'type' => null,
					'length' => null
				);
				break;
		}
		$array[] = (object)array(
			'name' => $struct['field_name'],
			'type' => $type ,
			//'columns' => $struct['columns'],
		);
	}
	return $array;
}

/**
 * Get metadata for vocabulary / taxonomy
 * 
 * @return Array
 */
function kkrabb_taxonomy_info(){
	$array = array();
	foreach (array_keys( field_info_instances("node",'kkrabb_event')) as $value){
		$struct = field_info_field($value);
		if($struct['type']=='taxonomy_term_reference'){
			//print_r($struct);
			$taxid = taxonomy_vocabulary_machine_name_load($struct['settings']['allowed_values'][0]['vocabulary']);
			$array[] = (object)array(
				'name' => $taxid->name,
				'machine_name' => $taxid->machine_name,
				'field_name' => $struct['field_name'],
				'description' => $taxid->description,
				'hierarchy' => $taxid->hierarchy,
				'terms' => array_map(function($n){
					//return $n;
					return (object)array(
						'name' => $n->name,
						'description' => $n->description,
						'language' => $n->language,
						'weight' => (int)$n->weight,
						'depth' => (int)$n->depth
					);
				}, taxonomy_get_tree($taxid->vid))
			);
		}
	}
	return $array ;
}

/**
 * Get the event prefix that this Kolkrabbi uses
 *
 * @return string
 */
function kkrabb_get_prefix(){
	return variable_get("kkrab_module_identifier_prefix");
}

/**
 * Return an object array containing informations
 * about providers that this Kolkrabbi is subscribing to.
 *
 * @return array
 */
function kkrabb_get_providers(){
	$out = array();
	$providers = db_query('select * from `kkrabb_module_service`')->fetchAll();
	foreach ($providers as $value) {
		$out[] = array(
			'name' => $value->name,
			'url' => $value->url,
			'prefix' => $value->prefix
		);
	}
	return $out;
}

/**
 * Root for REST SERVER.
 *
 * GET: will print out dicoverable options
 * POST: not supported
 * PUT: not supported
 * DELETE: not supported
 * OPTIONS: sends needed HTTP headers
 *
 */
function rest_server(){

	//print_r(field_info_instances('kkrabb_event'));die();
	switch ( strtoupper($_SERVER['REQUEST_METHOD'])) {
		case 'GET':
			header("Access-Control-Allow-Origin: *");
			$def_lang = language_default();
			_util_rest_authentication();
			$data = _util_rest_response_template();
			$data->code = 200;
			$data->msg = "Success";
			$data->message = "";

			$data->data = (object)array(
				'urls' => array(
					(object)array(
						'url' => "http://".$_SERVER['HTTP_HOST'].'/'.kkrabb_module_api_url_prefix,
						'description' => 'This request'
					),
					(object)array(
						'url' => "http://".$_SERVER['HTTP_HOST'].'/'.kkrabb_module_api_url_prefix."/categories",
						'description' => 'Get all categories and their terms'
					),
					(object)array(
						'url' => "http://".$_SERVER['HTTP_HOST'].'/'.kkrabb_module_api_url_prefix."/categories/%",
						'description' => 'Get a category and it\'s terms. Substitute % for identifier'
					),
					(object)array(
						'url' =>"http://".$_SERVER['HTTP_HOST'].'/'.kkrabb_module_api_url_prefix."/events",
						'description' => 'Get events'
					),
					(object)array(
						'url' => "http://".$_SERVER['HTTP_HOST'].'/'.kkrabb_module_api_url_prefix."/events/%",
						'description' => 'Get an event. Substitute % for identifier'
					)
				)
			);
			$data->data->languages = (object)array('default'=>(object)array(
				'code' => $def_lang->language,
				'name' => $def_lang->name,
				'native' => $def_lang->native,
			),'list'=>array());
			foreach (language_list() as $item) {
				$data->data->languages->list[] = array(
					'code' => $item->language,
					'name' => $item->name,
					'native' => $item->native,
				);
			}
			$data->data->structure = kkrabb_type_info();
			$data->data->taxonomies = kkrabb_taxonomy_info();
			$data->data->prefix = kkrabb_get_prefix();
			$data->data->provides = kkrabb_get_providers();
			_util_rest_response($data,200);
			break;
		case 'OPTIONS':
			header("Access-Control-Allow-Origin: *");
			header('Access-Control-Allow-Headers: x-kkrab-key, x-kkrab-signature');
			break;
		case 'POST':
		case 'PUT':
		case 'DELETE':
		default:
			$data = _util_rest_response_template();
			$data->code = 501;
			_util_rest_response($data,501);
			break;
	}
}

/**
 * Request for categories
 *
 * GET: will print out dicoverable options
 * POST: not supported
 * PUT: not supported
 * DELETE: not supported
 * OPTIONS: sends needed HTTP headers
 *
 *
 */
function rest_server_categories(){
	switch ( strtoupper($_SERVER['REQUEST_METHOD'])) {
	//GET
	//	get all categories
	case 'GET':
		header("Access-Control-Allow-Origin: *");
		//print_r(taxonomy_get_vocabularies('kkrabb_event'));
		//print_r(taxonomy_get_tree(5));
		//return;
		_util_rest_authentication();
		$data = _util_rest_response_template();
		$data->code = 200;
		$data->msg = "Ok";
		$data->message = "All categories";
		$data->data = array();
		$vocabulary_ids = array_map(function($n){
			return $n->vid;
		},taxonomy_get_vocabularies('kkrabb_event'));
		foreach ($vocabulary_ids as $value) {
			$vocabulary = taxonomy_vocabulary_load($value);
			$obj = (object)array(
				'name' => $vocabulary->name,
				'machine_name' => $vocabulary->machine_name,
				'description' => $vocabulary->description,
				'language' => $vocabulary->language,
				'weight' => $vocabulary->weight,
			);
			$obj->terms = array();
			foreach (taxonomy_get_tree($vocabulary->vid) as $value) {
				$obj->terms[] = (object)array(
					'name' => $value->name,
					'description' => $value->description,
					'language' => ($value->language=='und')? null : $value->language,
					'weight' => $value->weight,
					//'value' => $value
				);
			}
			$data->data[] = $obj;
		}
		_util_rest_response($data,200);
			break;
		//OPTIONS
		//	send headers to allow for JavaScript clients
		case 'OPTIONS':
			header("Access-Control-Allow-Origin: *");
			header('Access-Control-Allow-Headers: x-kkrab-key, x-kkrab-signature');
			break;
		case 'POST':
		case 'PUT':
		case 'DELETE':
		default:
			$data = _util_rest_response_template();
			$data->code = 501;
			$data->msg = "Not supported";
			$data->message = "Method {$_SERVER['REQUEST_METHOD']} not supported";
			_util_rest_response($data,501);
			break;
	}
}

/**
 * Request for one category item
 *
 * GET: will print out category and terms
 * POST: not supported
 * PUT: not supported
 * DELETE: not supported
 * OPTIONS: not supported
 *
 */
function rest_server_categories_item($id){
	switch ( strtoupper($_SERVER['REQUEST_METHOD'])) {
		case 'GET':
			header("Access-Control-Allow-Origin: *");
			_util_rest_authentication();
			$data = _util_rest_response_template();
			if( ($item = taxonomy_vocabulary_machine_name_load($id))!=false ){
				$data->code = 200;
				$data->msg = "Ok";
				$data->message = "Category [{$item->name}] and terms";
				$vocabulary = taxonomy_vocabulary_load($item->vid);
				$data->data = (object)array(
					'name' => $vocabulary->name,
					'machine_name' => $vocabulary->machine_name,
					'description' => $vocabulary->description,
					'weight' => $vocabulary->weight,
				);
				$data->data->terms = array();
				foreach (taxonomy_get_tree($vocabulary->vid) as $value) {
					$data->data->terms[] = (object)array(
						'name' => $value->name,
						'description' => $value->description,
						'weight' => $value->weight,
					);
				}
				_util_rest_response($data,200);

			}else{
				$data->code = 404;
				$data->msg = "Not found";
				$data->message = "Category [{$id}] not found";
				_util_rest_response($data,404);
			}
			break;
		case 'OPTIONS':
			header("Access-Control-Allow-Origin: *");
			header('Access-Control-Allow-Headers: x-kkrab-key, x-kkrab-signature');
			break;
		case 'POST':
		case 'PUT':
		case 'DELETE':
		default:
			break;
	}
}

/**
 * Request events
 *
 * GET: will print out events
 * POST: not supported
 * PUT: not supported
 * DELETE: not supported
 * OPTIONS: not supported
 *
 */
function rest_server_events(){
	switch ( strtoupper($_SERVER['REQUEST_METHOD'])) {
		case 'GET':
			_util_rest_authentication();
			header("Access-Control-Allow-Origin: *");
			$return = _util_rest_response_template();
			$return->code = 200;
			$return->msg = "Ok";
			$return->message = "All events";
			$events = kkrabb_module_events_cache_get();
			$return->taxonomies = kkrabb_taxonomy_info(); 
			#$data->data->taxonomies = kkrabb_taxonomy_info(); 
			$return->data = array();
			foreach ($events as $item) {
				$return->data[] = $item;
			}
			_util_rest_response($return,200);
			break;
		case 'OPTIONS':
			header("Access-Control-Allow-Origin: *");
			header('Access-Control-Allow-Headers: x-kkrab-key, x-kkrab-signature');
			break;
		case 'POST':
			break;
		case 'PUT':
			break;
		case 'DELETE':
			break;
	}
}

/**
 * Request one event
 *
 * GET: will print out one event
 * POST: not supported
 * PUT: not supported
 * DELETE: not supported
 * OPTIONS: not supported
 *
 */
function rest_server_events_item($id){
	switch ( strtoupper($_SERVER['REQUEST_METHOD'])) {
		case 'GET':
			_util_rest_authentication();
			header("Access-Control-Allow-Origin: *");
			$data = _util_rest_response_template();
			/*
			$events_query = new EntityFieldQuery;
			$events_query = $events_query
				->entityCondition('entity_type', 'node')
				->propertyCondition('type', 'kkrabb_event')
				->propertyCondition('status', 1, '=')
				->fieldCondition('field_kkrabb_event_id','value',$id,'=');;
			$events_query_result = $events_query->execute();
			$res = array_pop($events_query_result['node']);
			$node = node_load($res->nid);
			$node_array = (array)$node;
			foreach ($node_array as $key => $value) {
				$info = field_info_field($key);
				if( isset($info['type']) && $info['type'] == 'taxonomy_term_reference' ){
					//print_r($info);
					
				}
			}

			//return;
			*/

			if( ($node=kkrabb_module_event_cache_get($id)) != null ){
				$data->code = 200;
				$data->msg = "Ok";
				$data->message = "Return event [{$id}]";
				$data->data = $node;
				_util_rest_response( $data ,200);
			}else{
				$data->code = 404;
				$data->msg = "Not found";
				$data->message = "Event with identifier [{$id}] not found";
				_util_rest_response( $data ,404);
			}
			break;
		case 'OPTIONS':
			header("Access-Control-Allow-Origin: *");
			header('Access-Control-Allow-Headers: x-kkrab-key, x-kkrab-signature');
			break;
		case 'POST':
			break;
		case 'PUT':
			break;
		case 'DELETE':
			break;
	}
}

/**
 * Authinticate user.
 *
 * This is an end-point function, i.e.
 * if the user is not authenticated, it
 * will send HTTP headers and response
 * and then exit()
 *
 */
function _util_rest_authentication(){ 
	return true;
	//KEY MISSING
	//	user is trying to access but hasn't
	//	provided a key or signature
	if( !isset($_SERVER['HTTP_X_KKRAB_KEY']) && !isset($_REQUEST['HTTP_X_KKRAB_SIGNATURE']) ){
		$data = _util_rest_response_template();
		$data->code = 401;
		$data->msg = "Unauthorized";
		$data->message = "credentials not provided";
		_util_rest_response($data,401);
		exit();
	}

	//QUERY DATABASE
	//	get user my key
	$result = db_query("select * from `kkrabb_module_authentication` where `key` = :key",array(
		'key' => $_SERVER['HTTP_X_KKRAB_KEY']
	));
	$record = $result->fetchObject();

	//USER NOT FOUND
	//	database was queried but no key found
	if($record===false){
		$data = _util_rest_response_template();
		$data->code = 403;
		$data->msg = "Forbidden";
		$data->message = "Incorrect credentials";
		_util_rest_response($data,401);
		exit();
	}

	//INVALID SIGNATURE
	//	md5( db:key + db:secret ) != request:signature
	if( $_SERVER['HTTP_X_KKRAB_SIGNATURE'] != md5($record->key.$record->secret) ){
		$data = _util_rest_response_template();
		$data->code = 403;
		$data->msg = "Forbidden";
		$data->message = "Incorrect credentials";
		_util_rest_response($data,401);
		exit();
	}
}

function _util_rest_response_template(){
	return (object)array(
		'code' => null,
		'msg' => null,
		'message' => null,
		'data' => null
	);
}

function _util_rest_response( $data, $code = 200){
	header("Content-type:application/json");
	switch ($code) {
	//200 OK
	//	Standard response for successful HTTP requests.
		case 200:
			http_response_code(200);
			break;
	//201 Created
	//	The request has been fulfilled and resulted in a new resource being created
		case 201:
			http_response_code(201);
			break;
	//400 Bad Request
	//	The request cannot be fulfilled due to bad syntax
		case 400:
			http_response_code(400);
			break;
	//401 Unauthorized
	//	Similar to 403 Forbidden, but specifically for use when authentication is 
	//	required and has failed or has not yet been provided.
		case 401:
			http_response_code(401);
			break;
	//403 Forbidden
	//	The request was a valid request, but the server is refusing to respond to it.[2] 
	//	Unlike a 401 Unauthorized response, authenticating will make no difference.
		case 403:
			http_response_code(403);
			break;
	//404 Not Found
	//	The requested resource could not be found but may be available again in the future
		case 404:
			http_response_code(404);
			break;
	//500 Internal Server Error
	//	A generic error message, given when no more specific message is suitable.
		case 500:
			http_response_code(500);
			break;
	//501 Not Implemented
	//	The server either does not recognize the request method, or it lacks the ability to fulfill the request.
		case 501:
			http_response_code(501);
			break;
		default:
			//TODO
			break;
	}
	echo json_encode($data);
}

/**
 * Get all events.
 * 
 * Query for all events stored in the cache table.
 * @return array
 */
function kkrabb_module_events_cache_get(){

	$return = array();
	$result = db_query("SELECT * FROM `kkrabb_module_cache` WHERE `deleted` != 1 AND `published` = 1 ORDER BY `from`");
	foreach ($result as $record) {
		$return[] = json_decode($record->data,false);
	}	
	return $return;
}

/**
 * Get one event
 *
 * Query for one event from the cache table
 * @param mixed $id
 * @return stdClass
 */
function kkrabb_module_event_cache_get($id){
	$result = db_query(
		"SELECT * FROM `kkrabb_module_cache` WHERE `deleted` != 1 AND `published` = 1 AND `id`=:id",
		array(
			':id'=>$id
		)
	);	
	$obj = $result->fetchObject();
	return ( $obj ) ? json_decode($obj->data,false) : false ;
}

/**
 * Get image via http from provider
 * and store it in /tmp folder
 *
 * @param string $uri
 * @param string $name name of the image
 */
function _kkrabb_fetch_image($uri,$name){
	$handle = curl_init();

	curl_setopt($handle, CURLOPT_USERAGENT, "kolkrabbin" );
	curl_setopt($handle, CURLOPT_URL, $uri);
	curl_setopt($handle, CURLOPT_POST, false);
	curl_setopt($handle, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($handle, CURLOPT_HEADER, true);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);

	$response = curl_exec($handle);
	$hlength  = curl_getinfo($handle, CURLINFO_HEADER_SIZE);
	$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
	$body     = substr($response, $hlength);

	//ERROR
	//	response is not 200, return false
	if ($httpCode != 200) {
		watchdog('kkrabb_module',"Can't fetch image {$uri}",null,WATCHDOG_ERROR);
		return false;
	//SUCCESS
	//	response in 200, save file to /tmp
	//	and then return the path to it
	}else{
		$random_name = file_directory_temp()."/".$name;
		$fp = fopen($random_name,'w');
		fwrite($fp, $body); 
		fclose($fp);
		return $random_name;
	}
}

/**
 * Sync one provider
 *
 * This function requires the ID of provider from
 * the 'kkrabb_module_service' db table
 *
 * @param int $id
 * @return bool
 */
function _kkrabb_sync_provider($id){

	//TRANSACTION BEGIN
	//	if something happens we want to be able to
	//	do a complete db rolback, that is why we start
	//	a database transaction
	$transaction = db_transaction();

	//GET CONFIG
	//	fetch a config record of provider
	$provider_record = db_query('select * from kkrabb_module_service where id = :id',array(':id'=>$id))->fetchObject();

	//FETCH META
	//	do a http request to provider and get his metadata.
	//	once the meta-data has been consumed, an HTTP call is made
	//	to get events. This is why the event consumption is done inside
	//	this IF statement.
	if(  ($return =  file_get_contents($provider_record->url, false))!==false ){
		$provider_meta = json_decode($return);

		//NOT 200
		//	response code from provider is not 200
		//	that means error and we need to exit
		if( $provider_meta===null || $provider_meta->code != 200 ){
			$transaction->rollback(); //DB rollback
			watchdog('kkrabb_module',"Provider {$provider_record->name} ".
				"can't provide meta-data",null,WATCHDOG_ERROR);
			echo __LINE__. "$provider_meta===null || $provider_meta->code != 200 \n";
			return false;
		}
		
		//GET LANGUAGES
		//	get all installed languages of consumer
		$consumer_languages = language_list();
		
		watchdog('kkrabb_module',"Provider {$provider_record->name} queried ".
			"for metadata",null,WATCHDOG_INFO);

		//SYNC LANGUAGES
		//	if allowed, make sure that the languages
		//	are in sync
		if($provider_record->create_language){
			foreach ($provider_meta->data->languages->list as $value) {
				if( array_key_exists($value->code, $consumer_languages) ){
				}else{
					locale_add_language($value->code, $value->name, $value->native);
					watchdog('kkrabb_module',"Provider {$provider_record->name} created ".
						"language [{$value->code}] - {$value->name}",null,WATCHDOG_INFO);
				}
			}
		}

		//UPDATED LANGUAGE LIST
		//	maybe we added new languages to consumer or not in the IF statement
		//	above, eather way we update available language list of consumer.
		$consumer_languages = language_list();

		//SYNC TAXONOMIES
		//	if allowed, set vocabulary in sync
		if($provider_record->create_taxonomies){

			foreach ($provider_meta->data->taxonomies as $vocabulary) {
				$consumer_vocabulary_item = taxonomy_vocabulary_machine_name_load($vocabulary->machine_name);
				//VOCABULARY NOT FOUND
				//	this machine name doesn't exist, create it
				if(!$consumer_vocabulary_item){
					taxonomy_vocabulary_save((object)array(
						'name' => $vocabulary->name,
						'machine_name' => $vocabulary->machine_name,
						'description' => $vocabulary->description,
						'hierarchy' => $vocabulary->hierarchy,
					));
					$consumer_vocabulary_item = taxonomy_vocabulary_machine_name_load($vocabulary->machine_name);
					watchdog('kkrabb_module',"Provider {$provider_record->name} created ".
						"vocabulary [{$vocabulary->machine_name}] - {$vocabulary->name}",null,WATCHDOG_INFO);
				//VOCABULARY FOUND
				//	no need to create it
				}else{
				}

				//ADD TERMS
				//
				foreach ($vocabulary->terms as $term) {
					$t = taxonomy_get_term_by_name($term->name,$vocabulary->machine_name);
					if( count($t)>0 ){
					}else{
						taxonomy_term_save((object)array(
							'vid' => $consumer_vocabulary_item->vid,
							'name' => $term->name,
							'description' => $term->description,
							'weight' => $term->weight,
						));
						watchdog('kkrabb_module',"Provider {$provider_record->name} created ".
							"term {$vocabulary->machine_name} -> {$term->name}",null,WATCHDOG_INFO);						
					}
				}

				//CREATE FIELD IN CONTENT TYPE
				//	now we have to create a field in kkrabb_event content type
				//	that references this vocabulary/taxonomy that we were just
				//	creating. But only if the field doesn't exists.
				if (!field_info_field($vocabulary->field_name)) {
					//db_drop_table('field_data_'.$vocabulary->field_name); //TODO debug only
					//db_drop_table('field_revision_'.$vocabulary->field_name); //TODO debug only
					//	Create the field
					$field = array(
						'field_name' => $vocabulary->field_name, 
						'type' => 'taxonomy_term_reference',
						'settings' => array(
							'allowed_values' => array(
								array(
									'vocabulary' => $vocabulary->machine_name,
									'parent' => 0
								)
							),
						), 
					);
					field_create_field($field);

					// Create the instance on the bundle.
					$instance = array(
						'field_name' => $vocabulary->field_name, 
						'entity_type' => 'node', 
						'label' => $vocabulary->name, 
						'bundle' => 'kkrabb_event',
						'required' => false,
						'widget' => array(
							'type' => 'options_select',
						), 
					);
					field_create_instance($instance);
					watchdog('kkrabb_module',"Provider {$provider_record->name} created ".
						"field:taxonomy_term_reference - {$vocabulary->machine_name} -> {$vocabulary->machine_name}",null,WATCHDOG_INFO);
				}
			}
		}


		//FETCH EVENTS
		//	now he have kolkrabbinn content-type as we want it and it's ready
		//	to consume events. Lets start by makeing an HTTP call to provider
		if(($events =  file_get_contents($provider_record->url.'/events', false))!==false ){
			$provider_events = json_decode($events);

			//NOT 200
			//	response code from provider is not 200
			//	that means error and we need to exit
			if( $provider_events->code != 200 ){
				$transaction->rollback(); //DB rollback
				watchdog('kkrabb_module',"Provider {$provider_record->name} ".
					"can't provide events data",null,WATCHDOG_ERROR);
				echo __LINE__. "$provider_events->code != 200 \n";
				return false;
			}

			//FOR EVERY EVENT
			//	for every event entry in provider data-dump,
			//	create,update or delete
			foreach($provider_events->data as $event){

				//WHICH LANGUAGES
				//	cross-reference which translations should be imported.
				//	If the translation is in language 'und', we want it, If the event
				//	is in language that we have currently installed we want it, else we don't
				$language_position_array = array();
				for($i=0;$i<count($event->meta->languages);$i++){
					if( $event->meta->languages[$i]->language == 'und' &&  $event->meta->languages[$i]->active == true){
						$language_position_array[] = $i;
					}else if( array_key_exists($event->meta->languages[$i]->language, $consumer_languages) &&  $event->meta->languages[$i]->active == true ){
						$language_position_array[] = $i;
					}
				}

				//DO ACTUAL CREATE/UPDATE
				//	and now for the actual operation. Try to find
				//	a node to update or create a new one.
				$translation_id = null;
				foreach ($language_position_array as $index) {
					$query = new EntityFieldQuery();
					$query->entityCondition('entity_type', 'node')
						->propertyCondition('type', 'kkrabb_event')
						->fieldCondition('field_kkrabb_event_id', 'value', $event->record->id->value, '=');
					$result = $query->execute();

					//PLACEHOLDER
					//	placeholder for the node that is to be injected into
					//	the database;
					$node = null;

					//OLD NODE
					//	 node was found that has the same eventID as the incomming one
					if( isset($result['node']) ){
						//NODE
						//	now we know that a event exists that has the same eventID. Now he have
						//	to find the correct translation node. To do that we go to the 'node' table
						//	where we will extract the 'tnid'.
						//	TODO this line provides error: Strict warning: Only variables should be passed by reference in
						$node_record = db_query(
							'select * from `node` where nid=:nid',
							array(':nid'=>array_pop(array_keys($result['node'])) )
						)->fetchObject();
						
						//TRANSLATIONS
						//	next we use this 'tnid' and find all translations of this node
						$node_translations = translation_node_get_translations($node_record->tnid);

						//TRANSLATION FOUND
						//	translation array is not null and it contains a key
						//	that is the same as the language that we are dealing with, we
						//	therefor load that node
						if( count($node_translations) != 0 && array_key_exists($event->record->title[$index]->lang,$node_translations) ){
							$node = node_load( $node_translations[$event->record->title[$index]->lang]->nid );
							watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$event->record->title[$index]->lang}] ".
								" updated",null,WATCHDOG_INFO);
						//TRANSLATION FOUND
						//	translation was found but it doesn't contain the language
						//	that we are dealing with. We need to create new node translation
						}else if( count($node_translations) != 0 && !array_key_exists($event->record->title[$index]->lang,$node_translations) ){
							watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$event->record->title[$index]->lang}] ".
								" translated",null,WATCHDOG_INFO);
							$node = new stdClass();
							$node->type = "kkrabb_event";
							$node->title = $event->record->title[$index]->value;
							$node->language = $event->record->title[$index]->lang;
							node_object_prepare($node);
							$node->uid = 1;
							$node->tnid = $node_record->tnid;
							$translation_id = $node_record->tnid;
						//NOT FOUND
						//	the translation array is null or empty but since we know that at
						//	least one node contains our eventID, we will create new translation
						}else if(empty($node_translations)){
							watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$event->record->title[$index]->lang}] ".
								" translated for the first time",null,WATCHDOG_INFO);
							$node = new stdClass();
							$node->type = "kkrabb_event";
							$node->title = $event->record->title[$index]->value;
							$node->language = $event->record->title[$index]->lang;
							node_object_prepare($node);
							$node->uid = 1;
							$node->tnid = $node_record->tnid;
							$translation_id = $node_record->tnid;
						}else{
							//TODO is there an else statement?
						}

					//NEW NODE
					//	no node was found with this eventID so 
					//	we need to create one
					}else{
						echo "New node: {$event->record->id->value}\n";
						$node = new stdClass();
						$node->type = "kkrabb_event";
						$node->title = $event->record->title[$index]->value;
						$node->language = $event->record->title[$index]->lang;
						node_object_prepare($node);
						$node->uid = 1;
						if($translation_id!=null){
							$node->tnid = $translation_id;
						}
						watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$event->record->title[$index]->lang}] ".
							" created",null,WATCHDOG_INFO);						
					}
					
					//GET IMAGES
					//	fetch an image via HTTP, if there is a record of an image from
					//	provider but it can't be downloaded, we will stop the process
					//	and roleback everything that we have done
					if( $event->record->image[$index]->value->uri != null && 
						($file_path = _kkrabb_fetch_image($event->record->image[$index]->value->uri,$event->record->image[$index]->value->filename)) !== false ){
						$file = (object) array(
							'uid' => 1,
							'uri' => $file_path,
							'filemime' => $event->record->image[$index]->value->filemime,
							'status' => 1,
						);
						// You can specify a subdirectory, e.g. public://foo/
						$file = file_copy($file, 'public://');
						$node->field_image_background['und'][0] = (array) $file;
						watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$event->record->title[$index]->lang}] ".
							" fecthing image - {$event->record->image[$index]->value->filename}",null,WATCHDOG_INFO);	
					}else{
						/*
						$transaction->rollback(); //DB rollback
						watchdog('kkrabb_module',"Provider {$provider_record->name} ".
							"can't cant produce image {$event->record->image[$index]->value->filename}",null,WATCHDOG_ERROR);
						echo __LINE__. "get image \n";
						return false;
						*/
					}

					//GET THUMB
					//	fetch an image via HTTP, if there is a record of an image from
					//	provider but it can't be downloaded, we will stop the process
					//	and roleback everything that we have done
					if( $event->record->thumb[$index]->value->uri != null && 
						($file_path = _kkrabb_fetch_image($event->record->thumb[$index]->value->uri,$event->record->thumb[$index]->value->filename)) !== false ){
						$file = (object) array(
							'uid' => 1,
							'uri' => $file_path,
							'filemime' => $event->record->thumb[$index]->value->filemime,
							'status' => 1,
						);
						// You can specify a subdirectory, e.g. public://foo/
						$file = file_copy($file, 'public://');
						$node->field_kkrabb_event_imgs['und'][0] = (array) $file;
						watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$event->record->title[$index]->lang}] ".
							" fecthing thumb - {$event->record->image[$index]->value->filename}",null,WATCHDOG_INFO);
					}else{
						/*
						$transaction->rollback(); //DB rollback
						watchdog('kkrabb_module',"Provider {$provider_record->name} ".
							"can't cant produce thumb {$event->record->image[$index]->value->filename}",null,WATCHDOG_ERROR);
						echo __LINE__. "get thumb \n";
						return false;
						*/
					}
					

					//UPDATE DATA
					//	now we repopulate the node with field-data from the provider
					$node->title = $event->record->title[$index]->value;
					$node->field_kkrabb_event_title_short['und'][0]['value'] 	= $event->record->title_short[$index]->value;
					$node->field_kkrabb_event_teaser_capt['und'][0]['value'] 	= $event->record->description[$index]->value;
					$node->field_kkrabb_event_teaser_text['und'][0]['value'] 	= $event->record->body_short[$index]->value;
					$node->field_kkrabb_event_description['und'][0]['value'] 	= $event->record->body[$index]->value;
					$node->field_kkrabb_event_id['und'][0]['value'] 			= $event->record->id->value;

					$node->field_kkrabb_event_registr_email['und'][0]['value']	= $event->record->register_email->value;
					$node->field_kkrabb_event_registr_req['und'][0]['value']	= (int)$event->record->register_req->value; 	
					$node->field_kkrabb_event_date_from['und'][0]['value']		= strtotime($event->record->date_from->value); 		
					$node->field_kkrabb_event_date_to['und'][0]['value']		= strtotime($event->record->date_to->value); 		
					$node->field_kkrabb_event_beg_unixtime['und'][0]['value']	= strtotime($event->record->date_timestamp->value); 
					$node->field_kkrabb_event_address1['und'][0]['value']		= $event->record->address->value; 		
					$node->field_kkrabb_event_address2['und'][0]['value']		= $event->record->address_cont->value; 	
					$node->field_event_video_youtube['und'][0]['value']			= $event->record->youtube->value; 		
					$node->field_kkrabb_event_facebook_id['und'][0]['value']	= $event->record->facebook_id->value; 	
					$node->field_kkrabb_event_facebook_page['und'][0]['value']	= $event->record->facebook_page->value; 	
					$node->field_kkrabb_event_tickets_avail['und'][0]['value']	= (int)$event->record->tickets_avail->value; 	
					$node->field_kkrabb_event_tickets_url['und'][0]['value']	= $event->record->tickets_url->value; 	
					$node->field_kkrabb_event_gps_long['und'][0]['value']		= $event->record->gps_long->value; 		
					$node->field_kkrabb_event_gps_lat['und'][0]['value']		= $event->record->gps_lat->value; 		
					//TODO cant insert multiple values
					//$node->ield_kkrabb_event_price_kr['und']					= array_map($event->record->price->value, function($n){
					//	return array('value' => $n);
					//}); 			
					$node->field_kkrabb_event_free['und'][0]['value']			= (int)$event->record->price_free->value; 	
					$node->field_kkrabb_event_url['und'][0]['value']			= $event->record->event_url->value; 		
					$node->field_kkrabb_event_suite['und'][0]['value']			= $event->record->hall->value; 			
					$node->field_kkrabb_event_disabled_nice['und'][0]['value']	= (int)$event->record->accessibility->value; 	
					$node->field_kkrabb_event_language['und'][0]['value']		= $event->record->language->value; 
					$node->field_kkrabb_event_taxonomy['und'][0]['tid']			= $event->record->category->value; 

					try{
						$node = node_submit($node); // Prepare node for a submit
						node_save($node); // After this call we'll get a nid

						if($translation_id==null){
							$translation_id = $node->nid;
							$node->tnid = $translation_id;
							node_save($node);
						}
					}catch(Exception $e){
						$transaction->rollback(); //DB rollback
						echo __LINE__. "node save \n";
						return false;
					}

				}

				//DO ACTUAL DELETE
				//	and now we need to delete inactive events. 
				foreach ($event->meta->languages as $value) {
					if($value->active == false){
						$query = new EntityFieldQuery();
						$query->entityCondition('entity_type', 'node')
							->propertyCondition('type', 'kkrabb_event')
							->fieldCondition('field_kkrabb_event_id', 'value', $event->record->id->value, '=')
							->propertyCondition('language', $value->language, '=');
						$result = $query->execute();
						if( isset($result['node']) ){
							$del_key = array_keys($result['node']);
							node_delete( $del_key[0] );
							watchdog('kkrabb_module',"Event:{$event->record->id->value}/[{$value->language}] ".
								" deleted",null,WATCHDOG_INFO);	
						}
					}
				}

			}


		//CAN'T FETCH EVENTS
		//	something went wrong when trying
		//	to fetch events from provider, http error
		}else{
			watchdog('kkrabb_module',"Can't fetch events from provider:{$provider_record->url}/events ".
				" ",null,WATCHDOG_ERROR);	
			echo __LINE__. "kkrabb_module Can't fetch events from provider:{$provider_record->url}/events \n";
			return false;
		}

	//CAN'T FETCH META
	//	something went wrong when trying to fetch
	//	metadata from provider, http error
	}else{
		watchdog('kkrabb_module',"Can't fetch metadata from provider:{$provider_record->url}/events ".
			" ",null,WATCHDOG_ERROR);
			echo __LINE__. "Can't fetch metadata from provider:{$provider_record->url}/events \n";	
		return false;
	}	

	//UPDATE SERVICE TABLE
	//	
	db_update('kkrabb_module_service')->fields(array(
		'last_sync' => date('Y-m-d H:i:s')
	))->condition("id",$id,'=')->execute();
	

	//SUCCESS
	//	everything worked as we wanted, we therefor
	//	return TRUE ;)
	unset($transaction); //Commit DB transaction
	return true;
}

/*
function _kkrabb_module_provider_get_meta(){
	// Create a stream
	$opts = array(
		'http'=>array(
		'method'=>"GET",
		'header'=>"Accept-language: en\r\n" .
		"Cookie: foo=bar\r\n"
		)
	);

	$context = stream_context_create($opts);

	if(  ($return =  file_get_contents('http://127.0.0.1:9999/api.kkrab', false, $context))!==false ){
		print_r(json_decode($return));
	}else{
		die("error");
	}

}
*/




if (!function_exists('http_response_code')) {
        function http_response_code($code = NULL) {

            if ($code !== NULL) {

                switch ($code) {
                    case 100: $text = 'Continue'; break;
                    case 101: $text = 'Switching Protocols'; break;
                    case 200: $text = 'OK'; break;
                    case 201: $text = 'Created'; break;
                    case 202: $text = 'Accepted'; break;
                    case 203: $text = 'Non-Authoritative Information'; break;
                    case 204: $text = 'No Content'; break;
                    case 205: $text = 'Reset Content'; break;
                    case 206: $text = 'Partial Content'; break;
                    case 300: $text = 'Multiple Choices'; break;
                    case 301: $text = 'Moved Permanently'; break;
                    case 302: $text = 'Moved Temporarily'; break;
                    case 303: $text = 'See Other'; break;
                    case 304: $text = 'Not Modified'; break;
                    case 305: $text = 'Use Proxy'; break;
                    case 400: $text = 'Bad Request'; break;
                    case 401: $text = 'Unauthorized'; break;
                    case 402: $text = 'Payment Required'; break;
                    case 403: $text = 'Forbidden'; break;
                    case 404: $text = 'Not Found'; break;
                    case 405: $text = 'Method Not Allowed'; break;
                    case 406: $text = 'Not Acceptable'; break;
                    case 407: $text = 'Proxy Authentication Required'; break;
                    case 408: $text = 'Request Time-out'; break;
                    case 409: $text = 'Conflict'; break;
                    case 410: $text = 'Gone'; break;
                    case 411: $text = 'Length Required'; break;
                    case 412: $text = 'Precondition Failed'; break;
                    case 413: $text = 'Request Entity Too Large'; break;
                    case 414: $text = 'Request-URI Too Large'; break;
                    case 415: $text = 'Unsupported Media Type'; break;
                    case 500: $text = 'Internal Server Error'; break;
                    case 501: $text = 'Not Implemented'; break;
                    case 502: $text = 'Bad Gateway'; break;
                    case 503: $text = 'Service Unavailable'; break;
                    case 504: $text = 'Gateway Time-out'; break;
                    case 505: $text = 'HTTP Version not supported'; break;
                    default:
                        exit('Unknown http status code "' . htmlentities($code) . '"');
                    break;
                }

                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                header($protocol . ' ' . $code . ' ' . $text);

                $GLOBALS['http_response_code'] = $code;

            } else {

                $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

            }

            return $code;

        }
    }
