<?php

namespace RickSelby\Tests\Components\SkipTest;

trait ShowsErrors
{
    /**
     * @doesNotPerformAssertions
     */
    public function testCreatesInputAndShowsErrors()
    {
        // Skip test for inputs that don't show errors
    }
}
