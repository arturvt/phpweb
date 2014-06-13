<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/11/14
 * Time: 2:52 PM
 */
require_once "../vendor/autoload.php";
echo ("<h1>Starting</h1>");


function breakLine() {
    echo ("<br>");
};

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);


breakLine();
echo $twig->render('Hello {{name}}!'), array('name' => 'Fabien');
breakLine();
echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien'));

