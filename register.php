<?php
//cose

function alreadyexist($name) {
    $myfile = fopen("accounts.txt", "r");
	echo "fino qui";
		while(!feof($myfile)) {
			$account = fgets($myfile);
			$user = explode(" ", $account);
			if ( $name === $user[0] ) return 1;
			
			/* $account = fgets($myfile);
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
			} */
		}
		return 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['user'];
    if (empty($name)) {
        echo "Error";
    } else {
		if ( alreadyexist($name) ) echo "User already registered";
		else {
			$myfile = fopen("accounts.txt", "a");
			$txt = $name . " " . $_POST['pass'] . "\r\n";
			fwrite($myfile, $txt);
			echo "Utente aggiunto";
			fclose($myfile);
		}
		header('location: index.php');
	}
}

?>
