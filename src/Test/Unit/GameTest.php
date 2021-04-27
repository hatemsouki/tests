<?php

class GameTest extends PHPUnit\Framework\TestCase
{
    public function testImage_WithNull_ReturnsPlaceholder()
    {
        $game = new Game();
        $game->setImagePath(null);
        $this->assertEquals('/images/placeholder.jpg', $game->getImagePath());
    }

    public function testImage_WithPath_ReturnsPath()
    {
        $game = new Game();
        $game->setImagePath('/images/game.jpg');
        $this->assertEquals('/images/game.jpg', $game->getImagePath());
    }

    public function testAverageScore_WithoutRatings_ReturnsNull()
    {
        $game = new Game();
        $game->setRatings([]);
        $this->assertNull($game->getAverageScore());
    }

    
}
