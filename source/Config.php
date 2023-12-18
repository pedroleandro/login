<?php

/*
 * SITE CONFIGURAÇÕES
 */
define("SITE", [
    "name" => "Auth em MVC com php",
    "desc" => "Aprenda a construir uma plicação de autenticação em MVC com php do Jeito Certo",
    "domain" => "localauth.com",
    "locale" => "pt-br",
    "root" => "http://localhost/upinside/login",
]);

/*
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}

/*
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "login_codigo_aberto",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/*
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "",
    "facebook_author" => "",
    "facebook_appId" => "",
    "twitter_creator" => "",
    "twitter_site" => ""
]);

/*
 * EMAIL CONNECT
 */
define("MAIL", [
    "host" => "",
    "port" => "",
    "user" => "",
    "passwd" => "",
    "mode" => "",
    "from_name" => "",
    "from_email" => ""
]);

/*
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", [
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v4.0"
]);

/*
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", [
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/google"
]);
