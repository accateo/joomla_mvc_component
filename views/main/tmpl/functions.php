<?php 



function q($query){

	

	//mi connetto al database Joomla

	$db = JFactory::getDBO();



	$query_joomla = $db->getQuery(true);



	$query_joomla = $query;

	

	$db->setQuery((string)$query_joomla);



	$result = $db->loadObjectList();

	

	

	return $result;

}



function db_ext(){

	

	$option = array(); 

				 

	$option['driver']   = 'mysql';            // Database driver name

	$option['host']     = '127.0.0.1'; 				// Database host name

	$option['user']     = '';   // User for database authentication

	$option['password'] = '';     // Password for database authentication

	$option['database'] = '';   // Database name

	$option['prefix']   = '';                 // Database prefix (may be empty)

	$db_external = JDatabase::getInstance( $option );

	return $db_external;

	

	

	

	

}



function fileUpload($max, $msg){

	//Retrieve file details from uploaded file, sent from upload form

	$file = JRequest::getVar('userImage', null, 'files', 'array');

	$userid = $_REQUEST['user_idImage'];

	// Retorna: Array ( [name] => mod_simpleupload_1.2.1.zip [type] => application/zip 

	// [tmp_name] => /tmp/phpo3VG9F [error] => 0 [size] => 4463 ) 

 

	if(isset($file)){ 

		//Clean up filename to get rid of strange characters like spaces etc

		$filename = JFile::makeSafe($file['name']);

 

		if($file['size'] > $max) $msg = JText::_('ONLY_FILES_UNDER').' '.$max;

		//Set up the source and destination of the file

 

		$src = $file['tmp_name'];

		$dest = JPATH_COMPONENT . DS . "user_images" . DS . $filename;

 	  

		   if ( JFile::upload($src, $dest) ) {

 

  		       //Redirect to a page of your choice

			$msg = JText::_('FILE SALVATO CORRETTAMENTE');

		   } else {

			  //Redirect and throw an error message

			$msg = JText::_('ERROR_IN_UPLOAD');

		   }

		   

	  

	    $db_external = db_k2();

		$query = $db_external->getQuery(true);			

		$query->select('*');

		$query->from('');

		$query->where('');

		$db_external->setQuery((string)$query);

		$result=$db_external->loadAssocList();

	

		if($result){

				 

		   $db_external = db_k2();

		   $query = $db_external->getQuery(true);			

		   $query='';

		   $db_external->setQuery((string)$query);

		   $result=$db_external->loadAssocList();

		 }

		 else{

			 $db_external = db_k2();

			 $query_insert = $db_external->getQuery(true);

			 $query_insert='';

			 $db_external->setQuery((string)$query_insert);

			 $result=$db_external->loadAssocList();

		}

	

		

		echo '<script language="javascript">';

echo 'alert("'.$msg.'")';

echo '</script>';

	}

	return $msg;

}



function db_k2(){

	

	$option = array();

	

    $option['driver']   = 'mysql';            // Database driver name

    $option['host']     = '127.0.0.1'; 				// Database host name

    $option['user']     = '';   // User for database authentication

    $option['password'] = '';     // Password for database authentication

    $option['database'] = '';   // Database name

    $option['prefix']   = '';                 // Database prefix (may be empty)

    $db_external = JDatabase::getInstance( $option );

	return $db_external;

	

	

	

	

}

















































?>