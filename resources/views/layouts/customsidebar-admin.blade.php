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
                        <img src="{{asset('assets/images/racer/icon/home-run.png')}}">
                        <span>หน้าแรก</span>
                    </a> 
                </li>
                <li>
                    <a href="javascript:void(0)" class="waves-effect">
                        <img src="{{asset('assets/images/racer/icon/contact-us.png')}}">
                        <span>การจัดการสิทธิ์และบทบาท</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('pagecontent')}}" class="waves-effect">
                        <img src="{{asset('assets/images/racer/icon/news.png')}}">
                        <span>การจัดการ Banner & Slide</span>
                    </a> 
                </li>
               
                <li>
                    <a href="{{url('blogcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/blogging.png')}}">
                        <span>การจัดการบทความ</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/racer/icon/news.png')}}">
                        <span>ข่าวสารและโปรโมชั่น</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('newcontent')}}">ข่าวสาร</a></li>
                        <li><a href="{{url('promotioncontent')}}">โปรโมชั่น</a></li>
                    </ul> 
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/racer/icon/grid.png')}}">
                        <span>การจัดการหมวดหมู่</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('bannercontent')}}">แบนเนอร์หมวดหมูู่</a></li>
                        <li><a href="{{url('categorycontent')}}">เมนูหลัก</a></li>
                        <li><a href="{{url('subcategorycontent')}}">หมวดหมู่ย่อย 1</a></li>
                    </ul> 
                </li>
                <li>
                    <a href="{{url('productcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/lightbulb.png')}}">
                        <span>สินค้า</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('ordercontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/box.png')}}">
                        <span>คำสั่งซื้อสินค้า</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('reviewcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/rating.png')}}">
                        <span>รีวิวสินค้า</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('populatproductcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/best-seller.png')}}">
                        <span>สินค้ายอดนิยม</span>
                    </a> 
                </li>
                <li>
                    <a href="{{url('promotionproductcontent')}}" class=" waves-effect">
                         <img src="{{asset('assets/images/racer/icon/bankbook.png')}}">
                        <span>การจัดการโปรโมชั่น</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class=" waves-effect">
                         <img src="{{asset('assets/images/racer/icon/seo-report.png')}}">
                        <span>รายงาน</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->