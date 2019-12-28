<?php
//if(isset($_POST['view_applications']))
{
require 'php/connect.php'; 
?>

<!DOCTYPE html>
<html id="updateout" class="no-js" lang="en" id="viewout">
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
		<!-- <div class="active2">
    <hr>
		<h2><center>INVENTORY MANAGEMENT SYSTEM</center></h2>
		<hr>
  </div> -->

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

	       	<div class="search" style="padding-left: 0.1%; padding-top: 0.5%; padding-right: 0.1%;">
					<CENTER><div id="" class="active1">DETAILS OF INVENTORY TAKEN OUT</div>
					</CENTER>
			</div>

   	<div class="content-wrap"> 
		   <div class="main-content">
		   		<div class="col-twelve">
					

					<center>
			  		  <div id="inventoryform1" class="search">	
                       


<table width="1226" align="center" style="border-width: 2px;">
         
      <!--selection  -->
<?php
$appno_inp = $_POST['appno_inp'];

require 'php/select_updviewtabular.php'; 

while($row=mysqli_fetch_assoc($result))
 {

   $appno = $row["appno"];
   $item_name = $row["item_name"]."<br>";
   $model_no = $row["model_no"]."<br>";
   $type = $row["type"]."<br>";
   $no_of_item = $row["no_of_item"]."<br>";
   $takenout_name = $row["takenout_name"]."<br>";
   $gatepass = $row["gatepass"]."<br>";
   $date_out = $row["date_out"]."<br>";
   $date_return = $row["date_return"]."<br>";
   $name = $row["name"]."<br>";
   $designation = $row["designation"]."<br>";
   $group_name = $row["group_name"]."<br>";
   $amc_name = $row["amc_name"];
   $remarksamc = $row["remarksamc"];
    $status = $row["status"];
 }
echo "<td><center>APPLICATION NO.<br>".$appno."</center></td>";
echo "<td><center>ITEM NAME : <br>".$item_name."</center></td>";
echo "<td><center>MODEL NO. / SERIAL NO. :<br>".$model_no."</center></td>";
echo "<td><center>ITEM TYPE : <br>".$type."</center></td>";
echo "<td><center>NUMBER OF ITEMS :<br>".$no_of_item."</center></td>";
echo "<td><center>ITEM TAKEN OUT BY :<br>".$takenout_name."</center></td>";
echo "<td><center>GATEPASS NO. :".$gatepass."</center></td></tr><br><tr><td>&nbsp;</td></tr>";
echo "<tr><td><center>DATE OF ITEM TO BE TAKEN OUT : ".$date_out."</center></td>";
echo "<td><center>EXPECTED DATE OF RETURN :".$date_return."</center></td>";
echo "<td><center>COMPLAINT BY :".$name."</center></td>";
echo "<td><center>DESIGNATION :".$designation."</center></td>";
echo "<td><center>GROUP NAME :".$group_name."</center></td>";
echo "<td><center>COMPLAINT ADDRESSED BY :".$amc_name."</center></td>";
echo "<td><center>PREVIOUS REMARKS :".$remarksamc."</center></td>";
echo "<td><center>STATUS :".$status."</center></td></tr>";
?>                 
<!-- selection end -->
</table>

<?php
if($status!="CLOSED")
{ ?>
<div class="search" style="padding-left: 4%; padding-top: 4%; padding-right: 4%;">
					<CENTER><div id="" class="active1">UPDATE DETAILS</div>
					</CENTER>
</div>
<form class="search" action="php/update.php" method="POST">
                                 <div class="align"><label> UPDATE COMPLAINT ADDRESSER ( IF ANY ) : </label>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="text" name="amc_name"></div>

                                 <div class="align"><label> UPDATE TAKENOUT NAME ( IF ANY ) : </label>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="text" name="takenout_name"></div>

                                 <div class="align"><label> UPDATE NO. OF DEVICES RETURNED : </label>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="text" name="device_returned"></div>
<!-- 
                                 <div class="align"><label> UPDATE STATUS : </label>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="RADIO" name="status" value="CLOSED"><lable>CLOSED</lable>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="RADIO" name="status" VALUE="PENDING"><lable>PENDING</lable>
                                 </div> -->

                                 <div class="align"><label>UPDATE DATE OF RETURN ( IF EXTENDED ) : </label>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="date" name="date_return"></div>
                                 <br><br>
                                 <?php
                                 echo "<input type='hidden' name='appno_inp' value=".$appno." require><input type='hidden' name='no_of_item' value=".$no_of_item." require>";?>
                                <?php echo"<input type='hidden' name='item_name_inp' value=".$item_name." require>"?>
                                <?php echo "<input type='hidden' name='type_inp' value=".$type." require>"?>
                                 
                                 <input class="inline_button" name="update_button" type="submit" value="SUBMIT">
</form>


<?php
}
if(isset($_POST['update_single'])){ ?>
                   <form action="index.php" method="POST">
                   <input type="submit" value="BACK">           
                   </form>
<?php }
else { ?>
   <form action="tabularupdate.php" method="POST">
                   <input type="submit" value="BACK">           
                   </form>
<?php }?>
                                 <!-- <form class="search">
                                 <input class="inline_button" type="submit" value="LOGOUT" onClick="parent.open('login.php')">
                                 </form> -->



				      </div>	
					    
					</center>
            
                 <!-- footer -->
				   <footer class="active2">
                  <hr>
            
                     <center><h3 id="footer">Developed and Maintained by IT & IS GROUP,  LASTEC
   
                     
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
                  <date id="date"></date>
   
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
                  <time class="red" id="time"></time></h3></center>
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