<?php
use App\City;
use App\Category;

$cities=City::all();
$categories =Category::all();

?>
<br>
          <div class="search-section">
            <!-- Find search section -->
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!-- Heading -->
                     <div class="content">
                     <div class="heading-caption">
                        <!--h1 class="text-center"> التخطيط لحفل زفافك يبدا الان   </h1>
                        <p class="text-center">  الدليل الاكبر لجميع خدمات حفل الزفاف  </p-->
                     </div>
                     <div class="search-form">
                        <form method="post" action="{{url('search')}}">
                        {{ csrf_field() }}
                        <div class="row">

                           <div class="col-md-4 col-xs-12 col-sm-4">
                                 <!-- City -->
                                 <select class="category form-control"  name="cityid">
                                 @foreach($cities as $item)
                                 <option label="المدينه"></option>
                                    <option value="{{$item->id}}"> {{$item->name}} </option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-md-4 col-xs-12 col-sm-4">
                                 <!-- Category -->
                                 <select class="category form-control"  name="catid">
                                 @foreach($categories as $item)
                                 <option label=" الاقسام"></option>
                                    <option value="{{$item->id}}"> {{$item->name}} </option>
                                    @endforeach
                                 </select>
                              </div>

                              <!-- Input Field -->
                              <!----div class="col-md-4 col-xs-12 col-sm-4">
                                 <input type="text" class="form-control" placeholder="ما أنت البحث عن..." />
                              </div-->
                              <!-- Search Button -->
                              <div class="col-md-4 col-xs-12 col-sm-4">
                                 <button type="submit" class="btn btn-theme btn-block">بحث <i class="fa fa-search" aria-hidden="true"></i></button>
                              </div>
                           </div>
                        </form>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <!-- /.Find search section-->
