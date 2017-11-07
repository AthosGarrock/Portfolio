<!DOCTYPE html>
<html>
<head>
	<title><?php echo ucfirst($aName) ?></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/portfolio/Assets/style.css">
</head>
<body>
	<nav>
		<ul class="menu">
			<li><a href="/portfolio">Accueil</a></li>
			<li><a href="/portfolio/services.html">Services</a></li>
			<li><a href="#">Réalisations</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	<h1><?php  echo ucfirst($aName) ?></h1>

	<main><?php $this->$action(); ?></main>

	<footer></footer>
</body>
</html>
