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
                  <div class="col-md-5 col-md-push-7 col-sm-6 col-xs-12">
                     <!--  Form -->
                     <div class="form-grid">
                        <form>
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
                                 <div class="col-xs-12">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">تذكرنى</label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button class="btn btn-theme btn-lg btn-block">تسجيل الدخول معنا</button>
                        </form>
                     </div>
                     <!-- Form -->
                  </div>
                  <div class="col-md-7  col-md-pull-5  col-xs-12 col-sm-6">
                     <div class="heading-panel">
                        <h3 class="main-title text-left">
                           تسجيل الدخول إلى حسابك
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
                     </div>
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->



 @include('frontend.layouts.footer1')
