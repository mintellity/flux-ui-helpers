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
        $package->name('fluxuihelpers')->hasConfigFile('flux_ui_helpers');;

        Livewire::component('session-toast', SessionToast::class);
    }
}
