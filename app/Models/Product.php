<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $fillable = [
        'name',
        'price',
        'category',
        'stock',
        'image',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected $appends = ['id'];

    public function getIdAttribute($value = null)
    {
        return (string) $this->getAttribute('_id');
    }
}