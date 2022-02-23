<!doctype html>
<html lang="en">

<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS Personale-->
  <link rel="stylesheet" href="../../../cssPersonal/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">

  <!-- font -->
  <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

  <title>Login</title>
</head>

<body>


  

  <div class="container pt-5">
    <div class="row">
      <div class="col-sm-6">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background:#ffffff">
          <div class="container p-2">
            <img src="../../../img/Home/logoScritta.jpg" height="50">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="../../../index.php" style="color: black">Home</a>
                </li>
              </ul>
             </div>
          </div>
        </nav>
        <div class="row center-text"> 
          <h1 style="font-family: 'Inter'; font-size: 30px; color: black;">Accedi al tuo account</h1>
        </div>
        <!-- form -->
        <div id="login" style="margin:5px; padding:20px;">
          
          <form class="row g-3" action="loginUtente.php" method="post">
        
            <div class="col-12">
              
              <label for="inputAddress" class="form-label">Mail</label>
              <input type="email" class="form-control" id="mail" name="mail" required>

            </div>
            <div class="col-12">

              <label for="inputAddress2" class="form-label">Password </label>
              <input type="password" class="form-control" id="password" name="password" required>

            </div>
            
            <div class="col-12">
              <div class="form-check">

                <input class="form-check-input" type="checkbox" id="gridCheck"  >
                <label class="form-check-label" for="gridCheck" >
                  Ricordami
                </label>

              </div>
            </div>
            <br><br>
            <?php  //SOLUZIONE: nell'index.php settare la variabile di sessione "errore" a 1, in modo tale che non si entri nell'if
            session_start();
            //$_SESSION['errore']=1; Riga da mettere nell'index.php
             if (($_SESSION['errore']==NULL)){ ?>
            <div class="col-12">
              <p style="color: red;">Dati inseriti errati</p>
            </div>
            <?php } session_destroy();?>
            <div class="col-12">
              <br>
              <button type="submit" class="btn btn-primary" style="background-color: #00E1A5; border-color: black;">Accedi</button>
              <br><br>
            </div>
          </form>
          <p>Non hai un account? <a href="../registra/formRegistra.html"  style="color: #00E1A5; ">Registrati </a></p>
        </div>
        
      </div>
      <div class="col-sm-6">
        <div style="background-color: #00E1A5; padding:30px;">
          <div class="container pt-5 center-text">
            <div class="row">
              <img src="../registra/img/fattorinoCartoon.png" width="75%">
            </div>
            <div class="row center-text"> 
              <h1 style="font-family: 'Playfair Display';font-size: 30px; color: white;">Mangia con GetnBite</h1>
            </div>
          </div>
        </div>
      </div>   
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="container center-text">
          <b style="text-align: center;">Copyright 2022 GetnBite.com</b> 
          <br>
          <b style="text-align: center;">Partita IVA 02070920992</b>
        </div>
      </div>
        
    </div>
  </div> 
  
</body>

</html>