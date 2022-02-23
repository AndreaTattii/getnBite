
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
    
        $mail = $connessione->real_escape_string($_REQUEST['mail']);
        $password = $connessione->real_escape_string($_REQUEST['password']);
        
        //hashing della password
        $password = hash("sha256", $password);
    
        $sql="SELECT * FROM utente WHERE email='$mail' AND password='$password'";
    
        if($connessione->query($sql) === true){
            $_SESSION['mail']= $mail;
            header("location: ../../../../");
            echo "Utente inserito con successo";
        }else{
            echo "Errore durante inserimento: ".$connessione->error;
        }

        if (isset($_SESSION['email'])) {
            header("Location: ../index.php");
        }
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
        
            $sql = "SELECT * FROM users WHERE email='$mail' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $row['email'];
                header("Location: ../index.php");
            } else {
                echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
            }
        }
        <a href="../registra/formRegistra.html">Non hai un account? Registrati</a>

    ?>
		
