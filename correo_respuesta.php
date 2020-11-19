<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require_once ('PHPMailer-master\src\PHPMailer.php');
require_once ('PHPMailer-master\src\Exception.php');
require_once ('PHPMailer-master\src\SMTP.php');
require_once ('contact.php');


$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPDebug  = 0;
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = "user@davinci.edu.ar";
$mail->Password   = "password";


$mail->SetFrom('isaac.hernandez@davinci.edu.ar', 'Isaac Hernández');
$mail->AddAddress('isaac.hernandez@davinci.edu.ar', 'El Destinatario');

$mail->Subject = 'Respuesta a su consulta.';
$mail->Body = 'Buenas tardes, espero que se encuentre bien. 

Mediante el presente correo, queremos informarle que hemos recibido su consulta. En los próximos días nos estaremos contactando con usted.

Le pedimos disculpa de antemano por la tardanza pero le aseguramos que estamos al tanto de su mensaje.

Saludos, Dimensión Gamer.';

if ((isset($_POST["enviar"]))){
    $multi_consulta = json_decode(file_get_contents('contactanos.json'), true);
    array_pop($_POST);
    array_push($multi_consulta, $_POST);
	file_put_contents("contactanos.json", json_encode($multi_consulta));
	consulta('Muchas gracias por su consulta, '.$_POST["nombre"].', ya nos contactaremos con vos.');
    $mail->Send(); 
}


?>
