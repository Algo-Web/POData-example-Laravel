<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Staff
 */
class Staff extends Model
{
    use \AlgoWeb\PODataLaravel\Models\MetadataTrait;
    protected $table = 'staff';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'Name',
        'Partner_id',
        'Photo_id'
    ];

    protected $guarded = [];

    public function customers() { return $this->hasMany('App\Models\Customer', 'staff_id', 'id'); }
    public function partner() { return $this->hasOne('App\Models\Staff', 'Partner_id', 'id'); }
    public function photo() { return $this->morphOne('App\Models\Photo', 'rel'); }
}
