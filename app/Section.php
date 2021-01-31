<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = ['section_name', 'description'];

    public function activities(){
        return $this->hasMany(Activity::class,'section_id','id');
    }
}
