<?php


namespace App\Tests;


use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class ContainerTestCase extends KernelTestCase
{

    public function setUp() : void
    {
        static::bootKernel();
    }

    public function getContainer() : ContainerInterface
    {
       return static::$kernel->getContainer();
    }

}