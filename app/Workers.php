<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    protected $fillable =['name', 'lastName', 'specialization', 'city', 'serviceName', 'picture'];
}
