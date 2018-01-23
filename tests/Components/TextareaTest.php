<?php

namespace RickSelby\Tests\Components;

class TextareaTest extends AbstractComponentTestCase
{
    protected $view = 'fc::textarea';

    public function testCreatesInput()
    {
        $this->createsInput('/<textarea/Uis');
    }

    public function testCreatesInputWithName()
    {
        $this->createsInputWithName('/<textarea[^>]*name="Name"/Uis');
    }

    public function testCreatesInputWithValue()
    {
        $this->createsInputWithValue('/<textarea[^>]*>Value</Uis');
    }

    public function testCreatesInputAndMarksInvalidIfErrors()
    {
        $this->createsInputAndMarksInvalidIfErrors('/<textarea[^>]*class="[^"]*is-invalid"[^>]*>.*error/Uis');
    }

    public function testCreatesInputWithPlaceholder()
    {
        $this->createsInputWithPlaceholder('/<textarea[^>]*placeholder="Placeholder"/Uis');
    }
}
