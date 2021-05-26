<?php

namespace Thecodebunny\GDPR\Models;

use Illuminate\Database\Eloquent\Model;
use Thecodebunny\GDPR\Contracts\GDPRDataRequest as GDPRDataRequestContract;

class GDPRDataRequest extends Model implements GDPRDataRequestContract
{
    protected $table = 'gdpr_data_request';
    protected $fillable = [
        'customer_id',
        'email',
        'request_status',
        'request_type',
        'message'  
    ];

}
