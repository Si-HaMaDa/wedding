<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Area;
use App\Ad;

class workcontroller extends Controller
{
    public function getcityareas($id)
   {

        $areas=Area::where('city_id',$id)
        ->pluck('name','id');
        return json_encode( $areas);
   }
   public function getads()
   {
       $ads=Ad::all();
       dd($ads);

   }
}
