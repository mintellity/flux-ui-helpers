<?php

namespace Mintellity\FluxUIHelpers;

use Livewire\Livewire;
use Mintellity\FluxUIHelpers\Livewire\SessionToast;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FluxUIHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('fluxuihelpers')->hasConfigFile('flux_ui_helpers');

        Livewire::component('session-toast', SessionToast::class);
    }
}
