<?php
	if ($_POST['submit'] && $_POST['submit'] == 'OK' && $_POST['oldpw'] && $_POST['newpw'] && $_POST['login'])
	{
		$accounts = unserialize(file_get_contents("../private/passwd"));
		for($i = 0; $i < sizeof($accounts); $i++)
		{
			if ($accounts[$i]['login'] == $_POST['login'])
			{
				$oldpw = hash("sha1", $_POST['oldpw']);
				$modif_acc['login'] = $accounts[$i]['login'];
				$modif_acc['passwd'] = hash("sha1", $_POST['newpw']);
				if ($oldpw == $accounts[$i]['passwd'] && $modif_acc['passwd'] != $accounts[$i]['passwd'])
				{
					$accounts[$i] = $modif_acc;
					$status = file_put_contents("../private/passwd", serialize($accounts));
					echo "OK\n";
					exit;
				}
				else
				{
					echo "ERROR\n";
					exit;
				}
			}
		}
		echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>