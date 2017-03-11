<?php
// Database Configration
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '0237417599');
define('DB_NAME', 'lifegenatics');

$dbErrorMsg = 'Database connection Faild';

$conn = @mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if(mysqli_connect_errno()){
	die(
		$dbErrorMsg . ' ' . mysqli_connect_error() . " (".mysqli_connect_errno(). ")."
		);
}