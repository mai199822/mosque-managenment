<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = ['activity_name', 'section_id', 'teacher', 'max_students', 
    'start_date', 'end_date', 'requirments' ];

    public function section(){
        return $this->belongsTo(Section::class,'section_id','id');
    }
    public function orders(){
        return $this->belongsToMany(Order::class)
                    ->using(OrderActivity::class);
    }
}
