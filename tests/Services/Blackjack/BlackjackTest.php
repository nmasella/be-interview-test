<?php


namespace App\Tests\Services\Blackjack;


use App\Services\Blackjack\Blackjack;
use App\Tests\ContainerTestCase;
use function PHPUnit\Framework\assertEquals;

class BlackjackTest extends ContainerTestCase
{

    /** @test */
    public function baseBehaviour()
    {
        $blackjack = new Blackjack();
        assertEquals(16, $blackjack->cardValue(['A', 2, 3]));
        assertEquals(21, $blackjack->cardValue(['A', 'J', 'K']));

        $this->expectException(\Exception::class);
        $blackjack->cardValue(['A', 'J', 'K', 'Q']);

        $this->expectException(\Exception::class);
        $blackjack->cardValue([5, 3, 6, 6, 7, 9]);
    }

}