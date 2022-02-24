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
                                <container>
                                    <div class="row justify-content-center ">
                                        <div class="col sm-2">
                                            <img src="img/Vector.png" width="40" class="mb-3">
                                        </div>
                                        
                                    </div>
                                    <div class="row justify-content-center ">
                                        <div class="col sm-6">
                                            <h2>Alcuni dati<h2>
                                        </div>
                                    </div>
                                </container> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php
                                $host = "127.0.0.1";
                                $user = "root";
                                $pass = "";
                                $database = "getnbite";
                            
                                $connessione = new mysqli($host, $user, $pass , $database);
                                if($connessione === false){
                                    die("Errore di connessione: ".$connessione->connect_error);
                                }

                                $sql = "SELECT * FROM ordine";
                                $result = mysqli_query($connessione, $sql);

                                echo 
                                '<p style="">Hai effettuato '
                                .$result->num_rows.
                                ' consegne.</p>' 
                                .'<br>
                                '; 
/*
                                $sql = "SELECT SUM(costo_totale) FROM ordine";
                                $result = mysqli_query($connessione, $sql);

                                $result = (string)$result;
                                echo "Per un ammontare di:".$result;
*/
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px;  ">
                                <h2 style="color: #00E1A5;">I piatti più ordinati sono</h2>
                            </div>
                        </div>
                    </div>


                </div>
                    
            
            
            
            
            <footer class="p-3 mb-2 bg-white text-dark">
                <div class="container py-16 px-1">
                <div class="row py-4">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <img src="../../../img/Home/logoScritta.png" width="400" class="mb-3">
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
        