<?php



$name = $_POST['name'];
$email = $_POST['email'];


$time = time();





$headers = "FROM: Bot <bot@bot.it>\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$oggetto = "Configuratore";

$message = "<center>Configuratore</center><br/><br/>Il giorno ".date('d/m/Y', $time). " hai effettuato il seguente preventivo:";

if(strlen($name)>0 && filter_var($email, FILTER_VALIDATE_EMAIL)){
	mail($email,$oggetto,$message,$headers);

}









	?>