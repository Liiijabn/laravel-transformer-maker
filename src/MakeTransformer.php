<?php

namespace Liiijabn\TransformerMaker;

use Illuminate\Console\GeneratorCommand;

class MakeTransformer extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:transformer {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make model transformer';

    protected function getStub()
    {
        return __DIR__ . '/stubs/transformer.stub';
    }

    protected function getPath($name)
    {
        return parent::getPath($name . 'Transformer');
    }

    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name); // 替换类名

        return str_replace('dummyInstance', lcfirst($this->getNameInput()), $stub); // 替换实例名
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Transformers';
    }
}
