<?php

use TddDojo\Dummy;

class DummyTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiate()
    {
        $dummy = new Dummy();
        $this->assertInstanceOf(Dummy::class, $dummy);
    }
}
