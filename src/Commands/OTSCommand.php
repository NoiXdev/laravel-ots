<?php

namespace NoiX\OTS\Commands;

use Illuminate\Console\Command;

class OTSCommand extends Command
{
    public $signature = 'ots';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
