<?php
// phpcs:ignoreFile
// @codeCoverageIgnoreStart
namespace App\Console\Commands\Init;

use Illuminate\Console\GeneratorCommand;

class CreateQueryCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:query {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new query';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Query';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/query.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Queries';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name')) . 'Query';
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            [
                'DummyModel',
            ],
            [
                str_replace('Query', '', $this->getNameInput()),
            ],
            $stub
        );

        return $this;
    }
}
