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
        $this->createsInput('/<select/Us');
    }

    public function testCreatesInputWithOption()
    {
        $this->createsInput('/<option[^>]*value="key"[^>]*>[^<]*option/Us');
    }

    public function testCreatesInputWithName()
    {
        $this->createsInputWithName('/<select[^>]*name="Name"/Us');
    }
}
