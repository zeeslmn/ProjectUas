<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
</head>
<body>
	<?php 
	session_start();

	if($_SESSION['level']==""){
		header("location:INDEX.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> You have logeed in as  <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="LOGOUT.php">LOGOUT</a>
 
	<br/>
	<br/>
 
	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
</html>
