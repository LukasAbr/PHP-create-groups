
<?php include ('protection.php');
		   ?>
<html>
    <head>
        <title>Create blog</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		 <link rel="icon" href="images/small-groups-icon.png">
		 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
		<link rel="stylesheet" href="css/topBar.css" />
		
		<style>

			.container {
					width: 30%;
					margin: 0 auto;
				}

			textarea {
				width: 100%;
				height: 200px;
				}
		</style>
    </head>
    <body>

				<div id="Topbar">
				
					<a href="">
						<img src="images/small-groups-icon.png" class="Icon">
						<p class="topBarName"> Groups </p>
					</a>

					<ul>
						<li>
							<form action="admin_page.php">
								<input type="submit" value="Gryžti atgal">
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
					
					<form name="myForm" action="group_db.php" method="get" onsubmit="return validateForm()">
					
						
							<input type="text" name="groupTitle"  placeholder="Group title..." style="margin-bottom:20px"> 
						
						
						
                            <select name="category" id="category" style="margin: 0 0 20px 0" >
                                    <option value="">- Category -</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Music">Music</option>
                                    <option value="Movies">Movies</option>
                                    <option value="People">People</option>
									<option value="Animals">Animals</option>
									<option value="Politics">Politics</option>
									<option value="Entertainment">Entertainment</option>
						
                            </select>
							<br>
						<label style="font-weight: bold"> Grupės apibūdinimas:</label>
						<textarea name="text" > </textarea>
						<br>
						
						<input id="submit" type="submit" value="SAVE" style="width:100px">
						<input id="delete" type="reset" value="DELETE" style="width:100px">
	
					</form>
				</div>
		<script>
			
			function validateForm() {
				var name = document.forms["myForm"]["groupTitle"].value;
				var category = document.forms["myForm"]["category"].value;
				
				
				console.log(text);
				
				if (name == null || name == "") {
					alert("Title must be filled!");
					return false;
				} else if (category == null || category == ""){
					alert("Choose category!");
					return false;
				} else {
					return true;
				}
			}
		</script>
    </body>
</html>