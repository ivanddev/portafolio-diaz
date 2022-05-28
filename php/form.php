<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$commentary = $_POST['commentary'];

$header .= "Content-Type: text/plain";

$commentary = "Este mensaje fue enviado por " . $firstname . ",\r\n";
$commentary .= "Su e-mail es: " . $email . " \r\n";
$commentary .= "Mensaje: " . $_POST['commentary'] . " \r\n";

$destination = 'ivandiazdeveloper@hotmail.com';
$from = 'Este email fue enviado desde la web Zierk Portfolio';

mail($destination, $from, utf8_decode($commentary), $header);

header('Location:../success.html');

?>