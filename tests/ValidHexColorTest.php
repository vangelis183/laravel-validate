<?php

namespace Milwad\LaravelValidate\Tests;

use Milwad\LaravelValidate\Rules\ValidHexColor;

class ValidHexColorTest extends BaseTest
{
    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test text is valid hex code.
     *
     * @test
     * @return void
     */
    public function text_is_valid_hex_code()
    {
        $rules = ['even_number' => [new ValidHexColor()]];
        $data = ['even_number' => '#fcba03'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }
}
