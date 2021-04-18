<!DOCTYPE html>
<html>
<head>
	<title>Birth Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class=>
	<nav class="navbar navbar-inverse">
		<div class=>
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Death Registration</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="death.php">Add Data</a></li>
				<li><a href="searchdeath.php">Search a Record</a></li>
			</ul>
		</div>
	</nav>
	<div class=>
		<div class="panel-body">
			<table class='table table-bordered table-hover'>
				<tr>
					<th>Cert No</th><th>Firstname</th><th>Middlename</th><th>Lastname</th><th>Reg Center</th><th>State</th><th>LGA</th><th>Town</th><th>Age at Death</th><th>Date of Death</th><th>Date of Registration</th><th>Address</th><th>Primary cause of Death</th><th>Secondary cause of death</th><th>Registrar</th><th>Gender</th><th>Next Of Kin</th><th>Place of Issue</th><th>passport</th><th>Delete</th>
				</tr>
                 <?php
	             include('includes/dbh.inc.php');

	              $exec = mysqli_query($conn,"SELECT * FROM death");
	                while($row = mysqli_fetch_array($exec)){?>

                  <tr>
	            <td><?php echo $row['d_certno'];?></td>
	            <td><?php echo $row['d_fname'];?></td>
	            <td><?php echo $row['d_mname'];?></td>
	            <td><?php echo $row['d_lname'];?></td>
	            <td><?php echo $row['d_rcenter'];?></td>
	            <td><?php echo $row['d_state'];?></td>
	            <td><?php echo $row['d_lga'];?></td>
	            <td><?php echo $row['d_town'];?></td>
	            <td><?php echo $row['d_age'];?></td>
	            <td><?php echo $row['d_dod'];?></td>
	            <td><?php echo $row['d_dor'];?></td>
	            <td><?php echo $row['d_address'];?></td>
	            <td><?php echo $row['d_primary'];?></td>
	            <td><?php echo $row['d_secondary'];?></td>
	            <td><?php echo $row['d_registrar'];?></td>
	            <td><?php echo $row['d_gender'];?></td>
	            <td><?php echo $row['d_nok'];?></td>
	            <td><?php echo $row['d_issue'];?></td>
                <td><img src="<?php echo $row['d_passport'];?>" width='70' height='70'/></td>
                <td><a class='btn btn-danger' href="viewdeathdata.php?delete=<?php echo $row['user_id'];?>">Delete</a></td>
	            
	
	            </tr>

                 <?php
                 if(isset($_GET['delete'])){
                 $user_id = $_GET['delete'];
                 mysqli_query($conn, "DELETE FROM death WHERE user_id = '$user_id'");
                  }
	              }	
                  ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>