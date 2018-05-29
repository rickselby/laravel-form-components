<?php

namespace RickSelby\Tests\Components;

class SelectTest extends AbstractComponentTestCase
{
    protected $view = 'fc::select';

    public function setUp()
    {
        parent::setUp();
        $this->data->put('options', ['key' => 'option']);
    }

    public function testCreatesInput()
    {
        $this->createsInput('/<select/Uis');
    }

    public function testCreatesInputWithOption()
    {
        $this->createsInput('/<option[^>]*value="key"[^>]*>[^<]*option/Uis');
    }

    public function testSetsName()
    {
        $this->setsName('/<select[^>]*name="Name"/Uis');
    }

    public function testSetsValue()
    {
        $this->data->put('options', ['Value' => 'option']);
        $this->setsValue('/<option[^>]*value="Value"[^>]*selected="selected"/Uis');
    }

    public function testMarksInvalidIfErrors()
    {
        $this->marksInvalidIfErrors('/<select[^>]*class="[^"]*is-invalid"[^>]*>.*error/Uis');
    }

    public function testSetsPlaceholder()
    {
        $this->createsPlaceholder('/<option[^>]*>[^<]*Placeholder/Uis');
    }

    public function testAddsClass()
    {
        $this->addsClass('/<select[^>]*class="[^"]*addedClass"[^>]*>/Uis');
    }
}
