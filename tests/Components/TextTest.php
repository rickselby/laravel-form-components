<?php

namespace RickSelby\Tests\Components;

class TextTest extends AbstractComponentTestCase
{
    protected $view = 'fc::text';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="text"/Uis');
    }
}
