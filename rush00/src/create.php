<?php
	if ($_POST['submit'] && $_POST['submit'] == 'OK' && $_POST['passwd'])
	{
		if ($_POST['login'] && $_POST['passwd'])
		{
			if (!file_exists("../private"))
				mkdir("../private");
			if (file_exists("../private/passwd"))
				$accounts = unserialize(file_get_contents("../private/passwd"));
			else
				$accounts = array();
			$account = array();
			foreach($accounts as $acc)
				if ($acc['login'] == $_POST['login'])
				{
					echo "ERROR\n";
					exit;
				}
			$account['login'] = $_POST['login'];
			$account['passwd'] = hash("sha1", $_POST['passwd']);
			$accounts[sizeof($accounts)] = $account;
			$status = file_put_contents("../private/passwd", serialize($accounts));
			header("Location: ../html/index.html");
		}
	}
	else
		echo "ERROR\n";
?>