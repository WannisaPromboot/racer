<style>
    #sidebar-menu .has-arrow:after {
        color: black !important;
    }
    #sidebar-menu .has-arrow:after {
        color: black !important;
    }
    li .mm-active .active {
                color: #000000 !important;
     }
     #sidebar-menu ul li {
        color: #a6b0cf !important;
     }
</style>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background-color: white">

    <div data-simplebar class="h-100" >

        <!--- Sidemenu -->
        <div id="sidebar-menu" style="background-color: white">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{url('home')}}"  class="waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/home-run.png')}}">
                        <span>{{Session::get('lang')=='th'?'หน้าแรก':'Home'}}</span>
                    </a> 
                </li>
                <li>
                    <a href="javascript:void(0)" class="waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/contact-us.png')}}">
                        <span>การจัดการสิทธิ์และบทบาท</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('slidecontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/banner.png')}}">
                        <span>{{Session::get('lang')=='th'?'การจัดการ  Banner & Slide':'Banner & Slide Management'}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('blogcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/news.png')}}">
                        <span>{{Session::get('lang')=='th'?'การจัดการบทความ':'Blog Management'}}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/grid.png')}}">
                        <span>{{Session::get('lang')=='th'?'การจัดการหมวดหมู่':'Category Management'}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('categorycontent')}}">{{Session::get('lang')=='th'?'เมนูหลัก':'Category'}}</a></li>
                        <li><a href="{{url('subcategorycontent')}}">{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1':'Sub Category 1'}}</a></li>
                    </ul> 
                </li>
                <li>
                    <a href="{{url('productcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/lightbulb.png')}}">
                        <span>{{Session::get('lang')=='th'?'สินค้า':'product'}}</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('production')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/b2b/icon/box.png')}}">
                        <span>Production</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('bankaccountcontent')}}" class=" waves-effect">
                         <img src="{{asset('assets/images/b2b/icon/bankbook.png')}}">
                        <span>การจัดการชำระเงินออนไลน์(การโอนเงิน)</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('reportcontent')}}" class=" waves-effect">
                         <img src="{{asset('assets/images/b2b/icon/seo-report.png')}}">
                        <span>{{Session::get('lang')=='th'?'รายงาน':'Report'}}</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->