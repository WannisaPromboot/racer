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
                @if(Session::get('admin_status') == 1 || Session::get('admin_status') == 2)
                <li>
                    <a href="{{url('home')}}"  class="waves-effect">
                        <img src="{{asset('assets/images/racer/icon/home-run.png')}}">
                        <span>หน้าแรก</span>
                    </a> 
                </li>
                @endif
                @if(Session::get('admin_status') == 1 )
                <li>
                    <a href="{{url('usercontent')}}" class="waves-effect">
                        <img src="{{asset('assets/images/racer/icon/contact-us.png')}}">
                        <span>การจัดการสิทธิ์และบทบาท</span>
                    </a> 
                </li>
                @endif
               
                @if(Session::get('admin_status') == 1 )
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/racer/icon/grid.png')}}">
                        <span>การจัดการ Banner & Slide</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('pagecontent')}}">Banner หลัก</a></li>
                        <li><a href="{{url('subbanner')}}">Banner ย่อย</a></li>
                    </ul> 
                </li>
               
                <li>
                    <a href="{{url('blogcontent')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/news.png')}}">
                        <span>การจัดการบทความ</span>
                    </a>
                </li>
              
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/racer/icon/grid.png')}}">
                        <span>ข่าวสารและโปรโมชั่น</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('newcontent')}}">ข่าวสาร</a></li>
                        <li><a href="{{url('promotioncontent')}}">โปรโมชั่น</a></li>
                    </ul> 
                </li>
                @endif
                @if(Session::get('admin_status') == 1 )
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
                @endif
                @if(Session::get('admin_status') == 1 || Session::get('admin_status') == 2)
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
                    <a href="{{url('report-content')}}" class=" waves-effect">
                        <img src="{{asset('assets/images/racer/icon/seo-report.png')}}">
                        <span>รายงาน</span>
                    </a>
                </li>
                @endif
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/racer/icon/seo-report.png')}}">
                        <span>รายงาน</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('report/1')}}">รายงานสินค้าขายดี</a></li>
                        <li><a href="{{url('report/2')}}">รายงานยอดขายรายวัน</a></li>
                        <li><a href="{{url('report/3')}}">รายงานจำนวนผู้เข้าชมสินค้าสูงสุด</a></li>
                        <li><a href="{{url('report/4')}}">สมาชิกที่มียอดซื้อมากที่สุด</a></li>
                        <li><a href="{{url('report/5')}}">รายงานสมาชิกสมัครใหม่รายวัน</a></li>
                        <li><a href="{{url('report/6')}}">รายงานสินค้าคงที่</a></li>
                        <li><a href="{{url('report/7')}}">รายงานหน้าที่ผู้ชมนิยม</a></li>
                        <li><a href="{{url('report/8')}}">รายงานจำนวนผู้เข้าชมรายวัน</a></li>
                        <li><a href="{{url('report/9')}}">รายงานอุปกรณ์และ Browser ที่เปิดเข้ามา</a></li>
                        <li><a href="{{url('report/10')}}">รายงานรายประเทศ</a></li>
                        <li><a href="{{url('report/11')}}">รายงานเดือนเกิดสมาชิก</a></li>
                        <li><a href="{{url('report/12')}}">รายงานสมาชิกค้างโอน</a></li>
                        <li><a href="{{url('report/13')}}">รายงานสมาชิกขาดการเข้าระบบ</a></li>
                        <li><a href="{{url('report/14')}}">รายงานสมาชิกเข้าระบบสูงสุด</a></li>
                        <li><a href="{{url('report/16')}}">รายงานประเภทการชำระเงิน</a></li>
                        <li><a href="{{url('report/17')}}">รายงานช่วงเวลาที่มีผู้ชมเข้ามากสุด</a></li>
                        <li><a href="{{url('report/18')}}">การจดจำ ID ผู้เข้าชม Website (Cookie)</a></li>
                        <li><a href="{{url('report/19')}}">สินค้าที่ลูกค้าซื้อแบ่งตามเพศ อายุ</a></li>
                        <li><a href="{{url('report/20')}}">แหล่งที่มาจากลิงค์ที่เข้ามาใน Website</a></li>
                        <li><a href="{{url('report/21')}}">รายงานกลุ่มอายุของผู้เข้าชม Website</a></li>
                        <li><a href="{{url('report/22')}}">รายงานสินค้าที่ลูกค้าเข้าชมแบ่งตามเพศและอายุ</a></li>
                    </ul> 
                </li> --}}
               
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->