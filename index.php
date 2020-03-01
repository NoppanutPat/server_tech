<?php
	session_start();
	if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    		header("location:login.php");
	  	exit;
  	}
?>

<html>
<body>
	<div> Hiiii </div>
	<p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
</body>
</html>
