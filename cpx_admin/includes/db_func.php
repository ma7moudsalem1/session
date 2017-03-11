<?php
function confirem_result($result){
	if($result){
		return true;
	}else{
		return null;
	}
}


// select all

function getData($table){
	global $conn;
	$q 	  = "SELECT * FROM $table";
	$r 	  = mysqli_query($conn, $q);
	confirem_result($r);
	$data = mysqli_fetch_assoc($r);
	return $data;
}

function getDataById($table, $id){
	global $conn;
	$q = "SELECT * FROM $table WHERE id = $id";
	$r 	= mysqli_query($conn, $q);
	confirem_result($r);
	$data = mysqli_fetch_assoc($r);
	return $data;
}
function getDataByLimit($table, $id,$limit){
	global $conn;
	$q = "SELECT * FROM $table WHERE id = $id ORDER BY id ASC LIMIT $limit";
	$r 	= mysqli_query($conn, $q);
	confirem_result($r);
	$data = mysqli_fetch_assoc($r);
	return $data;
}

function getCount($table){
	global $conn;
	$q 	  = "SELECT * FROM $table";
	$r 	  = mysqli_query($conn, $q);
	confirem_result($r);
	$count = mysqli_num_rows($r);
	return $count;
}
function getCountById($table, $id, $idEc){
	global $conn;
	$q 	  = "SELECT * FROM $table WHERE $id = $idEc";
	$r 	  = mysqli_query($conn, $q);
	confirem_result($r);
	$count = mysqli_num_rows($r);
	return $count;
}