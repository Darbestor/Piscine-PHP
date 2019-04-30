#!/usr/bin/php
<?php
	if ($argc > 2)
	{
		$arr = array();
		$value;
		for ($i = 2; $i < $argc; $i++)
		{
			$arr[i - 2] = explode(":", $argv[$i]);
			echo $arr[i - 2][0] . "\n";
			echo $argv[1] . "\n\n";
			if (($arr[i - 2][0]) == argv[1])
			{
				echo "true";
				$value = $arr[i - 2][1];
			}
		}
		//echo $value . "\n";
	}
?>