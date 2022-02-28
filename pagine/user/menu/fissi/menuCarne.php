<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Personale-->
    <link rel="stylesheet" href="../../../../cssPersonal/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">

    <title>Menù di pesce</title>
  </head>
  <body>
  <?php
		session_start();
  		if(isset($_SESSION['email'])){
	?>
			<nav class="navbar  navbar-expand-lg">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../../index.php">
							<img src="../../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="../../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../../pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../../pagine/user/logout/logout.php" style="color: black">Logout</a>
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
						<a class="navbar-brand" href="../../../../index.php">
							<img src="../../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="../../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../../pagine/user/eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../../../pagine/user/login/formLogin.php" style="color: black">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
	<?php
		}
	?>

    <div style="background-image: url('../../../../img/Eventi/img1.png'); height: 500px">
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
		<div class="col-sm-9">
			<br>
			<br>
			<h5 style="color: #00E1A5">Una scelta di qualità</h5>
			<h3>Tutto incluso</h3>
			<p class="lead">Nei nostri menù, oltre alle portate specificate, troverete certamente inclusi caffè e ammazzacaffè.<br>  
                Avrete inoltre diritto al vino della casa, bianco o rosso su vostra disposizione.<br>
                Inoltre, per i vostri eventi, il personale si prende cura della scelta degli ingredienti e si assicura che solo quelli di prima qualità raggiungano la cucina.<br>
                Ancora: saremo a vostra disposizione in qualsiasi momento e  per qualsiasi necessità.<br>
                Le tue necessità sono le nostre necessità, il tuo benessere è il nostro obiettivo. 
            </p>
             
		</div>
	</div>

    <div class="container pt-5">
		<div class="row">
			<div class="col-sm">
				<center>
				    <h2>Il nostro menù di carne<h2>
                    <h1 style="font-family:'MonteCarlo', MonteCarlo, serif;">30€<h1>
				</center>
			</div>
		</div>
    <br>
    <br>
    <div class="container pt-5">
		<div class="row">
            <div class="col-sm-3">
                <h3>Antipasti</h3>
            </div>
			<div class="col-sm-3">
                <div class="card" style="width:200px; height: 220px">
                <img class="card-img-top" src="../../../../img/menudicarne/zeppole.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>ZEPPOLE DI FEGATINI DI POLLO</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/wrap.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>WRAP DI <br> PIADINA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/mozza.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>MOZZARELLA CON DI PEPERONI ROSSI</b></a></p>
                    </center>
                </div>
            </div>
		</div>

        <div class="container pt-5">
		<div class="row">
            <div class="col-sm-3">
                <h3>Primi</h3>
            </div>
			<div class="col-sm-3">
                <div class="card" style="width:200px; height: 220px">
                <img class="card-img-top" src="../../../../img/menudicarne/carbonara.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>CARBONARA</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/amatriciana.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>AMATRICIANA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/tagliatelle.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>TAGLIATELLE BUFALA E CHAMPIGNON</b></a></p>
                    </center>
                </div>
            </div>
		</div>

        <div class="container pt-5">
		<div class="row">
            <div class="col-sm-3">
                <h3>Secondi</h3>
            </div>
			<div class="col-sm-3">
                <div class="card" style="width:200px; height: 220px">
                <img class="card-img-top" src="../../../../img/menudicarne/filetto.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>FILETTO DI CINGHIALE</b></a></p>
                    </center>
                </div>
            </div>
        </div>  
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/salsiccia.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>SALSICCIA IN CROSTA DI PANE</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/controfiletto.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>CONTROFILETTO DI MANZO E PATATE</b></a></p>
                    </center>
                </div>
            </div>
		</div>

        <div class="container pt-5">
		<div class="row">
            <div class="col-sm-3">
                <h3>Contorni</h3>
            </div>
			<div class="col-sm-3">
                <div class="card" style="width:200px; height: 220px">
                <img class="card-img-top" src="../../../../img/menudicarne/peperoni.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>PEPERONI AMMOLLICATI</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/patate.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>PATATE ALLA CARRETTIERA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/melanzane.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>MELANZANE GRATINATE</b></a></p>
                    </center>
                </div>
            </div>
		</div>

        <div class="container pt-5">
		<div class="row">
            <div class="col-sm-3">
                <h3>Dolci</h3>
            </div>
			<div class="col-sm-3">
                <div class="card" style="width:200px; height: 220px">
                <img class="card-img-top" src="../../../../img/menudicarne/zuccotto.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>ZUCCOTTO CON CIOCCOLATO</b></a></p>
                    </center>
                </div>
            </div>
        </div>    
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/profitterol.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>PROFITTEROL CON GANACHE DI CREMA</b></a></p>
                    </center>
                </div>
            </div>
		</div>
        <div class="col-sm-3">
            <div class="card" style="width:200px; height: 220px">
            <img class="card-img-top" src="../../../../img/menudicarne/mousse.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <center>
                        <p><a style="text-decoration: none; color: #00E1A5; font-size:15px;"><b>MOUSSECAKE ALLE FRAGOLE E MANGO</b></a></p>
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
                    <img src="../../../../img/Home/img5.png" class="d-block w-100" alt="...">
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

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../../../js/bootstrap.min.js"></script>
  </body>
</html>