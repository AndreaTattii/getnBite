<?php
    session_start();
    $host="127.0.0.1";
    $user="root";
    $password="";
    $database="getnbite";

    $connessione = new mysqli($host, $user, $password, $database);

    if($connessione === false){
        die("Errore di connessione: ".$connessione->connect_error);
    }



    $sql ="INSERT INTO recensione";
?>