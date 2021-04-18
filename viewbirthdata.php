
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
				<a class="navbar-brand" href="#">Birth Registration</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="birth.php">Add Data</a></li>
				<li><a href="searchbirth.php">Search a Record</a></li>

		</div>
	</nav>
	<div class=>
		<div class="panel-body">
			<table class='table table-bordered table-hover'>
				<tr>
					<th>Cert No</th><th>Firstname</th><th>Middlename</th><th>Lastname</th><th>Weight</th><th>Gender</th><th>Father's Name</th><th>Mother's Name</th><th>Place of Birth</th><th>Reg Centre</th><th>Parent's Occupation</th><th>Nationality</th><th>State</th><th>LGA</th><th>Town</th><th>Address</th><th>Home Telephone Number</th><th>Registrar</th><th>Date of Birth</th><th>passport</th><th>Delete</th>
				</tr>
                 <?php
	             include('includes/dbh.inc.php');

    
	              $exec = mysqli_query($conn,"SELECT * FROM birth");
	                while($row = mysqli_fetch_array($exec)){
                          
	                	?>



                  <tr>
	            <td><?php echo $row['c_certno'];?></td>
	            <td><?php echo $row['c_fname'];?></td>
	            <td><?php echo $row['c_mname'];?></td>
	            <td><?php echo $row['c_lname'];?></td>
	            <td><?php echo $row['c_weight'];?></td>
	            <td><?php echo $row['c_gender'];?></td>
	            <td><?php echo $row['c_faname'];?></td>
	            <td><?php echo $row['c_moname'];?></td>
	            <td><?php echo $row['c_bplace'];?></td>
	            <td><?php echo $row['c_rcenter'];?></td>
	            <td><?php echo $row['c_poccupation'];?></td>
	            <td><?php echo $row['c_nationality'];?></td>
	            <td><?php echo $row['c_state'];?></td>
	            <td><?php echo $row['c_lga'];?></td>
	            <td><?php echo $row['c_town'];?></td>
	            <td><?php echo $row['c_address'];?></td>
	            <td><?php echo $row['c_number'];?></td>
	            <td><?php echo $row['c_registrar'];?></td>
	            <td><?php echo $row['c_dob'];?></td>
                <td><img src="<?php echo $row['c_passport'];?>" width='70' height='70'/></td>
                <td><a class='btn btn-danger' href="viewbirthdata.php?delete=<?php echo $row['user_id'];?>">Delete</a></td>
	            </tr>

                 <?php
                 if(isset($_GET['delete'])){
                 $user_id = $_GET['delete'];
                 mysqli_query($conn, "DELETE FROM birth WHERE user_id = '$user_id'");
                  }
	              }	
                  ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>