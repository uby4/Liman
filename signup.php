<?php
 include_once 'header.php';
?>
  
   <br><br><br><br>
<section class="main-container">
	<div class="main-wrapper">
     <h2><font color="#000000">Admin SignUp</font></h2>
     <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <?php
            if (isset($_GET['first'])) {
               $first = $_GET['first'];
                 echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
            }else{
               echo '<input type="text" name="first" placeholder="Firstname">';
            }
            if (isset($_GET['last'])) {
               $last = $_GET['last'];
                 echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
            }else{
               echo '<input type="text" name="last" placeholder="Lastname">';
            }
            
          ?>
     	
     	<input type="text" name="email" placeholder="E-mail">
          <?php
            if (isset($_GET['uid'])) {
               $uid = $_GET['uid'];
                 echo '<input type="text" name="last" placeholder="Username" value="'.$uid.'">';
            }else{
               echo '<input type="text" name="uid" placeholder="Username">';
            }
          ?>
     	
     	<input type="password" name="pwd" placeholder="Password"> 
     	<input type="password" name="c_pwd" placeholder="Confirm Password">
     	<button type="submit" name="submit">Sign up</button>
     </form>
	</div>
</section>
<?php
if (!isset($_GET['signup'])) {
     exit();
}else{
     $signupCheck = $_GET['signup'];
     if ($signupCheck == "empty") {
        echo "<center><p class='error'>You did not fill in all the fields!</p></center>";
        exit();
     }elseif ($signupCheck == "invalid") {
        echo "<center><p class='error'>You used invalid Characters!</p></center>";
        exit();
     }elseif ($signupCheck == "email") {
        echo "<center><p class='error'>You used an invalid Email!</p></center>";
        exit();
     }elseif ($signupCheck == "usertaken") {
        echo "<center><p class='error'>Username Taken!</p></center>";
        exit();
     }elseif ($signupCheck == "passworddonotmatch") {
        echo "<center><p class='error'>Password Do not match!</p></center>";
        exit();
     }elseif ($signupCheck == "Sucess") {
        echo "<center><p class='success'>Account Created Succesfully!</p></center>";
        exit();
     }
}
?>
<br><br><br><br><br><br>


<?php
 include_once 'footer.php';
?>


