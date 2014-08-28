<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 8/23/14
 * Time: 12:44 PM
 */

// switch($_SERVER['REQUEST_METHOD'])
// {
//     case 'GET': {
//         $the_request = &$_GET;
//         break;
//     }
//     case 'POST':{
//         $the_request = &$_POST;
//         break;
//     }
//     default: {
//         $the_request = "nothing";
//         break;
//     }
// }

$uri = $_SERVER['REQUEST_URI'];

header('Content-type: text/html');

$request_foo = 'User request: '.$_REQUEST['foo'];
$request_test = 'User request: '.$_REQUEST['test'];



echo $request_foo.' --- '.$request_test . ' URI : '. $uri;