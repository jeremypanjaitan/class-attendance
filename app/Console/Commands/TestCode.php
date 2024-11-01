<?php

namespace App\Console\Commands;

use App\Helpers\AuthCodeGenerator;
use Illuminate\Console\Command;

class TestCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:testcode';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Code';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info(AuthCodeGenerator::generateAuthCode());
    }

}
