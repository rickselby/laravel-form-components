<?php

namespace RickSelby\Tests\Components;

class NumberTest extends AbstractComponentTestCase
{
    protected $view = 'fc::number';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="number"/Uis');
    }

    public function testSetsStep()
    {
        $this->assertMatchesRegularExpression(
            '/<input[^>]*step="Step"/Uis',
            $this->make($this->view, $this->data->put('step', 'Step')->toArray())
        );
    }

    public function testSetsMin()
    {
        $this->assertMatchesRegularExpression(
            '/<input[^>]*min="Min"/Uis',
            $this->make($this->view, $this->data->put('min', 'Min')->toArray())
        );
    }

    public function testSetsMax()
    {
        $this->assertMatchesRegularExpression(
            '/<input[^>]*max="Max"/Uis',
            $this->make($this->view, $this->data->put('max', 'Max')->toArray())
        );
    }
}
