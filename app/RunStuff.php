<?php

namespace App;

use Illuminate\Support\Facades\Http;

class RunStuff
{
    public function run()
    {
        $response = Http::get(
            'https://jsonplaceholder.typicode.com/posts'
        );

        $url = $response->effectiveUri();
        // do something with url, for example logging...

        return $response;
    }
}
