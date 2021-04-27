<?php

class UserTest extends  PHPUnit\Framework\TestCase
{
    public function testAverageScore_WithoutRatings_ReturnsNull()
    {
        $game = new Game();
        $game->setRatings([]);
        $this->assertNull($game->getAverageScore());
    }

}
