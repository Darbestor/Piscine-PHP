<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Choosee shoes</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='../style/main.css'>
</head>
<body>
	<main>
		<div class="navbar">
			<div class="dropdown">
				<a href="index.html">Home</a>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Men</button>
				<div class="dropdown-content">
					<a href="#">Sneakers</a>
					<a href="#">Shlepki</a>
					<a href="#">Sapogi</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Woman</button>
				<div class="dropdown-content">
					<a href="#">Sneakers</a>
					<a href="#">Shlepki</a>
					<a href="#">Sapogi</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="#contact">About</a>
			</div>
			<div class="dropdown right">
				<a href="#"><?php if (0) {echo '<img src="../images/cart.png" alt="cart icon">';}else if (2) {echo "<p>$_SESSION['login']</p>";}?></a>
			</div>
			<div class="dropdown right">
				<a href="account.html"><img src="../images/account.png" alt="cart icon"></a>
			</div>
		</div>
	</main>
</body>
</html>