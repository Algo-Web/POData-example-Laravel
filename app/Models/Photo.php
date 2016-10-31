<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 */
class Photo extends Model
{
    use \AlgoWeb\PODataLaravel\Models\MetadataTrait;
    protected $table = 'photo';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'Content',
        'Rel-Type',
        'Rel-ID'
    ];

    protected $guarded = [];

        
}
