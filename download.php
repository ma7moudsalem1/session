<?php
require_once 'db_conn.php';
require_once 'config.php';
if(isset($_GET['url'])){
	//$url = 'uploads/product/'.mysqli_real_escape_string($conn, $_GET['url']);
  //header("Content-Type: application/octet-stream");
$file = $_GET["url"].'.pdf';
//echo $file. '<br>';
$path = HOST_NAME.'uploads/product/';
//echo $path.'<br>';
$fullfile = $path.$file;
//echo $fullfile;      

        //header("Content-type:application/pdf");   
 		header("Content-Disposition: attachment; filename=".$file); 
        header("Content-type: application/octet-stream");                       
        header('Content-Length: ' . filesize($fullfile));
        header("Cache-control: private"); //use this to open files directly                     
        readfile($fullfile);
        flush(); // this doesn't really matter.
$fp = fopen($fullfile, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp);
//echo "<script>window.history.back();</script>";
}