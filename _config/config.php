<?php

/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 01/04/2019
 * Time: 01:26
 */
// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)
define("LOCALHOST", $_SERVER['HTTP_HOST']);
define("SECURITY","https://");
define("NOTSECURITY","https://");
define("DIR",NOTSECURITY.LOCALHOST.PATH);


// Website informations
define("WEBSITE_TITLE", "FITNESS");
define("WEBSITE_NAME", "FITNESS");
define("WEBSITE_URL", "https://fitness.com");
define("WEBSITE_DESCRIPTION", "Description du site");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("PASSWORD","fitness1234");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "fitness");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");
define("DATABASE_CHARSET","utf8");
define("DATABASE_PORT","3306");

//Defaut lanquage
define("DEFAULT_LANGUAGE", "fr");


