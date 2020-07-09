<aside id="leftsidebar" class="sidebar">
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="{{url('/profile')}}"><img src="{{url(Auth::user()->photo ?? '')}}" alt="User" onerror="this.src='{{url('assets/images/profile_av.jpg')}}';"></a></div>
                            <div class="detail">
                                <h4>{{Auth::user()->name}}</h4>
                            </div>
                        </div>
                    </li>
                    <li class="active open">
                        <a href="{{url('admin/dashboard')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/blogs')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Blog/News</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/portfolio')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Portfolio</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/inquery')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Inquery</span></a>
                    </li>
                    <li class="open">
                        <a href="{{url('admin/faq')}}" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>FAQ</span></a>
                    </li>
                    <!--<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>স্বল্প মেয়াদী সঞ্চয় </span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{url('admin/saving/short/application')}}">আবেদন  </a></li>
                            <li><a href="{{url('admin/saving/find')}}" > <span>আদায়/ কালেকশন </span></a></li>
                            <li><a href="{{url('admin/saving/short/collection-report')}}" > <span>আদায় রিপোর্ট</span></a></li>
                            <li><a href="{{url('admin/saving/short/list')}}">সঞ্চয় তালিকা </a></li>
                            <li><a href="{{url('admin/saving/short/withdraw')}}">সঞ্চয় উত্তোলন </a></li>
                            <li><a href="{{url('admin/saving/short/withdraw-report')}}" > <span>উত্তোলন রিপোর্ট</span></a></li>
                            <li><a href="{{url('admin/saving/short/packages')}}" > <span>পাকেজসমুহ</span></a></li>
                        </ul>
                    </li>-->

                </ul>
            </div>
        </div>
    </div>
</aside>
