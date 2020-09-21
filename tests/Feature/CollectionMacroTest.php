<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Tests\TestCase;

class CollectionMacroTest extends TestCase
{
    public function testGenerateCommand_doesNotThrow()
    {
        $this->artisan('ide-helper:generate');
        $this->expectNotToPerformAssertions();
    }

    // Test passes…
    public function testGenerateCommand_withCollectionMacro_doesNotThrow()
    {
        Collection::macro('exampleMacro', function () {});
        $this->artisan('ide-helper:generate');
        $this->expectNotToPerformAssertions();
    }
}
