<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login_siswa.php"); // Redirecting To Home Page
}
?>