<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Racer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  </head>

  <style>
  /* ----banner-slider---------- */
  .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 650px;
    height: calc(50vh - 180px) !important;
    min-height: 560px;
}
.owl-carousel.home-slider .slider-item {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    /* height: 650px; */
    height: auto;
    position: relative;
    z-index: 0;
}
.owl-carousel.home-slider .owl-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: -20px;
    width: 100%;
    text-align: center;
}

    /* --------------- */
	.img-logo {
	  width: 60%;
}
.site-section {
    padding: 3rem 0;
}
.site-section {
    padding: 100px 0px 45px 0px;
}
.pro-img {
    width: 100%;
    height: 330px;
    object-fit: cover;
}
.pro-img2 {
	width: 100%;
    /* height: 225px; */
    object-fit: cover;
    margin-bottom: 20px;
}
.pro-img3 {
    width: 100%;
    /* height: 460px; */
	object-fit: cover;
	margin-bottom: 10px;
}
.title-num{
	font-size: 40px;
	color: #00b9e9;
	font-family: 'Prompt', sans-serif;
	font-weight: 600;
}
.pro-title{
	font-size: 20px;
	color: #00b9e9;
	font-family: 'Prompt', sans-serif;
	font-weight: 400;
}
.popular{
	font-size: 18px;
	color:#777;
	font-family: 'Prompt', sans-serif;
	font-weight: 400;
}
.next-pro{
	font-size: 16px;
	color:#777;
	font-family: 'Prompt', sans-serif;
}
.pro-index{
	margin: 0px 0px;
}
#box{
	background-color: #fff;
    padding: 10px 20px 10px 20px;
	margin-top: 20px;
	width: 100%;
    margin-left: 15px;
    margin-right: 15px;
}
#margin-pro{
	margin: 0px 10px;
}
#pro-mar{
    /* margin-left: -30px;
	margin-right: -30px; */
	padding-left: 5px;
    padding-right: 5px;

}
.line-index{
	border-top: 1px solid #00b9e9;
	margin-top: 0rem;
    margin-bottom: 20px;
}
a:hover, a:focus {
    text-decoration: none;
    color: #00b9e9;
}
#box2 {
    background-color: #fff;
    padding: 40px 0px 40px 0px;
    margin-top: 20px;
    width: 100%;
    /* margin-left: 15px; */
    /* margin-right: 15px; */
    margin-bottom: -50px;
}
.pro-img4{
	width: 100%;
    margin-top: 25px;
}
.owl-carousel.home-slider .owl-dots {
    display: block;
}


@media (max-width: 1300px){
	#margin-pro {
    margin: 0px 7px;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 650px;
    height: calc(50vh - 180px) !important;
    min-height: 425px;
}
.owl-carousel.home-slider {
    position: relative;
    /* height: 650px; */
    height: 365px;
    z-index: 0;
}

}

@media (max-width: 768px){
	.pro-img3 {
    width: 100%;
    /* height: 270px; */
    object-fit: cover;
    margin-bottom: 10px;
}
.pro-img2 {
    width: 100%;
    /* height: 130px; */
    object-fit: cover;
    margin-bottom: 20px;
}
#margin-pro {
    margin: 0px 3px;
}
.next-pro {
    font-size: 12px;
}
.popular {
    font-size: 14px;
}
.pro-title {
    font-size: 18px;
}
.title-num {
    font-size: 28px;
}
.pro-img {
    width: 100%;
    height: 205px;
    object-fit: cover;
}
.owl-carousel.home-slider .slider-item {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    /* height: 650px; */
    height: 290px;
    position: relative;
    z-index: 0;
}
.owl-carousel.home-slider {
    position: relative;
    /* height: 650px; */
    height: 290px;
    z-index: 0;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 650px;
    height: calc(50vh - 180px) !important;
    min-height: 290px;
}
.owl-carousel.home-slider .owl-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    width: 100%;
    text-align: center;
}
.site-section {
    padding: 40px 0px 45px 0px;
}

}

@media (max-width: 525px){
	.pro-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    margin-bottom: 10px;
}
.owl-carousel.home-slider .slider-item {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    /* height: 650px; */
    height: 165px;
    position: relative;
    z-index: 0;
}
.owl-carousel.home-slider {
    position: relative;
    /* height: 650px; */
    height: 165px;
    z-index: 0;
}
.pro-img2 {
    width: 100%;
    /* height: 280px; */
    object-fit: cover;
    margin-bottom: 10px;
}
#con-pro{
	padding-left: 0px;
	padding-right: 0px;
}
#pro-mar {
    padding-right: 15px;
    padding-left: 15px;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 650px;
    height: calc(50vh - 200px) !important;
    min-height: 140px;
}
.site-section {
    padding: 30px 0px 45px 0px;
}

}

@media (max-width: 375px){
	.pro-img2 {
    width: 100%;
    /* height: 230px; */
    object-fit: cover;
    margin-bottom: 10px;
}
.pro-img3 {
    width: 100%;
    /* height: 238px; */
    object-fit: cover;
    margin-bottom: 10px;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 650px;
    height: calc(50vh - 180px) !important;
    min-height: 150px;
}


}



/* --------dropdown-product---------------- */
.dropdown2 {
  position: relative;
  display: inline-block;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.dropdown-content a {
  color: #777;
  padding: 6px 2px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
	color: #00b9e9;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

  <body class="goto-here">
	<div class="py-1 bg-primary">
	<div class="container">
		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
			<div class="col-lg-12 d-block">
				<div class="row d-flex">

					<div class="col-md-8 pr-4 d-flex topper align-items-center">
						<div class="icon mr-2 d-flex justify-content-center align-items-center">
							<span class="icon-phone2" style="color:#00b9e9"></span>
						<span class="text"> : xx xxx xxxx</span></div>
						<div class="icon mr-2 d-flex justify-content-center align-items-center">
							<span class="icon icon-envelope" style="color:#00b9e9"></span>
						<span class="text"> : Racer.co.th</span></div>
						<div class="icon mr-2 d-flex justify-content-center align-items-center">
							<i class="fa fa-clock-o" style="color:#00b9e9" aria-hidden="true"></i>
						<span class="text"> : วันจันทร์ - วันเสาร์ : 08.00น. - 19.00น.</span></div>
					</div>
					<div class="col-md-4">
						<div class="icon mr-2 d-flex justify-content-center" id="social">
                            <a href="https://line.me/ti/p/~@racerlighting" style="color: white;"><i class="fab fa-line"></i></a>
                        </div>
						<div class="icon mr-2 d-flex justify-content-center" id="social">
							<a href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><span class="icon-facebook"></span></a>
						</div>
						<div class="icon mr-2 d-flex justify-content-center" id="social">
							<a href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><span class="icon-instagram"></span></a>
					   </div>

					</div>

				</div>
			</div>
		</div>
	  </div>
</div>
{{-- start nav --}}
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
        
		<a class="navbar-brand" href="{{url('/')}}"><img class="img-logo" src="{{asset('frontend/images/logo-menu.png')}}"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

	  	<div class="collapse navbar-collapse" id="ftco-nav">

			<div class="col-md-8">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">หน้าหลัก <span class="menu-span-col">|</span> </a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สินค้า</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<?php $menu = \App\Category::orderby('sort')->get(); ?>
								@foreach ($menu as $_menu)
									<a class="dropdown-item" href="{{url('product/'.$_menu->category_name_th.'')}}">{{strtoupper($_menu->category_name_th)}}</a>
								@endforeach
						</div>
					</li>
					<li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link"><span class="menu-span-col">|</span> เกี่ยวกับเรา</a></li>
					<!-- <li class="nav-item"><a href="news.html" class="nav-link">ข่าวสารและโปรโมชั่น</a></li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu-span-col">|</span> ข่าวสารและโปรโมชั่น</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="{{url('/news')}}">ข่าวสาร</a>
							<a class="dropdown-item" href="{{url('/promotion')}}">โปรโมชั่น</a>
						</div>
					</li>
					<li class="nav-item"><a href="{{url('/article')}}" class="nav-link"><span class="menu-span-col">|</span> บทความ</a></li>
					<li class="nav-item"><a href="{{url('/contact')}}" class="nav-link"><span class="menu-span-col">|</span> ติดต่อเรา</a></li>
				</ul>
			</div>
			<div class="col-md-4" id="pay-nemu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>{{!empty(Session::get('product')) ? '['.count(Session::get('product')).']' : ''}}<span class="menu-span-col">|</span> </a></li>
					@if(empty(Session::get('customer_id')))
						<li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">ลงชื่อเข้าใช้</a></li>
					@else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('username')}}</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a class="dropdown-item" href="{{url('/order-history')}}">ประวัติการซื้อ</a>
								<a class="dropdown-item" href="{{url('/logout')}}">ลงชื่อออก </a>
							</div>
						</li>
					@endif
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu-span-col">|</span> ภาษา</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="#TH"><img src="{{asset('frontend/images/en.jpg')}}"> TH</a>
							<a class="dropdown-item" href="#EN"><img src="{{asset('frontend/images/en.jpg')}}"> EN</a>
						</div>
					</li>
				</ul>
			</div>


	  	</div>
	</div>
</nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		<div class="home-slider owl-carousel">

			@foreach($data as $datas)
				{{-- @if(!empty($datas->slide_image)) --}}
				<div class="slider-item">
					<img src="{{url('storage/app/'.$datas->slide_image)}}"  style="width: 100%; height:auto;">
				{{-- @else --}}
				{{-- <iframe class="slider-item" src="{{$datas->slide_video}}?loop=1&controls=0" style="width: 100%; height:400px;" ></iframe> --}}
				{{-- <div class="slider-item" style="background-image: url({{url('storage/app/'.$datas->slide_image)}});"> --}}
				{{-- @endif --}}
					<div class="overlay"></div>
						<div class="container">
							<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					
							</div>
						</div>
				</div>
				
			@endforeach

		</div>

    </section>

	<div class="section-back" >

		<div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-about.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">

		<div class="container">
			<div class="row">
			   
				<div class="col-md-6" id="">
					{{-- <a href="{{url('/detail-article.')}}"><img class="pro-img" src="{{asset('frontend/images/promotion01.jpg')}}"></a> --}}
					<img class="pro-img" src="{{asset('frontend/images/S__2646148.jpg')}}">
				</div>
				<div class="col-md-6" id="">
					{{-- <a href="{{url('/detail-article.')}}"><img class="pro-img" src="{{asset('frontend/images/promotion02.jpg')}}"></a>                         --}}
					<img class="pro-img" src="{{asset('frontend/images/S__2646161.jpg')}}">
				</div>
			</div>
        </div>
        <?php  $i = '01'; ?>
        @foreach ($cate as $_cate)
        <?php $product = \App\Product::where('id_category',$_cate->id_category)->get();
                $banner = \App\Banner::where('category_id',$_cate->id_category)->orderBy('banner_number','ASC')->get();
              $subcate = \App\SubCategory::where('id_category',$_cate->id_category)->limit(4)->get();
              $count_sub = count(\App\SubCategory::where('id_category',$_cate->id_category)->get());
              $count = $count_sub - 4;
              if( $count > 0){
                $other_subcate = \App\SubCategory::where('id_category',$_cate->id_category)->skip(4)->take($count)->get();
              }
         ?>
        @if(count($product) > 0)
        <div class="container">
            <div class="row">
               <div id="box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" >
                                {{-- <p class="pro-index"><span class="title-num" id="margin-pro">{{$i}}</span> <span class="pro-title" id="margin-pro">{{$_cate->category_name_th}}</span>
                                    <span class="popular" id="margin-pro"> #Popular searches</span>
                                    @foreach ($subcate as $_subcate)
                                        <a href="#" class="next-pro" id="margin-pro"> {{$_subcate->subcategory_name_th}}</a>
                                    @endforeach
                                </p> --}}
                                <span class="dropdown2">
                                    <span class="title-num" id="margin-pro">{{$i}}</span> 
                                    <span class="pro-title" id="margin-pro">{{strtoupper ($_cate->category_name_th)}}</span>
                                    <span class="popular" id="margin-pro"> #Popular</span>
                                    @foreach ($subcate as $_subcate)
                                    <a href="{{url('product/'.$_cate->category_name_th.'/'.$_subcate->subcategory_name_th.'')}}" class="next-pro" id="margin-pro"> {{ucwords($_subcate->subcategory_name_th)}}</a>
                                    @endforeach
                                    @if($count > 0)
                                    <span class="dropdown">
                                        <span class="next-pro" id="margin-pro">All Product</span>
                                        <div class="dropdown-content">
                                                @foreach ($other_subcate as $_other)
                                                <a href="{{url('product/'.$_cate->category_name_t.'/'.$_other->subcategory_name_th.'')}}"> {{ucwords($_other->subcategory_name_th)}}</a>
                                                @endforeach
                                        </div>
                                    </span>
                                    @endif
                                </span>
                                <hr class="line-index">
                            </div>

                        </div>
                    </div>
                    <div class="container" >
                        <div class="row">
                            <div class="col-md-6" id="pro-mar">
                                <a href="{{url(''.$banner[0]->banner_link.'')}}"><img class="pro-img3" src="{{url('storage/app/'.$banner[0]->banner_image)}}"></a>
                            </div>
                            <div class="col-md-6" id="pro-mar">
                                
                                <div class="container" id="con-pro">
                                    <div class="row" >
                                        <div class="col-md-6" id="pro-mar">
                                            <a href="{{url(''.$banner[1]->banner_link.'')}}"><img class="pro-img2" src="{{url('storage/app/'.$banner[1]->banner_image)}}"></a>
                                        </div>
                                        <div class="col-md-6" id="pro-mar">
                                            <a href="{{url(''.$banner[2]->banner_link.'')}}"><img class="pro-img2" src="{{url('storage/app/'.$banner[2]->banner_image)}}"></a>
                                        </div>
                                        <div class="col-md-6" id="pro-mar">
                                            <a href="{{url(''.$banner[3]->banner_link.'')}}"><img class="pro-img2" src="{{url('storage/app/'.$banner[3]->banner_image)}}"></a>
                                        </div>
                                        <div class="col-md-6" id="pro-mar">
                                            <a href="{{url(''.$banner[4]->banner_link.'')}}"><img class="pro-img2" src="{{url('storage/app/'.$banner[4]->banner_image)}}"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i = str_pad($i + 1, 2, 0, STR_PAD_LEFT); ?>
        @endif
        @endforeach
       <div id="box2">
			<div class="container">
				<div class="row">

					<div class="col-md-12" >
                        <a href="{{url('promotion')}}"><img class="pro-img2" src="{{asset('frontend/images/product01.jpg')}}"></a>
					</div>

				</div>
			</div>

			<div class="container">
				<div class="row">

					<div class="col-md-12" >
						<center><img class="pro-img4" src="{{asset('frontend/images/icon.JPG')}}"></center>
					</div>
				

				</div>
			</div>

		</div>
		




	</div>

	</div>






	    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<!-- <div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div> -->
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <!-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>

      </div>
    </footer>
    <footer class="ftco-footer2 ftco-section2">
        <div class="container">
            <div class="row">
          <div class="col-md-12 text-center">

            <p class="copyright-text">
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
						 
						</p>
          </div>
        </div>
        </div>
        </footer>


  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
  <script src="{{asset('frontend/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{asset('frontend/js/google-map.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
    
  </body>
</html>