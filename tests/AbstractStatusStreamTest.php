<?php

namespace CascadeEnergy\Tests\StatusStream;

use CascadeEnergy\StatusStream\AbstractStatusStream;

class AbstractStatusStreamTest extends \PHPUnit_Framework_TestCase
{
    /** @var AbstractStatusStream */
    private $statusStream;

    public function setUp()
    {
        $this->statusStream = $this->getMockForAbstractClass('CascadeEnergy\StatusStream\AbstractStatusStream');
    }

    public function testItShouldAllowTheProcessIdToBeSet()
    {
        $this->statusStream->setProcessId('foo:bar:baz');

        $this->assertAttributeEquals('foo:bar:baz', 'processId', $this->statusStream);
    }

    public function testItShouldAllowTheSystemSubsystemAndComponentNamesToBeSet()
    {
        $this->statusStream->setSystemId('foo', 'bar', 'baz');

        $this->assertAttributeEquals('foo', 'system', $this->statusStream);
        $this->assertAttributeEquals('bar', 'subsystem', $this->statusStream);
        $this->assertAttributeEquals('baz', 'component', $this->statusStream);
    }
}
