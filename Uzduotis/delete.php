<?php
	include ('config.php');

if (isset($_GET['id'])) {
	
		$id=$_GET['id'];
		$sql_delete = "DELETE FROM groups WHERE id = $id ";
		($db->query($sql_delete) === TRUE) {
			header("Location: admin_page.php")
		};
	}
?>