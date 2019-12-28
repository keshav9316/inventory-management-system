<?php
require 'connect.php';

//$sql = "SELECT `appno`,`gatepass`,`item_name`, `model_no`, `type`, `no_of_item`, `takenout_name`, `date_out`, `date_return`, `remarksamc`, `name`, `designation`, `group_name`, `amc_name`,`status` FROM `device_out` WHERE appno = $appno_inp";
$que = "SELECT * FROM `grant_amc` WHERE item_name='$item_name' AND type='$type' ";
//$que = "SELECT * FROM `grant_amc` ";

$res = mysqli_query($conn, $que);


if(mysqli_num_rows($res) > 0){
      while($col = mysqli_fetch_assoc($res))
     {
             $takenout_device = $col['takenout_device'];
             $device_avaliable = $col['device_avaliable'];
        }
     }

      echo $device_avaliable ;

$device_avaliable_upd = ($device_avaliable) + ($device_returned) ;
$takenout_device_upd = ($takenout_device) - ($device_returned) ;

//$sql = "UPDATE `device_out` set takenout_name='$takenout_name', date_return='$date_return', amc_name='$amc_name', status='$status' WHERE appno=$appno_inp ";

$tempupd = "UPDATE `grant_amc` set device_avaliable='$device_avaliable_upd', takenout_device='$takenout_device_upd' WHERE (item_name='$item_name' AND type='$type')";
 
//$tempupd = "UPDATE `grant_amc` set `device_avaliable`='$device_avaliable_upd', `takenout_device`='$takenout_device_upd' ";

$resultupd=mysqli_query($conn, $tempupd);

echo $device_avaliable_upd ;

require 'closeconnection.php'; 
?>