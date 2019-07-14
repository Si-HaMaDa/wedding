@include('frontend.layouts.header1')
@include('frontend.layouts.navbar')

<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="{{url('wedding')}}">Home</a></li>
                  <li><a href="#">الصفحات</a></li>
                  <li><a href="#">الملف الشخصي</a></li>
                  <li><a class="active" href="#">إعلانات نشطة</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-4 col-sm-12 col-xs-12 leftbar-stick blog-sidebar">
                     <!-- Sidebar Widgets -->
                     <div class="user-profile">
                        <a href="profile.html"><img src="{{url('frontend')}}/images/users/9.jpg" alt=""></a>
                        <div class="profile-detail">
                           <h6>سونو مونو</h6>
                           <ul class="contact-details">
                              <li>
                                 <i class="fa fa-map-marker"></i> المملكة المتحدة لندن
                              </li>
                              <li>
                                 <i class="fa fa-envelope"></i>contact@scriptsbundle.com
                              </li>
                              <li>
                                 <i class="fa fa-phone"></i> (123) 000-1234
                              </li>
                           </ul>
                        </div>
                        <ul>
                           <li ><a href="{{url('profile')}}">الملف الشخصي</a></li>
                           <li  class="active"><a href="{{url('userads')}}">الإعلانات <span class="badge">45</span></a></li>
                           <li><a href="{{url('favourite')}}">إعلانات مفضلة <span class="badge">15</span></a></li>
                           <li><a href="{{url('archives')}}">أرشيف</a></li>
                           <li ><a href="{{url('messages')}}">رسائل</a></li>
                           <li><a href="#">خروج</a></li>
                        </ul>
                     </div>
                     <!-- الفئات -->
                     <div class="widget">
                        <div class="widget-heading">
                           <h4 class="panel-title"><a>تغيير خطتك</a></h4>
                        </div>
                        <div class="widget-content">
                           <select class=" form-control">
                              <option label="Select Option"></option>
                              <option value="0">Free</option>
                              <option value="1">Premium</option>
                              <option value="2">Featured</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                     <!-- Row -->
                     <div class="row">
                        <!-- Sorting Filters -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                           <!-- Sorting Filters Breadcrumb -->
                           <!-- Sorting Filters Breadcrumb End -->
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                           <!-- Listing Ad Grid -->
                           <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12  ">
                              <div class="white category-grid-box-1 ">
                                 <!-- Image Box -->
                                 <div class="image"> <img alt="Tour Package" src="{{url('frontend')}}/images/posting/car-4.jpg" class="img-responsive"> </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 ">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">ادوات رياضية</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3>
                                       <a title="" href="single-page-listing.html">هوندا سيفيك 2017 الطبعة الرياضة</a>
                                    </h3>
                                    <!-- Location -->
                                    <p class="location"><i class="fa fa-map-marker"></i> هوتون شارع لندن</p>
                                    <!-- Rating -->
                                    <div class="rating">
                                       <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span>

                                    </div>
                                     <!-- Price --><span class="ad-price">$370</span>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul class="pull-left">
                                       <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                    </ul>
                                    <ul class="pull-right">
                                       <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                                       <li> <a  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad" href="#"><i class="fa fa-times delete"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12  ">
                              <div class="white category-grid-box-1 ">
                                 <!-- Image Box -->
                                 <div class="image"> <img alt="Tour Package" src="{{url('frontend')}}/images/posting/list-7.jpg" class="img-responsive"> </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 ">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">ادوات رياضية</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3>
                                       <a title="" href="single-page-listing.html">رولكس يخت ماجستير 40</a>
                                    </h3>
                                    <!-- Location -->
                                    <p class="location"><i class="fa fa-map-marker"></i> هوتون شارع لندن</p>
                                    <!-- Rating -->
                                    <div class="rating">
                                       <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span>

                                    </div>
                                    <!-- Price --><span class="ad-price">$110</span>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul class="pull-left">
                                       <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                    </ul>
                                    <ul class="pull-right">
                                       <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                                       <li> <a  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad" href="#"><i class="fa fa-times delete"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                              <div class="white category-grid-box-1 ">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
                                       <!-- Indicators -->
                                       <ol class="carousel-indicators">
                                          <li data-target="#carousel-0" data-slide-to="0" class="active"></li>
                                          <li data-target="#carousel-0" data-slide-to="1"></li>
                                       </ol>
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner">
                                          <div class="item active"> <img src="{{url('frontend')}}/images/posting/list-9.jpg" alt="Image"> </div>
                                          <div class="item"> <img src="{{url('frontend')}}/images/posting/list-6.jpg" alt="Image"> </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 ">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">ادوات رياضية</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3>
                                       <a title="" href="single-page-listing.html">هوندا CBR 1000RR للبيع</a>
                                    </h3>
                                    <!-- Location -->
                                    <p class="location"><i class="fa fa-map-marker"></i> هوتون شارع لندن</p>
                                    <!-- Rating -->
                                    <div class="rating">
                                       <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span>

                                    </div>
                                    <!-- Price --><span class="ad-price">$900</span>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul class="pull-left">
                                       <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                    </ul>
                                    <ul class="pull-right">
                                       <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                                       <li> <a  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad" href="#"><i class="fa fa-times delete"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                              <div class="white category-grid-box-1 ">
                                 <!-- Image Box -->
                                 <div class="image"> <img alt="Tour Package" src="{{url('frontend')}}/images/posting/grid-1.jpg" class="img-responsive"> </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 ">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">معدات الحاسوب</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3>
                                       <a title="" href="single-page-listing.html">Z170X اللوحة الأم جيجابايت ل </a>
                                    </h3>
                                    <!-- Location -->
                                    <p class="location"><i class="fa fa-map-marker"></i> هوتون شارع لندن</p>
                                    <!-- Rating -->
                                    <div class="rating">
                                       <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(2)</span>

                                    </div>
                                    <!-- Price --><span class="ad-price">$215</span>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul class="pull-left">
                                       <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                    </ul>
                                    <ul class="pull-right">
                                       <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                                       <li> <a  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad" href="#"><i class="fa fa-times delete"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                              <div class="white category-grid-box-1 ">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <div id="carousel-2" class="carousel slide slide-carousel" data-ride="carousel">
                                       <!-- Indicators -->
                                       <ol class="carousel-indicators">
                                          <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                          <li data-target="#carousel-2" data-slide-to="1"></li>
                                          <li data-target="#carousel-2" data-slide-to="2"></li>
                                       </ol>
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner">
                                          <div class="item active"> <img src="{{url('frontend')}}/images/posting/list-5.jpg" alt="Image"> </div>
                                          <div class="item"> <img src="{{url('frontend')}}/images/posting/list-10.jpg" alt="Image"> </div>
                                          <div class="item"> <img src="{{url('frontend')}}/images/posting/mob-6.jpg" alt="Image"> </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 ">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">الهواتف النقالة</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3>
                                       <a title="" href="single-page-listing.html">Xperia Z5 Premium</a>
                                    </h3>
                                    <!-- Location -->
                                    <p class="location"><i class="fa fa-map-marker"></i> هوتون شارع لندن</p>
                                    <!-- Rating -->
                                    <div class="rating">
                                       <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="rating-count">(5)</span>

                                    </div>
                                     <!-- Price --><span class="ad-price">$350</span>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul class="pull-left">
                                       <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                    </ul>
                                    <ul class="pull-right">
                                       <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                                       <li> <a  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad" href="#"><i class="fa fa-times delete"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                              <div class="white category-grid-box-1 ">
                                 <!-- Image Box -->
                                 <div class="image"> <img alt="Tour Package" src="{{url('frontend')}}/images/posting/house-4.jpg" class="img-responsive"> </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 ">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">العقارات</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3>
                                       <a title="" href="single-page-listing.html">العلامة التجارية منزل جديد للبيع</a>
                                    </h3>
                                    <!-- Location -->
                                    <p class="location"><i class="fa fa-map-marker"></i> هوتون شارع لندن</p>
                                    <!-- Rating -->
                                    <div class="rating">
                                       <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>

                                    </div>
                                    <!-- Price --><span class="ad-price">$43,000</span>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul class="pull-left">
                                       <li> <i class="fa fa-eye"></i><a href="#">445 Views</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                    </ul>
                                    <ul class="pull-right">
                                       <li> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                                       <li> <a  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad" href="#"><i class="fa fa-times delete"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- Ads Archive End -->
                        <div class="clearfix"></div>
                        <!-- Pagination -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                           <ul class="pagination pagination-lg">
                              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                              <li><a href="#">1</a></li>
                              <li class="active"><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                           </ul>
                        </div>
                        <!-- Pagination End -->
                     </div>
                     <!-- Row End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->


 @include('frontend.layouts.footer1')
