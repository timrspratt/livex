<?php

namespace Sypo\Livex;

use Aero\Common\Facades\Settings;
use Aero\Common\Providers\ModuleServiceProvider;
use Aero\Common\Settings\SettingGroup;

class ServiceProvider extends ModuleServiceProvider
{
    public function boot(): void 
    {
        Settings::group('Livex', function (SettingGroup $group) {
            $group->boolean('enabled')->default(true);
            $group->float('still_wine_rate')->default(26.78);
            $group->float('sparkling_wine_rate')->default(34.30);
            $group->float('fortified_wine_rate')->default(35.70);
            $group->integer('litre_calc')->default(9);
        });
    }
}