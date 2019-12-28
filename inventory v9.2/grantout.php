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
      <div class="active2">
         <big><div class="logo"><hr><DIV><img  src="images/logo.png" height="10%" width="10%" class="img-circle" align="left"></DIV></div>
         <b><BR><center><strong><H1>LASER SCIENCE AND TECHNOLOGY CENTRE</H1><H1>लेजर विज्ञान और प्रौद्योगिकी केंद्र</H1></strong></center></b></big>
         <!-- <script src="js/logout.js"></script> -->
				<!-- <button class="space3" onClick="logout()">LOGOUT</button> -->
         <hr>
         <script src="js/logout.js"></script>
				<div align="right">
            <button class="space3" onClick="logout()">LOGOUT</button>
            </div>   
      </div>


          <div class="search" style="padding-left: 0.1%; padding-top: .5%; padding-right: 0.1%;">
          <CENTER><div id="" class="active1">DETAILS OF INVENTORY TO BE TAKEN OUT</div>
          </CENTER>
      </div>

    <div class="content-wrap"> 
       <div class="main-content">
          <div class="col-twelve">
          
<!--selection  -->
<?php
$item_no = $_POST['item_no'];
require 'php/grant_select.php'; 
?>                 
<!-- selection end -->

          <center>
              <div id="inventoryform1" class="search">  
                       

                  <table>

               <div class="align"><tr><td><label>  ITEM NO : </label></td><td><?php echo $item_no; ?></td></tr></div>      
              <div class="align"><tr><td><label>  ITEM NAME : </label> </td> <td> <?php echo $item_name; ?> </td> </tr></div>
              <div class="align"><tr><td><label>  MODEL NO. / SERIAL NO. : </label></td><td><?php echo $model_no; ?></td></tr> </div>
              <div class="align"><tr><td><label> ITEM TYPE : </label></td><td><?php echo $type; ?></td></tr></div>                      
              <div class="align"><tr><td><label> NUMBER OF ITEMS GRANTED : </label></td><td><?php echo $total_device; ?></td></tr></div>
              <div class="align"><tr><td><label> NUMBER OF ITEMS TAKEN OUT : </label></td><td><?php echo $takenout_device; ?></td></tr></div>      
               <div class="align"><tr><td><label>  NUMBER OF ITEMS AVALIABLE : </label></td><td><?php echo $device_avaliable; ?></td></tr></div>      
               
                  </table>
                   <form action="grant_tabularview.php" method="POST">
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