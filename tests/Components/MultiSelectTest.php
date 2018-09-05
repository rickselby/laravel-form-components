<?php

namespace RickSelby\Tests\Components;

class MultiSelectTest extends SelectTest
{
    protected $view = 'fc::multiselect';

    public function testSetsName()
    {
        $this->setsName('/<select[^>]*name="Name\[\]"/Uis');
    }

    public function testSetsMultiple()
    {
        $this->setsValue('/<select[^>]*multiple/Uis');
    }
}
