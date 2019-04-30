#!/usr/bin/php
<?php
	function do_op($op1, $operat, $op2)
	{
		switch($operat)
		{
			case "+":
				return (int)$op1 + (int)$op2;
			case "-":
				return (int)$op1 - (int)$op2;
			case "*":
				return (int)$op1 * (int)$op2;
			case "/":
				return (int)$op1 / (int)$op2;
			case "%":
				return (int)$op1 % (int)$op2;
		}
	}

	if ($argc == 4)
	{
		for ($i = 1; $i < $argc; $i++)
		{
			$argv[$i] = trim($argv[$i]);
		}
		echo do_op($argv[1], $argv[2], $argv[3]) . "\n";
	}
	else
		echo "Incorrect Parameters\n"
?>