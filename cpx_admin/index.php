<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}  
require_once 'config.php'; 
require_once 'layout/header.tmp.php';
require_once 'layout/aside.tmp.php'; 

$page = $_GET['p'];
if(isset($page)){
    $fileName = 'pages/' . $page .'.php';
         if(file_exists($fileName)){
            require $fileName;
         }else{
            require 'pages/dashboard.php';
         }
}else{
    require_once 'pages/dashboard.php';
}

require_once 'layout/footer.tmp.php'; 


?>