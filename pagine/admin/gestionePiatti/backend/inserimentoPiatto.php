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

    $nome = $connessione->real_escape_string($_REQUEST['nome']);
    $urlImg = $connessione->real_escape_string($_REQUEST['urlImg']);
    $descrizione = $connessione->real_escape_string($_REQUEST['descrizione']);
    $prezzo = $connessione->real_escape_string($_REQUEST['prezzo']);
    
    

    $sql = "INSERT INTO utente (nome, descrizione, url_img, prezzo, tipo) VALUES 
    ('$nome','$cognome', '$mail', '$password')";

    if($connessione->query($sql) === true){
        $_SESSION['email']= $mail;
        header("location: ../../../../");
        echo "Utente inserito con successo";
    }else{
        echo "Errore durante inserimento: ".$connessione->error;
    }

    $connessione->close();
?>