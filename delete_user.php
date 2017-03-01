<?php
	include ('config.php');

if (isset($_GET['id'])) {
	
		$id=$_GET['id'];
		$sql_delete = "DELETE FROM users WHERE id = $id ";
		($db->query($sql_delete) === TRUE) {
			header("Location: editUser.php")
		};
	}
?>