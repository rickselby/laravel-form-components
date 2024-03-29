<?php

namespace RickSelby\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase as GrahamAbstractPackageTestCase;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Request;
use RickSelby\Laravel\FormComponents\FormComponentsProvider;

abstract class AbstractPackageTestCase extends GrahamAbstractPackageTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Request::setLaravelSession(app(Session::class));
    }

    protected static function getServiceProviderClass(): string
    {
        return FormComponentsProvider::class;
    }
}
