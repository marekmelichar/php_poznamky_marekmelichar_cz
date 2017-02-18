<?php

// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


// require stuff
if( !session_id() ) @session_start();
require_once 'vendor/autoload.php';


// global variables
$base_url = 'http://poznamky.marekmelichar.cz';


// connect to db
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'marekmel_poznamky',
	'server'        => 'localhost',
	'username'      => 'marekmel_pozn',
	'password'      => '9852174563',
	'charset'       => 'utf8'
]);


// global functions
require_once 'functions.php';
