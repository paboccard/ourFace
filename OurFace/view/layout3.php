<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ton appli !</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css" media="all"/>
   
</head>
<body>
<!-- j'ai le droit de mettre des commentaires dans mon fichier HTML -->
	<div>
		<h2>Mon Menu</h2>
		<ul>
			<li><a href='OurFace.php'>index</a></li>
			<li><a href='OurFace.php?action=helloWorld'>HelloWorld</a></li>
			<li><a href='OurFace.php?action=superTest&param1=bonjour&param2=PAB'>SuperTest</a></li>
			<li><a href='OurFace.php?action=login'>Login</a></li>
		</ul>
    </div>
</br>
    <p><?php include($template_view); ?></p>

</body>
</html>
