@include('frontend.layouts.header1')
 <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{url('frontend')}}/css/dropzone.css">
      <link href="{{url('frontend')}}/css/jquery.tagsinput.min.css" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="{{url('frontend')}}/js/modernizr.js"></script>
@include('frontend.layouts.navbar1')
@include('frontend.layouts.section')

      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <!--div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>User Sign In</h1>
                  </div>
               </div>
            </div>
         </div>
      </div-->
      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="{{url('wedding')}}">Home Page</a></li>
                  <li><a href="#">الصفحات</a></li>
                  <li><a class="active" href="#">Sign In</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding  gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12">
                     <!-- end post-padding -->
                     <div class="post-ad-form extra-padding postdetails">
                        <div class="heading-panel">
                           <h3 class="main-title text-left">
                              أضف إعلانك
                           </h3>
                        </div>
                        <p class="lead">نشر اعلانا على <a href="#">AdForest.com</a> بدون مقابل! ومع ذلك، يجب على جميع الإعلانات متابعة قواعدنا:</p>
                        <form  class="submit-form">
                           <!-- Title  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <label class="control-label">عنوان المشروع <small>أدخل عنوان قصير لمشروعك</small></label>
                                 <input class="form-control" placeholder="جديد هوندا العلامة التجارية المدني 2017 للبيع" type="text">
                              </div>
                           </div>
                           <div class="row">
                              <!-- Category  -->
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">فئة <small>اختيار الفئة المناسبة لإعلانك</small></label>
                                 <select class="category form-control">
                                    <option label="Select Option"></option>
                                    <option value="0">سيارات و دراجات</option>
                                    <option value="1">الهواتف النقالة</option>
                                    <option value="2">الأجهزة المنزلية</option>
                                    <option value="3">ملابس</option>
                                    <option value="4">Human Resource</option>
                                    <option value="5">Information Technology</option>
                                    <option value="6">Marketing</option>
                                    <option value="7">آخرون</option>
                                    <option value="8">Sales</option>
                                 </select>
                              </div>
                              <!-- Price  -->
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">السعر<small>دولار أمريكي only</small></label>
                                 <input class="form-control" placeholder="eg $350" type="text">
                              </div>
                           </div>
                           <!-- end row -->
                           <!-- Image Upload  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <label class="control-label">صور لإعلانك <small>الرجاء إضافة الصور إعلانك. (350x450)</small></label>
                                 <div id="dropzone" class="dropzone"></div>
                              </div>
                           </div>
                           <!-- end row -->
                           <!-- Ad Description  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                 <label class="control-label">وصف الإعلان <small>أدخل وصف طويل للمشروع الخاص بك</small></label>
                                 <textarea  name="editor1" id="editor1" rows="12" class="form-control " placeholder=""></textarea>
                              </div>
                           </div>
                           <!-- end row -->
                            <!-- Ad Tags  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                 <label class="control-label">إعلان الكلمات </label>
                                 <input class="form-control" name="tags" id="tags" value="laptop,car,camera for sale" >
                              </div>
                           </div>
                           <!-- end row -->
                           <!-- Ad Type  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <label class="control-label">نوع الإعلان<small>تريد شراء أو بيع</small></label>
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <li>
                                          <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                          <label  for="minimal-radio-1">أريد أن أبيع </label>
                                       </li>
                                       <li>
                                          <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                          <label for="minimal-radio-2">أريد شراء</label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Ad Condition  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <label class="control-label">شرط<small>حالة السلعة</small></label>
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <li>
                                          <input type="radio" id="new" name="minimal-radio">
                                          <label  for="new">جديد</label>
                                       </li>
                                       <li>
                                          <input type="radio" id="used" name="minimal-radio" checked>
                                          <label for="used">مستعمل</label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- end row -->
                           <div class="row">
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">اسمك</label>
                                 <input class="form-control" placeholder="على سبيل المثال محمد عمير" type="text">
                              </div>
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">معرف البريد الإلكتروني الخاص بك</label>
                                 <input class="form-control" placeholder="contact@scriptsbundle.com" type="text">
                              </div>
                           </div>
                           <!-- end row -->
                           <div class="row">
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">رقم الهاتف المحمول<small>عدد لالتشكل</small></label>
                                 <input class="form-control" placeholder="eg +92-0321-123-456-789" type="text">
                              </div>
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">عنوان<small>عنوانك الدائم</small></label>
                                 <input class="form-control" placeholder="eg House no 8 Streent no 2 New York" type="text">
                              </div>
                           </div>
                           <!-- اختر حزمة  -->
                           <div class="select-package">
                              	<div class="no-padding col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <h3 class="margin-bottom-20">اختر حزمة</h3>
                                 <div class="pricing-list">
                                    <div class="row">
                                       <div class="col-md-9 col-sm-9 col-xs-12">
                                          <h3>قائمة حرة   <small>إرسال 5 القوائم</small></h3>
                                          <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                                       </div>
                                       <!-- end col -->
                                       <div class="col-md-3 col-sm-3 col-xs-12">
                                          <div class="pricing-list-price text-center">
                                             <h4>$0.00</h4>
                                             <a href="#submit" class="btn btn-theme btn-sm btn-block">اختار</a>
                                          </div>
                                       </div>
                                       <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                 </div>
                                 <div class="pricing-list">
                                    <div class="row">
                                       <div class="col-md-9 col-sm-9 col-xs-12">
                                          <h3>قائمة قسط   <small>إرسال 10 القوائم</small></h3>
                                          <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                                       </div>
                                       <!-- end col -->
                                       <div class="col-md-3 col-sm-3 col-xs-12">
                                          <div class="pricing-list-price text-center">
                                             <h4>$2.00</h4>
                                             <a href="#submit" class="btn btn-theme btn-sm btn-block">اختار</a>
                                          </div>
                                       </div>
                                       <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                 </div>
                                 <div class="pricing-list">
                                    <div class="row">
                                       <div class="col-md-9 col-sm-9 col-xs-12">
                                          <h3>عمل قائمة   <small>إرسال مشاريع غير محدود</small></h3>
                                          <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                                       </div>
                                       <!-- end col -->
                                       <div class="col-md-3 col-sm-3 col-xs-12">
                                          <div class="pricing-list-price text-center">
                                             <h4>$10.00</h4>
                                             <a href="#submit" class="btn btn-theme btn-sm btn-block">اختار</a>
                                          </div>
                                       </div>
                                       <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                 </div>
                              </div>
                           </div>

                           <!-- Featured Ad  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <label class="control-label">جعل إعلانك مميزة  <small class="pull-right" > <a href="">ما هو الإعلان المميز</a></small></label>
                                 <div class="skin-minimal">
                                    <ul class="list">
                                       <li>
                                          <input type="radio" id="bank" name="minimal-radio">
                                          <label  for="bank"> تحويل مصرفي مباشر</label>
                                       </li>
                                       <li>
                                          <input type="radio" id="cheque" name="minimal-radio" checked>
                                          <label for="cheque">دفع شيكات</label>
                                       </li>
                                       <li>
                                          <input type="radio" id="paypal" name="minimal-radio" checked>
                                          <label for="paypal">باي بال</label>
                                       </li>
                                       <li>
                                          <input type="radio" id="card" name="minimal-radio" checked>
                                          <label for="card">بطاقة ائتمان</label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- end row -->
                           <button class="btn btn-theme pull-right">نشر إعلاني</button>
                        </form>
                     </div>
                     <!-- end post-ad-form-->
                  </div>
                  <!-- end col -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->

         @include('frontend.layouts.footer1')
<!-- For this Page Only -->
      <!-- Ckeditor  -->
      <script src="{{url('frontend')}}/js/ckeditor/ckeditor.js" ></script>
      <!-- Ad Tags  -->
      <script src="{{url('frontend')}}/js/jquery.tagsinput.min.js"></script>
      <!-- DROPZONE JS  -->
      <script src="{{url('frontend')}}/js/dropzone.js" ></script>
      <script src="{{url('frontend')}}/js/form-dropzone.js" ></script>
      <script type="text/javascript">
	   "use strict";

	   /*--------- Textarea Ck Editor --------*/
	     CKEDITOR.replace( 'editor1' );

	   /*--------- Ad Tags --------*/
		 $('#tags').tagsInput({
   			'width':'100%'
		 });

         /*--------- create remove function in dropzone --------*/
         Dropzone.autoDiscover = false;
         var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
         var fileList = new Array;
         var i = 0;
         $("#dropzone").dropzone({
           addRemoveLinks: true,
           maxFiles: 5, //change limit as per your requirements
         acceptedFiles: '.jpeg,.jpg,.png,.gif',
           dictMaxFilesExceeded: "Maximum upload limit reached",
           acceptedFiles: acceptedFileTypes,
         url: "uploads",
           dictInvalidFileType: "upload only JPG/PNG",
           init: function () {
               // Hack: Add the dropzone class to the element
               $(this.element).addClass("dropzone");
           }
         });
		 (jQuery);
      </script>
      <!-- JS -->
   </body>
</html>
