<?php

class Tyrion extends Lannister {
	function __construct()
	{
		$this->gender = 'm';
	}

	public function sleepWith($person)
	{
		if (is_subclass_of($person, 'Lannister'))
		{
			echo "Not even if I'm drunk !\n";
		}
		else
			echo "Let's do this.\n";
	}
}

?>