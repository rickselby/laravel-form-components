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

    public function setUp(): void
    {
        parent::setUp();
        $this->makeViewSetUp();

        $this->data = new Collection([
            'label' => 'Label',
            'name'  => 'Name',
        ]);

        $this->errors = new Collection([
            'Name' => [
                'error',
            ],
        ]);
    }

    abstract public function testCreatesInput();

    public function testCreatesLabel()
    {
        $this->createsLabel();
    }

    public function testSetsName()
    {
        $this->setsName();
    }

    public function testSetsValue()
    {
        $this->setsValue();
    }

    public function testMarksInvalidIfErrors()
    {
        $this->marksInvalidIfErrors();
    }

    public function testShowsErrors()
    {
        $this->showsErrors();
    }

    public function testCreatesHelp()
    {
        $this->createsHelp();
    }

    public function testSetsPlaceholder()
    {
        $this->createsPlaceholder();
    }

    public function testAddsClass()
    {
        $this->addsClass();
    }

    public function testAddsData()
    {
        $this->addsData();
    }

    public function createsInput($regex)
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray())
        );
    }

    public function createsLabel($regex = '/<label.*>Label.*<\/label>/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray())
        );
    }

    public function setsName($regex = '/<input[^>]*name="Name"/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray())
        );
    }

    public function setsValue($regex = '/<input[^>]*value="Value"/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('value', 'Value')->toArray())
        );
    }

    public function marksInvalidIfErrors($regex = '/<input[^>]*class="[^"]*is-invalid"[^>]*>.*error/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray(), $this->errors->toArray())
        );
    }

    public function showsErrors($regex = '/<[^>]*class="invalid-feedback"[^>]*>.*error/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray(), $this->errors->toArray())
        );
    }

    public function createsHelp($regex = '/Help/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('help', 'Help')->toArray())
        );
    }

    public function createsPlaceholder($regex = '/<input[^>]*placeholder="Placeholder"/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('placeholder', 'Placeholder')->toArray())
        );
    }

    public function addsClass($regex = '/<input[^>]*class="[^"]*addedClass"[^>]*>/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('class', 'addedClass')->toArray())
        );
    }

    public function addsData($regex = '/<input[^>]*data-test="test"[^>]*>/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->put('data', ['test' => 'test'])->toArray())
        );
    }
}
