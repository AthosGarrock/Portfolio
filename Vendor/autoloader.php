<?php 
spl_autoload_register(function($className){
	if (preg_match('#[a-z]*(Controller)$#', $className)) 
		$file = 'Controllers/'.$className.'.php';
	else 
		$file = 'Models/'.$className.'.php';

	require_once $file;
})
 ?>