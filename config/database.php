<?php

require_once __DIR__ . '/env.php';

try {

  $dsn = "mysql:host=" . DB_HOST .
    ";port=" . DB_PORT .
    ";dbname=" . DB_NAME .
    ";charset=utf8mb4";

  $pdo = new PDO($dsn, DB_USER, DB_PASS);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

  if (APP_DEBUG) {
    die('Database fout: ' . $e->getMessage());
  }

  die('Database verbinding mislukt');
}
