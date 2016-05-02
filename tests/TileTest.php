<?php

use CantSeeTheCode\TwentyFortyEight\Tile;

/**
 * Created by PhpStorm.
 * User: matt
 * Date: 02/05/16
 * Time: 23:44
 */
class TileTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	function it_should_generate_new_tile()
	{
		$tile = Tile::random();
		$this->assertInstanceOf(Tile::class, $tile);
		$this->assertContains($tile->value(), [2, 4]);
	}

	/** @test */
	function it_should_check_matches()
	{
		$tile1 = new Tile(2);
		$tile2 = new Tile(2);
		$tile3 = new Tile(8);

		$this->assertTrue($tile1->match($tile2));
		$this->assertFalse($tile1->match($tile3));
	}

	/** @test */
	function it_should_combine_tiles()
	{
		$this->assertEquals((new Tile(2))->combine()->value(), 4);
		$this->assertEquals((new Tile(4))->combine()->value(), 8);
		$this->assertEquals((new Tile(8))->combine()->value(), 16);
		$this->assertEquals((new Tile(16))->combine()->value(), 32);
	}
}
