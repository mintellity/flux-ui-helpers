<?php

namespace Mintellity\FluxUIHelpers;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mintellity\FluxUIHelpers\Livewire\SessionToast;

class FluxUIHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('fluxuihelpers')->hasConfigFile('flux_ui_helpers');

        Livewire::component('session-toast', SessionToast::class);
    }
}
