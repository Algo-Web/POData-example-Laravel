<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 */
class Product extends Model
{
    use \AlgoWeb\PODataLaravel\Models\MetadataTrait;
    protected $table = 'product';

    public $timestamps = true;

    protected $fillable = [
        'added_at',
        'name',
        'weight',
        'code'
    ];

    protected $guarded = [];

        
}
