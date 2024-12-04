<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExampleTask extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'example:task';

    /**
     * The console command description.
     */
    protected $description = 'Example task for testing Laravel scheduler';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Log the task execution for debugging
        \Log::info('Example Task Executed Successfully at ' . now());

        // Output a message to the console (for testing purposes)
        $this->info('Example Task Executed Successfully');
    }
}
