<?php

namespace Tests\Feature;

use App\RunStuff;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RunStuffTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        Http::fake();

        $stuffRunner = new RunStuff();
        $stuff = $stuffRunner->run();

        $this->assertNotEmpty($stuff);
    }
}
