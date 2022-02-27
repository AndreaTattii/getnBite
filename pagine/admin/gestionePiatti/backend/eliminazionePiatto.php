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
    
    
    $sql = "DELETE FROM pietanza WHERE nome = '$nome'";

    if($connessione->query($sql) === true){
        echo "Piatto eliminato con successo";
    }else{
        echo "Errore durante eliminazione: ".$connessione->error;
    }

   

    $connessione->close();
?>