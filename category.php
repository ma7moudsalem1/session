<?php
require_once 'db_conn.php';
require_once 'config.php';
if(isset($_GET['url'])){
	$url = mysqli_real_escape_string($conn, $_GET['url']);
}
require_once 'layout/header.php';

require_once 'category.content.php';

require_once 'layout/footer.php';