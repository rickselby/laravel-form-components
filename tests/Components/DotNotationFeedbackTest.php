<?php

namespace RickSelby\Tests\Components;

use Illuminate\Support\Collection;
use RickSelby\Tests\AbstractPackageTestCase;
use RickSelby\Tests\MakeViewTrait;

class DotNotationFeedbackTest extends AbstractPackageTestCase
{
    use MakeViewTrait;

    protected $view = 'fc::text';

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
            'name'  => 'name[a]',
        ]);

        $this->errors = new Collection([
            'name.a' => [
                'error',
            ],
        ]);
    }

    public function testMarksInvalidIfErrors($regex = '/<input[^>]*class="[^"]*is-invalid"[^>]*>.*error/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray(), $this->errors->toArray())
        );
    }

    public function testShowsErrors($regex = '/<[^>]*class="invalid-feedback"[^>]*>.*error/Uis')
    {
        $this->assertRegExp(
            $regex,
            $this->make($this->view, $this->data->toArray(), $this->errors->toArray())
        );
    }
}
