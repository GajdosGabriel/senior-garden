<?php

/**
 * *************************************************************************************************
 * Identification of the current active page for the project
 * *************************************************************************************************
 */

function qt_get_current_url() {

  $protocol = strpos( strtolower( $_SERVER[ 'SERVER_PROTOCOL' ] ), 'https' ) === FALSE ? 'http' : 'https';
  $host = $_SERVER[ 'HTTP_HOST' ];
  $script = $_SERVER[ 'SCRIPT_NAME' ];
  $params = $_SERVER[ 'QUERY_STRING' ];

  $currentUrl = $protocol . '://' . $host . $script . '?' . $params;

  return $currentUrl;

}

function qt_get_current_page_file_name() {

  $page_full_name = $_SERVER[ 'PHP_SELF' ];
  $page_name_array = explode( '/', $page_full_name );
  $array_count = count( $page_name_array );
  $page_name = $page_name_array[ $array_count - 1 ];

  return $page_name;

}

// Note: http://php.net/manual/en/function.func-get-args.php
function qt_active_if() {

  $args = func_get_args();
	$current_page = qt_get_current_page_file_name();

  foreach ( $args as $arg ) {

  	//echo $arg;

  	if( $arg == $current_page ) {
  		echo 'active';
  		return;
  	}

  }

}


?><!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="Senior Garden n.o." content="Senior Garden, zariadenie pre dôchodcov">
