<?php
////////////////////
require 'connect.php';
/////////////////////

function protect($input){
    $input = trim($input);
     $input = stripslashes($input);
      $input = htmlspecialchars($input);
      return $input;
    }

$item_name = protect($_POST['item_name']);
$model_no = protect($_POST['model_no']);
$type = protect($_POST['type']);
$total_device = protect($_POST['total_device']);

$sql="INSERT INTO grant_amc (item_name, model_no, type, total_device, device_avaliable) VALUES ('$item_name', '$model_no', '$type', $total_device, $total_device)";

$result=mysqli_query($conn, $sql);
if($result)
{echo '<script>location.replace("../grant_success.php")</script>'; }
else{ echo "Error:".$sql."<br>".mysqli_error($conn);}

require 'closeconnection.php';

?>