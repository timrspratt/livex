<?php

namespace Sypo\Livex;

use Aero\Admin\AdminModule;
use Aero\Common\Providers\ModuleServiceProvider;

class ServiceProvider extends ModuleServiceProvider
{
    public function register(): void 
    {
        AdminModule::create('Livex')
            ->title('Livex')
            ->summary('Livex API integration with Aero Commerce')
            #->permissions('Livex.custom') //optional
            ->routes(dirname(__DIR__).'/../routes/admin.php')
            ->route('admin.modules.livex');
    }
}