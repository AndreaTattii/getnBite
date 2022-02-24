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
                                    <a class="nav-link" href="../gestionePiatti.php/gestionePiatti.php" style="color: black">Gestione menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../consegne/consegne.php" style="color: black">Ordini</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pagine/user/menu/menu.php" style="color: black">Logout</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </nav>
                    
                    
            
            
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/Home/img5.png" class="d-block w-100" alt="...">
                </div>
                </div>
                </div>
            <footer class="p-3 mb-2 bg-white text-dark">
                <div class="container py-16 px-1">
                <div class="row py-4">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <img src="./img/Home/logoScritta.jpg" width="400" class="mb-3">
                    </div>
                    <div style="position: relative; left: 700px;">
                        <a href="pagine/admin/login/formAdmin.php" style="text-decoration: none; color: #00E1A5; text-align: center;"><p>Admin</p></a>
                        <p style="text-align: center;">Copyright 2022 GetnBite.com</p>
                        <p style="text-align: center;">Partita IVA 02070920992</p>
                    </div>
                </div>
                </div>
                </div>
            </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="../../../js/bootstrap.min.js"></script>
        </body>
        </html>
        