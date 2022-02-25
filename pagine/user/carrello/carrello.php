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

	<?php
		session_start();
  		if(isset($_SESSION['email'])){
	?>
			<nav class="navbar  navbar-expand-lg navbar-light bg-light">
					<div class="container p-2">
						<a class="navbar-brand" href="./">
							<img src="../../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" ">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
                                <li class="nav-item">
									<a class="nav-link" href="../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
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
						<a class="navbar-brand" href="./">
							<img src="../../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
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
									<a class="nav-link" href="../../../pagine/user/contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../pagine/user/chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
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

    <div class="row"></div>
        <form class="row g-3">
               <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Nome e Cognome">
               </div>
               <div class="col-12">
                    <input class="form-control" placeholder="Indirizzo di consegna"></input>
               </div>
               <div class="col-18">
                    <input class="form-control" placeholder="Orario di consegna"></input>
                </div>
                <div class="col-24">
                    <input class="form-control" placeholder="Note aggiuntive"></input>
               </div>
        </form>  