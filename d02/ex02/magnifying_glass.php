#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$file = file_get_contents($argv[1]);
		$track = preg_replace_callback('/title=(["\'])(.*)\1/', 
		function ($matches) {
			return strtolower($matches[0]);
		},
		$file
	);
	echo $track;
	}
?>