<?php

include ("config.php");

$username = $_GET ['vardas'];
$pass = $_GET ['slaptazodis'];

//patikrinti ar yra username duombazeje:
$sql = "SELECT * FROM users WHERE username= '{$username}'";

$results = $db->query($sql);

if ($results->num_rows > 0) {
	
	echo "Toks vartotojas jau yra";
	
} else {

	//ideti i duombaze:
	$sql = "INSERT INTO users (username, password)
	VALUES ('" .$username. "', '" .$pass. "')";

	if ($db->query($sql) === TRUE) {
		
		header("Location: index.html");
		
	} else {
		
		echo "klaida: ". $sql . "<br>" . $db->error;
	}
}