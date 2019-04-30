#!/usr/bin/php
<?php
	function ft_val($char)
	{
		if (is_numeric($char))
			return 1000 + (ord($char) - ord("0"));
		if ($char >= "a" && $char <= "z")
			return ord($char) - ord("a");
		return 100000 + ord($char);
	}

	function ft_cmp($str1, $str2)
	{
		$str1 = str_split(strtolower($str1));
		$str2 = str_split(strtolower($str2));
		$len1 = count($str1);
		$len2 = count($str2);
		$len = $len1 < $len2 ? $len1 : $len2;
		for ($i = -1; ++$i < $len;)
			if (ft_val($str1[$i]) > ft_val($str2[$i]))
				return 1;
			else if (ft_val($str1[$i]) < ft_val($str2[$i]))
				return -1;
		if ($len1 == $len2)
			return 0;
		else if ($len1 > $len2)
			return 1;
		else
			return -1;
	}
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
		usort($arr, "ft_cmp");
		foreach ($arr as &$value)
			echo "$value\n";
	}
?>