<?php
    session_start();

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "getnbite";

    $connessione = new mysqli($host, $user, $password, $database);

    if ($connessione === false) {
         die("Errore di connessione: " . $connessione->connect_error);
    }
    $sql = "SELECT * FROM utente WHERE email='".$_SESSION['email']."'";
    $result = $connessione->query($sql);
    $row = $result->fetch_array();

    $sql = "SELECT * FROM carrello WHERE id_Utente='".$row['id']."'";
    $result = $connessione->query($sql);
    $row = $result->fetch_array();
    echo $row["id"];

    $sql = "INSERT INTO carrellocontienepietanze VALUES ( ,'$row["id"]')";
    $result = $connessione->query($sql);

    

