



<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/php/header.php';

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {
  require __DIR__ . '/php/get.php';
} else {
  require __DIR__ .  '/php/post.php';
}

require __DIR__ .  '/php/footer.php';