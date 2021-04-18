<?php
 include_once 'header.php';
?>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<section class="container">
	<div class="col-lg-12">
     <div class="navbar navbar-default">
     <div class="panel panel-primary">
     <div class="panel-body">
     <h2><font color="#000000" face="Comic sans MS" size="10">Birth Registration</h2></font>
     <form class="birth-form" action="includes/birth.inc.php" method="POST" enctype="multipart/form-data">
         <input type="text" class="form-control" name="certno" placeholder="Certificate Number">
          <input type="text" class="form-control" name="fname" placeholder="Firstname">
          <input type="text" class="form-control" name="mname" placeholder="Middlename">
          <input type="text" class="form-control" name="lname" placeholder="Lastname">
          <input type="text" class="form-control" name="weight" placeholder="Baby's Weight in Kg">
          <h3>
          <p>Gender:<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</p></h3>
          <input type="text" class="form-control" name="faname" placeholder="Father's Name">
          <input type="text" class="form-control" name="moname" placeholder="Mother's Name">
          <input type="text" class="form-control" name="bplace" placeholder="Place of Birth">
          <h3>
          <p>Registration Center:<textarea name="rcenter" class="form-control" placeholder=" Enter Registration Center"></textarea>
          </h3></p>
          <input type="text" class="form-control" name="poccupation" placeholder="Parent's Occupation">
          <input type="text" class="form-control" name="nationality" placeholder="Nationality">
          <input type="text" class="form-control" name="state" placeholder="State">
          <input type="text" class="form-control" name="lga" placeholder="LGA">
          <input type="text" class="form-control" name="town" placeholder="Town/Village">
          <h3>
          <p>Address<textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
          </h3></p>
          <input type="text" class="form-control" name="number" placeholder="Home Telephone Number">
          <input type="text" class="form-control" name="registrar" placeholder="Name of Registrar">
          <input type="text" class="form-control" name="dob" placeholder="Date of Birth(MM-YY-DD)">
          Upload Passport(.jpg,.png,.img): <input type="file" class="form-control" name="passport">
     	<button type="submit" name="submit">Submit</button>
     </form>
	</div>
     </div>
     </div>
     </div>
</section>
</body>

<?php
 include_once 'footer.php';
include_once 'includes/birthhandler.php';
?>





