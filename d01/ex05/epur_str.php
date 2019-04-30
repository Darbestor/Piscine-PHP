#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$result = explode(" ", trim($argv[1]));
		$arr = array_diff($result, array(""));
		$arr = array_values($arr);
		$res = $arr[0];
		for ($i = 1; $i < sizeof($arr); $i++)
		{
			$res .= " ";
			$res .= $arr[$i];
		}
		echo "$res\n";
	}
?>