<?php
require('koneksi.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
$username = stripslashes($_REQUEST['username']); 
//removes backslashes
$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
//Checking is user existing in the database or not
$query = "SELECT * FROM petugas WHERE username='$username' and
password='".($password)."'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);

if($rows > 0){

  $data = mysqli_fetch_assoc($result);

  if($data['level']=="admin"){
		// berfungsi membuat session
		$_SESSION['nama_petugas'] =  $data['nama_petugas'];
		$_SESSION['level'] = "admin";
    $_SESSION['username'] = $username;
		//berfungsi mengalihkan ke halaman admin
    header("Location:admin/index.php"); // Redirect user to index.php

  }else if($data['level']=="petugas"){
		// berfungsi membuat session
		$_SESSION['nama_petugas'] = $data['nama_petugas'];
		$_SESSION['level'] = "petugas";
    $_SESSION['username'] = $username;
		// berfungsi mengalihkan ke halaman moderator
		 header("Location:petugas/index.php"); 
  }else{
    header("siswa/index_siswa.php"); 
  }
}else{
echo "<div class='form'><h3>Username/password is
incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
}
}
?>