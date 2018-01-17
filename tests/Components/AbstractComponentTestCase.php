<?php

namespace RickSelby\Tests\Components;

use Illuminate\Support\Collection;
use RickSelby\Tests\AbstractPackageTestCase;
use RickSelby\Tests\MakeViewTrait;

abstract class AbstractComponentTestCase extends AbstractPackageTestCase
{
    use MakeViewTrait;

    protected $view;

    /** @var Collection */
    protected $data;

    /** @var Collection */
    protected $errors;

    public function setUp()
    {
        parent::setUp();
        $this->makeViewSetUp();

        $this->data = new Collection([
            'label' => 'Label',
            'name' => 'Name',
        ]);

        $this->errors = new Collection([
            'Name' => [
                'error',
            ]
        ]);
    }

    abstract public function testCreatesInput();

    public function testCreatesInputWithLabel()
    {
        $this->createsInputWithLabel();
    }

    public function testCreatesInputWithName()
    {
        $this->createsInputWithName();
    }

    public function testCreatesInputWithValue()
    {
        $this->createsInputWithValue();
    }

    public function testCreatesInputAndShowsErrors()
    {
        $this->createsInputAndShowsErrors();
    }

    public function testCreatesInputWithHelp()
    {
        $this->createsInputWithHelp();
    }

    public function testCreatesInputWithPlaceholder()
    {
        $this->createsInputWithPlaceholder();
    }

    public function createsInput($regex)
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray())
        );
    }

    public function createsInputWithLabel($regex = '/<label.*>Label.*<\/label>/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray())
        );
    }

    public function createsInputWithName($regex = '/<input[^>]*name="Name"/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray())
        );
    }

    public function createsInputWithValue($regex = '/<input[^>]*value="Value"/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('value', 'Value')->toArray())
        );
    }

    public function createsInputAndShowsErrors($regex = '/<[^>]*class="invalid-feedback"[^>]*>.*error/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray(), $this->errors->toArray())
        );
    }

    public function createsInputWithHelp($regex = '/Help/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('help', 'Help')->toArray())
        );
    }

    public function createsInputWithPlaceholder($regex = '/<input[^>]*placeholder="Placeholder"/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('placeholder', 'Placeholder')->toArray())
        );
    }
}
