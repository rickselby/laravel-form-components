<?php

namespace RickSelby\Tests\Components;

class DateTest extends AbstractComponentTestCase
{
    protected $view = 'fc::date';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*class="[^"]*date-picker[^"]*"/Us');
    }
}
