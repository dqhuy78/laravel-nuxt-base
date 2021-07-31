<?php
// phpcs:ignoreFile
// @codeCoverageIgnoreStart
namespace App\Console\Commands\Init;

use Illuminate\Console\Command;

class MakeModelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create model and query';

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
        $this->callSilent('create:model', ['name' => $this->argument('name')]);
        $this->callSilent('create:query', ['name' => $this->argument('name')]);
        $this->callSilent('create:resource', ['name' => $this->argument('name')]);

        $this->info('Create model and query success');

    }
}
