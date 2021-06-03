<?php


namespace App\Services\Blackjack;

/*
 * Create a function that takes an array of card numbers and return the sum of their value.
 * If the sum exceeds 21, throw an Exception.
 *  Values of the cards are as follows:
 *  2-10 are their value.
 * J-K (face cards) count as 10.
 *  Aces count either as 1 or 11 - play conservatively, so that if giving an ace a value of 11 causes you to lose and 1 allows you to win, then go with 1.
 */
class Blackjack
{

    public function cardValue(array $cards) : int
    {
        //TODO
        return 0;
    }
}