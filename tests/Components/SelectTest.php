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

    public function testCreatesInputWithName()
    {
        $this->createsInputWithName('/<select[^>]*name="Name"/Uis');
    }

    public function testCreatesInputWithValue()
    {
        $this->data->put('options', ['Value' => 'option']);
        $this->createsInputWithValue('/<option[^>]*value="Value"[^>]*selected="selected"/Uis');
    }

    public function testCreatesInputWithPlaceholder()
    {
        $this->createsInputWithPlaceholder('/<option[^>]*>[^<]*Placeholder/Uis');
    }
}
