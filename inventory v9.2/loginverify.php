<?php

if(isset($_POST['login_verify']))
{
    require 'php/connect.php';

    echo "LOADING......";

    function protect($input){
        $input = trim($input);
         $input = stripslashes($input);
          $input = htmlspecialchars($input);
          return $input;
        }
    
    $userid = protect($_POST['userid']);
    $password = protect($_POST['password']);
    
   

$sql="SELECT userid,password FROM login WHERE  userid = '$userid' AND password = '$password'";
$result = mysqli_query($conn, $sql);

 //if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        
           if($userid===$row["userid"] && $password===$row["password"])
           {
            //echo '<script type = "text/javascript">alert("LOGIN successful");</script>';
//echo '<form action="idpass.php" method="POST"><INPUT TYPE="HIDDEN" NAME="userid" VALUE=$userid ><INPUT TYPE="HIDDEN" NAME="password" VALUE=$password ></form>';
            
           // require 'php/hidden_input.php';

           echo '<script type = "text/javascript"> window.location.replace("index.php"); </script>';
            //echo "<script> location.href = 'index.php' </script>";
            
           } else {
            echo '<script>alert("ERROR...TRY AGAIN!");</script>';
            echo "<script> window.location.replace('login.php');</script>";
            }
        
 } 
 //else { echo '<script type = "text/javascript">alert("RECORD NOT FOUND")</script>'; }

require 'php/closeconnection.php';
 }
?>