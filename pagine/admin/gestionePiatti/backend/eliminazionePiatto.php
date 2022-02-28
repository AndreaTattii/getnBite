<?php
	session_start();

    $host="127.0.0.1";
    $user="root";
    $password="";
    $database="getnbite";

    $connessione= new mysqli($host, $user, $password , $database);

    if($connessione === false){
        die("Errore di connessione: ".$connessione->connect_error);
    }

    $nome = $connessione->real_escape_string($_POST['nomePiatto']);
    header("location: ../gestionePiatti.php");
    $sql= "SELECT id FROM pietanza WHERE nome = '$nome'";
    if ($result = $connessione->query($sql)) {
        while ($row = $result->fetch_array()) {
            echo $row['id'];
            $sqlCancellaPietanzaIngrediente = 'DELETE FROM pietanzacontieneingredeinte 
                                                WHERE idPietanza = '.$row['id'].'';
            echo 'DELETE FROM pietanzacontieneingredeinte 
            WHERE idPietanza = '.$row['id'].'';
            if ($connessione->query($sqlCancellaPietanzaIngrediente) === true) {
                
                echo 'eliminazione da tabella pietanzacontineneingrediente avvenuta con successo <br>';
           } else {
                echo "errore in eliminazione pietanzacontineneingrediente <br>";
           }
        }
   } else {
        echo "Non ci sono ingredienti";
   }


    $sql = "DELETE FROM pietanza WHERE nome = '$nome'";

    if($connessione->query($sql) === true){
        echo "Piatto eliminato con successo";
        header("location: ../gestionePiatti.php");  
    }else{
        echo "Errore durante eliminazione: ".$connessione->error;
    }

   

    $connessione->close();
?>