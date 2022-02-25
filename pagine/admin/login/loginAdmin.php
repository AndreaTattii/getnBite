
    <?php
        session_start();

        $host="127.0.0.1";
        $user="root";
        $pass="";
        $database="getnbite";
    
        $connessione= new mysqli($host, $user, $pass , $database);
        
        error_reporting(0);

        if($connessione === false){
            die("Errore: ".$connessione->connect_error);
        }
       
        
        
        /*  if (isset($_SESSION['email'])) {           
            header("Location: ../../../index.php");
        }  */
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = hash("sha256", $password);

            $sql = "SELECT utente, pass FROM ristoratore WHERE utente='$username' AND pass='$password'";
            $result = mysqli_query($connessione, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['utente'];
                header("Location: ../home/homeRistoratore.php");
            } else {
                $_SESSION['errorea'] = 1;
                header("Location: formAdmin.php");
            }
        
        session_destroy();

    ?>