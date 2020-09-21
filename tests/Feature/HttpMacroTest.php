<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpMacroTest extends TestCase
{
    public function testGenerateCommand_doesNotThrow()
    {
        $this->artisan('ide-helper:generate');
        $this->expectNotToPerformAssertions();
    }

    // Unexpectedly throws:
    // BadMethodCallException : Method Illuminate\Http\Client\Factory::getFacadeRoot does not exist.
    public function testGenerateCommand_withHttpMacro_doesNotThrow()
    {
        Http::macro('exampleMacro', function () {});
        $this->artisan('ide-helper:generate');
        $this->expectNotToPerformAssertions();
    }
}
