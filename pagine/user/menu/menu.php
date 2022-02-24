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

    <title>Menù</title>
  </head>
  <body>
  <?php
		session_start();
  		if(isset($_SESSION['email'])){
	?>
			<nav class="navbar  navbar-expand-lg navbar-light bg-light">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../index.php">
							<img src="../../../img/Home/logoScritta.png" alt="fvf" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/menu/menu.php" style="color: black">Menù</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/logout/profilo.php" style="color: black">Profilo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/logout/logout.php" style="color: black">Logout</a>
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
						<a class="navbar-brand" href="../../../index.php">
							<img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/menu/menu.php" style="color: black">Menù</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pagine/user/login/formLogin.php" style="color: black">Login</a>
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
		<div class="row ">
			<div class="col-sm">
				<center>
				 <h2>Il nostro menù<h2>
				</center>
			</div>
		</div>
	</div>
    
    <div class="container g-15">
		<div class="row align-items-center g-15" >
			<div class="col-sm ">
                <div class="card text-center" style="width:350px">
                    <img class="card-img-top" src="../../../img/menu/antipasti.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p class="card-title"><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="antipasti.php"><b>ANTIPASTI</b></a></p>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card text-center" style="width:350px">
                    <img class="card-img-top" src="../../../img/menu/primi.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="primi.php"><b>PRIMI</b></a></p>
                        
                    </div>
                </div>
		    </div>

            <div class="col-sm">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/secondi.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="secondi.php"><b>SECONDI</b></a></p>
                        
                    </div>
                </div>
            </div>
        </div>    
        
        <div class="row align-items-center g-15">
            <div class="col-sm-4">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/pizze.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="pizze.php"><b>PIZZE</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/contorni.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="contorni.php"><b>CONTORNI</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/dolci.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dolci.php"><b>DOLCI</b></a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center g-15">
            <div class="col-sm-4">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/amari.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="amari.php"><b>AMARI</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/caffe.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="caffe.php"><b>CAFFÉ</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/bibite.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="bibite.php"><b>BIBITE</b></a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <br>
    <br>

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
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0" style="position: relative; left: 700px;">
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
    

    