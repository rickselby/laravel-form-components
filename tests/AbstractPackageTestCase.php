<?php

namespace RickSelby\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase as GrahamAbstractPackageTestCase;
use RickSelby\Laravel\FormComponents\FormComponentsProvider;

abstract class AbstractPackageTestCase extends GrahamAbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return FormComponentsProvider::class;
    }
}
