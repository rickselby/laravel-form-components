<?php

namespace RickSelby\Tests\Components\SkipTest;

trait ShowsErrors
{
    /**
     * @doesNotPerformAssertions
     */
    public function testShowsErrors()
    {
        // Skip test for inputs that don't show errors
    }
}
