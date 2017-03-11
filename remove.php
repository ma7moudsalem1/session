<?php
session_start();
require_once 'config.php';
$key   = $_GET['url'];
$link  = HOST_NAME . 'cart';
//array_splice($array, $key);
unset($_SESSION['name'][$key]);
for($i = 0; $i <= count($_SESSION['name']); $i++){
	if($_SESSION['name'][$i] != null){
	$name[] = $_SESSION['name'][$i];
}
}
//pre($name);
session_destroy();
session_unset();
session_start();
for($y = @key($name); $y <count($name); $y++){
	$_SESSION['name'][] = $name[$y];
}

echo "<script>window.open('$link', '_self')</script>";