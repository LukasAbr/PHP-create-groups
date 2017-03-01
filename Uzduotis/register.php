<!DOCTYPE html>
<html>
	<head>
		<title>Registruokis</title>
		 <link rel="stylesheet" href="css/topBar.css" />
		
		<style>
		 	body {
				 margin: 0;
			 }
			.container
			{
				width: 20%;
				margin: 0 auto;
			
			}
			.form {
				float:left;
				margin: 10%;
			
			}
			.registerForm input  {
				margin-top: 10px;
			}
			input {
      		  border-radius: 5px;
    		}
		</style>
	</head>
	<body>

      <div id="Topbar">
         
            <a href="">
                <img src="images/small-groups-icon.png" class="Icon">
                <p class="topBarName"> Groups </p>
            </a>
        </div>
	
		<div class="container">
			
			<div class="form">
				<p> Užsiregistruok: </p>
				<form action="user_db.php" method="get" class="registerForm">
					<input type="text" name="vardas" placeholder="Vardas" required>
					<br>
					<input type="password" name="slaptazodis" placeholder="Slaptažodis" required>
					<br>
					<input type="submit" value="Registruotis">
				</form>
				<br>
				<form action="index.html" >
                    <input type="submit" value="Prisijunk">
		        </form>
			</div>
		</div>

	</body>
</html>