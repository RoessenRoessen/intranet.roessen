<?php

$envPath = __DIR__ . '/../.env';

if (!file_exists($envPath)) {
  die('.env bestand niet gevonden');
}

$env = parse_ini_file($envPath);

if ($env === false) {
  die('.env bevat syntax fouten');
}

define('DB_HOST', $env['DB_HOST']);
//define('DB_PORT', $env['DB_PORT']);
define('DB_NAME', $env['DB_NAME']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);

define('APP_ENV', $env['APP_ENV']);
define('APP_DEBUG', filter_var($env['APP_DEBUG'], FILTER_VALIDATE_BOOLEAN));
