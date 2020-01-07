<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
    	'part_name',
    	'part_no',
    	'Qty_in_stock',
    	'tested',
    	'item_info',
    	'condition',
    	'price',
    	'photo',
    	'saler_id',
    	'add_save',
    	'brand',
    	'model',
    	'part_category',
    ];

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
