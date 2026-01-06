<?php


/*const BASE = __DIR__ . '/../';

session_start();

require '../vendor/autoload.php';
require BASE . 'src/Framework/Router.php';
require BASE . 'src/Framework/Functions.php';

$router = new App\Framework\Router();
require BASE . 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
  $router->route($uri, $method);

} catch (Exception $e) {
  return redirect($router->previousUrl());
}*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
$mail = new PHPMailer(true);

// Take the parent / child templates and generate a HTML file ready to send */


function generateHtml($path)
{

  $context = stream_context_create([
    "ssl" => [
      "verify_peer" => false,
      "verify_peer_name" => false,
    ]
  ]);

  $html = file_get_contents($path, false, $context);

  return $html;
}

function createHtmlFile($email)
{
  $fileName = pathinfo($email)['filename'];
  if (substr($fileName, -5)) {
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/emails/html/booker/' . pathinfo($email)['filename'], generateHtml('https://' . $_SERVER['SERVER_NAME'] . '/emails/' . pathinfo($email)['basename'] . '?type=booker'));
  }
}

try {
  $emails = scandir(__DIR__ . '/emails');
  foreach ($emails as $email) {
   //if (str_contains(pathinfo($email)['basename'], '.html.php')) {
    if ($email == 'OtherSelfRegisteredThankYou_noPdf.html.php') {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'shumk5309@gmail.com';
      $mail->Password = 'xzye subw unvi ythz';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
      $mail->setFrom('shumk5309@gmail.com', ' UAT');
      $mail->addAddress('kenneth.shum@booker.co.uk');     //Add a recipient
      $mail->addAddress('kshumbooker@gmail.com');     //Add a recipient
      //$mail->addAddress('shumkhk@gmail.com');
      $mail->addReplyTo('noreply@bookertest.co.uk', 'Information');
      $mail->isHTML(true);
      $mail->Subject = pathinfo($email)['basename'];
      $mail->Body = generateHtml('https://' . $_SERVER['SERVER_NAME'] . '/emails/' . pathinfo($email)['basename'] . '?type=booker');
      $mail->send();
      createHtmlFile($email);
      echo pathinfo($email)['basename'] . " has been sent <br />";
    }
  }
} catch (Exception $e) {
  echo " Error sending email: " . $e->getMessage();
}
