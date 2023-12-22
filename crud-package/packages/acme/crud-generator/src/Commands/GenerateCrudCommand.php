<?php

namespace Acme\CrudGenerator\Commands;

use Illuminate\Console\Command;

class GenerateCrudCommand extends Command
{
    protected $signature = 'crud:generate {modelName}';
    protected $description = 'Generate CRUD components for a model';

    public function handle()
    {
        $modelName = $this->argument('modelName');

        // Your CRUD generation logic here...
        // This could involve creating files based on templates and inserting dynamic content.

        $this->info("CRUD components for $modelName generated successfully.");
    }
}
