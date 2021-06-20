<?php // gkc_hash_code : 01F20DDQ6AC44VR9TJE1SN7CJ5 ?>
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
    protected $signature = 'makee:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create model and repository';

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
        $this->callSilent('create:repository', ['name' => $this->argument('name')]);
        $this->callSilent('create:resource', ['name' => $this->argument('name')]);

        $this->info('Create model and repository success');

    }
}
