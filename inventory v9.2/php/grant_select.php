<?php

require 'connect.php';

$sql = "SELECT * FROM `grant_amc` where item_no = $item_no";
$result = mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
              $item_no = $row["item_no"];
              $item_name = $row["item_name"]."<br>";
            $model_no = $row["model_no"]."<br>";
            $type = $row["type"]."<br>";
            $takenout_device = $row["takenout_device"]."<br>";
           $total_device = $row["total_device"]."<br>";
           $device_avaliable = $row["device_avaliable"]."<br>";
           
        }
    }

require 'closeconnection.php';

?>