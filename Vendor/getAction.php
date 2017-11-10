<?php 
//Définit l'action récupérée par GET. Essaie de mettre par défaut index si le contrôleur est celui par défaut.
	function getAction($cName){
		if (array_key_exists('a', $_GET))
			$a = $_GET['a'];
		else
			if ($cName == 'DefaultController')
				$a = 'index';
			else
				$a = 'error';

		return $a;
	}

 ?>