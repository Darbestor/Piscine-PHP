<?php
	function ft_is_sort($tab)
	{
		$sorted = array_values($tab);
		sort($sorted);
		if ($sorted === $tab)
			return true;
		else
		{
			$sorted = array_reverse($sorted);
			return $sorted === $tab;
		}
	}
?>