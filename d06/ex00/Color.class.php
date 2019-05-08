<?php
	class Color {
		static $verbose = false;
		public $red;
		public $green;
		public $blue;

		function __construct($arr)
		{
			if (isset($arr) && self::$verbose)
			{
				if ($arr['rgb'])
				{
					$this->red = intval($arr['rgb'] >> 16) & 0xFF;
					$this->green = intval($arr['rgb'] >> 8) & 0xFF;
					$this->blue = intval($arr['rgb']) & 0xFF;
				}
				else if (isset($arr['red']) && isset($arr['green']) && isset($arr['blue']))
				{
					$this->red = intval($arr['red']);
					$this->green = intval($arr['green']);
					$this->blue = intval($arr['blue']);
				}
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed\n", $this->red, $this->green, $this->blue);
			}
		}

		function __toString()
		{
			return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
		}

		function doc()
		{
			$doc = file_get_contents("Color.doc.txt");
			echo $doc . "\n";
		}

		function add(Color $color)
		{
			if (self::$verbose)
			{
				return new Color(array('rgb' => ($color->red + $this->red) + ($color->green + $this->green) + ($color->blue + $this->blue)));
			}
		}

		function sub(Color $color)
		{
			if (self::$verbose)
			{
				return new Color(array('rgb' => ($color->red - $this->red) + ($color->green - $this->green) + ($color->blue - $this->blue)));
			}
		}

		function mult(Color $color)
		{
			if (self::$verbose)
			{
				return new Color(array('rgb' => ($color->red * $this->red) + ($color->green * $this->green) + ($color->blue * $this->blue)));
			}
		}

		function __destruct()
		{
			if (self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed\n", $this->red, $this->green, $this->blue);
		}
	}
?>