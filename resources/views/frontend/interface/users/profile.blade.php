@include('frontend.layouts.header1')
@include('frontend.layouts.navbar')


      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="{{url('wedding')}}">Home</a></li>
                  <li><a href="#">الصفحات</a></li>
                  <li><a class="active" href="#">الملف الشخصي</a></li>
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
                           <li  class="active"><a href="{{url('profile')}}">الملف الشخصي</a></li>
                           <li ><a href="{{url('userads')}}">الإعلانات <span class="badge">45</span></a></li>
                           <li><a href="favourite.html">إعلانات مفضلة <span class="badge">15</span></a></li>
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
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#profile" data-toggle="tab">الملف الشخصي</a></li>
                              <li><a href="#edit" data-toggle="tab">Edit الملف الشخصي</a></li>
                              <li><a href="#payment" data-toggle="tab">إعداد خطة</a></li>
                              <li><a href="#settings" data-toggle="tab">إعدادات الإشعار</a></li>
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="profile">
                                 <h2 class="heading-md">Manage your Name, ID and عنوان البريد الإلكترونيes.</h2>
                                 <p>Below are the name and email addresses on file for your account.</p>
                                 <dl class="dl-horizontal">
                                    <dt><strong>Your name </strong></dt>
                                    <dd>
                                       John Doe
                                    </dd>
                                    <dt><strong>عنوان البريد الإلكتروني </strong></dt>
                                    <dd>
                                       contact@scriptsbundle.com
                                    </dd>
                                    <dt><strong>Phone Number </strong></dt>
                                    <dd>
                                       (0423) 12-2345-789
                                    </dd>
                                    <dt><strong>Country </strong></dt>
                                    <dd>
                                       إنكلترا
                                    </dd>
                                    <dt><strong>City </strong></dt>
                                    <dd>
                                       London
                                    </dd>
                                    <dt><strong>You are a </strong></dt>
                                    <dd>
                                       تاجر
                                    </dd>
                                    <dt><strong>Address </strong></dt>
                                    <dd>
                                       Lahore, PK
                                    </dd>
                                 </dl>
                              </div>
                              <div class="profile-edit tab-pane fade" id="edit">
                                 <h2 class="heading-md">Manage your Security Settings</h2>
                                 <p>Manage Your Account</p>
                                 <div class="clearfix"></div>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>اسمك </label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>عنوان البريد الإلكتروني <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Contact Number <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>Country <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">SriLanka</option>
                                             <option value="1">أستراليا</option>
                                             <option value="2">Bahrain</option>
                                             <option value="3">Canada</option>
                                             <option value="4">Denmark</option>
                                             <option value="5">Germany</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>City <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">London</option>
                                             <option value="1">Edinburgh</option>
                                             <option value="2">Wales</option>
                                             <option value="3">Cardiff</option>
                                             <option value="4">Bradford</option>
                                             <option value="5">Cambridge</option>
                                          </select>
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Address <span class="color-red">*</span></label>
                                          <textarea class = "form-control margin-bottom-20" rows = "3"></textarea>
                                       </div>
                                    </div>
                                    <div class="row margin-bottom-20">
                                       <div class="form-group">
                                          <div class="col-md-9">
                                             <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                             </div>
                                          </div>
                                          <div class="col-md-3">
                                             <img id="img-upload" class="img-responsive" src="{{url('frontend')}}/images/users/2.jpg" alt="" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                       <div class="col-md-8 col-sm-8 col-xs-12">
                                          <div class="form-group">
                                             <div class="skin-minimal">
                                                <ul class="list">
                                                   <li>
                                                      <input  type="checkbox" id="minimal-checkbox-7">
                                                      <label for="minimal-checkbox-7">i agree <a href="#">Terms of Services</a></label>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                          <button type="submit" class="btn btn-theme btn-sm">Update My Info</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              <div class="profile-edit tab-pane fade" id="payment">
                                 <h2 class="heading-md">Manage your Package Settings</h2>
                                 <p>Below are the payment options for your account.</p>
                                 <br>
                                 <form action="#" id="sky-form" class="sky-form" novalidate>
                                    <!--Checkout-Form-->
                                    <dl class="dl-horizontal">
                                       <dt><strong>Current Plan</strong></dt>
                                       <dd>
                                          Premium
                                       </dd>
                                       <dt><strong>Expiration Date </strong></dt>
                                       <dd>
                                          2nd January 2017
                                       </dd>
                                    </dl>
                                    <div class="row">
                                       <div class="col-sm-12 col-md-12 margin-bottom-20">
                                          <label>حدد خطة You Want To Change<span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">Free</option>
                                             <option value="1">Premium</option>
                                             <option value="2">Advanced</option>
                                          </select>
                                       </div>
                                    </div>
                                    <button class="btn btn-sm btn-default" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    <!--End Checkout-Form-->
                                 </form>
                              </div>
                              <div class="profile-edit tab-pane fade" id="settings">
                                 <h2 class="heading-md">Manage your Notifications.</h2>
                                 <p>Below are the notifications you may manage.</p>
                                 <br>
                                 <form>
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">Send me email notification when Ad is processed</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-2">
                                             <label for="minimal-checkbox-2">Send me email notification when user comment</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-3">
                                             <label for="minimal-checkbox-3">Send me email notification for the latest update</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-4">
                                             <label for="minimal-checkbox-4"> Receive our monthly newsletter</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-5">
                                             <label for="minimal-checkbox-5">Email notification</label>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="button-group margin-top-20">
                                       <button class="btn btn-sm btn-default" type="button">Reset</button>
                                       <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
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
