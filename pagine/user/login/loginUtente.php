<!DOCTYPE html>
<html>
	<head>
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
        foreach($file as $user){
                if(($email==$user->email)){
                    $emailcorretta=1;
                if($password==$user->password)
                    $passwordCorretta=1;
                }	
        }
        //* Se email non esiste invito a registrarsi
        //* Se email esiste ma pwd sbagliata segnalazione errore e invito a reinserirla
        //* Se email esiste e pwd giusta pagina avvio sessione

        if(!($emailCorretta))
            echo  "Il nome email inserito non è esistente,".'<a href="../registrazione.html"> registrati</a>';
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
				<a href="registrazioneemail.php"><p>Non hai ancora un account?</p></a>
			</form>
		</div>
	</body>
</html>
