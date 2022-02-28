<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <title>Contatti</title>
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
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
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
									<a class="nav-link" href="../../../pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
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
	
    <div style="background-image: url('../../../img/Contatti/img1.png'); height: 500px; background-repeat: no-repeat; width:100%; background-position: center;">
        <center>
            <br>
            <br>
            <h2 style="color: white; font-size:100px; font-family:'MonteCarlo', MonteCarlo, serif;">69 Sapori</h2>
            <br>
            <br>
            <p style="color: white; font-size:20px;">Contattaci.</p>
            <p style="color: white; font-size:20px;">Sempre al vostro servizio.</p>  
        </center>
    </div>
	
	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-6">
				<left>
				    <h3>Numero di telefono<h3>
                    <p class="lead">010 8169041</p>
                    <h3>Email<h3>
                    <p class="lead">69sapori@gmail.com</p>
                    <h3>Dove ci troviamo<h3>
                    <p class="lead">Via XX settembre, Genova</p>
                </left>
            </div>    
            <div class="col-sm-6" style="border: solid 2px;">
                <center>
				    <h3>Orario<h3>
                    <p class="lead">Lunedì - Chiuso</p>
                    <p class="lead">Martedì - 12.00/15.00 e 18.30/23.00</p>
                    <p class="lead">Mercoledì - 12.00/15.00 e 18.30/23.00</p>
                    <p class="lead">Giovedì - 12.00/15.00 e 18.30/23.00</p>
                    <p class="lead">Venerdì - 12.00/15.00 e 18.30/23.00</p>
                    <p class="lead">Sabato - 11.30/15.30 e 18.00/23.30</p>
                    <p class="lead">Domenica - 11.30/15.30 e 18.00/23.30</p>
                </center>
			</div>
		</div>
		<br>
		<br>
		<br>
	</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="../../../img/Home/img5.png" class="d-block w-100" alt="...">
		  </div>
		</div>
		  </div>
	
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
	</body>
</html>