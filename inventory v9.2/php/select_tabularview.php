<?php

require 'connect.php';

$sql = "SELECT `appno`,`gatepass`,`item_name`, `model_no`, `type`, `no_of_item`, `takenout_name`, `date_out`, `date_return`, `remarksamc`, `name`, `designation`, `group_name`, `amc_name`,`status` FROM `device_out` ";
$result = mysqli_query($conn, $sql);
require 'closeconnection.php';

?>