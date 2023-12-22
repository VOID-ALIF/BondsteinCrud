<?php

namespace Acme\CrudGenerator\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    protected $signature = 'crud:publish';
    protected $description = 'Publish CRUD generator assets';

    public function handle()
    {
        // Logic to copy templates, configurations, etc.
        $this->info('CRUD generator assets published successfully.');
    }
}
