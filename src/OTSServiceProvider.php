<?php

namespace NoiX\OTS;

use NoiX\OTS\Commands\OTSCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
