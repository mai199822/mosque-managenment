<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Profile extends Pivot
{
    //

    public $timestamps= false;
    public $incrimenting = false;
    protected $table = 'profiles';


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function activity(){
        return $this->belongsTo(Activity::class);
    }
    
}
