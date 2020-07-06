<?php
include("CONECTION.php");
// session_start();
if(!$link){
    die('Could not Connect My Sql:' .mysql_error());
}

// $_POST['email'];
// $a = "world";

// echo "Hello ". $a;
// echo "SELECT * FROM `persons` WHERE email = '" . $_POST['email'] . "'";
$email1 = $link->query ("SELECT * FROM `persons1` WHERE email = '" . $_POST['email'] . "'"); 
$data = $email1->fetch_assoc();
// var_dump($data);

// var_dump($data['wachtwoord']);
if($data != null && $data['wachtwoord'] == $_POST['wachtwoord'] ){
	session_start();
	
		$_SESSION['email'] = $_POST['email'];
		echo "Hallo ". $data['first_name'];
		$_SESSION["loggedIn"] = True;
		header('Location: index.php' );
	
}else{
	die("email met wachtwoord combinatie bestaat niet");
}

?>

