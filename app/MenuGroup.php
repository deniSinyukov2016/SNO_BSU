<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
    public function group(){
        return $this->hasMany('MenuItem');
    }
}
