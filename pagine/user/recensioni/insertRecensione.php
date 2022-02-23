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

    $titolo = $connessione->real_escape_string($_REQUEST['titolo']);
    $punteggio = $connessione->real_escape_string($_REQUEST['voto']);
    $testo = $connessione->real_escape_string($_REQUEST['recensione']);

    $utente = $_SESSION['mail'];

   // ALTER SESSION SET NLS_DATE_FORMAT = 'DD-MM-YYYY HH24:MI:SS';

    $data = date('d-m-Y', time());
    $ora = date('G:i', time());
    
    if(isset($_SESSION['mail'])){
        $id = "SELECT id from UTENTE where email = '".$utente."'";
        $id = $connessione->query($id);
        $id = mysqli_fetch_assoc($id);
        $sql="INSERT INTO recensione (`data_pubblicazione`, `ora_pubblicazione`, `testo`, `titolo`, `punteggio`, `idUtente`) VALUES 
        ('".$data."', '".$ora."', '".$testo."', '".$titolo."', '".$punteggio."', '".$id["id"]."')";
        echo $sql;
        if($connessione->query($sql) === true){
            header("location: ../../../../");
            echo "Utente inserito con successo";
        }else{
            echo "Errore durante inserimento: ".$connessione->error;
        }
    }else{
        echo "per inserire una recensione devi prima fare il login";
    }
    

    $connessione->close();
?>