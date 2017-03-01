<?php include ('protection.php');
		   ?>
<html>
    <head>
        <title>Admin Page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/groupStyle.css" />
        <link rel="stylesheet" href="css/topBar.css" />
         <link rel="icon" href="images/small-groups-icon.png">
		<style>
		
            .container {
					width: 50%;
					margin: 0 auto;
                    text-align: center;
				}

                h2 {
                    margin:0;
                    padding:0;
                }

			section {
				margin: 5px;
				padding: 3%;
				}

            .dropbtn {
                background-color: #646464;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
                display: block;
            }


            .dropdown:hover .dropbtn {
                background-color: #8e8e8e;
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
             <header class="major">
                <h2><span id="siteTitle">Sveiki Administratoriau - <?php echo $_SESSION['username'] ?> </span></h2>
                <p><span id="siteDiscription">Geros dienos!</span></p>
            </header>

            <div class="dropdown">
                <button class="dropbtn">Rušiuoti pagal:</button>
                <div class="dropdown-content">

                    <a href="#">
                        <button  id="orderByNewest" >Naujausi</button>
                        <button  id="orderByOldest" >Senausi</button>
                    </a>

                    <a href="#">
                        <p style="margin:0"> Data: <input type="date" style="color: black"></input></p>
                    </a>
                    
                    <a href="#">
                        <select name="category" id="category" style="margin:0; font-size:80%" >
                            <option value="">- Category -</option>
                            <option value="Travel">Travel</option>
                            <option value="Music">Music</option>
                            <option value="Movies">Movies</option>
                            <option value="People">People</option>
                            <option value="Animals">Animals</option>
                            <option value="Politics">Politics</option>
                            <option value="Entertainment">Entertainment</option>
                        </select>
                    </a>
                </div>
            </div>
	
			<section>
				<?php
				include ('all_enteries_admin.php');
				?>
			</section>

		</div>
    </body>
</html>