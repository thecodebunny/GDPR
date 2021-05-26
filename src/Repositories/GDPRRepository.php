<?php

namespace Thecodebunny\GDPR\Repositories;

use Illuminate\Container\Container;
use Thecodebunny\Core\Eloquent\Repository;

class GDPRRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Thecodebunny\GDPR\Contracts\GDPR';
    }

    public function __construct(
        Container $container
    ) {
        parent::__construct($container);
    }
}