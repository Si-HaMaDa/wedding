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
    public function categoryads($id)
    {
        $ads=Ad::where(	'category_id',$id)->get();
        //dd( $ads);
        $images=[];
        foreach($ads as $item)
        {

            $item->photo=url('storage/'.$item->photo);
          $item->photos=url('storage/'.$item->photos);
         $images=$item->photos;

        }
        //dd($images);
        return view('frontend.interface.ads.categoryads',
        compact('ads','images'));

    }

    public function adsdetails($id)

    {
        $ads=Ad::find($id);
        //$images=[];
        //dd( json_decode($ads->photos));
            $ads->photo=url('storage/'.$ads->photo);

           //$images[]=$ads->photos;
           //$ads->photos=explode(',', $ads->photos);
           $ads->photos= json_decode($ads->photos);

           //$images= $ads->photos;
          // $ads->photos=url('storage/'.$ads->photos);
        /* foreach(  $ads->photos as $img)
         {
            $img=url('storage/'.$img);

           //dd($img);
         }*/


        $cads=Ad::where('category_id',$ads->category_id)->get();
//dd( $cads);
//$images=[];
      foreach($cads as $ad)
      {

          $ad->photo=url('storage/'.$ad->photo);
          $ad->photos=url('storage/'.$ad->photos);
        //$images=$item->photos;

         }

        return view('frontend.interface.ads.adsdetails',
        compact('ads','cads'));

    }
    public function about()
    {
        return view('frontend.interface.about');
    }

    public function contact()
    {
        return view('frontend.interface.contact');
    }
    public function createads()

    {
        //return 'sdf';
        // view('vendor.voyager.ads.edit-add');
        return view('frontend.interface.ads.createads');
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


