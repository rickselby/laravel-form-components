<?php

namespace RickSelby\Tests\Components\SkipTest;

trait MarksInvalidIfErrors
{
    /**
     * @doesNotPerformAssertions
     */
    public function testMarksInvalidIfErrors()
    {
        // Skip test for inputs that don't show errors
    }
}
