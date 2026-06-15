<?php

  $envPath = __DIR__ . '/../.env';

if (!file_exists($envPath)) {
  die('.env bestand niet gevonden');
}

$env = parse_ini_file($envPath);

if ($env === false) {
  die('.env bevat syntax fouten');
}

// DATABASE CONFIGURATIE
define('DB_HOST', $env['DB_HOST']);
//define('DB_PORT', $env['DB_PORT']);
define('DB_NAME', $env['DB_NAME']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);

// MAIL CONFIGURATIE
define('MAIL_HOST', $env['MAIL_HOST']);
define('MAIL_PORT', $env['MAIL_PORT']);
define('MAIL_USERNAME', $env['MAIL_USERNAME']);
define('MAIL_PASSWORD', $env['MAIL_PASSWORD']);
define('MAIL_VERIFY_PEER', filter_var($env['MAIL_VERIFY_PEER'], FILTER_VALIDATE_BOOLEAN));
define('MAIL_VERIFY_PEER_NAME', filter_var($env['MAIL_VERIFY_PEER_NAME'], FILTER_VALIDATE_BOOLEAN));
define('MAIL_ALLOW_SELF_SIGNED', filter_var($env['MAIL_ALLOW_SELF_SIGNED'], FILTER_VALIDATE_BOOLEAN));

define('APP_ENV', $env['APP_ENV']);
define('APP_DEBUG', filter_var($env['APP_DEBUG'], FILTER_VALIDATE_BOOLEAN));
