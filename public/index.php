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

function sendEmail($path, $type)
{
  try {
    print_r($type); die();
    $fileName = pathinfo($path)['basename'];
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'kshumbooker@gmail.com';                  //SMTP username
    $mail->Password = 'lbwk cend spaz ojtw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS  encryption
    $mail->Port = 587;
    //Recipients
    $mail->setFrom('noreply@bookertest.co.uk', $type . ' UAT');
    $mail->addAddress('kenneth.shum@booker.co.uk');     //Add a recipient
    $mail->addAddress('kshumbooker@gmail.com');     //Add a recipient
    $mail->addReplyTo('noreply@bookertest.co.uk', 'Information');

    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');       
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $fileName;
    $mail->Body = file_get_contents($path);
    $mail->send();
    echo $type . " " . $fileName . " has been sent <br />";
  } catch (Exception $e) {
    echo " Error sending email: " . $e->getMessage();
  }
}

$emailDirectory = new RecursiveDirectoryIterator(__DIR__ . '/../templates/emails');

foreach (new RecursiveIteratorIterator($emailDirectory) as $file) {
  if ($file->getExtension() == 'html') {
    $type = '';
    if (str_contains($file, "booker")) {
      $type = 'booker';
    } 
    if (str_contains($file, "venus")) {
      $type = 'venus';
    }

    print_r($type); die();

    if ($type !== '') {  
      sendEmail($file, $type);
    }
  }
}
