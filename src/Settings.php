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
        });
    }
}