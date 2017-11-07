<?php

namespace Rschaaphuizen\Services\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class MakeServiceCommand
 *
 * @author Ruud Schaaphuizen (r.schaaphuizen@sqits.nl)
 *
 * @package Rschaaphuizen\Services\Console\Commands
 */
class ServiceMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('abstract')) {
            return __DIR__.'/stubs/service.abstract.stub';
        }

        return __DIR__.'/stubs/service.plain.stub';

    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Services';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['abstract', 'a', InputOption::VALUE_NONE, 'Generate an abstract service class']
        ];
    }
}
