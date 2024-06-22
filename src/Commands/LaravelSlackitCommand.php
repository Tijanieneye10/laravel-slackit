<?php

namespace Tijaneneye10\LaravelSlackit\Commands;

use Illuminate\Console\Command;

class LaravelSlackitCommand extends Command
{
    public $signature = 'laravel-slackit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
