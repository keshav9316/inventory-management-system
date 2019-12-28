<?php

require 'connect.php';

$sql = "SELECT * FROM `device_out`  where (device_out.date_out like '%$year%') order by appno desc; ";
$result = mysqli_query($conn, $sql);

require 'closeconnection.php';

?>