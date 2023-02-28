<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $viewName = $this->argument('name');
    $viewPath = resource_path("views/{$viewName}.blade.php");
    
    if (file_exists($viewPath)) {
        $this->error('View already exists!');
        return;
    }

    file_put_contents($viewPath, '');
    
    $this->info("View created: {$viewPath}");
}
}
