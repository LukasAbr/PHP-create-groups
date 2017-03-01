<?php include ('protection.php');
		   ?>
<html>
    <head>
        <title>Admin Page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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

            	nav ul {
                    margin: 10px;
					height:400px; 
                    width:100%;
					overflow:hidden; 
                    overflow-y:scroll;
                    list-style-type: none;
				}

                nav li {
                    border-bottom: 1px solid black;
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
                    <form action="admin_page.php" >
                        <input type="submit" value="Pagrindinis">
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
                </div>
            </div>

            <nav>
				<ul>
                    <?php include ("config.php");

                    $sql = "SELECT * FROM users WHERE admin=0";
                    $results = $db->query($sql);

                    if ($results->num_rows > 0) {
            
                        while($row = $results->fetch_assoc()){ ?>

                        <li> <div style="float:left"><?php  echo  $row['id']; ?></div>
                        
                            <?php  echo  $row['username']; ?>
                             
                             <div style="float:right"><?php  echo  $row['date']; ?>
                             <a href="delete_user.php?id= <?php echo $row["id"]; ?>" style="margin:0px 10px 0 10px">Delete</a>
                             </div>
                        
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
		    </nav>

		</div>
    </body>
</html>