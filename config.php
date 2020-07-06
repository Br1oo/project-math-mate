<?php
include 'CONECTION.PHP';
// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}
session_start();

if($_SESSION["loggedIn"] == "True"){
echo "je bent al ingelogt";
}

$email = $_POST['email'];

$duplicate=mysqli_query($link,"select * from persons1 where  email='$email'");
if (mysqli_num_rows($duplicate)>0)
{
die("email bestaat al");
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['achternaam']);

$wachtwoord = mysqli_real_escape_string($link, $_REQUEST['wachtwoord']);
$wachtwoord1 = mysqli_real_escape_string($link, $_REQUEST['wachtwoord1']);
$adres = mysqli_real_escape_string($link, $_REQUEST['adres']);
$woonplaats = mysqli_real_escape_string($link, $_REQUEST['woonplaats']);
$telefoonnummer = mysqli_real_escape_string($link, $_REQUEST['telefoonnummer']);
// $email = mysqli_real_escape_string($link, $_REQUEST['email']);

if($wachtwoord == $wachtwoord1){
$sql = "INSERT INTO persons1 (first_name, last_name, email, wachtwoord, adres, woonplaats, telefoonnummer) VALUES ('$first_name', '$last_name', '$email','$wachtwoord','$adres','$woonplaats','$telefoonnummer')";
}else{
    die("wachtwoord komt niet overeen");
}

if(mysqli_query($link, $sql)){
    header("Location: index.php");
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
 
// Close connection
mysqli_close($link);
?>