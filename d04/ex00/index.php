<?php
	if (session_start())
	{
		if ($_GET['submit'] && $_GET['submit'] == 'OK')
			if ($_GET['login'] && $_GET['passwd'])
			{
				$_SESSION['login'] = $_GET['login'];
				$_SESSION['passwd'] = $_GET['passwd'];
			}
	}
?>
<html><body>
<form action="index.php" method="GET">
	Username: <input type="username" name="login" value="<?php echo $_SESSION['login']?>"/>
	<br />
	Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']?>"/>
	<input type="submit" name="submit" value="OK"/>
</form>
</body></html>