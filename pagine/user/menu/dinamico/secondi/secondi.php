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

    <title>Secondi</title>
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
				 <h2>I nostri secondi di carne<h2>
				</center>
			</div>
		</div>
	</div>
    
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm-4">
                <div class="card" style="width:350px">
                <img class="card-img-top" src="img/secondi/filetto.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="filetto.php"><b>FILETTO DI CINGHIALE</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/secondi/salsiccia.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="salsiccia.php"><b>SALSICCIA IN CROSTA DI PANE</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/secondi/controfiletto.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="controfiletto.php"><b>CONTROFILETTO DI MANZO IRLANDESE</b></a></p>
                    </center>
                </div>
            </div>
		</div>
    </div>  
    
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm">
				<center>
				 <h2>I nostri secondi di pesce<h2>
				</center>
			</div>
		</div>
	</div>
    
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm-4">
                <div class="card" style="width:350px">
                <img class="card-img-top" src="img/secondi/cheesecake.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="cheesecake.php"><b>CHEESECAKE SALATA CON OSTRICHE</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/secondi/polpo.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="polpo.php"><b>INSALATA DI POLPO E PATATE</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-4">
            <div class="card" style="width:350px">
            <img class="card-img-top" src="img/secondi/calamari.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="calamari.php"><b>CALAMARI RIPIENI E INSALATA</b></a></p>
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