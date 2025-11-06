<?php

namespace Tobiasn\FluxUIHelpers\Commands;

use Illuminate\Console\Command;

class FluxUIHelpersCommand extends Command
{
    public $signature = 'fluxuihelpers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
