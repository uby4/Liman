<?php
 include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper" >
    
     <h2><center><font color="#FEFEFE" face="Comic sans MS" size="6">BIRTH AND DEATH  REGISTERATION SYSTEM</h2></center></font>
     <br><br>
     <center><img src="birthanddeath.jpg"  width="600" height="300"></center>
     <br><br><br>
     <h2><center> <font color="#000000" face="Comic sans MS" size="6">DEPARTMENT OF COMPUTER SCIENCE </h2></center></font>
     <h2><center><font color="#000000">FEDERAL POLYTECHNIC MUBI</h2></center></font>
     <h2><center><font color="#000000">ST/CSY/ND/18/104</h2></center></font>
      
      
     <?php
      if (isset($_SESSION['u_id'])) {
      	echo "You are logged in!";
      }
     ?>
	</div>
</section>


<?php
 include_once 'footer.php';
?>


