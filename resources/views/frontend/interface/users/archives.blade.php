@include('frontend.layouts.header1')
@include('frontend.layouts.navbar')

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
                        <a href="profile.html"><img src="{{url('frontend')}}/{{url('frontend')}}/images/users/9.jpg" alt=""></a>
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
                           <li ><a href="{{url('userads')}}">الإعلانات <span class="badge">45</span></a></li>
                           <li  class="active"><a href="{{url('favourite')}}">إعلانات مفضلة <span class="badge">15</span></a></li>
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
                           <div class="col-md-12 col-xs-12 col-sm-12 user-archives">
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img ">
                                       <a href="#">
                                       <img src="{{url('frontend')}}/images/posting/2.jpg" alt="">
                                       </a>
                                       <div class="sold">
                                          <img class="img-responsive" src="{{url('frontend')}}/images/sold.png" alt="">
                                       </div>
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
                                       <div class="ad-price">$500</div>
                                       <!-- Title -->
                                       <h3>هوندا سيفيك 2017 الطبعة الرياضة</h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">Car &amp; Bikes</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>
                                          <div class="ad-meta">
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="#">
                                       <img src="{{url('frontend')}}/images/posting/5.jpg" alt="">
                                       </a>
                                       <div class="sold">
                                          <img class="img-responsive" src="{{url('frontend')}}/images/sold.png" alt="">
                                       </div>
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
                                       <div class="ad-price">$900</div>
                                       <!-- Title -->
                                       <h3>هوندا CBR 1000RR للبيع </h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">السيارات والدراجات</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>
                                          <div class="ad-meta">
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="#">
                                          <div class="ribbon expired">Expired</div>
                                          <img src="{{url('frontend')}}/images/posting/4.jpg" alt="">
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
                                       <div class="ad-price">$120</div>
                                       <!-- Title -->
                                       <h3>أجهزة إكس بوكس ​​360 + ألعاب + إكسسوارات</h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">الفن واللعب </a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>

                                          <div class="ad-meta">
                                             <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                             <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="#">
                                          <div class="ribbon expired">Expired</div>
                                          <img src="{{url('frontend')}}/images/posting/6.jpg" alt="">
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
                                       <div class="ad-price">$700</div>
                                       <!-- Title -->
                                       <h3>سوني فايو ديو تحويل 13.3 "I7 </h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">أجهزة الكمبيوتر المحمولة</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>
                                          <div class="ad-meta">
                                             <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                             <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="#">
                                       <img src="{{url('frontend')}}/images/posting/1.jpg" alt="">
                                       </a>
                                       <div class="sold">
                                          <img class="img-responsive" src="{{url('frontend')}}/images/sold.png" alt="">
                                       </div>
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
                                       <div class="ad-price">$350</div>
                                       <!-- Title -->
                                       <h3>سوني اريكسون Z5 مقاوم للماء</h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">الهواتف النقالة</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>

                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>
                                          <div class="ad-meta">
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="#">
                                          <div class="ribbon expired">Expired</div>
                                          <img src="{{url('frontend')}}/images/posting/7.jpg" alt="">
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
                                       <div class="ad-price">$1200</div>
                                       <!-- Title -->
                                       <h3>هوندا CBR900 إكستريم إيديشن</h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">Car &amp; Bikes</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>
                                          <div class="ad-meta">
                                             <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                             <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                              <!-- Ads Listing -->
                              <div class="ads-list-archive">
                                 <!-- Image Block -->
                                 <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                       <a href="#">
                                          <div class="ribbon expired">Expired</div>
                                          <img src="{{url('frontend')}}/images/posting/8.jpg" alt="">
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
                                       <div class="ad-price">$120</div>
                                       <!-- Title -->
                                       <h3>سامسونج Galaxy S2</h3>
                                       <!-- Category -->
                                       <div class="category-title"> <span><a href="#">Car &amp; Bikes</a></span> </div>
                                       <!-- Short Description -->
                                       <div class="clearfix visible-xs-block"></div>
                                       <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                       <!-- Ad Features -->
                                       <ul class="add_info">
                                          <!-- Contact Details -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Call Timings</h4>
                                                   <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                   <br>
                                                   <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Address -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                   <h4>Address</h4>
                                                   متحف اللوفر، 75058 باريس - فرنسا
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Condition</strong> <span class="label label-danger">Used</span>
                                                </div>
                                             </div>
                                          </li>
                                          <!-- Ad Type -->
                                          <li>
                                             <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                <div class="tooltip-content">
                                                   <strong>Warrinty</strong> <span class="label label-danger">No </span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <!-- Ad History -->
                                       <div class="clearfix archive-history">
                                          <div class="last-updated">Updated: 1 day ago</div>
                                          <div class="ad-meta">
                                             <a class="btn save-ad"><i class="fa fa-plus"></i> Reactive</a>
                                             <a class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                             <a class="btn btn-danger"><i class="fa fa-times"></i> Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                 </div>
                                 <!-- Content Block End -->
                              </div>
                           </div>
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
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->

      </div>





 @include('frontend.layouts.footer1')
