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
    $sezionePiatto = $_POST['sezione'];
    
    $sqlPietanza = "INSERT INTO pietanza (nome, descrizione, url_img, prezzo, tipo) VALUES 
    ('$nome','$descrizione', '$urlImg', '$prezzo', '$sezionePiatto')";

    if($connessione->query($sqlPietanza) === true){
        
        header("location: ../gestionePiatti.php");
        echo "Piatto inserito con successo";
    }else{
        echo "Errore durante inserimento: ".$connessione->error."<br>";
    }

    $ultimo_id = $connessione->insert_id;
    $contatore = $_POST['contatore'];
    echo 'contatore: '.$contatore.'<br>';
    for($i = 0 ; $i < $contatore ; $i++){
        if(isset($_POST["$i"])){

            $nomeIngrediente = $_POST["$i"];
            echo 'ultimo id di portata: '.$ultimo_id.'.<br>';
            echo 'ingrediente da inserire: '.$nomeIngrediente.'<br>';

            $sqlIngrediente = 'INSERT INTO pietanzacontieneingrediente (idPietanza, nomeIngrediente) VALUES 
            ('.$ultimo_id.', "'.$nomeIngrediente.'" )';

            if($connessione->query($sqlIngrediente) === true){

                echo "Ingrediente inserito con successo"."<br>";
            }else{
                echo "Errore durante inserimento: ".$connessione->error."<br>";
            }
        }

    }

    $connessione->close();
?>