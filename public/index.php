<?php

/*const BASE = __DIR__ . '/../';

require __DIR__ . '/../vendor/autoload.php';
require BASE . '/Functions.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Framework\Router;


$router = new Router();

require BASE . 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
  $router->route($uri, $method);
  
} catch (ValidationException $exception) {
 

 // return redirect($router->previousUrl());
}*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require '../vendor/autoload.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $dir = __DIR__ . '/../templates/emails/booker/delivery';
    $emails = scandir($dir);
    foreach ($emails as $email) {
      if (substr($email, -5) == '.html') {
       
        $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kshumbooker@gmail.com';                  //SMTP username
    $mail->Password   = 'lbwk cend spaz ojtw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@bookertest.co.uk', 'Booker UAT');
    $mail->addAddress('kenneth.shum@booker.co.uk');     //Add a recipient
    $mail->addAddress('kshumbooker@gmail.com');     //Add a recipient
    //$mail->addAddress('websiteuat@booker.co.uk');
    $mail->addReplyTo('noreply@bookertest.co.uk', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $email;
    $mail->Body = file_get_contents($dir . '/' . $email); 
    $mail->send();
    echo $mail . ' has been sent' . '<br />';    
      }
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}