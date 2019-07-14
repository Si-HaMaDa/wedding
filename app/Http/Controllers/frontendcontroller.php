<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Area;
use App\Ad;
use App\Category;
use function GuzzleHttp\Psr7\readline;

class frontendcontroller extends Controller
{
    public function homepage()
    {
        $categories=Category::all();
        //return $categories;
        foreach($categories as $item )
        {
            $item->photo=url('storage/'.$item->photo);
            //return $item->photo;
        }
        return view('frontend.homepage',compact('categories'));
    }

    public function about()
    {
        return view('frontend.interface.about');
    }

    public function contact()
    {
        return view('frontend.interface.contact');
    }
   
    /*public function autocompletesearch( Request $request)
    {
      $query=$request->search;
      $data=City::where('name', 'LIKE', '%' .  $query . '%')
      ->get();
      $output='<ul class="dropdown-menu"
      style="display:block;position:relative" >';
      foreach($data as $item)
      {
          $output.='<li> <a href="#">'. $item->name.'</a></li>';
      }
      $output.='</ul>';

       return $output;

    }*/

}


