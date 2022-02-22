<!DOCTYPE html>
<html>
	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>GetnBite</title>
	</head>
	<body>
    <?php
        $emailCorretta=0;
        $passwordCorretta=0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        foreach($file as $utente){
                if(($email==$utente->email)){
                    $emailcorretta=1;
                if($password==$utente->password)
                    $passwordCorretta=1;
                }	
        }
        //* Se email non esiste invito a registrarsi
        //* Se email esiste ma pwd sbagliata segnalazione errore e invito a reinserirla
        //* Se email esiste e pwd giusta pagina avvio sessione

        if(!($emailCorretta))
            echo  "L'email inserita non è esistente,".'<a href="../registrazione.html">registrati qui</a>';
        else{
            if(!($passwordCorretta))
            echo  "La password inserita non è corretta,".'<a href="../index.html">torna al login</a>';
            else{
            //echo  "Accesso effettuato";
            header("location: inserire qui percorso file"); 
            }
        }
    ?>
		<div>
			<h1>Login</h1>
			<form method="POST" action="php/accedi.php"> <!-- Pagina action da aggiornare-->
				<input type="email" placeholder="" id="email" name="email" required>
				<input type="password" placeholder="" id="password" name="password" required>
				<input type="submit" value="Accedi" id="accedi">
				<a href="../registra/formRegistra.html"><p>Non hai ancora un account?</p></a>
			</form>
		</div>
	</body>
</html>
