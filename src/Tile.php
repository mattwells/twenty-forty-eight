<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 02/05/16
 * Time: 23:20
 */

namespace CantSeeTheCode\TwentyFortyEight;


class Tile
{
	protected $value;

	public function __construct($value = 2)
	{
		$this->value = $value;
	}

	public static function random()
	{
		return new static(rand(0, 9) == 9 ? 2 : 4);
	}

	public function value()
	{
		return $this->value;
	}

	public function match(Tile $tile)
	{
		return $this->value() == $tile->value();
	}

	public function combine()
	{
		return new static($this->value() * 2);
	}
}