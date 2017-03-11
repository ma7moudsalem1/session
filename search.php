<?php
require_once 'db_conn.php';
require_once 'config.php';

require_once 'layout/header.php';
/*if($_SERVER['REQUEST_METHOD'] != 'POST'){
	$link = HOST_NAME;
		echo "<script>window.open('$link', '_self')</script>";

}*/
if($_POST['src']){
	$_SESSION['search'] = mysqli_real_escape_string($conn, $_POST['src']);
}
require_once 'search.content.php';

require_once 'layout/footer.php';