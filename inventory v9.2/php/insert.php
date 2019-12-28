
<?php

if(isset($_POST['from_takenout']))
{
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
$no_of_item = protect($_POST['no_of_item']);
$takenout_name = protect($_POST['takenout_name']);
$gatepass = protect($_POST['gatepass']);
$date_out = protect($_POST['date_out']);
$date_return = protect($_POST['date_return']);
$name = protect($_POST['name']);
$designation = protect($_POST['designation']);
$group_name = protect($_POST['group_name']);
$amc_name = protect($_POST['amc_name']);
$remarksamc = protect($_POST['remarksamc']);
$status = "PENDING";
// 

$takenout_device = $no_of_item;


$query = "SELECT * FROM `grant_amc` WHERE item_name='$item_name' AND type='$type'";
$results = mysqli_query($conn, $query);

if(mysqli_num_rows($results) > 0){
       while($rows = mysqli_fetch_assoc($results))
      {
              // $takenout_device = $rows["takenout_device"];
              $device_avaliable = $rows["device_avaliable"];
         }
      }
$device_avaliable = $device_avaliable - $takenout_device ;

$temp = "UPDATE `grant_amc` set device_avaliable='$device_avaliable', takenout_device='$takenout_device' WHERE item_name='$item_name' AND type='$type' ";
$resulttemp=mysqli_query($conn, $temp);


// 
$sql="INSERT INTO device_out (item_name,gatepass,model_no,type,no_of_item,takenout_name,date_out,date_return,name,designation,group_name,amc_name,remarksamc,status) VALUES ('$item_name','$gatepass','$model_no','$type','$no_of_item','$takenout_name','$date_out','$date_return','$name','$designation','$group_name','$amc_name','$remarksamc','$status')";

$result=mysqli_query($conn, $sql);
if($result)
{ //echo "New record created successfully";
   echo '<script type = "text/javascript"> window.location.replace("../taken_out_success.php") </script>';
}
else{ echo "Error:".$sql."<br>".mysqli_error($conn);}

require 'closeconnection.php';

}
?>
