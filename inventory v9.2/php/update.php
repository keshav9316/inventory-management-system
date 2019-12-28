<?php
if(isset($_POST['update_button']))
{
require 'connect.php';

function protect($input){
    $input = trim($input);
     $input = stripslashes($input);
      $input = htmlspecialchars($input);
      return $input;
    }

$appno_inp=protect($_POST['appno_inp']);
$item_name=protect($_POST['item_name_inp']);
// $model_no=$_POST['model_no'];
$type=protect($_POST['type_inp']);
$takenout_name=protect($_POST['takenout_name']);
$date_return=protect($_POST['date_return']);
$amc_name=protect($_POST['amc_name']);
//$status=$_POST['status'];
$no_of_item=protect($_POST['no_of_item']);
$device_returned=protect($_POST['device_returned']);
// $name=$_POST['name'];
// $date_out=$_POST['date_out'];
// $designation=$_POST['designation'];
// $group_name=$_POST['group_name'];
// $remarksamc=$_POST['remarksamc'];
//echo $item_name;
// echo $type;

$no_of_item_temp = ($no_of_item) - ($device_returned);
echo $no_of_item_temp;

if($no_of_item_temp==0){
    $status='CLOSED';
} else {
    $status='PENDING';
}
$sql = "UPDATE `device_out` set takenout_name='$takenout_name', date_return='$date_return', no_of_item='$no_of_item_temp', amc_name='$amc_name', status='$status' WHERE appno=$appno_inp ";
$result=mysqli_query($conn, $sql);


require 'upd.php';

if($result)
{ echo "record updated successfully";
  //echo '<script type = "text/javascript"> window.location.replace("../update_success.php") </script>';
}
else{ echo "Error updating record: ".$sql."<br>".mysqli_error($conn);}

require 'closeconnection.php'; 
}
?>