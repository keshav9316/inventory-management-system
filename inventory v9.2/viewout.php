<?php
require 'php/connect.php'; 
?>

<!DOCTYPE html>
<html id="viewout" class="no-js" lang="en" id="viewout">
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

	       	<div class="search" style="padding-left: .1%; padding-top: 0.5%; padding-right: 0.1%;">
					<CENTER><div id="" class="active1">DETAILS OF INVENTORY TO BE TAKEN OUT</div>
					</CENTER>
			</div>

   	<div class="content-wrap"> 
		   <div class="main-content">
		   		<div class="col-twelve">
					
<!--selection  -->
<?php
$appno_inp = $_POST['appno_inp'];
require 'php/select.php'; 
?>                 
<!-- selection end -->

					<center>
			  		  <div id="inventoryform1" class="search">	
                       

                  
                  <table>
                  
              <div class="align"><tr><td><label>  APPLICATION NO. : </label> </td> <td> <?php echo $appno; ?> </td> </tr></div>
              <div class="align"><tr><td><label>  ITEM NAME : </label> </td> <td> <?php echo $item_name; ?> </td> </tr></div>
              <div class="align"><tr><td><label>  MODEL NO. / SERIAL NO. : </label></td><td><?php echo $model_no; ?></td></tr> </div>
              <div class="align"><tr><td><label> ITEM TYPE : </label></td><td><?php echo $type; ?></td></tr></div>                      
              <div class="align"><tr><td><label> NUMBER OF ITEMS : </label></td><td><?php echo $no_of_item; ?></td></tr></div>
              <div class="align"><tr><td><label>  ITEM TAKEN OUT BY : </label></td><td><?php echo $takenout_name; ?></td></tr></div>
              <div class="align"><tr><td><label>  GATEPASS NO. : </label></td><td><?php echo $gatepass; ?></td></tr></div>
              <div class="align"><tr><td><label>  DATE OF ITEM TO BE TAKEN OUT : </label></td><td><?php echo $date_out; ?></td></tr></div>
              <div class="align"><tr><td><label>  EXPECTED DATE OF RETURN : </label></td><td><?php echo $date_return; ?></td></tr></div>
              <div class="align"><tr><td><label>  COMPLAINT BY : </label></td><td><?php echo $name; ?></td></tr></div>
              <div class="align"><tr><td><label>  DESIGNATION : </label></td><td><?php echo $designation; ?></td></tr></div>
              <div class="align"><tr><td><label>   GROUP : </label></td><td><?php echo $group_name; ?></td></tr></div>
              <div class="align"><tr><td><label>  COMPLAINT ADDRESSED BY : </label></td><td><?php echo $amc_name; ?></td></tr></div>
              <div class="align"><tr><td><label>  REMARKS : </label></td><td><?php echo $remarksamc; ?></td></tr></div>
              <div class="align"><tr><td><label>  STATUS : </label> </td> <td> <?php echo $status; ?> </td> </tr></div>
                   
                  </table>
<?php if(isset($_POST['view_taken_submit-1'])){ ?>
                   <form action="index.php" method="POST">
                   <input type="submit" value="BACK">           
                   </form>
<?php }
else { ?>
   <form action="tabularview.php" method="POST">
                   <input type="submit" value="BACK">           
                   </form>
<?php }?>
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
?>