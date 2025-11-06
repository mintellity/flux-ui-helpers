<?php

namespace Tobiasn\FluxUIHelpers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobiasn\FluxUIHelpers\Commands\FluxUIHelpersCommand;

class FluxUIHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fluxuihelpers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fluxuihelpers_table')
            ->hasCommand(FluxUIHelpersCommand::class);
    }
}
