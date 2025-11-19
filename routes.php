<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/login', 'login.php');
$router->post('/email', 'email/store.php');

?>  