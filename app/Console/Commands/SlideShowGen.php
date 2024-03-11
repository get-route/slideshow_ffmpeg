<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SlideShowGen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ffmpeg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $command = $this->argument('command');

        $output = shell_exec($command);
        $this->info($output);
        return dd(1);
    }
}
