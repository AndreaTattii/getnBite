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

    <title>Recensioni</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background:#ffffff">
	<div class="container p-2">
					<img src="./img/Home/logoScritta.jpg" height="50">
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
	
    <div style="background-image: url('img/Recensioni/img1.png'); height: 500px">
        <center>
            <br>
			<p style="color: white; font-size:20px;">É il momento di far sentire la tua voce!</p>
            <h2 style="color: white; font-size:100px;">Recensioni</h2>
            <p style="color: white; font-size:20px;">La tua opinione conta davvero.</p>
        </center>
    </div>
	
	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-6">
				<left>
				    <h3>Valuta la tua esperienza<h3>
                    <input type="number" style="width: 10%;" min="1" max="5">
                    <br>
                    <h3>Raccontaci la tua esperienza<h3>
                    <input type="text">
                    <br>
                    <h3>Dai un titolo alla tua recensione<h3>
                    <input type="text">
                </left>
            </div>    
            <div class="col-sm-6">
            <div class="dropdown">
                <button class="dropbtn"><b>Cosa vuoi valutare?</b></button>
                <div class="dropdown-content">
                    <a href="#">Generale</a>
                    <a href="#">Consegna</a>
                    <a href="#">Qualità del cibo</a>
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