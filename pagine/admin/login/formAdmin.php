<?php session_start(); ?>
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
          <a href="../../../index.php"><img src="../../../img/Home/logoScritta.png" height="50"></a>
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
          
          <form class="row g-3" action="loginAdmin.php" method="post">
        
            <div class="col-12">
              
              <label for="inputAddress" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>

            </div>
            <div class="col-12">

              <label for="inputAddress2" class="form-label">Password</label>
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
            <?php  
            //$_SESSION['errore']=1;
             if (isset($_SESSION['errorea'])){ ?>
            <div class="col-12">
              <p style="color: red;">Dati inseriti errati</p>
            </div>
            <?php }
              ?>
            <div class="col-12">
              <br>
              <button type="submit" class="btn btn-primary" style="background-color: #00E1A5; border-color: black;">Accedi</button>
              <br><br>
            </div>
          </form>
        </div>
        
      </div>
      <div class="col-sm-6">
        <div style="background-color: #00E1A5; padding:30px;">
          <div class="container pt-5 center-text">
            <div class="row">
              <img src="../../../img/Admin/favpng_writing-infographic-writer-homework-essay 1.png" width="60%">
            </div>
            <div class="row center-text"> 
              <h1 style="font-family: 'Playfair Display';font-size: 30px; color: white;">Gestisci il tuo ristorante</h1>
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
<?php session_destroy(); ?>