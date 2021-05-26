<?php

namespace Thecodebunny\GDPR\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class RepositoryServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Thecodebunny\GDPR\Models\GDPR::class,
        \Thecodebunny\GDPR\Models\GDPRDataRequest::class,
        
    ];
}