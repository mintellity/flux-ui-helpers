<?php

namespace Tobiasn\FluxUIHelpers;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobiasn\FluxUIHelpers\Livewire\SessionToast;

class FluxUIHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('fluxuihelpers')->hasConfigFile();

        Livewire::component('session-toast', SessionToast::class);
    }
}
