<?php

namespace NoiX\OTS;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NoiX\OTS\Commands\OTSCommand;

class OTSServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ots')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ots_table')
            ->hasCommand(OTSCommand::class);
    }
}
