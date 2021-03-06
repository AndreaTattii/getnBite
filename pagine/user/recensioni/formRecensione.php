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

	<title>Recensioni</title>
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
			<nav class="navbar  navbar-expand-lg">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../index.php">
							<img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
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
	

	<div style="background-image: url('../../../img/Recensioni/img1.png'); height: 500px; text-align:center; background-repeat: no-repeat; width:100%; background-position: center;">
		
			<br>
			<p style="color: white; font-size:20px;">É il momento di far sentire la tua voce!</p>
			<h2 style="color: white; font-size:70px;">Recensioni</h2>
			<p style="color: white; font-size:20px;">La tua opinione conta davvero.</p>
		
	</div>


	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-3">

				<div style="border:1px  solid #00E1A5; padding: 20px; border-radius: 5px; margin:10px;">
					<h4>Cosa vuoi valutare?</h4> 
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sezione" value="generale" id="flexRadioDefault2" value="antipasti" checked>	
						<label class="form-check-label" for="flexCheckChecked">
							Generale
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sezione" value="consegna" id="flexRadioDefault2" value="antipasti" checked>
						<label class="form-check-label" for="flexCheckDefault">
							Consegna
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sezione" value="cibo" id="flexRadioDefault2" value="antipasti" checked>
						<label class="form-check-label" for="flexCheckDefault">
							Qualità del cibo
						</label>
					</div>
				</div>
					
			</div>
			<div class="col-sm-9">
				<div id="recensione" style="margin:5px; padding:20px;">
          
					<form class="row g-3" action="insertRecensione.php" method="post">

					  <div class="col-md-9">

						<label for="inputPassword4" class="form-label">Dai un titolo alla tua recensione!</label>
						<input type="text" class="form-control" id="titolo" name="titolo" placeholder="Titolo della recensione" required>
						
					  </div>

					  <div class="col-md-3">

						<label for="inputEmail4" class="form-label">Valuta la tua esperienza.</label>
						<input type="number" class="form-control" id="voto" name="voto" min="1" max="5" required>
					
					  </div>

					  <div class="col-12">
						<br>
						<label for="inputAddress" class="form-label">Scrivi la tua recensione.</label>
						<textarea class="form-control" placeholder="Scrivi qui." name="recensione" id="recensione" ></textarea>
		  
					  </div>
					  
					  <br>
					  <div class="col-12">
						<br>
						<button type="submit" class="btn btn-primary" style="background-color: #00E1A5; border-color: #00E1A5; color: white;">Invia</button>
		  
					  </div>
					</form>
				</div
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
	
	<div class="footer-clean">
		<footer>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-4 ">
						<a class="navbar-brand" href="./">
							<img src="../../../img/home/logoScritta.png" alt=""  height="50" class="d-inline-block align-text-top">
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
	<script src="../../../js/bootstrap.min.js"></script>
</body>

</html>