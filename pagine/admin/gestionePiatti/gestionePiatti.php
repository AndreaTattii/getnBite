<?php
session_start();
?>
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

     <!-- font -->
     <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

     <title>GetnBite</title>
</head>

<body>


     <nav class="navbar  navbar-expand-lg navbar-light bg-light">
          <div class="container p-2">
               <a class="navbar-brand" href="./">
                    <img src="../../../img/Home/logoScritta.png" alt="" height="50" class="d-inline-block align-text-top">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                         <li class="nav-item">
                              <a class="nav-link" href="../recensioni/recensioni.php" style="color: black">Recensioni</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="../gestionePiatti/gestionePiatti.php" style="color: black">Gestione menu</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="../consegne/consegne.php" style="color: black">Ordini</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="../logout/logout.php" style="color: black">Logout</a>
                         </li>


                    </ul>
               </div>
          </div>
     </nav>

     <div class="container">
          <row class="row">
               <div class="col">
                    <h1 style="font-family: 'Poppins'; text-align: center;">Il tuo ristorante</h1>
               </div>
          </row>
          <br>
          <br>
          <br>
          <div class="row justify-content-center">
               <div class="col-4">
                    <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px; text-align: center;">

                         <container>
                              <div class="row justify-content-center ">
                                   <div class="col sm-6">
                                        <h2>Inserisci piatti<h2>
                                   </div>
                              </div>
                         </container>
                    </div>
               </div>
          </div>
          <br>
          <br>
          <form class="row g-3" action="backend/inserimentoPiatto.php" method="POST">
               <div class="col-md-6">
                    <label class="form-label">Nome piatto</label>
                    <input type="text" class="form-control" name="nome" id="nome">
               </div>
               <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Immagine del piatto</label>
                    <input type="text" class="form-control" name="urlImg" id="urlImg" placeholder="url">
               </div>
               <br>
               <br>
               <br>
               <br>
               <div class="col-12">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control" placeholder="Scrivi qui." name="descrizione" id="descrizione"></textarea>
                    <br>
                    <br>

               </div>

               <div class="row justify-content-center" style="margin: 10px;">
                    <div class="col-sm-2">
                         <label class="form-label">Prezzo</label>
                         <input type="number" class="form-control" placeholder="€" name="prezzo" id="prezzo"></input>
                         <br>
                         <br>
                    </div>
                    <div class="col-7">
                         <div class="container" style="margin: 10px; border:1px  solid #00E1A5; padding: 20px; border-radius: 5px;">
                              <div class="row justify-content-center">
                                   <div class="col-sm-12">
                                        <h4>Sezione</h4>
                                   </div>

                              </div>
                              <div class="row">
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="antipasti" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Antipasti
                                             </label>
                                        </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="primi" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Primi
                                             </label>
                                        </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="secondi" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Secondi
                                             </label>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="pizze" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Pizze
                                             </label>
                                        </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="contorni" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Contorni
                                             </label>
                                        </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="dolci" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Dolci
                                             </label>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="amari" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Amari
                                             </label>
                                        </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="caffe" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Caffè
                                             </label>
                                        </div>
                                   </div>
                                   <div class="col-sm-4">
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="sezione" id="flexRadioDefault2" value="bibite" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                  Bibite
                                             </label>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <a href="../tabellaPiatti/tabellaPiatti.php"><input type="botton" style="background-color: #00E1A5; color: white; display: inline-block; cursor: pointer; text-align: center; text-decoration: none; outline: none; border: none;  border-radius: 30px; height: 50px" value="Visualizza i tuoi piatti"></a>
                    </div>
               </div>




               <div style="margin: 10px; border:1px  solid #00E1A5; padding: 20px; border-radius: 5px;">
                    <div class="container">

                         <div class="row">
                              <div class="col-12">
                                   <h4>Ingredienti</h4>
                              </div>
                         </div>

                         <div class="row">
                              <?php
                              $host = "127.0.0.1";
                              $user = "root";
                              $password = "";
                              $database = "getnbite";

                              $connessione = new mysqli($host, $user, $password, $database);

                              if ($connessione === false) {
                                   die("Errore di connessione: " . $connessione->connect_error);
                              }

                              $sql = "SELECT nome FROM ingrediente";

                              $contatore = 0;
                              if ($result = $connessione->query($sql)) {
                                   while ($row = $result->fetch_array()) {
                                        echo '
                                             <div class="col-sm-4">
                                                  <div class="form-check">
                                                       <input class="form-check-input" name="' . $contatore . '"  type="checkbox" value="' . $row['nome'] . '" id="flexCheckChecked" >
                                                       <label class="form-check-label" for="flexCheckChecked">
                                                            ' . $row['nome'] . '
                                                       </label>
                                                  </div>
                                             </div>
                                             
                                        ';
                                        $contatore++;
                                   }
                              } else {
                                   echo "Non ci sono ingredienti";
                              }
                              echo '
                                   <input type="hidden" value="' . $contatore . '" name="contatore">

                              ';
                              ?>
                         </div>


                    </div>
               </div>





               <div class="col-12">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Carica</button>
               </div>
          </form>
     </div>



     <div class="container">
          <br>
          <div class="row justify-content-center">
               <div class="col-sm-4">
                    <div style="border-top-color:#E4E4E4;  border-top-style: solid; border-top-width: 2px; border-bottom-color:#E4E4E4;  border-bottom-style: solid; border-bottom-width: 2px; text-align: center;">
                         <container>
                              <div class="row justify-content-center ">
                                   <div class="col sm-6">
                                        <h2>Rimuovi piatti<h2>
                                   </div>
                              </div>
                         </container>
                    </div>
               </div>
          </div>

          <div class="row justify-content-center">
               <form action="backend/eliminazionePiatto.php" method="POST">
                    <div class="container">
                         <div class="row justify-content-start">
                              <div class="col-sm-6">
                                   <br>
                                   <input type="text" class="form-control" placeholder="Nome del piatto" name="nomePiatto" id="nomePiatto"></input>
                              </div>
                              <div class="col-sm-6">
                                   <br>
                                   <button type="submit" class="btn btn-primary" style="background-color: #00E1A5; border-color:#00E1A5;">Rimuovi</button>
                              </div>
                         </div>
                    </div>
               </form>
          </div>
     </div>

     <br>
     <br>


     <br>
     <div class="footer-clean">
          <footer>
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-4 ">
                              <a class="navbar-brand" href="./">
                                   <img src="../../../img/home/logoScritta.png" alt="" height="60" class="d-inline-block align-text-top">
                              </a>
                         </div>
                         <div class="col-4"></div>
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
<?php

?>