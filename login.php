<?php

function credentialsok($name) {
    $myfile = fopen("accounts.txt", "r");
	echo "fino qui <br>";
		while(!feof($myfile)) {
			$account = fgets($myfile);
			$user = explode(" ", $account);
			echo $user[0] . "<br>";
			if ( $name == $user[0] ) {
				
				echo "nome trovato<br>";
				$a = $_POST['pass'];
				$b = $user[1];
				echo var_dump($a) . "  " . var_dump($b) . "<br>";
				echo var_dump(strpos( $user[1], $_POST['pass'] ) ) . "<br>";
				
				if ( strpos( $user[1], $_POST['pass'] ) !== false ){
					echo "password ok<br>";
					return 1;
				};
				return 0;
			}
			
		}
		return 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['user'];
    if (empty($name)) {
        echo "Error";
    } else {
		if ( credentialsok($name) ) {
			echo "User logged<br>";
			session_start();
			$_SESSION["user"] = $name;
            $_SESSION["loggedin"] = true;
			
			if(isset($_POST["remember"]) && $_POST["remember"] == true)
            {
                setcookie("autologin", $name, time() + 86400, "/");
            }
			header('location: inside.php');
			
		}
			
		else {
			echo "errore: pass o email sbagliato<br>";
			header('location: index.php');
		}
	}
}

?>