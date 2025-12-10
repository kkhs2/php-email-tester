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

try {
  $emails = scandir(__DIR__ . '/emails');
  foreach ($emails as $email) {
    //sendEmail('https://' . $_SERVER['SERVER_NAME'] . '/emails/' . pathinfo($email)['basename']);
    if (str_contains(pathinfo($email)['basename'], '.html.php') && pathinfo($email)['basename'] == 'OrderConfirmationD.html.php') {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kshumbooker@gmail.com';
    $mail->Password = 'lbwk cend spaz ojtw';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom('noreply@bookertest.co.uk', ' UAT');
    $mail->addAddress('kenneth.shum@booker.co.uk');     //Add a recipient
        $mail->addAddress('kshumbooker@gmail.com');     //Add a recipient
    $mail->addReplyTo('noreply@bookertest.co.uk', 'Information');
    $mail->isHTML(true);
    $mail->Subject = pathinfo($email)['basename'];
    $mail->Body = generateHtml('https://' . $_SERVER['SERVER_NAME'] . '/emails/' . pathinfo($email)['basename'] . '?type=venus');
    $mail->send();
    //echo $type . " " . $fileName . " has been sent <br />";
    echo pathinfo($email)['basename'] . " has been sent <br />";
    }
  }
} catch (Exception $e) {
  echo " Error sending email: " . $e->getMessage();
}
