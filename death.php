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
     <h2><font color="#000000" face="Comic sans MS" size="10">Death Registration</h2></font>
     <form class="death-form" action="includes/death.inc.php" method="POST" enctype="multipart/form-data">
          <input type="text" class="form-control" name="certno" placeholder="Certificate Number">
          <input type="text" class="form-control" name="fname" placeholder="Firstname">
          <input type="text" class="form-control" name="mname" placeholder="Middlename">
          <input type="text" class="form-control" name="lname" placeholder="Lastname">
          <h3>
          <p>Registration Center:<textarea name="rcenter" class="form-control" placeholder="Enter Registration Center"></textarea>
          </h3></p>
          <input type="text" class="form-control" name="state" placeholder="State">
          <input type="text" class="form-control" name="lga" placeholder="LGA">
           <input type="text" class="form-control" name="town" placeholder="Town/Village">
          <input type="text" class="form-control" name="age" placeholder="Age at Death">
          <input type="text" class="form-control" name="dod" placeholder="Date of Death in the format(DD-MM-YY)">
          <input type="text" class="form-control" name="dor" placeholder="Date of Registration in the format(DD-MM-YY)">
          <h3>
          <P>Address of the Deceased:<textarea name="address" class="form-control" placeholder="Enter address of the Deceased"></textarea>
          </h3></P>
          <h3>
          <p>Primary Cause of Death:<textarea name="primary" class="form-control" placeholder=" Enter Primary Cause of Death"></textarea>
          </h3></p>
          <h3>
          <p>Secondary Cause of Death:<textarea name="secondary" class="form-control" placeholder="Enter Secondary Cause of Death"></textarea>
          </h3></p>
          <input type="text" class="form-control" name="registrar" placeholder="Registrar">
          <h3>
          <p>Gender:<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</p></h3>
          <input type="text" class="form-control" name="nok" placeholder="Next Of Kin">
          <h3>
          <p>Place of Issue:<textarea name="issue" class="form-control" placeholder="Enter Place of Issue"></textarea>
          </h3></p>
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


