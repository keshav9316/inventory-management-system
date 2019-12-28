<?php

require 'connect.php';



$sql = "SELECT `appno`,`gatepass`,`item_name`, `model_no`, `type`, `no_of_item`, `takenout_name`, `date_out`, `date_return`, `remarksamc`, `name`, `designation`, `group_name`, `amc_name`,`status` FROM `device_out` WHERE appno = $appno_inp";
$result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
        {
              $appno = $row["appno"];
              $gatepass = $row["gatepass"];
            $item_name = $row["item_name"]."<br>";
            $model_no = $row["model_no"]."<br>";
            $type = $row["type"]."<br>";
            $no_of_item = $row["no_of_item"]."<br>";
            $takenout_name = $row["takenout_name"]."<br>";
            $date_out = $row["date_out"]."<br>";
            $date_return = $row["date_return"]."<br>";
            $name = $row["name"]."<br>";
            $designation = $row["designation"]."<br>";
            $group_name = $row["group_name"]."<br>";
            $amc_name = $row["amc_name"];
            $remarksamc = $row["remarksamc"];
             $status = $row["status"];

        }
    }

require 'closeconnection.php';

?>