<?php

session_start();

define('DSN', 'mysql:host=localhost;dbname=myapp;charset=utf8mb4');
define('DB_USER', 'myappuser');
define('DB_PASS', 'myapppass');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/todo/');

spl_autoload_register(function ($class) {
  $prefix = 'MyApp\\';

  if (str_starts_with($class, $prefix)) {
    // MyApp\Database
    $fileName = sprintf(__DIR__ . '/../classes/%s.php', substr($class, strlen($prefix)));

    if (file_exists($fileName)) {
      require($fileName);
    } else {
      echo 'File not found: ' . $fileName;
      exit;
    }
  }
});