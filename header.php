<?php
	session_start();
?>



<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title> Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<?php
				if (isset($_SESSION['id'])) {
					echo "<form action='includes/logout.inc.php'>
						<button>LOG OUT</button>
					</form>";
				} else {
					echo"<form actuin='includes/login.inc.php' method='POST'>
					<input type='text' name='uid' placeholder='Username'>
					<input type='password' name='pwd' placeholder='Password'>
					<button type='submit'>LOGIN</button>
				</form>";
				}
			?>
			<li><a href="signup.php">SIGNUP</a></li>
		</ul>
	</nav>
</header>