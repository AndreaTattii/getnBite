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

			<nav class="navbar  navbar-expand-lg navbar-light bg-light">
					<div class="container p-2">
						<a class="navbar-brand" href="../../../index.php">
							<img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
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
			
	<br>
	<br>
    <div class="container pt-5">
		<div class="row">
			<div class="col-sm-6">
				<left>
                    <input type="text" placeholder="Nome e Cognome"></input>
					<br>
					<br>
                    <input type="text" placeholder="Indirizzo di consegna"></input>
					<br>
					<br>
					<input type="text" placeholder="Orario di consegna"></input>
					<br>
					<br>
					<input type="text" placeholder="Note aggiuntive"></input>
					<br>
					<br>
					<br>
					<br>
					<br>
					<form action="">
						<button type="submit" style="background-color: #00E1A5; font-size:20px; border-radius: 10px; height: 40px; width:180px; color: white">
							<b>Ordina</b>
						</button>  
					</form>
                </left>
            </div>  
            <div class="col-sm-6" style="border: solid 2px;">
				<div class="container pt-1">
					<center>
						<div class="row" style="border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 3px;">	
							<div class="col-12">	
								<h3>Il tuo ordine<h3>
							</div>
						</div>
					</center>
					<br>
					<div class="row">
						<div class="col-sm-2">	
							<p>Carbonara</p></p> 
						</div>
						<div class="col-sm-1">	
							<form action="">
								<button type="submit" style="background-color: #00E1A5; font-size:10px; border-radius: 80px; height: 25px; width:25px; color: white">
									<b>+</b>
								</button>  
							</form>
						</div>
						<div class="col-sm-1">	
							<form action="">
								<button type="submit" style="background-color: #00E1A5; font-size:10px; border-radius: 80px; height: 25px; width:25px; color: white">
									<b>-</b>
								</button>  
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2">	
							<p>Carbonara</p></p> 
						</div>
						<div class="col-sm-1">	
							<form action="">
								<button type="submit" style="background-color: #00E1A5; font-size:10px; border-radius: 80px; height: 25px; width:25px; color: white">
									<b>+</b>
								</button>  
							</form>
						</div>
						<div class="col-sm-1">	
							<form action="">
								<button type="submit" style="background-color: #00E1A5; font-size:10px; border-radius: 80px; height: 25px; width:25px; color: white">
									<b>-</b>
								</button>  
							</form>
						</div>
					</div>
					<br>
					<br>
					<br>
					<div class="row" style="border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 3px;">
						<div class="col-sm-6">	
							<p><b>Subtotale</b></p></p> 
						</div>
						<div class="col-sm-6">	
							<p>###</p>	
						</div>
					</div>
					<div class="row" style="border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 3px;">
						<div class="col-sm-6">	
							<p style="color:#c0c0c0;"><b>Consegna</b></p></p> 
						</div>
						<div class="col-sm-6">	
							<p>###</p>	
						</div>
					</div>
					<div class="row" style="border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 3px;">
						<div class="col-sm-6">	
							<p><b>Totale</b></p></p> 
						</div>
						<div class="col-sm-6">	
							<p>###</p>	
						</div>
					</div>
				</div>	
			</div>
		</div>

		