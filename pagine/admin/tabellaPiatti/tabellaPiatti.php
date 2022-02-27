<?php
	session_start();
?>
<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS Personale-->
	<link rel="stylesheet" href="../../../cssPersonal/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <title>GetnBite</title>
    </head>
    
		  <body>

		  
			 <nav class="navbar  navbar-expand-lg navbar-light bg-light">
				<div class="container p-2">
				    <a class="navbar-brand" href="../home/homeRistoratore.php">
					   <img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
				    </a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
					   <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					   <ul class="navbar-nav">
						  <li class="nav-item">
							 <a class="nav-link" href="../recensioni/recensioni.php" style="color: black">Recensioni</a>
						  </li>
						  <li class="nav-item">
							 <a class="nav-link" href="../gestionePiatti/gestionePiatti.php" style="color: black">Gestione menu</a>
						  </li>
						  <li class="nav-item">
                                    <a class="nav-link" href="../tabellaPiatti/tabellaPiatti.php" style="color: black">I tuoi piatti</a>
                          </li>
						  <li class="nav-item">
							 <a class="nav-link" href="../consegne/consegne.php" style="color: black">Ordini</a>
						  </li>
						  <li class="nav-item">
							 <a class="nav-link" href="../logout/logout.php" style="color: black">Logout</a>
						  </li>
						  
						  
					   </ul>
				    </div>
				</div>
			 </nav>
			 
			 <div class="container">
				<row class="row">
				</row>
				<br>
				<br>
				<br>
				<div class="row justify-content-center">
				    <div class="col-4">
					   <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px; text-align: center;">
						  <container>
							 <div class="row justify-content-center ">
								<div class="col sm-6">
								    <h2>I tuoi piatti<h2>
								</div>
							 </div>
						  </container> 
					   </div>
				    </div>
				</div>
				<br>
				<br>
                
                <!-- mettere qui php -->
                <?php

                    $host="127.0.0.1";
                    $user="root";
                    $pass="";
                    $database="getnbite";
                
                    $connessione= new mysqli($host, $user, $pass , $database);
                    
                    error_reporting(0);
            
                    if($connessione === false){
                        die("Errore: ".$connessione->connect_error);
                    }

                    $sql= "SELECT * FROM pietanza";
                    if($result = $connessione->query($sql)){
                        if($result->num_rows > 0){
                            echo'
                            <center>
                            <table style="border: 3px solid; border-color: #00E1A5; width: 60%" >
                                <tr style="border: 3px solid; border-color: #black;">
                                    <th style="border: 3px solid; border-color: black; text-align: center;">Id</th>
                                    <th style="border: 3px solid; border-color: black; text-align: center;">Nome</th>
                                </tr>';
                            while($row=$result->fetch_array()){
                                echo '
                                <tr style="border: 3px solid; border-color: #00E1A5;">
                                    <td style="border: 3px solid; border-color: #00E1A5; text-align: center;">' . $row['id'] . ' </td>
                                    <td style="border: 3px solid; border-color: #00E1A5; text-align: center;">' . $row['nome'] . ' </td>
                                </tr>
                                ';
                            }
                            echo "</table></center>";
                        }else{
                            echo "Non ci sono piatti nel database";
                        }
                    }else{
                        echo "Impossibile eseguire la query";
                    }






                ?>

                
		
		<!-- footer -->
	   <br>
       <br>
	   <div class="footer-clean">
		  <footer>
			 <div class="container">
				<div class="row justify-content-center">
				    <div class="col-4 ">
					   <a class="navbar-brand" href="./">
						  <img src="../../../img/home/logoScritta.png" alt=""  height="60" class="d-inline-block align-text-top">
					   </a>
				    </div>
				    <div class="col-4" ></div>
					   <center>
						  <p style="text-decoration: none; color:black">Partita Iva: 02070920992</p>
						  <p>GetnBite ©</p> 
					   </center>
				    </div>
				</div>
			 </div>
		  </footer>
	</div>
		  
		  
		  
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="../../../js/bootstrap.min.js"></script>
	   </body>
	   </html>
	   <?php
		  
	   ?>