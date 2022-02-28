<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS Personale-->
	<link rel="stylesheet" href="../../../../../cssPersonal/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../../../css/bootstrap.min.css">

    <title>Menù</title>
  </head>
  <body>
  <?php
		session_start();

        $idPiatto=$_POST['piatto'];


  		if(isset($_SESSION['email'])){
	?>
			<nav class="navbar  navbar-expand-lg navbar-light bg-light">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../../../index.php">
							<img src="../../../../../img/Home/logoScritta.png" alt="fvf" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
                            <li class="nav-item">
									<a class="nav-link" href="../../../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
                                    <a class="nav-link" href="pagine/user/profilo/profilo.php" style="color: black">Profilo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../logout/logout.php" style="color: black">Logout</a>
								</li>
								
							</ul>
						</div>
					</div>
				</nav>
			
			
	<?php
  		}else{
	?>
			<!-- NAVABAR PER UTENTE NON LOGGATO -->
			<nav class="navbar  navbar-expand-lg navbar-light bg-light">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../../../index.php">
							<img src="../../../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
                                <li class="nav-item">
									<a class="nav-link" href="../../../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../menu/menu.php" style="color: black">Menù</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../login/formLogin.php" style="color: black">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
	<?php
		}
	?>
    <br>
    

        
    
    
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

        
        $sql= "SELECT * FROM pietanza WHERE id='".$idPiatto."'";
        if($result = $connessione->query($sql)){
            if($result=$result->fetch_array()){
                

                    echo'
                    <div class="container g-15">
                        <div class="row ">
                            <div class="col-sm">
                                <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px;">
                                    <center>
                                        <h2>'.$result['nome'].'<h2>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        

                        <center>
                            <table style="width:80%; border: 3px solid; border-color: black;">
                                <tr style="border: 3px solid; border-color: #black;">
                                    <td style="border: 3px solid; border-color: #00E1A5;"><img style="width: 500px;" src="'.$result['url_img'].'"></td>
                                    <td style="border: 3px solid; border-color: #00E1A5;">
                                        <p>
                                            <b>Descrizione</b>
                                        </p>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p>'.$result['descrizione'].'</p>
                                    </td>
                                </tr>
                                <tr style="border: 3px solid; border-color: #black;">
                                    <td style="border: 3px solid; border-color: #00E1A5;">
                                        <p>
                                            <b>Prezzo</b>
                                        </p>
                                        <br>
                                        <br>
                                        <p>'.$result['prezzo'].'€</p>
                                    </td>
                                  
                                      
                                        <td style="border: 3px solid; border-color: #00E1A5;">
                                            <p>
                                                <b>Ingredienti</b>
                                            </p>
                                            <br>
                                            <br>
                                            ';
                                            $sql= "SELECT * FROM pietanza, ingrediente, pietanzacontieneingrediente WHERE pietanza.id=idPietanza AND ingrediente.nome=nomeIngrediente AND pietanza.id='".$idPiatto."'";
                                            $result = $connessione->query($sql);
                                            while($row=$result->fetch_array()){ 
                                                echo'<p>'.$row['nomeIngrediente'].',</p>';
                                            }
                                            echo'
                                        </td>
                                    </tr>    
                                    <tr style="border: 3px solid; border-color: #black;">
                                        <td style="border: 3px solid; border-color: #00E1A5;">
                                            <form action="../../queryCarrello.php" method="post">
                                                <label for="inputEmail4" class="form-label">Quantità</label>
                                                <input type="number" style="width:150px;" class="form-control" id="quantità" name="quantità" min="1" required>
                                                <br>
                                                <br>
                                                <input type="submit" value="Aggiungi" style="text-decoration: none; color: white; font-size:20px; border: none; background-color: #00E1A5; border-radius:25px;">
                                            </form>
                                        </td>
                                        <td style="border: 3px solid; border-color: #00E1A5;">
                                            <p>
                                                <b>Allergeni</b>
                                            </p>
                                            <br>
                                            <br>
                                            ';
                                            $sql= "SELECT * FROM pietanza, ingrediente, pietanzacontieneingrediente WHERE pietanza.id=idPietanza AND ingrediente.nome=nomeIngrediente AND pietanza.id='".$idPiatto."'";
                                            $result = $connessione->query($sql);
                                            while($row=$result->fetch_array()){
                                            echo'<p>'.$row['allergene'].'</p>';
                                            }
                                            echo'
                                        </td>
                                    </tr>
                                </table>
                            </center>
                            </div>
                            ';
                      
                       
                    
                    
            }else{
                echo "Non è stato trovato un piatto corrispondente nel database";
            }
        }else{
            echo "Impossibile eseguire la query";
        }
    ?>



    <br>
    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="../../../../../img/Home/img5.png" class="d-block w-100" alt="...">
		  </div>
		</div>
	</div>

    <div class="footer-clean">
		<footer>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-4 ">
						<a class="navbar-brand" href="./">
							<img src="../../../../../img/home/logoScritta.png" alt=""  height="60" class="d-inline-block align-text-top">
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
    <script src="../../../../../js/bootstrap.min.js"></script>
  </body>
</html>  