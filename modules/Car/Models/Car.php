<?php

namespace Modules\Car\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Car\Database\Factories\CarFactory;

class Car extends Model
{
    use HasFactory;

    protected static function newFactory(): CarFactory
    {
        return new CarFactory();
    }
}
