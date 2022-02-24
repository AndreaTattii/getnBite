
    <?php
        

        $host="127.0.0.1";
        $user="root";
        $pass="";
        $database="getnbite";
    
        $connessione= new mysqli($host, $user, $pass , $database);
       
    
        /* if($connessione === false){
            die("Errore di connessione: ".$connessione->connect_error);
        }
    
        $mail = $connessione->real_escape_string($_REQUEST['mail']);
        $password = $connessione->real_escape_string($_REQUEST['password']);
        
        
        if (isset($_SESSION['mail'])) {
            header("Location: ../../../index.php");
        }     
        if (isset($_POST['submit'])) {
            $mail = $_POST['mail'];
            $password = hash($_POST['password']);  //hashing della password
        
            $sql = "SELECT * FROM users WHERE email='$mail' AND pass='$password'";
            $result = mysqli_query($connessione, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['mail'] = $row['mail'];
                header("Location: ../../../index.php");
            } else {
                echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
            }
        } */
        
        error_reporting(0);

        if($connessione === false){
            echo "Errore: ".$connessione->error;
        }
       
        session_start();
        
        /*  if (isset($_SESSION['email'])) {           
            header("Location: ../../../index.php");
        }  */
            $email = $_POST['mail'];
            $password = $_POST['password'];
            $password = hash("sha256", $password);

            $sql = "SELECT email, pass FROM utente WHERE email='$email' AND pass='$password'";
            $result = mysqli_query($connessione, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $row['email'];
                header("Location: ../../../index.php");
            } else {
                $_SESSION['errore'] = 1;
                header("Location: formLogin.php");
            }
        


    ?>
		
