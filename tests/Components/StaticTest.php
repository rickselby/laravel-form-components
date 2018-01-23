<?php

namespace RickSelby\Tests\Components;

class StaticTest extends AbstractComponentTestCase
{
    use SkipTest\ShowsErrors, SkipTest\Placeholder, SkipTest\MarksInvalidIfErrors;

    protected $view = 'fc::static';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="text"/Uis');
    }
}
