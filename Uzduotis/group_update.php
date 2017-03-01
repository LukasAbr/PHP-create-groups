
<?php

	include ('config.php');

	if (isset($_GET['id'])) {	

		$id=$_GET['id'];

		$sql = "SELECT * FROM groups WHERE id = $id";

		$results = $db->query($sql);
						
		if ($row = $results->fetch_assoc()) { 

			?>
												
						<link rel="stylesheet" href="css/groupStyle.css" />
						<link rel="stylesheet" href="css/topBar.css" />
						<style>

							body {
								float: left;
							}
							.container {
								width: 50%;
								margin: 0 auto;
								text-align: center;
							}

							#group {
								margin-bottom: 10px ; 
							}

						</style>

						<div id="Topbar">
							<a href="">
								<img src="images/small-groups-icon.png" class="Icon">
								<p class="topBarName"> Groups </p>
							</a>

							<ul>
								<li>
									<form action="editUser.php" >
										<input type="submit" value="Vartotojai">
									</form>
								</li>

								<li>
									<form action="create_group.php" >
										<input type="submit" value="Sukurti grupę">
									</form>
								</li>

								<li>
									<form action="logout.php" >
										<input type="submit" value="Atsijungti">
									</form>
								</li>
							</ul>
						</div>

						<div class="container">
							<?php	echo "<form method=post action=>"; ?>
								<div class="createdGroups">

									<div id="group">
										<div class="createdGroupTitle"><h3> Pavadinimas: <?php echo "<input type=text name=title value='".$row['title']."'>"; ?></h3></div>

										<div class="createdGroupText"><p> Apibūdinimas: <?php echo "<input type=text name=text value='".$row['text']."'>"; ?></p></div>

										<div class="createdGroupTime"><p>Laikas: <?php echo $row['date'] ?> </p></div>

									</div>
								</div>

							<?php	echo "<input name=update type=submit value=Pakeisti>";
									echo "<input type=submit formaction=admin_page.php value='Gryžti atgal'>";
							echo "</form>" ?>
						</div>
			<?php
				}
	};

	if(isset($_POST['update'])) {

		if(! $db ) {
			die('Could not connect: ' );
		}
					
		$title = $_POST['title'];
		$text = $_POST['text'];
						
		$sql= "UPDATE `groups` SET `title`='$title', `text`='$text' WHERE `id`='$id' " ;
		$results = $db->query($sql);
						
		if(! $results ) {
			die('Could not update data: ' );
		}
		header("Location: admin_page.php");
						
			};
        
?>