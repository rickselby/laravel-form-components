<?php

namespace RickSelby\Tests\Components;

use Illuminate\Support\Collection;

class DotNotationFeedbackTest extends AbstractComponentTestCase
{
    protected $view = 'fc::text';

    public function setUp()
    {
        parent::setUp();

        $this->data = new Collection([
            'label' => 'Label',
            'name'  => 'name[a]',
        ]);

        $this->errors = new Collection([
            'name.a' => [
                'error',
            ],
        ]);
    }

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="text"/Uis');
    }

    public function testSetsName($regex = '')
    {
        $this->setsName('/<input[^>]*name="name\[a\]"/Uis');
    }
}
