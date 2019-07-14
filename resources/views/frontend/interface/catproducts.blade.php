@include('frontend.layouts.header')
@include('frontend.layouts.navbar1')

@include('frontend.layouts.search1')

<!-- =-=-=-=-=-=-= إعلانات مميزة =-=-=-=-=-=-= -->
<section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1> <span class="heading-color"> {{$cat->name}}</span> </h1>
                        <!-- Short Description -->
                        <p class="heading-text">معرض  الصور </p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                       
                        <div class="featured-slider owl-carousel owl-theme">
                        @foreach($cphotes as $img)  
                        <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="{{$img->photo}}" style="width:100%; height:234px">
                                       <!-- User Review -->
                                       <!--div class="user-preview">
                                          <a href="#"> <img src="{{url('frontend')}}/images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div-->
                                       <!-- تفاصيل --><!--a href="" class="view-details">تفاصيل</a-->
                                       <!-- Additional Info -->
                                       <!--div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div-->
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <!--div class="short-description">
                                       <!-- Ad Category -->
                                       <!--div class="category-title"> <span><a href="#">الالكترونيات والأدوات</a></span> </div>
                                       <!-- Ad Title>
                                       <h3><a title="" href="single-page-listing.html">2017 هوندا سيفيك EX</a></h3>
                                       <!-- Price>
                                       <div class="price">$18,200 <span class="negotiable">(قابل للتفاوض)</span></div>
                                    </div-->
                                    <!-- Addition Info -->
                                    <!--div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div-->
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           @endforeach
   
                        </div>
                      
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= إعلانات مميزة End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-lg-12 col-sx-12">
                     <!-- Row -->
                     <div class="row">
                        <!-- Sorting Filters -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                           <!-- Sorting Filters Breadcrumb -->
                           <div class="filter-brudcrums">
                              <span>عرض <span class="showed"></span> من <span class="showed">{{$count }}</span>  النتائج</span>
                              <!--div class="filter-brudcrums-sort">
                                 <ul>
                                    <li><span>ترتيب حسب:</span></li>
                                    <li><a href="#">تاريخ التحديث</a></li>
                                    <li><a href="#">السعر</a></li>
                                    <li><a href="#">جديد</a></li>
                                    <li><a href="#">مستعمل</a></li>
                                    <li><a href="#">ضمان</a></li>
                                 </ul>
                              </div-->
                           </div>
                           <!-- Sorting Filters Breadcrumb End -->
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                           <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                              <ul class="list-unstyled">
                                 <!-- Listing Grid -->
                                 @foreach($products as $item)
                                 <li>
                                    <div class="well ad-listing clearfix">
                                       <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                          <!-- Image Box -->
                                          <div class="img-box">
                                             <a href="{{url('productdetails/'.$item->id)}}">
                                             <img src="{{$item->photos}}" class="img-responsive" alt=""  style="width:313px;height:234px;">
                                               </a>
                                             <div class="total-images"><strong>8</strong> photos </div>
                                             <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                          </div>
                                          <!-- Ad Status --><!--span class="ad-status"> متميز </span-->
                                          <!-- User Preview -->
                                          <!--div class="user-preview">
                                             <a href="#"> <img src="{{url('frontend')}}/images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                          </div-->
                                       </div>
                                       <div class="col-md-9 col-sm-7 col-xs-12">
                                          <!-- Ad Content-->
                                          <div class="row">
                                             <div class="content-area">
                                                <div class="col-md-9 col-sm-12 col-xs-12">
                                                   <!-- Category Title -->
                                                   <div class="category-title"> <span><a href="#">{{$item->catgory->name}}</a></span> </div>
                                                   <!-- Ad Title -->
                                                   <h3> <a href="{{url('productdetails/'.$item->id)}}">  {{$item->name}}</a></h3>
                                                   <!-- Ad Description-->
                                                   <p class="ad-details">
                                                      <p>{{$item->shortdesc}}</p>
                                                   </p>
                                                   <!-- Info Icons -->
                                                   <ul class="additional-info pull-right">
                                                      <li>
                                                         <a data-toggle="tooltip" title="إرسال رسالة" href="#" class="fa fa-envelope"></a>
                                                      </li>
                                                      <li>
                                                         <a data-toggle="tooltip" title="{{$item->phone}}" href="#" class="fa fa-phone"></a>
                                                      </li>
                                                      <li>
                                                         <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                                      </li>
                                                   </ul>
                                                   <!-- Ad Meta Info -->
                                                   <ul class="ad-meta-info">
                                                      <li> <i class="fa fa-map-marker"></i><a href="#">{{$item->city->name}}</a> </li>
                                                      <li> <i class="fa fa-map-marker"></i><a href="#">{{$item->addres}}</a> </li>
                                                      <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                                      <li>
                                                      
                                                         <a data-toggle="tooltip" title="{{$item->phone}}" href="#" class="fa fa-phone"></a>
                                                      </li>
                                                      <!--li>
                                                      <a class="btn btn-primary"> عرض الإعلان.</a>
                                                       </li-->
                                                    </ul>
                                                   
                                                </div>
                                                <div class="col-md-3 col-xs-12 col-sm-12">
                                                   <!-- Ad Stats -->
                                                   <div class="short-info">
                                                   <div class="ad-stats hidden-xs"><span>فئة: </span> {{$item->catgory->name}}</div>
                                                   @if($item->areanumber)
                                                      <div class="ad-stats hidden-xs" style="font-size:20px;"><span>السعه  : </span>{{$item->areanumber}}</div>
                                                      @endif
                                                      @if($item->service)
                                                      <div class="ad-stats hidden-xs"><span>  الخدمه: </span>{{$item->service}}</div>
                                                      @endif
                                                      @if($item->servicetype)
                                                      <div class="ad-stats hidden-xs"><span>  نوع الخدمه: </span>{{$item->servicetype}}</div>
                                                      @endif
                                                     
                                                   </div>
                                                   <!-- Price -->
                                                   <!--div class="price"> <span>$18,640</span> </div-->
                                                   <!-- Ad View Button -->
                                                   <button class="btn btn-block btn-danger"><i class="fa fa-eye" aria-hidden="true"></i>  طلب السعر</button>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Ad Content End -->
                                       </div>
                                    </div>
                                 </li>
                                 @endforeach
                                 
                              </ul>
                           </div>
                           <!-- Advertizing -->
                           <div class="col-md-12 col-xs-12 col-sm-12">
                              <section class="advertising">
                                 <a href="post-ad-1.html">
                                    <div class="banner">
                                       <div class="wrapper">
                                          <span class="title">هل تريد الممتلكات الخاصة بك ليتم سرد هنا?</span>
                                          <span class="submit">إرسال الآن! <i class="fa fa-plus-square"></i></span>
                                       </div>
                                    </div>
                                    <!-- /.banner-->
                                 </a>
                              </section>
                           </div>
                           <!-- Advertizing End -->
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

@include('frontend.layouts.footer')