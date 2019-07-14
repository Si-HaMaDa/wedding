 <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
 <footer class="minimal-footer-1">
            <div class="container">
               <div class="row">
                  <div class="col-sm-4">
                     <aside class="widget">
                        <h3 class="widget-title">معلومات عنا</h3>
                        <p>You bet your life Speed Racer he will see it through. Solets make the most of this beautiful day. Since we're together. </p>
                     </aside>
                  </div>
                  <div class="col-sm-4">
                     <aside class="widget text-center">
                        <img alt="Image" src="{{url('frontend')}}/images/logo-1.png">
                        <div class="social-links">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-google-plus"></i></a>
                           <a href="#"><i class="fa fa-linkedin"></i></a>
                           <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                     </aside>
                  </div>
                  <div class="col-sm-4">
                     <aside class="widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Subscribe to our newsletter to get our agency latest updates</p>
                        <form class="subscribe-form">
                           <input placeholder="عنوان البريد الإلكتروني" type="text">
                           <button type="submit"><i class="fa fa-envelope-o"></i></button>
                        </form>
                     </aside>
                  </div>
               </div>
            </div>
            <div class="sub-footer">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="entry-footer">
                        Copyright © 2019 - All Rights Reserved
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End -->
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>أضافة خدمة </h4>
      </a>
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="{{url('frontend')}}/js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="{{url('frontend')}}/js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="{{url('frontend')}}/js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="{{url('frontend')}}/js/forest-megamenu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="{{url('frontend')}}/js/jquery.appear.min.js"></script>
      <!-- Numbers Animation   -->
      <script src="{{url('frontend')}}/js/jquery.countTo.js"></script>
      <!-- Jquery Smooth Scroll  -->
      <script src="{{url('frontend')}}/js/jquery.smoothscroll.js"></script>
      <!-- Jquery Select Options  -->
      <script src="{{url('frontend')}}/js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="{{url('frontend')}}/js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="{{url('frontend')}}/js/carousel.min.js"></script>
      <script src="{{url('frontend')}}/js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="{{url('frontend')}}/js/imagesloaded.js"></script>
      <script src="{{url('frontend')}}/js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="{{url('frontend')}}/js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="{{url('frontend')}}/js/jquery-migrate.min.js"></script>
      <!-- Sticky Bar  -->
      <script src="{{url('frontend')}}/js/theia-sticky-sidebar.js"></script>
      <!-- Style Switcher -->
      <script src="{{url('frontend')}}/js/color-switcher.js"></script>
      <!-- Template Core JS -->
      <script src="{{url('frontend')}}/js/custom.js"></script>
      <script type="text/javascript">
         (function($) {
         	"use strict";
         	$(".minimal-category").slice(0, 12).show();
         	$("#loadMore").on('click', function (e) {
         		e.preventDefault();
         		$(".minimal-category:hidden").slice(0, 4).slideDown();
         		if ($(".minimal-category:hidden").length == 0) {
         			$("#load").fadeOut('slow');
         		}
         		$('html,body').animate({
         			scrollTop: $(this).offset().top
         		}, 1500);
         	});
         })(jQuery);
      </script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   // console.log('hhhh');
$(document).ready(function(){
  $("#autocomplete").keyup(function(){
  var query= $(this).val();
   //console.log($query);
   if(query !='')
   {
    $.ajax({
      type: "GET",
      url: "/autocompletesearch",
      dataType:'json',
       success: function (data) {
        console.log('mmmmmm');
        $('#citylist').fadeIn();
        $('$citylist').html(data);
      }
    })
   }

  });
});
</script>

   </body>
</html>
