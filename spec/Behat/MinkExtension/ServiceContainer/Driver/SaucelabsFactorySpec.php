<?php

namespace spec\Behat\MinkExtension\ServiceContainer\Driver;

use PhpSpec\ObjectBehavior;

class SaucelabsFactorySpec extends ObjectBehavior
{
    function it_is_a_driver_factory()
    {
        $this->shouldHaveType('Behat\MinkExtension\ServiceContainer\Driver\DriverFactory');
    }

    function it_is_named_saucelabs()
    {
        $this->getDriverName()->shouldReturn('saucelabs');
    }

    function it_supports_javascript()
    {
        $this->supportsJavascript()->shouldBe(true);
    }
}
