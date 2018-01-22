<?php

namespace RickSelby\Tests\Components;

class StaticTest extends AbstractComponentTestCase
{
    use SkipTest\Errors, SkipTest\Placeholder;

    protected $view = 'fc::static';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="text"/Uis');
    }
}
