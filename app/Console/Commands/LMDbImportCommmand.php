<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LMDbImportCommmand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lmdb:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports screenings from the OMDb API';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->apiKey = config('api.key');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 
    }
}
