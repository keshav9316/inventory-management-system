<?php

$servername = "localhost";
$dBUsername="root";
$dBPassword="";
$dBName ="inventory";

$conn = odbc_connect($servername, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
	die("Connection Failed:". mysqli_connect_error());
}

$item_name=$_POST['item_name'];
$model_no=$_POST['model_no'];
$type=$_POST['type'];
$no_of_item=$_POST['no_of_item'];
$takenout_name=$_POST['takenout_name'];
$date_out=$_POST['date_out'];
$date_return=$_POST['date_return'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$group=$_POST['group'];
$amc_name=$_POST['amc_name'];
$remarksamc=$_POST['remarksamc'];

$sql="update device_out set item_name='$item_name',model_no='$model_no', type='$type', no_of_item='$no_of_item', takenout_name='$takenout_name', date_out='$date_out', date_return='$date_return', name='$name', designation='$designation' , group='$group', remarksamc='$remarksamc', amc_name='$amc_name';";
$result=odbc_exec($conn, $sql);
exit();
?>