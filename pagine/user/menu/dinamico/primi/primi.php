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

    <title>Primi</title>
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
				 <h2>I nostri primi<h2>
				</center>
			</div>
		</div>
	</div>
    
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm-4">
                <div class="card" style="width:350px">
                <img class="card-img-top" src="img/primi/carbonara.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="carbonara.php"><b>CARBONARA</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/amatriciana.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="amatriciana.php"><b>AMATRICIANA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/pasta.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="pasta.php"><b>PASTA AI POMODORI</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/trofie.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="trofie.php"><b>TROFIE AL PESTO</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/spaghetti.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="spaghetti.php"><b>SPAGHETTI ALLO SCOGLIO</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/pansotti.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="pansotti.php"><b>PANSOTTI ALLA SALSA LIGURE</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/salmiocarpio.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="salmiocarpio.php"><b>SALMIOCARPIO E RAPANELLI</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/millefoglie.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="millefoglie.php"><b>MILLEFOGLIE DI MELANZANE E TACCHINO</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/primi/tagliatelle.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="tagliatelle.php"><b>TAGLIATELLE DI BUFALA E CHAMPIGNON</b></a></p>
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

    <div class="footer-clean">
		<footer>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-4 ">
						<a class="navbar-brand" href="./">
							<img src="img/home/logoScritta.png" alt=""  height="60" class="d-inline-block align-text-top">
						</a>
					</div>
					<div class="col-4" ></div>
							<center>
								<a href="../../../../pagine/admin/login/formAdmin.php" style="text-decoration: none; color:black">Login Admin</a>
								<p style="text-decoration: none; color:black">Partita Iva: 02070920992</p>
								<p>GetnBite ©</p> 
							</center>
					</div>
				</div>
			</div>
		</footer>
	</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>