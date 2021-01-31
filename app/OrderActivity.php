<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderActivity extends Pivot
{
    //
    protected $table = 'order_activities';
    protected $timestamps= false;
    public $incrimenting = false;


    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
