<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	 protected $table = 'city';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Properties that aren't mass assignable.
     *
     * @var array
     */
    
    protected $guarded = [];

    function getStatusAttribute($status) {
        return ($status == 1)? 'Active' : 'Inactive';
    }   
}
