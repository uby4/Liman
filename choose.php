<?php
 include_once 'header.php';
?>
<font color="#000000"><?php
      if (isset($_SESSION['u_id'])) {
        echo "You are logged in!";
      }
     ?></font>
     <head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<section class="main-container">
	<div class="main-wrapper">
     <h2><center><font color="#FEFEFE" face="Comic sans MS" size="6" ="Comics ">SELECT  BIRTH OR DEATH REGISTRATION</h2></center></font>
     <br><br><br><br><br><br>
     
     <section>
         <div class="col-lg-3" align="center" style="float: left;">
         <div class="navbar navbar-default">
         <div class="panel-body">
             <img src="birth.jpg" width="200"  height="200">
             <a href="birth.php">Birth Registeration</a>
             <br>
             <a href="viewbirthdata.php">View Registerd babies</a>
         </div>
         </div>
         </div>
     </section>

     <section>
         <div class="col-lg-3" align="center" style="float: right;">
         <div class="navbar navbar-default">
         <div class="panel-body">
            <img src="death.jpg" width="200" height="200">
             <a href="death.php">Death Registration</a>
              <br>
             <a href="viewdeathdata.php">View Registerd deceased</a>
         </div>
            
         </div>
         </div>
         </div>
     </section>
	</div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
 include_once 'footer.php';
?>


