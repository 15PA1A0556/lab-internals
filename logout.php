<?php
 session_start();
?>
<html>
<head>
    <link rel="stylesheet" type=text/css href="register.css" />
</head>

<body>
    <div class='a'>
      <h1>Amazon</h1>
      <ul class="h" type="none">
      <li><a class="s" href="login.php">Login </a></li>
      <li><a class="s" href="about.html">About </a></li>
	  <?php
	    session_destroy();
        header('location:pet.php');
	  ?>
      </ul>
    </div>
</body>
</html>
