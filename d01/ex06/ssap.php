#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = $argv[1];
		for ($i = 2; $i < $argc; $i++)
		{
			$str .= " ";
			$str .= $argv[$i];
		}
		$result = explode(" ", trim($str));
		$arr = array_diff($result, array(""));
		$arr = array_values($arr);
		sort($arr);
		foreach ($arr as &$value)
			echo "$value\n";
	}
?>