<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 */
class Customer extends Model
{
    use \AlgoWeb\PODataLaravel\Models\MetadataTrait;
    protected $table = 'customer';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'Name',
        'staff_id',
        'PhotoID'
    ];

    protected $guarded = [];

        
}