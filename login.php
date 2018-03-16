<?php
        session_start();
        require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type=text/css href="login.css" />
</head>
<body>
<ul class="b">
 <h1>Amazon</h1>
      <a href="login.php">Login </a>&nbsp; 
      <a href="register.php">Register </a>&nbsp;
      <a href="about.html">About </a>
      </ul>
      <hr>
      </div>
<center>
  <pre>
    <div class="c">
	<h2>Login</h2>
    <form action= "login.php" method="POST">
     Username:<input type="text" name="username"/><br>
     Password:<input type="password" name="password"/><br>
     <input class="hs" type="submit" value="Login" name="login">
     <input class="hs" type="submit" value="Register" name="Register">
   </form>
  <?php
   if(isset($_POST['login'])){
	   
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from users where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location:adopt.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
  </pre>
</center>
</div>
</body>
</html>
