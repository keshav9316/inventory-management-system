<?php

require 'connect.php';

$sql = "SELECT * FROM `grant_amc`";
$result = mysqli_query($conn, $sql);

require 'closeconnection.php';

?>