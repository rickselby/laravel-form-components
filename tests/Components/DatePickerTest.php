<?php

namespace RickSelby\Tests\Components;

class DatePickerTest extends AbstractComponentTestCase
{
    protected $view = 'fc::datepicker';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*class="[^"]*date-picker[^"]*"/Uis');
    }
}
