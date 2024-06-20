<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string RegNumber
 * @property string VIN
 * @property ?string Model
 * @property ?string Brand
 */
class Car extends Model
{
    protected $table = 'car';
}
