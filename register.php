<?php
     require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type=text/css href="register.css" />
</head>

<body>
    <div class='a'>
      <h1>Amazon</h1>
      <ul class="h" type="none">
      <li><a class="s" href="login.php">Login </a></li>&nbsp;
     <li><a class="s" href="Register.php">Register </a></li>&nbsp;
      <li><a class="s" href="about.html">About </a></li>
     
      <hr>
      </ul>
    </div>
	<center>
	<div class="b">
    <form method="post" action="register.php" >
	
        <table class="c">
                <tr>
                 <td>Username :</td>
                 <td><input type="text" name="username" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Email :</td>
                 <td><input type="email" name="email" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Password: </td>
                 <td><input type="password" name="password" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Confirm Password :</td>
                 <td><input type="password" name="password1" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Mobile number :</td>
                 <td><input type="text" name="contact" class="textinput" required></td>
                 </tr>
				 <tr>
                 <td></td>
                 <td><a href="login.php"><input type="submit" value="register" name="register_btn" class="Register"></a></td>
                 </tr>

        </table>
	
    </form>
   
   <?php
	    if(isset($_POST['register_btn'])){
	    $username=stripslashes($_POST['username']);
            $email=stripslashes($_POST['email']);
            $password=stripslashes($_POST['password']);
            $password1=stripslashes($_POST['password1']);
            $contact=stripslashes($_POST['contact']);
			if($password == $password1){
				$query="select * from users where username='$username'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists ....try another username")</script>';
					
				}else
				{
					$query="INSERT INTO users(username,email,password,contact)VALUES('$username','$email','$password','$contact')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user registered ...go to login page")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
		   else{
			   echo '<script type="text/javascript">alert("password and confirm password doesnot match")</script>';
		   }
	
		}
	?>
	</div>
	</center>
</body>

</html>
