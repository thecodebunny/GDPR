<?php

namespace Thecodebunny\GDPR\Repositories;

use Illuminate\Container\Container;
use Thecodebunny\Core\Eloquent\Repository;

class GDPRDataRequestRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Thecodebunny\GDPR\Contracts\GDPRDataRequest';
    }

    public function __construct(
        Container $container
    ) {
        parent::__construct($container);
    }
}