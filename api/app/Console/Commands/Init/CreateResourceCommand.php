<?php
// phpcs:ignoreFile
// @codeCoverageIgnoreStart
namespace App\Console\Commands\Init;

use Illuminate\Console\GeneratorCommand;

class CreateResourceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:resource {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create resource class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Resource';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/resource.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Resources';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name')) . 'Resource';
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
                'DummyClass',
            ],
            [
                str_replace('Resource', '', $this->getNameInput()),
            ],
            $stub
        );

        return $this;
    }
}
