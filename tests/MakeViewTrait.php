<?php

namespace RickSelby\Tests;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\MessageBag;

trait MakeViewTrait
{
    protected $viewFactory;

    public function makeViewSetUp()
    {
        $this->viewFactory = app(ViewFactory::class);
    }

    public function setUp()
    {
        parent::setUp();
        $this->makeViewSetUp();
    }

    protected function make($view, $data, $errors = [])
    {
        // Share errors with *every* view
        $this->viewFactory->share('errors', new MessageBag($errors));

        return $this->viewFactory
            ->make($view)
            ->with($data)
            ->render();
    }
}
