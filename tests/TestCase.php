<?php

declare(strict_types=1);

namespace Camya\Filament\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Camya\Filament\FilamentTitleWithSlugServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

final class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentTitleWithSlugServiceProvider::class,
            FilamentServiceProvider::class,
            LivewireServiceProvider::class,
            FormsServiceProvider::class,
            SupportServiceProvider::class,
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
        ];
    }
}
