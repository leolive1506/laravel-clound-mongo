<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Log extends ModelMongo
{
    // use HasFactory;
    protected $collection = 'logs';
}
