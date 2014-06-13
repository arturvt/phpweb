<?php

echo "welcome";

/* Depois ver isto aqui em baixo. */

/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/9/14
 * Time: 10:32 AM
 */

/*** error reporting on ***/
error_reporting(E_ALL);

/*** define the site path constant ***/
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

/*** include the init.php file ***/
include 'includes/init.php';

/*** set the path to the controllers directory ***/
$router->setPath (__SITE_PATH . 'controller');

echo "welcome";