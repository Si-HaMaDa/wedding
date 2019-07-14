@include('frontend.layouts.header')
@include('frontend.layouts.navbar')

@include('frontend.layouts.search')


 <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
 <section class="section-padding error-page pattern-bgs gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-8 col-xs-12 col-sm-12">
                     <!-- إعلان واحد -->
                     <div class="single-ad">
                        <!-- Title -->
                        <div class="ad-box">
                           <h1 class="text-center"> {{$ads->name}}</h1>
                           <div class="short-history">
                              <ul class="text-center">

                                 <li>   <b> معرض الصور</b></li>
                              </ul>
                           </div>
                        </div>
                        <!-- Listing Slider  -->
                        <div class="flexslider single-page-slider">
                           <div class="flex-viewport">
                              <ul class="slides slide-main">
                                  @foreach($ads->photos as $img)
                                 <li class=""><img alt="" src="{{url('storage/'.$img)}}" title="" style="width:100%;height:420px;"></li>
                                 @endforeach

                              </ul>
                           </div>
                        </div>
                        <!-- Listing Slider Thumb -->
                        <div class="flexslider" id="carousels">
                           <div class="flex-viewport">
                              <ul class="slides slide-thumbnail">
                              @foreach($ads->photos as $img)
                                 <li><img alt="" draggable="false" src="{{url('storage/'.$img)}}"></li>
                                @endforeach
                                 <!-- items mirrored twice, total of 12 -->
                              </ul>
                           </div>
                        </div>

                        <div class="clearfix"></div>
                        <!-- Short Description  -->
                        <div class="ad-box">

                           <!-- Short Features  -->


                           <!-- Ad Specifications -->
                           <div class="specification">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                  الوصف
                                 </h3>
                              </div>
                              <p>
                                 {{$ads->description}}
                              </p>


                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <!-- إعلان واحد End -->
                     <!-- Price Alert >
                    
                     <!-- Price Alert End -->
                     <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                     <div class="grid-panel margin-top-30" style="">
                        <div class="heading-panel">
                           <div class="col-xs-12 col-md-12 col-sm-12">
                              <h3 class="main-title text-left">
                       {{$ads->category->name}}  ذات صلة
                              </h3>
                           </div>
                        </div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                           <div class="col-md-12 col-xs-12 col-sm-12">

                           <!-- Ads Listing -->
                           @foreach($cads as $item)
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="{{url('adsdetails/'.$item->id)}}">
                                          <div class="ribbon popular"></div>
                                          <img class="img-responsive" src="{{$item->photo}}" alt="">
                                       </a>
                                    </div>
                                    <!-- Img Block -->
                                 </div>
                                 <!-- Ads Listing -->
                                 <div class="clearfix visible-xs-block"></div>
                                 <!-- Content Block -->
                                 <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                       <!-- Price -->
                                       <!--div class="ad-price">$38,000</div-->
                                       <!-- Title -->
                                       <h3>{{$item->name}} </h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#"> {{$item->category->name}}</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">
                                           {{$item->shortdesc}}
                                       </p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br> <strong>Sunday</strong> <span class="label label-success">{{$item->phone}}</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   {{$item->address}}
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->

                                          <!-- Ad Type -->

                                       </ul>
                                       <!-- Ad History -->
                                       <!--div class="clearfix archive-history">
                                          <div class="last-updated">آخر تحديث: منذ 1 يوم</div>
                                          <div class="ad-meta"> <a class="btn save-ad"><i class="fa fa-heart-o"></i> حفظ الإعلان.</a> <a class="btn btn-success"><i class="fa fa-phone"></i> تفاصيل.</a> </div>
                                       </div-->
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              @endforeach



                           </div>
                        </div>
                     </div>
                     <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->
                  </div>


                  <!-- Right Sidebar -->
                  <div class="col-md-4 col-xs-12 col-sm-12">
                     <!-- Sidebar Widgets -->
                     <div class="sidebar">
                        <!-- Contact info -->
                        <div class="contact white-bg">
                           <!-- Email Button trigger modal -->
                           <!--button class="btn-block btn-contact contactEmail" data-toggle="modal" data-target=".price-quote" >تواصل مع البائع</button-->
                           <!-- Email Modal -->
                           <button class="btn-block btn-contact contactPhone number" data-last="{{$item->phone}}" ><span>{{$ads->phone}}</span></button>
                        </div>
                        <!-- Price info block -->
                        <div class="ad-listing-price">
                           <p>اطلب السعر </p>
                        </div>
                        <!-- User Info -->
                        <div class="white-bg user-contact-info">
                           <div class="user-info-card">
                              <!--div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                 <img src="{{url('frontend')}}/images/users/3.jpg" alt="">
                              </div-->
                              <!--div class="user-information no-padding col-md-8 col-sm-9 col-xs-8">
                                 <span class="user-name"><a class="hover-color" href="profile.html">سونو مونو</a></span>
                                 <div class="item-date">
                                    <span class="ad-pub">نشر في: 10 ديسمبر 2017</span><br>
                                    <a href="#" class="link">المزيد من الإعلانات</a>
                                 </div>
                              </div-->
                              <div class="clearfix"></div>
                           </div>
                           <div class="ad-listing-meta">
                              <ul>

                                 <li>الفئات: <span class="color"> {{$ads->category->name}}</span></li>
                                 <li>المدينه: <span class="color"> {{$ads->city->name}}</span></li>
                                 @if($ads->sub_category_id)
                                 <li> التصنيف: <span class="color">{{$ads->sub_category->name}}</span></li>
                                 @endif
                                 @if($ads->attrs)
                                 @foreach( json_decode($ads->attrs) as $attr)
                                 <li>{{ $attr->key }}: <span class="color">{{ $attr->value }}</span></li>
                                 @endforeach
                                 @endif

                                 @if($ads->servicetype)
                                 <li>نوع الخدمه: <span class="color">{{$ads->servicetype}}</span></li>
                                 @endif
                                 <li>موقع: <span class="color">{{$ads->address}} </span></li>
                              </ul>
                           </div>
                           <!--div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;"></div-->
                           <style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>



<script type="application/javascript">
    function initMap() {
        @forelse($ads->getCoordinates() as $point)
            var center = {lat: {{ $point['lat'] }}, lng: {{ $point['lng'] }}};
        @empty
            var center = {lat: {{ config('voyager.googlemaps.center.lat') }}, lng: {{ config('voyager.googlemaps.center.lng') }}};
        @endforelse
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: {{ config('voyager.googlemaps.zoom') }},
            center: center
        });
        var markers = [];
        @forelse($ads->getCoordinates() as $point)
            var marker = new google.maps.Marker({
                    position: {lat: {{ $point['lat'] }}, lng: {{ $point['lng'] }}},
                    map: map,
                    draggable: true
                });
            markers.push(marker);
        @empty
            var marker = new google.maps.Marker({
                    position: center,
                    map: map,
                    draggable: true
                });
        @endforelse

        google.maps.event.addListener(marker,'dragend',function(event) {
            document.getElementById('lat').value = this.position.lat();
            document.getElementById('lng').value = this.position.lng();
        });
    }
</script>
<div id="map"></div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('voyager.googlemaps.key') }}&callback=initMap"></script>
                        </div>
                        <!-- إعلانات مميزة -->
                        <div class="widget">
                           <div class="widget-heading">
                              <!--h4 class="panel-title"><a>إعلانات مميزة</a></h4-->
                           </div>
                           <div class="widget-content">
                              <div class="featured-slider-3">
                                 <!-- إعلانات مميزة -->




                              </div>
                           </div>
                        </div>
                        <!-- Recent Ads -->
                        <div class="widget">
                           <div class="widget-heading">
                              <!--h4 class="panel-title"><a>الإعلانات الأخيرة</a></h4-->
                           </div>
                           <div class="widget-content recent-ads">
                              <!-- Ads -->

                           </div>
                        </div>
                        <!-- نصائح الأمان  -->
                        <!--div class="widget">
                           <div class="widget-heading">
                              <h4 class="panel-title"><a>نصائح لسلامة الصفقة</a></h4>
                           </div>
                           <div class="widget-content saftey">
                              <ol>
                                 <li>استخدام مكان آمن لتلبية البائع</li>
                                 <li>تجنب المعاملات النقدية</li>
                                 <li>حذار من العروض غير واقعية</li>
                              </ol>
                           </div>
                        </div-->
                     </div>
                     <!-- Sidebar Widgets End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>


         <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->

@include('frontend.layouts.footer')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0Ih2uccEQAEuP7S0aDgCW5HEz88z0K00"></script>
      <!--script type="text/javascript">
         (function($) {
          	"use strict";
			  /* ======= Show Number ======= */
               $('.number').click(function() {
               	$(this).find('span').text( $(this).data('last') );
               });

			  /* ======= Ad Location ======= */
         	   var  map ="";
               //var latlng = new google.maps.LatLng(51.508742, -0.120850);
               var latlng = new google.maps.LatLng({{$ads->longtuide}}, {{$ads->attuide}});
               var myOptions = {
                   zoom: 13,
                   center: latlng,
				   scrollwheel: false,
                   mapTypeId: google.maps.MapTypeId.ROADMAP,
                   size: new google.maps.Size(480,240)
               }
               map = new google.maps.Map(document.getElementById("itemMap"), myOptions);
               var marker = new google.maps.Marker({
                   map: map,
                   position: latlng
               });
        	  /* ======= Ad Detail On Scroll ======= */
			 //caches a jQuery object containing the header element
			 var header = $(".sticky-ad-detail");
				$(window).scroll(function() {
				var scroll = $(window).scrollTop();
				 if (scroll >= 500) {
					header.addClass("show-sticky-ad-detail");
				 } else {
					header.removeClass("show-sticky-ad-detail");
				 }
			 });
         })(jQuery);
      </script-->
