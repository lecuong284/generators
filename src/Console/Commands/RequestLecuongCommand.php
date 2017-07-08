<?php

namespace Lecuong\Generators\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class RequestLecuongCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'lecuong:request';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lecuong:request {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a lecuong templated request';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Request';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/request.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Requests';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [

        ];
    }
}
