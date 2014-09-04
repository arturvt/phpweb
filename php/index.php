<?php 
// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';
// route the request internally
$uri = $_SERVER['REQUEST_URI'];
	if ('/php/index.php' == $uri) {
		list_action();
	} elseif (strpos($uri, '/php/index.php/show?') !== false && isset($_GET['id'])) {
		show_action($_GET['id']);
	} else {
		header('Status: 404 Not Found!');
		echo '<html><body>';
		echo '<h1>Page not found. Try other URL.</h1>';
		echo '<h2>Requested URI='.$uri.'</h2>';
		echo '<h3>GETID = '. isset($_GET['id']).'</h3>';
		if (strpos($uri, '/php/index.php/show?') !== false) {
			echo '<h3>STRPOS = something! </h3>';	
		} else {
			echo '<h3>STRPOS = NOTHING </h3>';
		}
		
		echo '<h3>URi = '. $uri.'</h3>';
		echo '</body></html>';
	}

?>