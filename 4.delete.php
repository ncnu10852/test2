<body>
<form id="myForm" method = "post" >
</body>

<?php
require('dbconfig.php');
$jobID=$_POST['jobID'];
//$jobName=$_POST['name']; //$_GET, $_REQUEST
//$jobUrgent=$_POST['urgent'];
//$jobContent=$_POST['content'];
$jobName=null; //$_GET, $_REQUEST
$jobUrgent=null;
$jobContent=null;
$checklist=null;



	$sql = "update todo set jobName=?, jobUrgent=?, jobContent=? ,checklist=? where id=?"; //SQL中的 ? 代表未來要用變數綁定進去的地方
	$stmt = mysqli_prepare($db, $sql); //prepare sql statement
	mysqli_stmt_bind_param($stmt, "ssssi", $jobName, $jobUrgent,$jobContent,$checklist,$jobID); //bind parameters with variables, with types "sss":string, string ,string
	mysqli_stmt_execute($stmt);  //執行SQL
	echo "message delete.";
?>

<button onClick="loadURL('2.list.php')">回工作列表</button>