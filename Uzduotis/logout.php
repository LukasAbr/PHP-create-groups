<?php session_start();
$_SESSION['loggedin'] = false;
header("Location: index.html");
?>