#!/usr/bin/php
<?php
	$logs = fopen("/var/run/utmpx", "r");
	fseek($logs, 1256);
	date_default_timezone_set('Europe/Moscow');
	while (!feof($logs))
	{
		$data = fread($logs, 628);
		if (strlen($data) == 628)
		{
			$data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
			if ($data['type'] == 7)
			{
				echo trim($data['user']) . " ";
				echo trim($data['line']) . "  ";
				$date = date('M  j H:i', $data['time']);
				echo $date . "\n";
			}
		}
	}
?>