<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
    	'username',
    	'partname',
        'item_info',
        'brand',
        'model',
    ];

    // public function part()
    // {
    //     return $this->belongsTo('App\Part');
    // }

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
