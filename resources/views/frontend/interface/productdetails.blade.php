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
                           <h1 class="text-center"> {{$products->name}}</h1>
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
                                  @foreach($images as $item)
                                 <li class=""><img alt="" src="{{$item->photo}}" title="" style="width:100%;height:420px;"></li>
                                 @endforeach
                                 
                              </ul>
                           </div>
                        </div>
                        <!-- Listing Slider Thumb --> 
                        <div class="flexslider" id="carousels">
                           <div class="flex-viewport">
                              <ul class="slides slide-thumbnail">
                              @foreach($images as $item)
                                 <li><img alt="" draggable="false" src="{{$item->photo}}"></li>
                                @endforeach
                                 <!-- items mirrored twice, total of 12 -->
                              </ul>
                           </div>
                        </div>
                        <!-- حصة الإعلان  --> 
                        <!--div class="ad-share text-center">
                           <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-share-alt"></i> <span class="hidetext">شارك</span>
                           </div>
                           <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="#"><i class="fa fa-star active"></i> <span class="hidetext">أضافة إلى قائمة المشاهدة</span></a>
                           <div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-warning"></i> <span class="hidetext">تقرير</span>
                           </div>
                        </div-->
                        <div class="clearfix"></div>
                        <!-- Short Description  --> 
                        <div class="ad-box">
                           <div class="short-features">
                              <!-- Heading Area -->
                              <!--div class="heading-panel">
                                 <h3 class="main-title text-left">
                                    وصف 
                                 </h3>
                              </div-->
                              <!--div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>شرط</strong> :</span> مستعمل
                              </div-->
                              <!--div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>علامة تجارية</strong> :</span> نوكيا
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>نموذج</strong> :</span> على lumia 625
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>نوع المنتج</strong>:</span>التليفون المحمول
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>تاريخ</strong> :</span> 2014-10-06
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>السعر</strong> :</span> روبية. 22000
                              </div-->
                           </div>
                           <!-- Short Features  --> 
                           <!--div class="desc-points">
                              <ul>
                                 <li>
                                    تبحث لبيع السيارات على وجه السرعة.
                                 </li>
                                 <li>
                                    المحرك بحالة جيدة.
                                 </li>
                                 <li>
                                    خدمة التاريخ الكامل متاح.
                                 </li>
                                 <li>
                                    هو ملف عودة الأصلي متاح.
                                 </li>
                                 <li>
                                    بعد عجلات ألمنيوم السوق.
                                 </li>
                                 <li>
                                    جيدة مثل سيارة جديدة.
                                 </li>
                                 <li>
                                    سيدة مدفوعة السيارة في حالة الطاهرة.
                                 </li>
                                 <li>
                                    لا يشترط في سيارة العمل.
                                 </li>
                                 <li>
                                    ممتازة عدد الأميال، المحلي متوسط ​​= 14 كم، طويل متوسط ​​= 16 كم .
                                 </li>
                              </ul>
                           </div-->
                           <!-- Related Image  --> 
                           <!--div class="ad-related-img">
                              <img src="{{url('frontend')}}/images/car-img1.png" alt="" class="img-responsive center-block">
                           </div-->
                           <!-- Ad Specifications --> 
                           <div class="specification">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                  الوصف
                                 </h3>
                              </div>
                              <p>
                                 {{$products->description}}
                              </p>
                
                             
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <!-- إعلان واحد End --> 
                     <!-- Price Alert >
                     <div class="alert-box-container  margin-top-30">
                                    <div class="well">
                                       <h3>إنشاء تنبيه</h3>
                                       <p>استقبال رسائل البريد الإلكتروني للحصول على أحدث إعلانات مطابقة لمعايير البحث</p>
                                       <form>
                                          <div class="row">
                                             <div class="col-md-5 col-xs-12 col-sm-12">
                                                <input placeholder="Enter Your Email " type="text" class="form-control"> 
                                             </div>
                                             <div class="col-md-4 col-xs-12 col-sm-12">
                                                <select class="alerts">
                                                   <option value="1">Daily</option>
                                                   <option value="7">Weekly</option>
                                                </select>
                                             </div>
                                             <div class="col-md-3 col-xs-12 col-sm-12">
                                                <input class="btn btn-theme btn-block" value="عرض" type="submit"> 
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                     <!-- Price Alert End --> 
                     <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                     <div class="grid-panel margin-top-30" style="">
                        <div class="heading-panel">
                           <div class="col-xs-12 col-md-12 col-sm-12">
                              <h3 class="main-title text-left">
                       {{$products->catgory->name}}  ذات صلة   
                              </h3>
                           </div>
                        </div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                           <div class="col-md-12 col-xs-12 col-sm-12">
                              
                           <!-- Ads Listing -->
                           @foreach($cproducts as $item)
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="{{url('productdetails/'.$item->id)}}">
                                          <div class="ribbon popular"></div>
                                          <img class="img-responsive" src="{{$item->photos}}" alt=""> 
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
                                       <div class="category-title"> <span><a href="#"> {{$item->catgory->name}}</a></span> </div>
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
                                                   {{$item->addres}}
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
                           <button class="btn-block btn-contact contactPhone number" data-last="{{$item->phone}}" ><span>{{$products->phone}}</span></button>
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
                                 <li> السعه: <span class="color">{{$products->areanumber}}</span></li>
                                 <li>الفئات: <span class="color">Used {{$products->catgory->name}}</span></li>
                                 @if($products->service)
                                 <li>الخدمه: <span class="color">{{$products->service}}</span></li>
                                 @endif
                                 @if($products->servicetype)
                                 <li>نوع الخدمه: <span class="color">{{$products->servicetype}}</span></li>
                                 @endif
                                 <li>موقع: <span class="color">{{$products->addres}} </span></li>
                              </ul>
                           </div>
                           <div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;"></div>
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
      <script type="text/javascript">
         (function($) {
          	"use strict";
			  /* ======= Show Number ======= */
               $('.number').click(function() {
               	$(this).find('span').text( $(this).data('last') );
               });
			   
			  /* ======= Ad Location ======= */
         	   var  map ="";
               //var latlng = new google.maps.LatLng(51.508742, -0.120850);
               var latlng = new google.maps.LatLng({{$products->longtuide}}, {{$products->attuide}});
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
      </script>