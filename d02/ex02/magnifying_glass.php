#!/usr/bin/php
<?php
	function to_up($arr)
	{
		return strtoupper($arr[0]);
	}

	if ($argc == 2)
	{
		$file = file_get_contents($argv[1]);
		
		$file = preg_replace_callback('/<a[^>]*>.*?<\/a>/s', 
		function ($matches) {
			$matches[0] = preg_replace_callback('/>.*?(<|<\/)/s', 'to_up', $matches[0]);
			$matches[0] = preg_replace_callback("/(?<=title=\")[^\"]*/", 'to_up', $matches[0]);
			return $matches[0];
		},
		$file
	);
	echo $file;
	}
?>