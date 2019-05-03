<?php
	//print_r( $_SERVER);
	if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
	{
		$file = "img/42.png";
		header('Content-Type:text/plain');
		$data = file_get_contents("../".$file);
		$encode = base64_encode($data);
		echo "<html><body>\nHello Zaz<br />\n<img src='data:".$file.";base64,".$encode."'>\n</body></html>\n";
	}
	else
		echo "<html><body>That area is accessible for members only</body></html>\n"
?>