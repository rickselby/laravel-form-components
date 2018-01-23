<?php

namespace RickSelby\Tests\Components;

class CheckboxTest extends AbstractComponentTestCase
{
    use SkipTest\ShowsErrors, SkipTest\Placeholder, SkipTest\MarksInvalidIfErrors;

    protected $view = 'fc::checkbox';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="checkbox"/Uis');
    }

    public function testCreatesCheckedInput()
    {
        $this->data->put('checked', true);
        $this->createsInput('/<input[^>]*checked/Uis');
    }
}
