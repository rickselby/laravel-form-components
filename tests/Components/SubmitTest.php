<?php

namespace RickSelby\Tests\Components;

use RickSelby\Tests\AbstractPackageTestCase;
use RickSelby\Tests\MakeViewTrait;

class SubmitTest extends AbstractPackageTestCase
{
    use MakeViewTrait;

    public function testCreatesSubmitWithText()
    {
        $this->assertRegExp(
            '/<button[^>]*type="submit"[^>]*>[^<]*SLOT/',
            $this->make('fc::submit', ['slot' => 'SLOT'])
        );
    }
}
