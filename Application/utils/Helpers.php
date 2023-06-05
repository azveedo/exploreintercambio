<?php 

function isLocalhost(){
	return $_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1';
}

$baseUrl = isLocalHost() ? 'localhost:8888/explore-php' : 'explore';

