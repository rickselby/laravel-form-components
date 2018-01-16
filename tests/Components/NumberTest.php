<?php

namespace RickSelby\Tests\Components;

class NumberTest extends AbstractComponentTestCase
{
    protected $view = 'fc::number';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="number"/Us');
    }
}
