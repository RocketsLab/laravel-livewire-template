<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 08/07/2017
 * Time: 13:45
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Application;

class CreateValidatorCommand extends Command
{
    /**
     * Command signature.
     *
     * @var string
     */
    protected $signature = 'make:validator {validator}';
    /**
     * Command description.
     *
     * @var string
     */
    protected $description = 'Create a new model validator class';
    /**
     * Laravel app instance.
     *
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /** @var  string */
    protected $path;

    /** @var  string */
    protected $namespace;

    /** @var  string */
    protected $stub;

    /** @var  string */
    protected $validator;

    /**
     * MakeFilterCommand constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct();
        $this->app = $app;
    }

    /**
     * Execute console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->path      = app_path('Validators');
        $this->namespace = "App\Validators";
        $this->validator = $this->argument('validator');
        $this->stub      = $this->app['files']->get($this->path . '/stub/validator.stub');

        $this->checkIfValidatorExists();

        $this->checkForValidatorsFolders();

        $this->createValidator();
    }

    protected function checkForValidatorsFolders()
    {
        if (!$this->app['files']->exists($this->path)) {
            $this->app['files']->makeDirectory($this->path, 0755, true);
        }
    }

    protected function createValidator()
    {
        $stub = str_replace(['$NAMESPACE$', '$FILTER_NAME$'],
            [$this->namespace, $this->validator], $this->stub);
        $this->app['files']->put($this->path . '/' . $this->validator . '.php', $stub);
        $this->info("Validator $this->validator is created successfully!");
    }

    protected function checkIfValidatorExists()
    {
        if ($this->app['files']->exists($this->path . '/' . $this->validator . '.php')) {
            $this->info("Validator $this->validator is already exists!");
            exit;
        }
    }
}
