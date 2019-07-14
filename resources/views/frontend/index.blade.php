
@include('frontend.layouts.header')
@include('frontend.layouts.navbar1')


     


      <!-- Main Content Area -->
      <div class="main-content-area clearfix">
      @include('frontend.layouts.search1')
        <!-- =-=-=-=-=-=-= شعبي الفئات =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
            <h1 class="text-center">أقسام  <span class="heading-color"> الموقع</span></h1>
            <br>   
            <!-- Row -->
               @foreach($categories->chunk(4) as $chunk)
               <div class="row">
                  <!-- Category Grid  -->
                  @foreach($chunk as $item)
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box ">
                     <a href="{{url('categoryproducts/'.$item->id)}}">
                        <img alt="img" src="{{$item->photo}}" style="width:270px;height:270px">>
                     </a>
                        <h4><a href="{{url('categoryproducts/'.$item->id)}}"> {{$item->name}} </a></h4>
                        <h3> مقدم خدمه  </h3> 
                        <h3>{{$item->counter}} </h3> 
                     </div>
                  </div>
                  @endforeach
               </div>
               <!-- Row End -->
               @endforeach
            </div>
            <!-- Main Container End -->
         </section>
         <br>
        
         <!-- =-=-=-=-=-=-= Featured Listing End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= شعبي الفئات End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= إعلانات مميزة =-=-=-=-=-=-= -->
        
         <!-- =-=-=-=-=-=-= إعلانات مميزة End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= إعلانات تتجه =-=-=-=-=-=-= -->
        
         <!-- =-=-=-=-=-=-= إعلانات تتجه End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->
        
         <!-- =-=-=-=-=-=-= Clients  End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         @include('frontend.layouts.footer')
         