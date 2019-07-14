

@include('frontend.layouts.header1')
@include('frontend.layouts.navbar1')
@include('frontend.layouts.search1')
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Featured Listing =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>أقسام  <span class="heading-color"> الموقع</span></h1>
                        <!-- Short Description -->
                       <!-- <p class="heading-text">Check the list of all categories and subcategories available for our items in directory/</p> -->
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <!-- Minimal Category -->
                        @foreach($categories as $item)
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <a href="{{url('categoryads/'.$item->id)}}">
                                    <img alt=""  class="img-responsive" src="{{$item->photo}}" style="width:473px; height:314px;">
                                    </a>
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                 <a href="{{url('categoryads/'.$item->id)}}">
                                    <span> {{$item->name}}</span>
                                    </a>
                                    <div class="ads-count">2,768 مزود خدمة </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @endforeach
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/فستان زفاف.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>فستان الزفاف </span>
                                    <div class="ads-count">4,168 مزود خدمة </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/مصور.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>التصوير الفوتوغرافي  </span>
                                    <div class="ads-count">4,168 مزود خدمة </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/4.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>الشعر والمكياج </span>
                                    <div class="ads-count">4,168 مزود خدمة </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/سيارات الزفاف.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>سيارات الزفاف </span>
                                    <div class="ads-count">4,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/مركز تجميل.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>مراكز تجميل وعناية بالبشرة </span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/خاتم و جوهرات.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>خواتم ومجوهرات الزفاف</span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/كوش و تنسيق حفلات.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>كوش وتنسيق حفلات </span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/زهور زفاف.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>زهور الزفاف </span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/بوفيه.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>بوفية وضيافة </span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/فنادق.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>فنادق </span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/12.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>بدل </span>
                                    <div class="ads-count">2,168 مزود خدمة</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/13.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>رياضات</span>
                                    <div class="ads-count">2,100 Ads</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/14.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>مجتمع</span>
                                    <div class="ads-count">700 Ads</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/15.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>أجهزة الكمبيوتر</span>
                                    <div class="ads-count">3,130 Ads</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <!-- Minimal Category >
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <a href="#">
                              <div class="minimal-category">
                                 <div class="minimal-img">
                                    <img alt=""  class="img-responsive" src="{{url('frontend')}}/images/minimal/16.jpg">
                                 </div>
                                 <div class="minimal-overlay"></div>
                                 <div class="description">
                                    <span>الصحة واللياقة البدنية</span>
                                    <div class="ads-count">3,100 Ads</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <   end categories ---->
                     <div class="text-center">
                        <div class="load-more-btn margin-top-30">
                           <button class="btn btn-theme" id="loadMore"> حمل أكثر <i class="fa fa-refresh"></i> </button>
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
                   <!-- =-=-=-=-=-=-= التسعير End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= App Download Section  =-=-=-=-=-=-= -->

         <!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Featured Listing End =-=-=-=-=-=-= -->
        @include('frontend.layouts.footer1')
