<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class CreditCard extends Model
{
    protected $fillable = [
        'type',
        'bank',
        'cc_number',
        'limit',
        'dni',
        'first_name',
        'last_name',
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => $attributes['first_name'] . ' ' . $attributes['last_name'],
        );
    }
}
