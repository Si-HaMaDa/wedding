<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
