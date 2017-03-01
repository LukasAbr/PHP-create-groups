<?php

	
	include ('config.php');
	
	$sql = "SELECT * FROM groups";

	$results = $db->query($sql);

	if ($results->num_rows > 0) {
		
		while($row = $results->fetch_assoc()){
			?>
	
					<div class="createdGroups">
						<div id="group">
							<div class="createdGroupTitle">
								<h3><?php echo $row['title']; ?></h3>

								<div class="dropdown" style="float:right">
									<button class="dropbtn">Edit</button>
									<div class="dropdown-content">
										<a href="group_update.php?id= <?php echo $row["id"]; ?>">Update</a>
										<a href="delete.php?id= <?php echo $row["id"]; ?>">Delete</a>
									</div>
									
								</div>

							</div>

							<div class="createdGroupText"><p><?php echo $row['text']; ?></p></div>

							<div class="createdGroupText">
								<div class="dropdown">
									<button class="dropbtn">Users</button>
									<div class="dropdown-content">
										<nav>
											users...
										</nav>
									</div>
									
								</div>
							</div>

							<div class="createdGroupTime"><p>Laikas: <?php echo $row['date']; ?> </p></div>
						</div>
					</div>


			<?php
		};
		
	} else {

		echo "0 yrasu";
	}
	
?>