<?php
require_once 'vendor/autoload.php';

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/api/home.php';
});

$router->map( 'GET', '/projects', function() {
	require __DIR__ . '/api/projects-get.php';
});

$router->map( 'POST', '/projects', function() {
	require __DIR__ . '/api/projects-post.php';
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>
