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

    protected $primaryKey = 'id';

	public $timestamps = false;

    protected $fillable = [
        'content',
        'rel_type',
        'rel_id'
    ];

    protected $guarded = [];
    public function rel() { return $this->morphTo(); }
        
}
