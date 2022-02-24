<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS Personale-->
	<link rel="stylesheet" href="cssPersonal/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Dolci</title>
  </head>
  <body>
  <?php
		session_start();
  		if(isset($_SESSION['email'])){
	?>
			<nav class="navbar  navbar-expand-lg">
					<div class="container p-2">
						<a class="navbar-brand" href="./">
							<img src="../../../img/Home/logoScritta.jpg" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
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
			<nav class="navbar  navbar-expand-lg">
					<div class="container p-2">
						<a class="navbar-brand" href="./">
							<img src="../../../img/Home/logoScritta.jpg" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
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
    <br>
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm">
				<center>
				 <h2>I nostri dolci<h2>
				</center>
			</div>
		</div>
	</div>
    
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm-4">
                <div class="card" style="width:350px">
                <img class="card-img-top" src="img/dolci/torta.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="torta.php"><b>TORTA PRALINATA CON GANACHE</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/dolci/semifreddo.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="semifreddo.php"><b>SEMIFREDDO CON RICOTTA E PERA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/dolci/pastiera.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="pastiera.php"><b>PASTIERA NAPOLETANA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/dolci/zuccotto.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="zuccotto.php"><b>ZUCCOTTO CON CREMA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/dolci/profitterol.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="profitterol.php"><b>PROFITTEROL AL CIOCCOLATO</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/dolci/mousse.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="mousse.php"><b>MOUSSE CAKE ALLE FRAGOLE E MANGO</b></a></p>
                    </center>
                </div>
            </div>
		</div>
    </div>

    <br>
    <br>

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
				<p style="text-align: center;">Login</p>
				<p style="text-align: center;">Copyright 2022 GetnBite.com</p>
				<p style="text-align: center;">Partita IVA 02070920992</p>
			</div>
		  </div>
		</div>
		</div>
	  </footer>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>