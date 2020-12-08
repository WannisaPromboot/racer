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

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <style>
      .img-logo {
        width: 60%;
}


.owl-carousel.home-slider {
    position: relative;
    /* height: 650px; */
    height: auto;
    z-index: 0;
}
.owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    background: #D6D6D6;
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity .2s ease;
    border-radius: 30px;
    display: none;
}
.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 0px;
}


.video-size{
width: 100%;
height: 390px
}


#pro-top{
    margin-top: 40px;
}
.pro-img{
 width: 100%;
    }
    .pro-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}
    .btn-link:hover {
    color: #b36100;
    text-decoration: none;
}


.panel .panel-title{
    margin-bottom: 0px !important;
}
.panel-group {
    margin-bottom: 0;
    margin-top: 30px;
}
.panel-group .panel {
    border-radius: 0;
    box-shadow: none;
}
.panel-group .panel .panel-heading {
    padding: 0;
}
.panel-group .panel .panel-heading h4 a {
    background: #fff;
    display: block;
    font-size: 15px;
    line-height: 20px;
    padding: 15px;
    text-decoration: none;
    transition: 0.15s all ease-in-out;
    border-bottom: 1px solid #ddd;
    color: #00b9e9;
    font-family:'Prompt', sans-serif;
}
.panel-group .panel .panel-heading h4 a:hover, .panel-group .panel .panel-heading h4 a:not(.collapsed) {
    /*background: #fff;*/
    transition: 0.15s all ease-in-out;
}
.panel-group .panel .panel-heading h4 a:not(.collapsed) i:before {
    content: "-";
    font-size: 30px;
    line-height: 10px;
}
.panel-group .panel .panel-heading h4 a i {
    color: #00b9e9;
    font-size: 12px;
}
.panel-group .panel .panel-body {
    padding-top: 0;
}
.panel-group .panel .panel-heading + .panel-collapse > .list-group,
.panel-group .panel .panel-heading + .panel-collapse > .panel-body {
    border-top: none;
}
.panel-group .panel + .panel {
    border-top: none;
    margin-top: 0;
}

  /* ------------------------------ */
  .faq-nav {
    flex-direction: column;
    margin: 0 0 0px;
    border-radius: 2px;
    /* border: 1px solid #ddd;
    box-shadow: 0 1px 5px rgba(85, 85, 85, 0.15); */
    margin-top: 0px;
}
a, a:hover, a:visited, a:active, a:link {
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
.faq-nav .nav-link {
    position: relative;
    display: block;
    margin: 0;
    padding: 13px 16px;
    background-color: #fff;
    border: 0;
    border-bottom: 1px solid #ddd;
    border-radius: 0;
    color: #777;
    font-family: 'Prompt', sans-serif;
    transition: background-color .2s ease;
}
.faq-nav .nav-link.active {
    background-color: #fff;
    color: #777;
    font-family: 'Prompt', sans-serif;
}
.faq-nav .nav-link i.mdi {
    margin-right: 5px;
    font-size: 18px;
    position: relative;

}
div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.tab-content {
    box-shadow: 0 1px 5px rgba(85, 85, 85, 0.15);
    margin-top: 30px;
    margin-bottom: 30px;
}
.tab-content>.active {
    display: block;
}
.tab-content .card {
    border-radius: 0;
}
.tab-content .card-header {
    padding: 15px 16px;
    border-radius: 0;
    /* background-color: #5db2ff; */
    background-color: #fff;
    border-bottom: 1px solid #00b9e9;
}
.tab-content .card-header h5 {
    margin: 0;
}
.tab-content .card-header h5 button {
    display: block;
    width: 100%;
    padding: 0;
    border: 0;
    font-weight: 700;
    /* color: #fff; */
    color: #00b9e9;
    text-align: left;
    white-space: normal;
}
.collapse.show .card-body {
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.tab-content .card-body p {
    color: #616161;
}
.section-back {
    background-color: #f7f7f7!important;
}


/*---------------detail-product--------------- */
.container2 {
    position: relative;
}
.mySlides {
    display: none;
}
img {
    vertical-align: middle;
}
.caption-container {
    text-align: center;
    background-color: #2220;
    padding: 0px 0px;
    color: white;
}
.column {
    float: left;
    width: 32.5%;
    padding-left: 15px;
    margin-bottom: 10px;
}
.cursor {
    cursor: pointer;
}
.demo {
    opacity: 0.6;
    width: 100%;
    height: 140px;
    object-fit: cover;
}
.active, .demo:hover {
    opacity: 1;
}
.active, .demo:hover {
    opacity: 1;
}
.title-pro {
    color: #222;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 0px;
    font-family: 'Prompt', sans-serif;
}
.sub-pro {
    color: #222;
    margin-bottom: 0px;
    font-family: 'Prompt', sans-serif;
}
.price {
    color: #00bfee;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 0px;
    font-family: 'Prompt', sans-serif;
}
.price-span{
  color: #777;
    font-size: 16px;
    font-family: 'Prompt', sans-serif;
    text-decoration: line-through;
}
.price-sale{
  color: #fff;
    font-size: 11px;
    font-family: 'Prompt', sans-serif;
    background-color: #ef0c0c;
    font-weight: lighter;
    padding: 0px 5px;
    border-radius: 5px;
}
.text-detial {
    font-size: 20px;
    color: #000;
    margin-bottom: 0px;
    font-family: 'Prompt', sans-serif;
}
.sub-detial {
    font-size: 16px;
    color: #777;
    margin-bottom: 15px;
    font-family: 'Prompt', sans-serif;
}
.sub-detial2 {
    font-size: 16px;
    color: #777;
    margin-bottom: 10px;
    font-family: 'Prompt', sans-serif;
}
.button {
    /* background: #777;
    border: 1px solid #777;
    color: #fff;
    font-size: 16px;
    width: 100%;
    padding: 2% 39% 2% 39%;
    text-align: center;
    width: max-content; */
    background: #00c4ef;
    border: 1px solid #00c4ef;
    /* color: #777; */
    color: #fff;
    font-size: 16px;
    padding: 2% 39% 2% 39%;
    width: inherit;
    text-align: center;
    max-width: 100%;
    border-radius: 5px;

}
.button:hover {
    /* background: #00b3f400;
    border: 1px solid #777;
    color: #777;
    font-size: 16px;
    padding: 2% 39% 2% 39%;
    width: 100%;
    text-align: center;
    max-width: 100%; */
    background: #00b3f400;
    border: 1px solid #00c7ef;
    color: #00c7ef;
    font-size: 16px;
    /* padding: 2% 39% 2% 39%; */
    width: inherit;
    text-align: center;
    max-width: 100%;
}
a, a:hover, a:visited, a:active, a:link {
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
.pro-img{
    width: 100%;
    height: 440px;
    object-fit: cover;
}
.line-height{
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid #222;
}
.button a{
    color:#fff;
}
a:hover {
    color: #fff !important;
}
#back-col{
    /* background-color: #c5c5c5; */
    background-color: #77777717;
    margin-bottom: 0px;
    padding: 20px 20px 20px 20px;
    margin-top: 30px;
}
.site-section {
    padding: 3rem 0;
   
}
/* ------------------------- */

@media (max-width: 1300px){
    .line-height {
    margin-top: 1rem;
    margin-bottom: 4px;
    border: 0;
    border-top: 1px solid #222;
}
.sub-detial {
    font-size: 15px;
    color: #777;
    margin-bottom: 3px;
    font-family: 'Prompt', sans-serif;
}
.sub-detial2 {
    font-size: 15px;
    color: #777;
    margin-bottom: 5px;
    font-family: 'Prompt', sans-serif;
}
.text-detial {
    font-size: 20px;
    color: #000;
    margin-bottom: 0px;
    font-family: 'Prompt', sans-serif;
}
.button {
    background: #00c4ef;
    border: 1px solid #00c4ef;
    /* color: #777; */
    color: #fff;
    font-size: 16px;
    padding: 8px 0px;
    width: inherit;
    text-align: center;
    max-width: 100%;
    border-radius: 5px;
}

}

@media (max-width: 768px){
#col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.video-size{
width: 100%;
height: 252px;
}


}

@media (max-width: 525px){
.pro-img {
    width: 100%;
    height: 390px;
    object-fit: cover;
}
.demo {
    opacity: 0.6;
    width: 100%;
    height: 115px;
    object-fit: cover;
}
.video-size {
    width: 100%;
    height: 222px;
}
}
@media (max-width: 375px){
    .pro-img {
    width: 100%;
    height: 297px;
    object-fit: cover;
}
.demo {
    opacity: 0.6;
    width: 100%;
    height: 95px;
    object-fit: cover;
}
.video-size{
width: 100%;
height: 165px;
}

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
								<a href="#" style="color: #00b9e9;"><span class="icon-twitter"></span></a>
							</div>
							<div class="icon mr-2 d-flex justify-content-center" id="social">
								<a href="#" style="color: #00b9e9;"><span class="icon-facebook"></span></a>
							</div>
							<div class="icon mr-2 d-flex justify-content-center" id="social">
								<a href="#" style="color: #00b9e9;"><span class="icon-instagram"></span></a>
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
		  <li class="nav-item "><a href="{{url('/')}}" class="nav-link">หน้าหลัก <span class="menu-span-col">|</span> </a></li>
		  <li class="nav-item dropdown active">
		  <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สินค้า</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown04">
            <?php $menu = \App\Category::orderby('sort')->get(); ?>
                @foreach ($menu as $_menu)
                    <a class="dropdown-item" href="{{url('product/'.$_menu->id_category.'')}}">{{$_menu->category_name_th}}</a>
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
		  <li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">ลงชื่อเข้าใช้</a></li>
		  <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>[1]</a></li>
		  <li class="nav-item"><a href="#" class="nav-link"><img src="{{asset('frontend/images/en.jpg')}}"></a></li>
		</ul>
	</div>


	  </div>
	</div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('frontend/images/banner-detail.jpg')}}">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">รายละเอียดสินค้า</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>รายละเอียดสินค้า</span></p>
          </div>
        </div>
      </div>
    </div>

        
        <div class="section-back">

        <div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-about02.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-6" id="col-md-6">

                        <div class="container2">

                            @foreach ($imgs as $img)
                            <div class="mySlides" style="display: block;">
                                <img class="pro-img" src="{{url('storage/app/'.$img->filepath.'')}}" style="width:100%">
                            </div>
                            @endforeach
                         
{{--   
                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro03.jpg')}}" style="width:100%">
                          </div>
  
                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro04.jpg')}}" style="width:100%">
                          </div>

                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro05.jpg')}}" style="width:100%">
                          </div>
  
                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro06.jpg')}}" style="width:100%">
                          </div>

                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro07.jpg')}}" style="width:100%">
                          </div>

                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro08.jpg')}}" style="width:100%">
                          </div>
  
                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro09.jpg')}}" style="width:100%">
                          </div>

                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro10.jpg')}}" style="width:100%">
                          </div>

                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro11.jpg')}}" style="width:100%">
                          </div>
  
                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro12.jpg')}}" style="width:100%">
                          </div>

                          <div class="mySlides" style="display: none;">
                            <img class="pro-img" src="{{asset('frontend/images/pro07.jpg')}}" style="width:100%">
                          </div> --}}
  
  
                          <div class="caption-container">
                            <p id="caption"></p>
                          </div>
  
                        <div class="owl-carousel owl-theme">
                          <div class="row">
                              @if(!empty($imgs[0]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[0]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                              @endif
                              @if(!empty($imgs[1]))
                              <div class="column">
                                  <img class="demo cursor active" src="{{url('storage/app/'.$imgs[1]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                              </div>
                              @endif
                              @if(!empty($imgs[2]))
                              <div class="column">
                                  <img class="demo cursor active" src="{{url('storage/app/'.$imgs[2]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                              </div>
                              @endif
                          </div>
                          @if(!empty($imgs[3]))
                          <div class="row">
                                @if(!empty($imgs[3]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[3]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                                @if(!empty($imgs[4]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[4]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                                @if(!empty($imgs[5]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[5]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                          </div>
                          @endif
                          @if(!empty($imgs[6]))
                          <div class="row">
                                @if(!empty($imgs[6]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[6]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                                @if(!empty($imgs[7]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[7]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                                @if(!empty($imgs[8]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[8]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                          </div>
                          @endif
                          
                          @if(!empty($imgs[9]))
                          <div class="row">
                                @if(!empty($imgs[9]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[8]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                                @if(!empty($imgs[10]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[8]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                                @if(!empty($imgs[11]))
                                <div class="column">
                                    <img class="demo cursor active" src="{{url('storage/app/'.$imgs[8]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                </div>
                                @endif
                          </div>
                          @endif

                        </div>

                        </div>
  
                      </div>
                      <div class="col-md-6" id="col-md-6">
                                                  <p class="title-pro">{{$item->product_name_th}}</p>
                        <?php $cate = \App\Category::where('id_category',$item->id_category)->first(); ?>
                        <p class="sub-pro">({{$cate->category_name_th}})</p>
                        <hr class="line-height">
                        @if(($item->product_start <= date('Y-m-d') && $item->product_start != NULL ) && ($item->product_end >= date('Y-m-d') && $item->product_end != NULL))
                        <p class="price"> <span class="price-span">฿{{number_format($item->product_normal_price)}}</span> ฿{{number_format($item->product_special_price)}} <span class="price-sale">{{($item->product_special_price/$item->product_normal_price)*100}}% ส่วนลด</span></p>
                        @else 
                        <p class="price">฿{{number_format($item->product_normal_price)}}</p>
                        @endif
                       
                        <p class="text-detial">เกี่ยวกับสินค้า :</p>
                        <p class="sub-detial">{!! $item->product_description_th !!}</p>
                          <p class="text-detial">วิธีใช้ :</p>
                          <p class="sub-detial2">{!! $item->product_method_th !!}</p>
                            <center><a href="{{url('addcart/'.$item->id_product.'')}}"><p class="button">ADD TO CART</p></a></center>
                      </div>
        
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="back-col">
                    <p class="text-detial">dimension :</p>
                    <p class="sub-detial"><b>น้ำหนัก</b> {{$item->product_kg}} kg.<br><b>ขนาด </b>{{$item->product_width}} มม. X {{$item->product_lenght}} มม. X {{$item->product_height}} มม.</p>
                      <p class="text-detial">จุดเด่นของสินค้า :</p>
                        <p class="sub-detial2">{!!$item->product_selling_th!!}</p>
                      <p class="text-detial">คุณสมบัติ :</p>
                    <p class="sub-detial">{!!$item->product_property_th!!}</p>
                      <p class="text-detial">รายละเอียด :</p>
                      <p class="sub-detial2">{!!$item->product_description_th!!}</p>
                      <p class="text-detial">วิธีใช้งาน :</p>
                        <p class="sub-detial">{!!$item->product_method_th!!}</p>
                  
                      
                      <p class="text-detial">การติดตั้ง :</p>
                      <p class="sub-detial">{!!$item->product_installation_th!!}</p>
                    </div>
    
                </div>
            </div>
            <br>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <iframe class="video-size" src="https://www.youtube.com/embed/K3VxV2TTlMo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                    <p class="sub-pro" style="font-weight: 500;">สะดวกยิ่งขึ้นสามารถสั่งซื้อผ่าน ไลน์@ และ Facebook</p>
                    <a href="#"><img src="{{asset('frontend/images/line.png')}}" style="width:70%; margin-bottom: 10px;"></a>
                    <a href="#"><img src="{{asset('frontend/images/facebook.png')}}" style="width:70%;"></a>
                    </div>
                </div>
            </div>

<br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <p class="title-pro" align="center" style="margin-bottom: 10px;">รีวิวจากลูกค้า</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    </div>
                    <div class="col-md-6">
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
                    <center><img src="{{asset('frontend/images/review01.jpg')}}" style="width:90%; margin-bottom: 10px;"></center>
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
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('frontend/js/google-map.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>


  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>

<script>
      var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:false,
    // margin:10,
    autoplay:false,
    // slideBy: 2000,
    // touchDrag: false,
    mouseDrag: true,
    dotsSpeed: 1000,
    autoplaySpeed: 1000,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
          autoplay:false,
            items:1
        },
        600:{
          autoplay:false,
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
    // owl.trigger('play.owl.transition-Duration',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
//     $(document).ready(function(){
        
//         $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1,
//             nav:false
//         },
//         600:{
//             items:1,
//             nav:false
//         },
//         1000:{
//             items:1,
//             nav:false,
//             loop:true
//         }
//     }
// })

//       });
</script>
    
  </body>
</html>