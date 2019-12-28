<?php
//if(isset($_POST['view_applications']))
{
require 'php/connect.php'; 
?>

<!DOCTYPE html>
<html id="tabularview" class="no-js" lang="en">
<head>

   <meta charset="utf-8">
	<title>DRDO Inventory Management System</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/keshav.css">

	<script src="js/modernizr.js"></script>


	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body>
 	
   <main id="main-404-content" class="main-content-static">
		<div class="active2">
         <big><div class="logo"><hr><DIV><img  src="images/logo.png" height="10%" width="10%" class="img-circle" align="left"></DIV></div>
         <b><BR><center><strong><H1>LASER SCIENCE AND TECHNOLOGY CENTRE</H1><H1>लेजर विज्ञान और प्रौद्योगिकी केंद्र</H1></strong></center></b></big>
         <!-- <script src="js/logout.js"></script>
				<button class="space3" onClick="logout()">LOGOUT</button> -->
         <hr>
         <script src="js/logout.js"></script>
				<div align="right">
            <button class="space3" onClick="logout()">LOGOUT</button>
            </div>
         </div>


	       	<div class="search" style="padding-left: 1.5%; padding-top: .5%; padding-right: 1.5%;">
					<CENTER><div id="" class="active1">DETAILS OF INVENTORY TAKEN OUT</div>
					</CENTER>
			</div>

   	<div class="content-wrap"> 
		   <div class="main-content">
		   		<div class="col-twelve">
					

					<center>
			  		  <div id="inventoryform1" class="search">	
                       


<table width=100% align="center" style="border-width: 2px;">
  <tr>
    <td width="28" class="active"><center> S.NO </center>&nbsp;</td>
    <td width="74" class="active"><center>ITEM NO.</center></td>
    <td width="100" class="active"><center>ITEM NAME</center></td>
    <td width="147" class="active"><center>MODEL NO</center></td>
    <td width="74" class="active"><center>TYPE</center></td>
    <td width="74" class="active"><center>TOTAL DEVICE</center></td>
    <td width="80" class="active"><center>TAKENOUT DEVICES</center></td>
    <td width="80"class="active" ><center>DEVICE AVALIABLE</center></td>
    <td width="74" class="active"><center>VIEW</center></td>
  </tr>
               
      <!--selection  -->
<?php
require 'php/viewgrant.php'; 

$sno=0;
 while($row=mysqli_fetch_assoc($result))
 {

   $item_no = $row["item_no"];
   $item_name = $row["item_name"]."<br>";
   $model_no = $row["model_no"]."<br>";
   $type = $row["type"]."<br>";
   $total_device = $row["total_device"]."<br>";
    $takenout_device = $row["takenout_device"];
    $device_avaliable = $row["device_avaliable"];

$sno+=1;
echo "<tr><td><center>".$sno."</center></td>";
echo "<td><center>".$item_no."</center></td>";
echo "<td><center>".$item_name."</center></td>";
echo "<td><center>".$model_no."</center></td>";
echo "<td><center>".$type."</center></td>";
echo "<td><center>".$total_device."</center></td>";
echo "<td><center>".$takenout_device."</center></td>";
echo "<td><center>".$device_avaliable."</center></td>";
echo "<td><center><form action='grantout.php' method='post'><input type='hidden' name='item_no' value=$item_no require><input type='submit' value='VIEW'></form></center></td> </tr>";
//echo "<td><input type="submit" value="VIEW" onClick="parent.open("viewout.php")"></td>";
//echo "<td><a href='viewout.php'>VIEW</a></td>";
}
?>                 
<!-- selection end -->
</table>

                   <form action="index.php" method="POST">

                   <input type="submit" value="BACK">           
                </form>
				      </div>	
					    
					</center>
            
                 <!-- footer -->
				   <footer class="active2">
                  <hr>
            
                     <center><h3 id="footer">Developed and Maintained by IT & IS GROUP,  LASTEC
   
                     
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
                  <date id="date"></date>
   
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
                  <time CLASS="red" id="time"></time></h3></center>
                  <script src="js/date.js"></script>
                  <hr>
               </footer>
                  <!-- end footer -->	 

					
			   	</div> <!-- /twelve --> 		   			 		 		
		   </div> <!-- /main-content --> 
		</div> <!-- /content-wrap -->
   </main> <!-- /main-404-content -->

   <!-- <div id="preloader"> 
    	<div id="loader"></div>
   </div>  -->

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <script src="js/hidden-index.js"></script>

</body>

</html>

<?php
require 'php/closeconnection.php'; 
}
?>