<?php
require('dbconfig.php');

$jobName=$_POST['name']; //$_GET, $_REQUEST
$jobUrgent=$_POST['urgent'];
$jobContent=$_POST['content'];
$checklist=$_POST['check'];

	$sql = "insert into todo (jobName, jobUrgent, jobContent,checklist) values (?, ?, ?,?)"; //SQL中的 ? 代表未來要用變數綁定進去的地方
	$stmt = mysqli_prepare($db, $sql); //prepare sql statement
	mysqli_stmt_bind_param($stmt, "ssss", $jobName, $jobUrgent,$jobContent,$checklist,); //bind parameters with variables, with types "sss":string, string ,string
	mysqli_stmt_execute($stmt);  //執行SQL
	echo "message added.";
?>
<a href="2.list.php">回工作列表</a>
