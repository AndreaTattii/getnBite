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
	

	<nav class="navbar navbar-expand-lg navbar-dark" style="background:#ffffff">
		<div class="container p-2">
			<img src="../../../img/Home/logoScritta.jpg" height="50">
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php" style="color: black">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="menu.php" style="color: black">Menù</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php" style="color: black">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> 
	
	

	<div style="background-image: url('../../../img/Recensioni/img1.png'); height: 500px; text-align:center;">
		
			<br>
			<p style="color: white; font-size:20px;">É il momento di far sentire la tua voce!</p>
			<h2 style="color: white; font-size:100px;">Recensioni</h2>
			<p style="color: white; font-size:20px;">La tua opinione conta davvero.</p>
		
	</div>


	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-3">

				<div style="border:1px  solid #00E1A5; padding: 20px; border-radius: 5px;">
					<h4>Cosa vuoi valutare?</h4> 
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
						<label class="form-check-label" for="flexCheckChecked">
							Generale
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">
							Consegna
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
	<footer class=" bg-white text-dark">
		<div class="container py-16 px-1">
			<div class="row py-4">
				<div class="col-md-4" style="align-content: flex-start;">
					<img src="../../../img/Home/logoScritta.jpg" width="400" class="mb-3">
				</div>
				<div class="col-md-4 center-text" style="position: relative; left: 700px;">
					<p style="text-align: center;">Login</p>
					<p style="text-align: center;">Copyright 2022 GetnBite.com</p>
					<p style="text-align: center;">Partita IVA 02070920992</p>
				</div>
				<div class="col-md-4 ">
				</div>
			</div>
		</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
</body>

</html>