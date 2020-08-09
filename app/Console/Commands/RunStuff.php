<?php

namespace App\Console\Commands;

use App\RunStuff as StuffRunner;
use Illuminate\Console\Command;

class RunStuff extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:stuff';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run some stuff';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $runner = new StuffRunner();
        $this->info(
            $runner->run()
        );

        return 0;
    }
}
