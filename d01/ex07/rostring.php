#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$result = explode(" ", trim($argv[1]));
		$arr = array_diff($result, array(""));
		$arr = array_values($arr);
		$size = sizeof($arr);
		$temp = $arr[$size - 1];
		array_push($arr, $arr[0]);
		unset($arr[0]);
		array_values($arr);
		foreach ($arr as &$value)
			echo "$value ";
		echo "\n";
	}
?>