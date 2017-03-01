<?php

include ("config.php");

$title = $_GET ['groupTitle'];
$category = $_GET ['category'];
$text = $_GET ['text'];
	
	
	
	
	$sql = "INSERT INTO groups (title, category, text)
	VALUES ('" .$title. "', '" .$category. "', '" .$text. "')
	";
	
		if(($db->query($sql)) == True) {
			
				header("Location: admin_page.php");
		};