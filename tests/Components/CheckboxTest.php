<?php

namespace RickSelby\Tests\Components;

class CheckboxTest extends AbstractComponentTestCase
{
    protected $view = 'fc::checkbox';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="checkbox"/Uis');
    }
}
