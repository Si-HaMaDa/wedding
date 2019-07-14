<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Spatial;

class Ad extends Model
{
    use Spatial;

    protected $spatial = ['location'];


    public function city()
    {
        return $this->belongsTo('App\City','city_id','id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function sub_category()
    {
        return $this->belongsTo('App\SubCategory','sub_category_id','id');
    }
}
