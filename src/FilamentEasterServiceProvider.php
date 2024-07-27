<?php

namespace Kurban\FilamentEaster;

use Kurban\FilamentEaster\Livewire\KonamiComponent;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentEasterServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-easter';
    public static string $viewNamespace = 'easter';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews(static::$viewNamespace);
    }

    public function packageBooted()
    {
        Livewire::component('konami-component', KonamiComponent::class);
    }
}
