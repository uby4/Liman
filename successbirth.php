<?php
 
 include_once 'includes/dbh.inc.php';
?>

<?php
 include_once 'header.php';
?>

<?php
      if (isset($_SESSION['u_id'])) {
          echo "You are logged in!";
      }
     ?>


<section class="main-container">
	<div class="main-wrapper">  
     <h2><center><font color="#008000">Baby's Record Registerd Succefully</h2></center></font>
     <br>
     <center><img src="birthsuccess.jpg" width="200" height="200">
     <br><br><br>
     <br><br><br><br><br><br><br
     <h2><font color="#FEFEFE" face="Comic sans MS" size="10">Click<a href="viewbirthdata.php"> Registered Babies </a> to view Records<h2><font>
      
	</div>
</section>
<br><br>

<?php
 include_once 'footer.php';
?>


