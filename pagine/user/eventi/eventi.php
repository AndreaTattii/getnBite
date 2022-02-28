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

    <title>Eventi</title>
  </head>
  <body>
  <?php
		session_start();
  		if(isset($_SESSION['email'])){
	?>
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

    <div class="img-fluid" style="background-image: url('../../../img/Eventi/img1.png'); height: 500px; background-repeat: no-repeat; width:100%; background-position: center;">
        <center>
            <br>
            <br>
            <br>
            <br>
			<p style="color: white; font-size:20px;">Per rendere i tuoi momenti indimenticabili</p>
            <h2 style="color: white; font-size:100px;">Eventi</h2>
            <br>
            <br>
            <br>
            <p style="color: white; font-size:20px;">Affidati a noi per occasioni importanti</p>
            <p style="color: white; font-size:20px;">Non ti deluderemo</p> 
        </center>
    </div>

    <div class="container pt-5">
		<div class="row">
			<div class="col-sm-6">
				<left>
				    <h3>Data di svolgimento<h3>
                    <input type="date">
                    <h3>Partecipanti<h3></h3>
                    <input type="number">
                    <h3>Inserisci l'indirizzo<h3>
                    <input type="text">
                </left>
            </div>    
            <div class="col-sm-6">
            <div class="dropdown">
                <button class="dropbtn">Menù</button>
                <div class="dropdown-content">
                    <a href="../menu/fissi/menuPesce.php">Menù di Pesce</a>
                    <a href="../menu/fissi/menuCarne.php">Menù di Carne</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Tipo di evento</button>
                <div class="dropdown-content">
                    <a href="#">Matrimonio</a>
                    <a href="#">Battesimo</a>
                    <a href="#">Lavoro</a>
                    </div>
                </div>
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