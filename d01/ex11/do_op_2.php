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

	if ($argc == 2)
	{
		$op1 = "";
		$operat = "";
		$op2 = "";
		$stripped = str_replace(" ", "", $argv[1]);
		$stripped = str_replace("\t", "", $stripped);
		$chars = str_split($stripped);
		foreach($chars as $ch)
		{
			if ($ch >= "0" && $ch <= "9")
			{
				if ($operat == "")
					$op1 .= $ch;
				else
					$op2 .= $ch;
			}
			else if ($ch == "+" || $ch == "-" || $ch == "*" || $ch == "/" || $ch == "%")
			{
				if ($operat != "")
				{
					echo "Syntax Error\n";
					exit;
				}
				else
					$operat = $ch;
			}
			else
			{
				echo "Syntax Error\n";
				exit;
			}
		}
		if ($op1 == "" || $operat == "" || $op2 == "")
		{
			echo "Syntax Error\n";
			exit;
		}
		echo do_op($op1, $operat, $op2) . "\n";
	}
	else
		echo "Incorrect Parameters\n"
?>