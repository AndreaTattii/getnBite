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
                        <a class="navbar-brand" href="./">
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
                        <div class="col">
                            <h1 style="font-family: 'Poppins'; text-align: center;">Il tuo ristorante</h1>
                        </div>
                    </row>
                    <br>
                    <br>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px; text-align: center;">
                            <br>
                                <container>
                                    <div class="row justify-content-center ">
                                        <div class="col sm-2">
                                            <img src="img/Vector.png" width="40" class="mb-3">
                                        </div>
                                        
                                    </div>
                                    <div class="row justify-content-center ">
                                        <div class="col sm-6">
                                            <h2>Inserisci piatti<h2>
                                        </div>
                                    </div>
                                </container> 
                            </div>
                        </div>
                    </div>
                    
                    
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