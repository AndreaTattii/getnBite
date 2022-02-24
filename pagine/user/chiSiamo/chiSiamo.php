<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <title>GetnBite</title>
  </head>
  <body>
  <?php
		session_start();
  		if(isset($_SESSION['email'])){
	?>
			<nav class="navbar  navbar-expand-lg navbar-light bg-light">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../index.php">
							<img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/menu/menu.php" style="color: black">Menù</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/logout/logout.php" style="color: black">Logout</a>
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
						<a class="navbar-brand" href="../../../../index.php">
							<img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/menu/menu.php" style="color: black">Menù</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/login/formLogin.php" style="color: black">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
	<?php
		}
	?>

    <div style="background-image: url('../../../img/ChiSiamo/img1.png'); height: 500px">
        <center>
            <br>
            <br>
            <br>
            <b style="color: white; font-size:20px;">Il nostro lavoro da un'altra prospettiva</b>
            <br>
            <h2 style="color: white; font-size:100px;">Chi siamo</h2>
            <br>
            <br>
            <p style="color: white; font-size:20px;">Per ottenere grandi risultati</p>
            <p style="color: white; font-size:20px;">servono grandi esperti.</p>  
        </center>
    </div>

    <div class="container pt-5">
		<div class="row">
			<div class="col-sm">
			<div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px;">
                    <center>
                        <h2>Il nostro team<h2>
                    </center>
                </div>
			</div>
		</div>
		<br>
		<br>
		<br>
	</div>
	<div class="container pt-5">
	   <div class="row">
		<div class="col-sm-6">
			<figure class="figure">
				<img src="../../../img/ChiSiamo/scaffa.png" class="figure-img img-fluid rounded" alt="immagine di sfondo">
			</figure>
		</div>
		<div class="col-sm-6">
            <br>
            <br>
			<br>
			<br>
			<br>
			<h4 style="color: #00E1A5">Marketing Manager</h4>
			<br>
			<h3>Scaffai Daniele</h3>
			<br>
			<p class="lead">E’ dal 2013 che si occupa di Marketing, in particolare di Social Media Managing. Nel 2022 si è unito al nostro team e ci ha fornito preziosi suggerimenti per la creazione del sito e attualmente lavora stabilmente con noi per effettuare campagne pubblicitarie.</p>
		</div>
	  </div>
	</div>
	
	<div class="container pt-5">
	    <div class="row">
		<div class="col-sm-6">
			<br>
            <br>
            <br>
			<br>
			<br>
			<h4 style="color: #00E1A5">Designer</h4>
			<br>
			<h3>Tatti Andrea</h3>
			<br>
			<p class="lead">Ha studiato grafica e design presso la prestigiosa università di Cambridge e nel 2022 ha deciso di collaborare per la realizzazione della Startup di GetnBite. Ha assistito il nostro programmatore per la scelta dei colori e la disposizione degli elementi nel sito.</p>
		</div>
		<div class="col-sm-6">
			<figure class="figure">
				<img src="../../../img/ChiSiamo/andre.png" class="figure-img img-fluid rounded" alt="sfondo">
			</figure>
		</div>
	     </div>
	</div>
	
	<div class="container pt-5">
	   <div class="row">
		<div class="col-sm-6">
			<figure class="figure">
				<img src="../../../img/ChiSiamo/nick.png" class="figure-img img-fluid rounded" alt="immagine di sfondo">
			</figure>
		</div>
		<div class="col-sm-6">
            <br>
            <br>
			<br>
			<br>
			<br>
			<h4 style="color: #00E1A5">Programmatore</h4>
			<br>
			<h3>Parisi Nicolas</h3>
			<br>
			<p class="lead">Il nostro fidato programmatore laureato in Computer Science presso l’università di Harvard ha deciso di intraprendere questo viaggio insieme a noi per realizzare il progetto. Si è occupato della gestione del DataBase e della creazione della WebApp.</p>
		</div>
	  </div>
	</div>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="../../../img/Home/img5.png" class="d-block w-100" alt="...">
		  </div>
		</div>
	</div>

    <footer class="p-3 mb-2 bg-white text-dark">
		<div class="container py-16 px-1">
		  <div class="row py-4">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<img src="../../../img/Home/logoScritta.jpg" width="400" class="mb-3">
			</div>
			<div style="position: relative; left: 700px;">
				<p style="text-align: center;">Login</p>
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