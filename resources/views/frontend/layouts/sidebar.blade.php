 <!--**********************************
            Sidebar start
        ***********************************-->
        <?php
use App\Catgory;

      $cats=Catgory::all();
        ?>
        <div class="nk-sidebar" style="">           
            <div class="nk-nav-scroll" style=" max-height: 100%;
      overflow-y: auto;">
                <ul class="metismenu" id="menu" >
                    
                <li>
                    <a class="has-arrow" style="font-size:20px;" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"></i><span class="nav-text">الاشخاص</span></a>
                        <ul aria-expanded="false">
                            <li><a  style="font-size:20px;"  href="{{url('users')}}"> <i class=" fa fa-user"></i>المستخدمين</a></li>
                            <li><a  style="font-size:20px;"  href="{{url('admins')}}"> <i class="fa fa-user"></i>المدرين</a></li>   
                            
                        </ul>
                    </li>

                    <li>
                    <a class="has-arrow"  style="font-size:20px;"  href="javascript:void()" aria-expanded="false"><i class="fa fa-table"></i><span class="nav-text"> الاقسام والمدن </span></a>
                        <ul aria-expanded="false">
                        <li><a  style="font-size:20px;"  href="{{url('cities')}}"><i class="icon-layers"></i>المدن</a></li>
                        
                        <li><a  style="font-size:20px;"  href="{{url('categories')}}"> <i class="icon-layers"></i>الاقسام</a></li>
                        <li><a  style="font-size:20px;"  href="{{url('catsphotes')}}"> <i class="icon-layers"></i> صور الاقسام</a></li>
                        </ul>
                    </li>

                    <!--li>
                    <a class="has-arrow"  style="font-size:20px;"  href="javascript:void()" aria-expanded="false"><i class="fa fa-table"></i><span class="nav-text">  تجهيزات الزفاف </span></a>
                        <ul aria-expanded="false">
                        <li><a  style="font-size:20px;"  href="{{url('weddinghall')}}"> <i class="icon-layers"></i>قاعات الزفاف </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingdress')}}"> <i class="icon-layers"></i>فستان الزفاف </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddinginvition')}}"> <i class="icon-layers"></i> دعوه زواج </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingphoto')}}"> <i class="icon-layers"></i>  الفوتوغرافي  </a></li>
                            <li><a  style="font-size:18px;"  href="{{url('weddingevent')}}"> <i class="icon-layers"></i>  تنسيق الحفلات  </a></li>
                            
                        </ul>
                    </li-->

                    <!--li>
                    <a class="has-arrow"  style="font-size:20px;"  href="javascript:void()" aria-expanded="false"><i class="fa fa-table"></i><span class="nav-text">   تحضيرات الزفاف </span></a>
                        <ul aria-expanded="false">
                        
                            <li><a  style="font-size:20px;"  href="{{url('weddingmakeup')}}"> <i class="icon-layers"></i>الشعر والمكياج  </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingkeke')}}"> <i class="icon-layers"></i> كيك الزفاف </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddinghenna')}}"> <i class="icon-layers"></i>نقش حتاء  </a></li>
                            <li><a  style="font-size:19px;"  href="{{url('weddingboffe')}}"> <i class="icon-layers"></i>بوفيه مفتوح   </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingdeje')}}"> <i class="icon-layers"></i> زفات ودي جي </a></li>
                            <li><a  style="font-size:19px;"  href="{{url('weddingjewelery')}}"> <i class="icon-layers"></i> خواتم الزفاف   </a></li>
                            
                        </ul>
                    </li-->

                    <!--li>
                        <a  style="font-size:20px;" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer"></i><span class="nav-text"> اعدادات الزفاف</span>
                        </a>
                        <ul aria-expanded="false">
                        
                            
                            <li><a  style="font-size:20px;"  href="{{url('weddingbeauty')}}"> <i class="icon-layers"></i>مراكز تجميل    </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingdistributions')}}"> <i class="icon-layers"></i>توزيعات الافراح   </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingeveningdress')}}"> <i class="icon-layers"></i>فساتين سهره   </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingflower')}}"> <i class="icon-layers"></i>زهور الزفاف  </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingcars')}}"> <i class="icon-layers"></i>سياره الزفه  </a></li>
                            <li><a  style="font-size:20px;"  href="{{url('weddingabayat')}}"> <i class="icon-layers"></i>عبايات  </a></li>

                        
                        </ul>
                    </li-->
                    <li>
                        <a  style="font-size:20px;" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer"></i><span class="nav-text">  الاقسام الريسيه</span>
                        </a>
                        <ul aria-expanded="false">
                        
                            @foreach($cats as $item)
                            <li style=""><a  style="font-size:18px;"  href="{{url('catproducts/'.$item->id)}}"> <i class="icon-layers"></i> <span >{{$item->name}}  </span>  </a></li>
                            @endforeach

                        
                        </ul>
                    </li>
                    
                    
                    
                    

                    <!--li class="nav-label">Apps</li-->
                    <!--li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-screen-smartphone"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a  href="{{url('resapp')}}/email-inbox.html">Mailbox</a></li>
                            <li><a  href="{{url('resapp')}}/app-profile.html">Profile</a></li>
                            <li><a  href="{{url('resapp')}}/app-calender.html">Calendar</a></li>
                        </ul>
                    </li-->
                    <!--li><a  href="{{url('resapp')}}/charts.html" aria-expanded="false"><i class="icon-chart"></i> <span class="nav-text">Charts</span></a></li-->
                   
                    <!--li><a  href="{{url('resapp')}}/ui-bootstrap.html" aria-expanded="false"><i class="icon-diamond"></i><span class="nav-text">UI Bootstrap</span></a></li>
                    <li><a  href="{{url('resapp')}}/components.html" aria-expanded="false"><i class="icon-puzzle"></i><span class="nav-text">Components</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon-badge"></i><span class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a  href="{{url('resapp')}}/forms.html" aria-expanded="false"><i class="icon-settings"></i><span class="nav-text">Forms</span></a></li>
                    <li class="nav-label">Table</li>
                    <---->
                    <!--li><a  href="{{url('resapp')}}/tables.html" aria-expanded="false"><i class="icon-briefcase"></i><span class="nav-text">Table</span></a></li-->
                    <!--li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-globe"></i><span class="nav-text">Pages</span></a>
                       
                    <ul aria-expanded="false">
                            <li><a  href="{{url('resapp')}}/page-login.html">Login</a></li>
                            <li><a  href="{{url('resapp')}}/page-register.html">Register</a></li>
                            <li><a  href="{{url('resapp')}}/page-user-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Erorr</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a  href="{{url('resapp')}}/page-error-400.html">Erorr 400</a></li>
                                    <li><a  href="{{url('resapp')}}/page-error-403.html">Erorr 403</a></li>
                                    <li><a  href="{{url('resapp')}}/page-error-404.html">Erorr 404</a></li>
                                    <li><a  href="{{url('resapp')}}/page-error-500.html">Erorr 500</a></li>
                                    <li><a  href="{{url('resapp')}}/page-error-503.html">Erorr 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li-->

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->