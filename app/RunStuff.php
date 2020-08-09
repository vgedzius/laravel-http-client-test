<?php

namespace App;

use Illuminate\Support\Facades\Http;

class RunStuff
{
    public function run()
    {
        return (string)Http::get(
            'https://jsonplaceholder.typicode.com/posts'
        )->effectiveUri();
    }
}
