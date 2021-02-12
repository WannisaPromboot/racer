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
                {{-- <li>
                    <a href="javascript:void(0)" class=" waves-effect">
                         <img src="{{asset('assets/images/racer/icon/bankbook.png')}}">
                        <span>การจัดการชำระเงินออนไลน์(การโอนเงิน)</span>
                    </a>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{asset('assets/images/racer/icon/seo-report.png')}}">
                        <span>รายงาน</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('')}}">รายงานสินค้าขายดี</a></li>
                        <li><a href="{{url('')}}">รายงานยอดขายรายวัน</a></li>
                        <li><a href="{{url('')}}">รายงานจำนวนผู้เข้าชมสินค้าสูงสุด</a></li>
                        <li><a href="{{url('')}}">สมาชิกที่มียอดซื้อมากที่สุด</a></li>
                        <li><a href="{{url('')}}">รายงานสมาชิกสมัครใหม่รายวัน</a></li>
                        <li><a href="{{url('')}}">รายงานสินค้าคงที่</a></li>
                        <li><a href="{{url('')}}">รายงานหน้าที่ผู้ชมนิยม</a></li>
                        <li><a href="{{url('')}}">รายงานจำนวนผู้เข้าชมรายวัน</a></li>
                        <li><a href="{{url('')}}">รายงานอุปกรณ์และ Browser ที่เปิดเข้ามา</a></li>
                        <li><a href="{{url('')}}">รายงานรายประเทศ</a></li>
                        <li><a href="{{url('')}}">รายงานเดือนเกิดสมาชิก</a></li>
                        <li><a href="{{url('')}}">รายงานสมาชิกค้างโอน</a></li>
                        <li><a href="{{url('')}}">รายงานสมาชิกขาดการเข้าระบบ</a></li>
                        <li><a href="{{url('')}}">รายงานสมาชิกเข้าระบบสูงสุด</a></li>
                        <li><a href="{{url('')}}">รายงานจำนวนผู้เข้าชมสินค้าสูงสุด</a></li>
                        <li><a href="{{url('')}}">รายงานประเภทการชำระเงิน</a></li>
                        <li><a href="{{url('')}}">รายงานช่วงเวลาที่มีผู้ชมเข้ามากสุด</a></li>
                        <li><a href="{{url('')}}">การจดจำ ID ผู้เข้าชม Website (Cookie)</a></li>
                        <li><a href="{{url('')}}">สินค้าที่ลูกค้าซื้อแบ่งตามเพศ อายุ</a></li>
                        <li><a href="{{url('')}}">แหล่งที่มาจากลิงค์ที่เข้ามาใน Website</a></li>
                        <li><a href="{{url('')}}">รายงานกลุ่มอายุของผู้เข้าชม Website</a></li>
                        <li><a href="{{url('')}}">รายงาน สินค้าที่ลูกค้าเข้าชม แบ่งตามเพศและอายุ</a></li>
                    </ul> 
                </li>
               
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->