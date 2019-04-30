<?php
	function ft_split($string)
	{
		$result = explode(" ", trim($string));
		$arr = array_diff($result, array(""));
		$arr = array_values($arr);
		sort($arr);
		return $arr;
	}
?>