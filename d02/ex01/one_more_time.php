#!/usr/bin/php
<?php

	$days = array(
		"Lundi",
		"Mardi",
		"Mercredi",
		"Jeudi",
		"Vendredi",
		"Samedi",
		"Dimanche"
	);
	$months = array(
		"Janvier",
		"Février",
		"Mars",
		"Avril",
		"Mai",
		"Juin",
		"Juillet",
		"Août",
		"Septembre",
		"Octobre",
		"Novembre",
		"Décembre"
	);

	function ft_error()
	{
		echo "Wrong Format\n";
		exit;
	}

	function check_days($str)
	{
		global $days;
		for($i = 0; $i < sizeof($days); $i++)
			if ($days[$i] == $str)
				return true;
		return false;
	}

	function check_months($str, &$date)
	{
		global $months;
		for($i = 0; $i < sizeof($months); $i++)
		{
			if ($months[$i] == $str)
			{
				$date .= $i + 1 . ".";
				return true;
			}
		}
		return false;
	}

	if ($argc > 1)
	{
		$err = 2;
		if (preg_match('/^\w+\s([1-9]|[12]\d|3[01])\s\w+\s(19[7-9]\d|[2-9]\d{3})\s([0-1]\d|2[0-3]):[0-5]\d:[0-5]\d$/', $argv[1]))
		{
			$splitted = explode(" ", ucwords($argv[1]));
			$date = $splitted[1] . ".";
			if (!check_days($splitted[0]) || !check_months($splitted[2], $date))
				ft_error();
			$date .= $splitted[3] . " " . $splitted[4];
			date_default_timezone_set('Europe/Paris');
			$secs = strtotime($date);
			echo $secs;
		}
		else
			ft_error();
	}
?>