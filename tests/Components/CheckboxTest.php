<?php

namespace RickSelby\Tests\Components;

class CheckboxTest extends AbstractComponentTestCase
{
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

    /**
     * @doesNotPerformAssertions
     */
    public function testCreatesInputAndShowsErrors()
    {
        // No errors shown for checkboxes
    }
}
