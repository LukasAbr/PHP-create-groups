<?php
session_start();

include ("config.php");

$username = $_POST ['vardas'];
$pass = $_POST ['slaptazodis'];


//istraukti is duombazes:
$sql = "SELECT * FROM users WHERE username= '{$username}' AND password= '{$pass}'";

$results = $db->query($sql);

if ($results->num_rows > 0) {
	
	while($row = $results->fetch_assoc()){
		
	$_SESSION["username"] = $row["username"];
	$_SESSION["id"] = $row["id"];
	$_SESSION['loggedin'] = true;

		if ($row["admin"] == 1) {
			header("Location: admin_page.php");
		} else {

			header("Location: user_page.php");
		}
	}
} else {
	
	echo '<script language="javascript">';
echo 'alert("Vartotojo tokiu vardu ir slaptažodžiu nėra.")';
echo '</script>';
echo "<script>setTimeout(\"location.href = 'index.html';\",0);</script>";
$_SESSION["loggedIn"] = false;

}