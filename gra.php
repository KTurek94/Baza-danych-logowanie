<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<link href='images/style.css' rel='stylesheet'>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Re-Spot</title>
</head>

<body>
	
<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	
?>

</body>
</html>