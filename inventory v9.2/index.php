<?php
require 'php/connect.php';
//require 'php/idpass.php';
?>

<!DOCTYPE html>
<html id="index" class="no-js" lang="en">
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
				<table>
					<tr>
						<td style="width: 50%;"><img src="images/logo.png" style="height: 30%; width: 30%; overflow: hidden;"></td>
						<td style="overflow: hidden;" ><div id="Hheading"><h1>INVENTORY MANAGEMENT SYSTEM</h1></div></td>
					</tr>
				</table>
				<hr>
		</div> -->
		
				<div class="active2">
				<big><div class="logo"><hr><DIV><img  src="images/logo.png" height="10%" width="10%" align="left"></DIV></div>
				<b><BR><center><strong><H1>LASER SCIENCE AND TECHNOLOGY CENTRE</H1><H1>लेजर विज्ञान और प्रौद्योगिकी केंद्र</H1></strong></center></b></big>
				<!-- <script src="js/logout.js"></script>
				<button class="space3" onClick="logout()">LOGOUT</button> -->
				<script src="js/logout.js"></script>
				<div align="right">
            <button class="space3" onClick="logout()">LOGOUT</button>
            </div>
				<hr>
				</div>

	       	<div class="search" style="padding-left: ; padding-top: 2%;">
				
					<CENTER>
					<div id="tab1" class="active1 "><img class="image" src="images/slides/form.gif"><br>ENTER DATA</div>
					<div id="tab2" class="active1"><img class="image" src="images/slides/report.gif"><br>VIEW DATA</div>
					<div id="tab3" class="active1"><img class="image" src="images/slides/rep.gif"><br>UPDATE STATUS</div>
					<div id="tab4" class="active1"><img class="image" src="images/slides/search.gif"><br>SEARCH</div>
					
					<!--
					<div id="tab5" class="">op5</div>
					<div id="tab7" class="">op6</div>
					  --></CENTER>
			</div>

   	<div class="content-wrap"> 
		   
		   <div class="main-content">
		   		<div class="col-twelve">
						<br><br><br>
						
					<center>
			  		  <div id="t2container" class="search" 	hidden>	
							  <li><a href="takenout.php">Fill details of INVENTORY TAKEN OUT</a></li><br>
							  
							  <li><a href="grant.php">Fill details of INVENTORY granted to LASTEC by AMC</a></li><br>
							  
							  <!-- <li><a href="#">File Tenure Report</a></li><br> -->
					   </div>	
					    
					</center>

			
					<center>
					
					 <div id="t1container" class="search" hidden>
						<div id="view 1">
							<div id="tempv1"><li><a href="#">View details of INVENTORY TAKEN OUT</a></li></div>
							 <div id="tempv2">
							
							 <form id="t1inner" class="search" action="viewout.php" method="post" hidden>
								<input type="text" name="appno_inp" placeholder="Enter Device Application No" required>
								<input id="inp1" name="view_taken_submit-1" type="submit" value="submit"><input id="view2" type="submit" value="Back">
								<h2>OR</h2>
								<input type="submit" name="view_applications" value="VIEW ALL RECORDS" onClick="window.location.href='tabularview.php'">
						
								</form>

							</div>
						</div>
						<br>

							<div><li><a href="grant_tabularview.php">View details of INVENTORY granted to LASTEC by AMC</a></li></div><br>
							
							<!-- <div id="view3"><li><a href="#">File Tenure Report</a></li><br></div> -->
					 </div>	   
				
					
					</center>


				   <center>
						<div id="t3container" class="search" hidden>
						<div id="tempv3"><li><a  href="#">Update details of INVENTORY TAKEN OUT</a></li></div>
							<form id="t1update" class="search" action="updateout.php" method="post">
							   <input type="text" name="appno_inp" placeholder="Enter Device Application No" required>
							   <input id="inp_update" name="update_single" type="submit" value="submit">
							   <!-- <input id="viewupdate" type="submit" value="Revert Back"> -->
							   <h2>OR</h2>
							   <input type="submit" name="update_applications" value="UPDATE BY VIEWING ALL RECORDS" onClick="window.location.href='tabularupdate.php' ">
					   
							   </form>
							

							  <!-- <li><a href="#">Update details of INVENTORY granted to LASTEC by AMC</a></li><br> -->
							  
							  <!-- <li><a href="#">Update Tenure Report</a></li><br> -->
					   </div>	   
				  
					  </center>
				  
				  	<center>
					
					 <div id="t4container" class="search" hidden>
					 		  
						<table  class="search">
						
							
							<tr>
							<td><lable class="space">SEARCH BY NAME</lable></td>
							<form action="tabularsearch.php" method="POST"><td><input type="text"  class="space2" name="item_name" placeholder="NAME" style="background-color:rgba(44, 44, 44, 0.384);"></td><td>
							<input TYPE="submit" name="search_item_name" value="SEARCH" class="space1" style="background: rgb(255, 94, 0); width: 15rem;"></td>
							</form></tr>
							<tr><td><h3 align="center">OR</h3></td></tr>

							<!-- working -->
							<tr>
							<td><lable class="space">SEARCH TAKEN OUT DATE</lable></td>
							<form action="tabularsearch.php" method="POST"><td><input type="date" class="space2" name="date_out" placeholder="DATE TAKEN OUT"      style="background-color:rgba(44, 44, 44, 0.384);"></td><td>
							<input TYPE="submit" name="search_date_out" value="SEARCH" class="space1" style="background: rgb(255, 94, 0); width: 15rem;"></td>
							</form></tr>
							<tr><td><h3 align="center">OR</h3></td></tr>

							<!-- working -->

							<tr>
							<td><lable class="space">SEARCH RETURN DATE</lable></td>
							<form action="tabularsearch.php" method="POST"><td><input type="date"  class="space2" name="date_return" placeholder="DATE OF RETURN" style="background-color:rgba(44, 44, 44, 0.384);"></td><td>
							<input TYPE="submit" name="search_date_return" value="SEARCH" class="space1" style="background: rgb(255, 94, 0); width: 15rem;"></td>
							</form></tr>
							<tr><td><h3 align="center">OR</h3></td></tr>

							<!-- working -->

							<tr>
							<td><lable class="space">SEARCH RETURN MONTH</lable></td>
							<form action="tabularsearch_month.php" method="POST"><td>
						
<select id="month" type="month"  class="space2" name="month">
<option value="01" method="post" selected>JANUARY</option>
<option value="02" method="post">FEBURARY</option>
<option value="03" method="post">MARCH</option>
<option value="03" method="post">MARCH</option>

 <option value="04" method="post">APRIL</option>

 <option value="05" method="post">MAY</option>

 <option value="06" method="post">JUNE</option>

 <option value="07" method="post">JULY</option>

 <option value="08" method="post">AUGUST</option>

 <option value="09" method="post">SEPTEMBER</option>

 <option value="10" method="post">OCTOBER</option>
 
 <option value="11" method="post">NOVEMBER</option>

 <option value="12" method="post">DECEMBER</option>

</select>
</td>
							<td>
							<input TYPE="submit" name="search_month" value="SEARCH" class="space1" style="background: rgb(255, 94, 0); width: 15rem;"></td>
							</form></tr>
							<tr><td><h3 align="center">OR</h3></td></tr>

							<!-- working -->
							
							<tr>
							<td><lable class="space">SEARCH BY YEAR</lable></td>
							<form action="tabularview_year.php" method="POST">
							<td><input type="text" name="year" class="space2" placeholder="ENTER YEAR" style="background-color:rgba(44, 44, 44, 0.384);"></td><td>
							<input TYPE="submit" name="search_date_year" value="SEARCH" class="space1" style="background: rgb(255, 94, 0); width: 15rem;"></td>
							</form></tr>
							<tr><td><h3 align="center">OR</h3></td></tr>

							<tr>
							<td><lable class="space">SEARCH BY TYPE OF DEVICE</lable></td>
							<form action="tabularsearch.php" method="POST"><td>
							<select type="text" name="type" class="space2">
                                            <option value="monitor" name="type">monitor</option>
                                            <option value="mouse" name="type">mouse</option>
                                            <option value="motherboard" name="type">motherboard</option>
                                            <option value="grapic_card" name="type">grapic card</option>
                                            <option value="fan" name="type">fan</option>
                                            <option value="lan" name="type">lan cable</option>
                                            <option value="keyboard" name="type">keyboard</option>
                                            <option value="speakers" name="type">speakers</option>
                                            <option value="router" name="type">router</option>
                                            <option value="webcam" name="type">webcam</option>
                                            <option value="other" name="type">other</option>
                                           </select>
							</td><td>
							<input type="submit" name="search_type" value="SEARCH" class="space1" style="background: rgb(255, 94, 0); width: 15rem;"></td>
							</form></tr>

							
						</table>
					 </div>	   
				
					
					</center>
	 
				 <br>
					
				   </div> <!-- /twelve --> 	
		   </div> <!-- /main-content --> 
		</div> <!-- /content-wrap -->
		
 					<!-- footer -->
				  	 
					<div class="active2">
					<hr>
					<div id="heading"><center><h3 id="footer">Developed and Maintained by <span class="red">IT & IS</span> GROUP,<span class="red">&nbsp;&nbsp;LASTEC</span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<date id="date"></date>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<time class="red" id="time"></time></h3></center>
					<script src="js/date.js"></script></div>
				    <hr>
					</div>
					<!-- end footer -->
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