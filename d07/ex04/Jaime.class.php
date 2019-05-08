<?php

class Jaime extends Lannister {
	function __construct()
	{
		$this->gender = 'm';
	}

	public function sleepWith($person)
	{
		if (is_subclass_of($person, 'Lannister'))
		{
			if ($person->gender == 'f')
				echo "With pleasure, but only in a tower in Winterfell, then.\n";
			else
				echo "Not even if I'm drunk !\n";
		}
		else
			echo "Let's do this.\n";
	}
}

?>