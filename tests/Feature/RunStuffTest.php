<?php

namespace Tests\Feature;

use App\RunStuff;
use Illuminate\Http\Client\Response;
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
        Http::fake(
            ['jsonplaceholder.typicode.com/*' => Http::response(['test' => 'test'], 200)]
        );

        $stuffRunner = new RunStuff();
        $url = $stuffRunner->run();

        $this->assertEquals('https://jsonplaceholder.typicode.com/posts', $url);
    }
}
