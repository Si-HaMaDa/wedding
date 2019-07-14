@include('frontend.layouts.header1')
@include('frontend.layouts.navbar')
   <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->

      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="{{url('wedding')}}">Home Page</a></li>
                  <li><a href="#">الصفحات</a></li>
                  <li><a class="active" href="#"> تسجيل الدخول</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding error-page pattern-bg ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-5 col-md-push-7 col-sm-12 col-xs-12">
                     <!--  Form -->
                     <div class="form-grid">
                        <form>
                           <div class="form-group">
                              <label>اسم</label>
                              <input placeholder="Enter اسمك" class="form-control" type="text">
                           </div>
                           <div class="form-group">
                              <label>رقم الاتصال</label>
                              <input placeholder="Enter Your Contact Number" class="form-control" type="text">
                           </div>
                           <div class="form-group">
                              <label>البريد الإلكتروني</label>
                              <input placeholder="Your Email" class="form-control" type="email">
                           </div>
                           <div class="form-group">
                              <label>كلمه السر</label>
                              <input placeholder="Your Password" class="form-control" type="password">
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-7">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">أنا أتفق <a href="#">حيث الخدمات</a></label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-5 text-right">
                                    <p class="help-block"><a data-target="#myModal" data-toggle="modal">هل نسيت كلمة المرور؟</a>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <button class="btn btn-theme btn-lg btn-block">تسجيل</button>
                        </form>
                     </div>
                     <!-- Form -->
                  </div>

                  <div class="col-md-7  col-md-pull-5  col-sm-12 col-xs-12">
                     <div class="heading-panel">
                        <h3 class="main-title text-left">
                           أنشئ حسابك
                        </h3>
                     </div>
                     <div class="content-info">
                        <div class="features">
                           <div class="features-icons">
                              <img src="{{url('frontend')}}/images/icons/chat.png" alt="img">
                           </div>
                           <div class="features-text">
                              <h3>الدردشة والتراسل</h3>
                              <p>
                                 الوصول الدردشات ومعلومات الحساب من أي جهاز.
                              </p>
                           </div>
                        </div>
                        <div class="features">
                           <div class="features-icons">
                              <img src="{{url('frontend')}}/images/icons/panel.png" alt="img">
                           </div>
                           <div class="features-text">
                              <h3>User لوحة القيادة</h3>
                              <p>
                                 الحفاظ على مفضلة عن طريق توفير العناصر المفضلة لديك.
                              </p>
                           </div>
                        </div>
                        <div class="features">
                           <div class="features-icons">
                              <img src="{{url('frontend')}}/images/icons/history.png" alt="img">
                           </div>
                           <div class="features-text">
                              <h3>مسار التاريخ</h3>
                              <p>
                                الحفاظ على مفضلة عن طريق توفير العناصر المفضلة لديك.
                              </p>
                           </div>
                        </div>
                        <div class="features">
                           <div class="features-icons">
                              <img src="{{url('frontend')}}/images/icons/featured-listing.png" alt="img">
                           </div>
                           <div class="features-text">
                              <h3>ميزات قائمة</h3>
                              <p>
                                الحفاظ على مفضلة عن طريق توفير العناصر المفضلة لديك.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->



 @include('frontend.layouts.footer1')
