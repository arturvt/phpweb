<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/9/14
 * Time: 10:30 AM
 */
/*** include the controller class ***/
include __SITE_PATH . '/application/' . 'controller_base.class.php';

/*** include the registry class ***/
include __SITE_PATH . '/application/' . 'registry.class.php';

/*** include the router class ***/
include __SITE_PATH . '/application/' . 'router.class.php';

/*** include the template class ***/
include __SITE_PATH . '/application/' . 'template.class.php';

/*** auto load model classes ***/
function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/model/' . $filename;

    if (file_exists($file) == false)
    {
        return false;
    }
    include ($file);
}

/*** a new registry object ***/
$registry = new Registry;

/*** create the database registry object ***/
$registry->db = db::getInstance();


/*** load the router ***/
$registry->router = new router($registry);