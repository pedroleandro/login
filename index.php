<?php

ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

echo "<h1>Olá, Mundo. Esse é o código aberto.</h1>";

ob_end_flush();