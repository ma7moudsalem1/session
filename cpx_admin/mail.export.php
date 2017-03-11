<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '0237417599');
define('DB_NAME', 'lasttime');

$dbErrorMsg = 'Database connection Faild';

$conn = @mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if(mysqli_connect_errno()){
	die(
		$dbErrorMsg . ' ' . mysqli_connect_error() . " (".mysqli_connect_errno(). ")."
		);
}
require_once 'Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="emails.xls"');
header('Cache-Control: max-age=0');
$q = "SELECT * FROM `messages`";
$r = mysqli_query($conn, $q);
$num = 1;
while($f = mysqli_fetch_array($r)){
    $email = $f['name'];
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$num, $email);
    $num ++;
}
$objPHPExcel->getActiveSheet()->setTitle('emails');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
echo "<script>window.open('index.php?p=mail.view', '_self')</script>";