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
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
                            <li class="nav-item">
									<a class="nav-link" href="../../../index.php" style="color: black">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
                                    <a class="nav-link" href="pagine/user/profilo/profilo.php" style="color: black">Profilo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../logout/logout.php" style="color: black">Logout</a>
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
									<a class="nav-link" href="../contatti/contatti.php" style="color: black">Contatti</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../chiSiamo/chiSiamo.php" style="color: black">Chi siamo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../eventi/eventi.php" style="color: black">Eventi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../menu/menu.php" style="color: black">Menù</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../login/formLogin.php" style="color: black">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
	<?php
		}
	?>
    <br>
    

        

    
    
    <div class="container g-15">
        <div class="row ">
			<div class="col-sm">
                <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px;">
                    <center>
                        <h2>Il nostro menù<h2>
                    </center>
                </div>
			</div>
		</div>

        <br>

		<div class="row justify-content-center g-5" >
			<div class="col-sm align-self-center">
                <a href="dinamico/antipasti/antipasti.php"><div class="card text-center align-self-center" style="width:350px">
                    <img class="card-img-top" src="../../../img/menu/antipasti.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p class="card-title"><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/antipasti/antipasti.php"><b>ANTIPASTI</b></a></p>
                        
                    </div>
                </div></a>
            </div>

            <div class="col-sm align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                    <img class="card-img-top" src="../../../img/menu/primi.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/primi/primi.php"><b>PRIMI</b></a></p>
                        
                    </div>
                </div>
		    </div>

            <div class="col-sm align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/secondi.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/secondi/secondi.php"><b>SECONDI</b></a></p>
                        
                    </div>
                </div>
            </div>
        </div>    
        <br>
        <div class="row justify-content-center g-5">
            <div class="col-sm-4 align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/pizze.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/pizze/pizze.php"><b>PIZZE</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/contorni.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/contorni/contorni.php"><b>CONTORNI</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/dolci.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/dolci/dolci.php"><b>DOLCI</b></a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center g-5">
            <div class="col-sm-4 align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/amari.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/amari/amari.php"><b>AMARI</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/caffe.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/caffe/caffe.php"><b>CAFFÉ</b></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="card text-center align-self-center" style="width:350px">
                <img class="card-img-top" src="../../../img/menu/bibite.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        
                            <p><a style="text-decoration: none; color: #00E1A5; font-size:30px;" href="dinamico/bibite/bibite.php"><b>BIBITE</b></a></p>
                        
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
    <script src="../../../js/bootstrap.min.js"></script>
  </body>
</html>    
    

    