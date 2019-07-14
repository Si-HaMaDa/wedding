<!-- =-=-=-=-=-=-= Home Hero Section  =-=-=-=-=-=-= -->
<section id="hero" class="hero bg-img-6" data-stellar-background-ratio="0.1">
         <div class="content">
            <p>البحث في أكبر منصة اعلانات زفاف في مصر </p>
            <h1>الدليل الأكبر لجميع خدمات حفلات الزفاف في مصر ... خدمة مجانية 100 % </h1>
            <div class="search-holder">
                <form method="get" action="{{url('#autocompletesearch')}}">
               @csrf
                <div id="custom-search-input">
                  <div class="input-group col-md-12 col-xs-12 col-sm-12">
                     <input  id="autocomplete" name="search"type="text" class="form-control" placeholder="ما الذي تبحث عنه ... ؟  " /> <span class="input-group-btn">
                     <div id="citylist">

                     </div>
                     <button class="btn btn-theme" type="submit"> <span class=" glyphicon glyphicon-search"></span> </button>
                     </span>
                  </div>
               </div>
            </div>
            <!-- .search-holder -->
         </div>
         <!-- .content -->
      </section>
      <!-- =-=-=-=-=-=-= Home Hero Section  =-=-=-=-=-=-= -->
