<?php

// Composer autoload
require __DIR__ . '/../vendor/autoload.php';

// Load dotEnv
$dotenv = new Dotenv\Dotenv(__DIR__, '/../.env');
$dotenv->load();

$redirectTo = getenv('REDIRECT_TO');

header("Status: 301 Moved Permanently", false, 301);
header("Location: {$redirectTo}");
exit();