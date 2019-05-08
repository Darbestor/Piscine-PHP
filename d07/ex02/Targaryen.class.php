<?php
	class Targaryen {
		public function resistsFire()
		{
			return false;
		}

		public function getBurned()
		{
			if ($this->resistsFire())
				return sprintf("emerges naked but unharmed");
			else
				return	sprintf("burns alive");
		}
	}
?>