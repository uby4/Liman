<!DOCTYPE html>
<html>
<head>
	<title>Birth Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="birth.php">Birth Registration</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="birth.php">Add Data</a></li>
				<li><a href="viewbirthdata.php">view data</a></li>
			</ul>
		</div>
	</nav>
	<div class=>
		<div class="panel-body">
			<table class='table table-bordered table-hover'>
				
                 <?php 
                 include('includes/dbh.inc.php');
                  
                if (isset($_POST['search'])){
                 $searchq = $_POST['searching'];
                 $exec = mysqli_query($conn,"SELECT * FROM birth WHERE c_fname ='$searchq' OR c_certno ='$searchq'");
	             while($row = mysqli_fetch_array($exec)){

                   ?>
	    <center><b><font color="#0000FF" face="Comic sans MS" size="8">Birth Certificate</font></b></center>
                  <tr>
                <img src="<?php echo $row['c_passport'];?>" width='120' height='120'/>
	            <tr><th>Certificate No:</th><td><?php echo $row['c_certno'];?></td></tr>
	            <tr><th>Firstname</th><td><?php echo $row['c_fname'];?></td></tr>
	            <tr><th>Middlename</th><td><?php echo $row['c_mname'];?></td></tr>
	            <tr><th>Lastname</th><td><?php echo $row['c_lname'];?></td></tr>
	            <tr><th>Weight</th><td><?php echo $row['c_weight'];?></td></tr>
	            <tr><th>Gender</th><td><?php echo $row['c_gender'];?></td></tr>
	            <tr><th>Father's Name</th><td><?php echo $row['c_faname'];?></td></tr>
	            <tr><th>Mother's Name</th><td><?php echo $row['c_moname'];?></td></tr>
	            <tr><th>Place Of Birth</th><td><?php echo $row['c_bplace'];?></td></tr>
	            <tr><th>Registration Center</th><td><?php echo $row['c_rcenter'];?></td></tr>
	            <tr><th>Parent's Occupation</th><td><?php echo $row['c_poccupation'];?></td></tr>
	            <tr><th>Nationality</th><td><?php echo $row['c_nationality'];?></td></tr>
	            <tr><th>State</th><td><?php echo $row['c_state'];?></td></tr>
	            <tr><th>LGA</th><td><?php echo $row['c_lga'];?></td></tr>
	            <tr><th>Town</th><td><?php echo $row['c_town'];?></td></tr>
	            <tr><th>Address</th><td><?php echo $row['c_address'];?></td></tr>
	            <tr><th>Home Telephone Number</th><td><?php echo $row['c_number'];?></td></tr>
	            <tr><th>Registrar</th><td><?php echo $row['c_registrar'];?></td></tr>
	            <tr><th>Date of birth</th><td><?php echo $row['c_dob'];?></td>
	            </tr>
	           
	           <?php
	               }
	               }
	               ?>
	            </tr>
			</table>
		</div>
	</div>
	<br><br>
	<form method="post">
	<input type="text" class="form-control" name="searching" placeholder="Enter Certicate Number or Firstname">
	<input type="submit" class="btn btn-info"  name="search" value="Search">
		</form>
</div>
  <FORM>
   <center><INPUT TYPE="button" onClick="window.print()" value="Print Birth Certificate"></center>
   </FORM>

</body>
</html>