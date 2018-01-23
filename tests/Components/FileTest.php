<?php

namespace RickSelby\Tests\Components;

class FileTest extends AbstractComponentTestCase
{
    use SkipTest\Placeholder, SkipTest\Value;

    protected $view = 'fc::file';

    public function testCreatesInput()
    {
        $this->createsInput('/<input[^>]*type="file"/Uis');
    }
}
