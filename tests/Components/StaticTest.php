<?php

namespace RickSelby\Tests\Components;

class StaticTest extends AbstractComponentTestCase
{
    protected $view = 'fc::static';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="text"/Uis');
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testCreatesInputAndShowsErrors()
    {
        // Static fields do not show errors
    }
}
