<?php


namespace App\Tests;


use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertNull;

class FirstTest extends ContainerTestCase
{

    /** @test */
    public function canGetContainer() : void
    {
        assertNotNull($this->getContainer());
    }
}