#!/usr/bin/php
<?php
	if ($argc > 2)
	{
		$arr = array();
		$value;
		for ($i = 2; $i < $argc; $i++)
		{
			$arr[i - 2] = explode(":", $argv[$i]);
			if (($arr[i - 2][0]) == $argv[1])
				$value = $arr[i - 2][1];
		}
		if ($value)
			echo $value . "\n";
	}
?>