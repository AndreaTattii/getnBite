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
    $cognome = $connessione->real_escape_string($_REQUEST['cognome']);
    $mail = $connessione->real_escape_string($_REQUEST['mail']);
    $password = $connessione->real_escape_string($_REQUEST['password']);
    


    $sql="INSERT INTO utente (nome, cognome, email, pass) VALUES 
    ('$nome','$cognome', '$mail', '$password')";

    if($connessione->query($sql) === true){
        echo "Utente inserito con successo";
    }else{
        echo "Errore durante inserimento: ".$connessione->error;
    }
?>