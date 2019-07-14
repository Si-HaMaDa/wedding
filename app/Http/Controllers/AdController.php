<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Area;
use App\Ad;
use App\Category;
use function GuzzleHttp\Psr7\readline;
class AdController extends Controller
{

    public function categoryads($id)
    {
        $ads=Ad::where(	'category_id',$id)->get();

        $images=[];
        foreach($ads as $item)
        {

            $item->photo=url('storage/'.$item->photo);
          $item->photos=url('storage/'.$item->photos);
         $images=$item->photos;

        }
        $count=Ad::where('category_id',$id)->get()->count();
          if($count>0)
          {$count=$count;}
          else{
            $count=" لا يوجد نتائج لعرضها";
              }

        return view('frontend.interface.ads.categoryads',
        compact('ads','images','count'));

    }

    public function adsdetails($id)

    {
            $ads=Ad::find($id);
            $ads->photo=url('storage/'.$ads->photo);
            $ads->photos= json_decode($ads->photos);
            $cads=Ad::where('category_id',$ads->category_id)->get();
            foreach($cads as $ad)
              {
                 $ad->photo=url('storage/'.$ad->photo);
                $ad->photos=url('storage/'.$ad->photos);
             }
              return view('frontend.interface.ads.adsdetails',
              compact('ads','cads'));

    }

    public function searchads(Request $request)
    {
        $cityid=$request->cityid;
        $catid=$request->catid;
         if($request->cityid && $request->catid )
         {
            $cat=Category::find($request->catid);
            $ads=Ad::where('city_id',$cityid)
                ->where('category_id',$catid)->get();
                $images=[];
                foreach($ads as $item)
                {

                    $item->photo=url('storage/'.$item->photo);
                    $item->photos=url('storage/'.$item->photos);
                    $images= $item->photos;
                }
            $count=Ad::where('city_id',$cityid)
            ->where('category_id',$catid)->get()->count();
              if($count>0)
              {$count=$count;}
              else{
                $count=" لا يوجد نتائج لعرضها";
                  }

            return view('frontend.interface.ads.categoryads',
            compact('ads',
            'count','cat','images')
                  );
            return  redirect('categoryads/'.$catid);
          }
            else{
                return redirect('wedding');
                //$ads=Product::all();
               //return  $ads;

               }
}
    public function createads()

    {
        //return 'sdf';
        // view('vendor.voyager.ads.edit-add');
        return view('frontend.interface.ads.createads');
    }


}

