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
				<a class="navbar-brand" href="death.php">Death Registration</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="death.php">Add Data</a></li>
				<li> <a href="viewdeathdata.php">view data</a></li>
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
                 $exec = mysqli_query($conn,"SELECT * FROM death WHERE d_fname ='$searchq' OR d_certno ='$searchq'");
	             while($row = mysqli_fetch_array($exec)){

                 	?>
	    <center><b><font color="#000000" face="Comic sans MS" size="8">Death Certificate</font></center></b>
                  <tr>
                <img src="<?php echo $row['d_passport'];?>" width='120' height='120'/>
	            <tr><th>Certificate No</th><td><?php echo $row['d_certno'];?></td></tr>
	            <tr><th>Firstname</th><td><?php echo $row['d_fname'];?></td></tr>
	            <tr><th>Middlename</th><td><?php echo $row['d_mname'];?></td></tr>
	            <tr><th>Lastname</th><td><?php echo $row['d_lname'];?></td></tr>
	            <tr><th>Registration Center</th><td><?php echo $row['d_rcenter'];?></td></tr>
	            <tr><th>State</th><td><?php echo $row['d_state'];?></td></tr>
	            <tr><th>LGA</th><td><?php echo $row['d_lga'];?></td></tr>
	            <tr><th>Town</th><td><?php echo $row['d_town'];?></td></tr>
	            <tr><th>Age at Death</th><td><?php echo $row['d_age'];?></td></tr>
	            <tr><th>Date of Death</th><td><?php echo $row['d_dod'];?></td></tr>
	            <tr><th>Date of Registration</th><td><?php echo $row['d_dor'];?></td></tr>
	            <tr><th>Primary Cause of Death</th><td><?php echo $row['d_primary'];?></td></tr>
	            <tr><th>Secondary Cause of Death</th><td><?php echo $row['d_secondary'];?></td></tr>
	            <tr><th>Registrar</th><td><?php echo $row['d_registrar'];?></td></tr>
	            <tr><th>Gender</th><td><?php echo $row['d_gender'];?></td></tr>
	            <tr><th>Next of Kin</th><td><?php echo $row['d_nok'];?></td></tr>
	            <tr><th>Date of issue of Certificate</th><td><?php echo $row['d_issue'];?></td></tr>
	            <tr><th>Date of Issue of Certificate</th><td><?php echo $row['d_issue'];?></td></tr>
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
	</form>
</div>
<FORM>
   <center><INPUT TYPE="button" onClick="window.print()" value="Print Birth Certificate"></center>
   </FORM>
</body>
</html>