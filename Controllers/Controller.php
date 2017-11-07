<?php 
/**
* 
*/
abstract class Controller
{
	protected function render(string $url){
		include $url;
	}
}

 ?>