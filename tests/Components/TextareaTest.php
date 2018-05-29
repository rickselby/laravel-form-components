<?php

namespace RickSelby\Tests\Components;

class TextareaTest extends AbstractComponentTestCase
{
    protected $view = 'fc::textarea';

    public function testCreatesInput()
    {
        $this->createsInput('/<textarea/Uis');
    }

    public function testSetsName()
    {
        $this->setsName('/<textarea[^>]*name="Name"/Uis');
    }

    public function testSetsValue()
    {
        $this->setsValue('/<textarea[^>]*>Value</Uis');
    }

    public function testMarksInvalidIfErrors()
    {
        $this->marksInvalidIfErrors('/<textarea[^>]*class="[^"]*is-invalid"[^>]*>.*error/Uis');
    }

    public function testSetsPlaceholder()
    {
        $this->createsPlaceholder('/<textarea[^>]*placeholder="Placeholder"/Uis');
    }

    public function testSetsRows()
    {
        $this->assertRegExp(
            '/<textarea[^>]*rows="Rows"/Uis',
            $this->make($this->view, $this->data->put('rows', 'Rows')->toArray())
        );
    }

    public function testAddsClass()
    {
        $this->addsClass('/<textarea[^>]*class="[^"]*addedClass"[^>]*>/Uis');
    }
}
