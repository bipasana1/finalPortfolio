<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', $env['DBNAME']);
	define('DBHOST', $env['DBHOST']);
	define('DBUSER', $env['DBUSER']);
	define('DBPASS', $env['DBPASS']);
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost:8888/');

}else
{
	/** database config **/
	define('DBNAME', 'finalPortfolio');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBDRIVER', '');

	define('ROOT', 'http://localhost:8888/');

}

define('APP_NAME', "My Webiste");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);