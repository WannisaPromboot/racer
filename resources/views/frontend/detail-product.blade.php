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

     <!-- Sweertalert -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

  </head>

  <style>

   /* ------star---------- */
   .rate {
    float: left; height: 46px; padding: 0 10px; margin-top: -15px;
}
.rate:not(:checked) > input {
    position:absolute;
    /* top:-9999px; */
    display: none;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #ffc700;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
color: #ffc700;
}


    /* -------------- */

/* ---form review */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-family: 'Prompt', sans-serif;
}

input[type=submit] {
  background-color: #41c8f5;
  color: white;
  /* padding: 12px 20px; */
  padding: 5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  /* float: right; */
  float: left;
}

input[type=submit]:hover {
  /* background-color: #45a049; */
  background-color: #45a04900;
    color: #41c8f5;
    border: 1px solid;
}

input[type=button] {
  background-color: #41c8f5;
  color: white;
  /* padding: 12px 20px; */
  padding: 5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  /* float: right; */
  float: left;
}

input[type=button]:hover {
  /* background-color: #45a049; */
  background-color: #45a04900;
    color: #41c8f5;
    border: 1px solid;
}

.box-form{
  border-radius: 5px;
  background-color: #fff;
  padding: 20px 50px;
}

.col-25 {
  float: left;
  /* width: 25%;
  margin-top: 6px; */
  width: 15%;
    margin-top: 6px;
    margin-left: 45px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
    margin-left: 0px;
  }
}


:focus {
    outline: -webkit-focus-ring-color auto 0px;
}

/* ---- */

      .img-logo {
        width: 60%;
}

.checked {
  color: orange;
}
.box-re{
  background-color: #fff;
    padding: 10px 20px;
    margin-bottom: 10px;
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
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    margin-top: -40px;
    margin-bottom: 20px;
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
		  <li class="nav-item "><a href="{{url('/')}}" class="nav-link">หน้าหลัก <span class="menu-span-col">|</span> </a></li>
		  <li class="nav-item dropdown active">
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
		  <li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">ลงชื่อเข้าใช้</a></li>
		  <li class="nav-item cta-colored "><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span><span id="addcart">{{!empty(Session::get('product')) ? '['.count(Session::get('product')).']' : '' }}</span></a></li>
		  <li class="nav-item"><a href="#" class="nav-link"><img src="{{asset('frontend/images/en.jpg')}}"></a></li>
		</ul>
	</div>


	  </div>
	</div>
  </nav>
    <!-- END nav -->
    <?php  ?>
    <?php $cate = \App\Category::where('id_category',$item->id_category)->first(); ?>
    <div class="hero-wrap hero-bread" style="background-image: url({{ !empty($cate->category_img) ? url('storage/app/'.$cate->category_img) : asset('frontend/images/banner-detail.jpg')}}">
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
                            @if(!empty($img->filepath))
                            <div class="mySlides" style="display: block;">
                                <img class="pro-img" src="{{url('storage/app/'.$img->filepath.'')}}" style="width:100%">
                            </div>
                            @else 
                            <div class="mySlides" style="display: block;">
                                <iframe class="pro-img" src="{{$img->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                            </div>
                            @endif
                           
                            @endforeach

                          <div class="caption-container">
                            <p id="caption"></p>
                          </div>
                        <div class="owl-carousel owl-theme">
                          <div class="row">
                                @if(!empty($imgs[0]))
                                    @if(!empty($imgs[0]->filepath) )
                                        <div class="column">
                                            <img class="demo cursor actve" src="{{url('storage/app/'.$imgs[0]->filepath.'')}}" style="width:100%" onclick="currentSlide(1)">
                                        </div>
                                    @else 
                                    <div class="column">
                                            <iframe class="img-fluid" src="{{$imgs[0]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[1]))
                                    @if(!empty($imgs[1]->filepath))
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[1]->filepath.'')}}" style="width:100%" onclick="currentSlide(2)">
                                    </div>
                                    @else 
                                    <div class="column">
                                            <iframe class="img-fluid" src="{{$imgs[1]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[2]))
                                    @if(!empty($imgs[2]->filepath))
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[2]->filepath.'')}}" style="width:100%" onclick="currentSlide(3)">
                                    </div>
                                    @else 
                                    <div class="column">
                                            <iframe class="img-fluid" src="{{$imgs[2]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                          </div>
                          @if(!empty($imgs[3]))
                          <div class="row">
                                @if(!empty($imgs[3]))
                                    @if(!empty($imgs[3]->filepath))
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[3]->filepath.'')}}" style="width:100%" onclick="currentSlide(4)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[3]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[4]))
                                    @if( !empty($imgs[4]->filepath) )
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[4]->filepath.'')}}" style="width:100%" onclick="currentSlide(5)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[4]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[5]))
                                    @if(!empty($imgs[5]))
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[5]->filepath.'')}}" style="width:100%" onclick="currentSlide(6)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[5]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                          </div>
                          @endif
                          @if(!empty($imgs[6]))
                          <div class="row">
                                @if(!empty($imgs[6]))
                                    @if(  !empty($imgs[6]->filepath) )
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[6]->filepath.'')}}" style="width:100%" onclick="currentSlide(7)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[6]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[7]))
                                    @if( !empty($imgs[7]->filepath))
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[7]->filepath.'')}}" style="width:100%" onclick="currentSlide(8)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[7]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[8]))
                                    @if( !empty($imgs[8]->filepath) )
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[8]->filepath.'')}}" style="width:100%" onclick="currentSlide(9)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[8]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                          </div>
                          @endif
                        
                          @if(!empty($imgs[9]))
                          <div class="row">
                                @if(!empty($imgs[0]))
                                    @if( !empty($imgs[9]->filepath) )
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[9]->filepath.'')}}" style="width:100%" onclick="currentSlide(10)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[9]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[10]))
                                    @if(!empty($imgs[10]->filepath) )
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[10]->filepath.'')}}" style="width:100%" onclick="currentSlide(11)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[10]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                                @if(!empty($imgs[11]))
                                    @if(!empty($imgs[11]) && !empty($imgs[11]->filepath))
                                    <div class="column">
                                        <img class="demo cursor " src="{{url('storage/app/'.$imgs[11]->filepath.'')}}" style="width:100%" onclick="currentSlide(12)">
                                    </div>
                                    @else 
                                    <div class="column">
                                        <iframe class="img-fluid" src="{{$imgs[11]->video}}?loop=1&controls=0" allowfullscreen allow="autoplay;"></iframe>  
                                    </div>
                                    @endif
                                @endif
                          </div>
                          @endif

                        </div>

                        </div>
  
                      </div>
                      <div class="col-md-6" id="col-md-6">
                                                  <p class="title-pro">{{$item->product_name_th}}</p>
                        <p class="sub-pro">({{$cate->category_name_th}})</p>
                        <hr class="line-height">
                        @if(($item->product_start <= date('Y-m-d') && $item->product_start != NULL ) && ($item->product_end >= date('Y-m-d') && $item->product_end != NULL))
                        <p class="price"> <span class="price-span">฿{{number_format($item->product_normal_price)}}</span> ฿{{number_format($item->product_special_price)}} <span class="price-sale">{{($item->product_special_price/$item->product_normal_price)*100}}% ส่วนลด</span></p>
                        @else 
                        <p class="price">฿{{number_format($item->product_normal_price)}}</p>
                        @endif
                       
                        <p class="text-detial">ข้อมูลจำเพาะสินค้า :</p>
                        <p class="sub-detial">{!! $item->product_spec_th !!}</p>
                          {{-- <p class="text-detial">วิธีใช้ :</p>
                          <p class="sub-detial2">{!! $item->product_method_th !!}</p> --}}
                          @if($cate->category_name_th == 'project' || $cate->category_name_th == 'cable'  )
                          <center><a href="https://line.me/ti/p/~@racerlighting"><img src="{{asset('frontend/images/line-more.png')}}" width="100%"></a></center>
                          @else 
                          <center><a href="javascript:void(0)" onclick="addcart('{{$item->id_product}}')"><p class="button"><span class="icon-shopping_cart"></span> เพิ่มในตะกร้า</p></a></center>
                           @endif 
                        </div>
        
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="back-col">
                    {{-- <p class="text-detial">dimension :</p>
                    <p class="sub-detial"><b>น้ำหนัก</b> {{$item->product_kg}} kg.<br><b>ขนาด </b>{{$item->product_width}} มม. X {{$item->product_lenght}} มม. X {{$item->product_height}} มม.</p> --}}
                        <p class="text-detial">คุณสมบัติเด่น :</p>
                        <p class="sub-detial2">{!!$item->product_selling_th!!}</p>
                        <p class="text-detial">คุณสมบัติทั่วไป :</p>
                        <p class="sub-detial">{!!$item->product_property_th!!}</p>
                        <p class="text-detial">วิธีใช้งาน :</p>
                        <p class="sub-detial">{!!$item->product_method_th!!}</p>
                        <p class="text-detial">การติดตั้ง :</p>
                        <p class="sub-detial">{!!$item->product_installation_th!!}</p>
                        <p class="text-detial">คำแนะนำ :</p>
                        <p class="sub-detial2">{!!$item->product_direction_th!!}</p>
                        <p class="text-detial">ข้อควรระวัง :</p>
                        <p class="sub-detial2">{!!$item->product_caution_th!!}</p>
                    </div>
    
                </div>
            </div>
            <br>
            @if(!empty($item->product_extra_th ))
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    {!! $item->product_extra_th !!}
                    </div>
                    <div class="col-md-4">
                    <p class="sub-pro" style="font-weight: 500;">สะดวกยิ่งขึ้นสามารถสั่งซื้อผ่าน ไลน์@ และ Facebook</p>
                    <a href="#"><img src="{{asset('frontend/images/line.png')}}" style="width:70%; margin-bottom: 10px;"></a>
                    <a href="#"><img src="{{asset('frontend/images/facebook.png')}}" style="width:70%;"></a>
                    </div>
                </div>
            </div>
            @endif

            <br>

            @if(count($review) > 0)  
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <p class="title-pro" align="center" style="margin-bottom: 10px;">รีวิวจากลูกค้า</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($review as $_review)
                    <div class="col-md-6">
                        <div class="box-re">
                            <?php $user = \App\Customer::where('customer_id',$_review->customer_id)->first(); 
                                $stargray = 5-$_review->score;
                            ?>
                            <p class="sub-detial" style="color: #222;">{{$user->name.'  '.$user->lastname}}</p>
                            <p class="sub-detial">{{$_review->text}}</p>
                            @for ($i =1; $i <= $_review->score ; $i++)
                            <span class="fa fa-star checked"></span>
                            @endfor
                            @for ($i =1; $i <= $stargray ; $i++)
                            <span class="fa fa-star"></span>
                            @endfor
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            {{-- form --}}
            @if(!empty(Session::get('customer_id')))
            <?php  $old = \App\Order::join('product_order_item','product_order.id_order','=','product_order_item.id_order')
                                        ->where('customer_id',Session::get('customer_id'))->where('product_id',$item->id_product)->first();
                  // $review = \App\Review::where('customer_id',Session::get('customer_id'))->where('product_id',$item->id_product)->first(); 
            ?>
            @if(!empty($old) && !empty($review))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="box-form">
                            <form action="{{url('comment')}}" method="post" id="comment">
                                @csrf
                                <input type="hidden" name="product_id"  value="{{$item->id_product}}" required>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname">ชื่อ-สกุล</label>
                                    </div>
                                    <div class="col-75">
                                        <?php $user = \App\Customer::where('customer_id',Session::get('customer_id'))->first(); ?>
                                        <input type="text" id="fname" name="name" placeholder="กรอกชื่อ-สกุล.." autocomplete="off" value="{{!empty($user)? $user->name.' '.$user->lastname :''}}" {{!empty($user)? 'readonly' :''}} >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="subject">แสดงความคิดเห็น</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea id="text" name="text" placeholder="ความคิดเห็น.." style="height:150px"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="subject">ระดับความพอใจ</label>
                                    </div>
                                        <div class="col-75">
                                            <div class="rate">
                                                <input type="radio" class="ratestar" id="star5" name="rate" value="5" onclick="selectstart(this.value)" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" class="ratestar" id="star4" name="rate" value="4"  onclick="selectstart(this.value)" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" class="ratestar" id="star3" name="rate" value="3"  onclick="selectstart(this.value)" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" class="ratestar" id="star2" name="rate" value="2"  onclick="selectstart(this.value)" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" class="ratestar" id="star1" name="rate" value="1"  onclick="selectstart(this.value)" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="start_"></div>

                                    <div class="row">
                                        <div class="col-25">

                                        </div>
                                        <div class="col-75">
                                            <input type="button" onclick="comment()" value="ส่ง">
                                        </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endif
            @endif
        </div>
        
        
        </div> 
     {{-- modaL --}}
        <div class="modal fade bd-example-modal-lg " id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                
                <div class="modal-content" >
                    <div class="modal-body" id="sub">

                        
                    </div>
                </div>
                
            </div>
        </div>   
		
	{{-- footer --}}

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
  <!-- Sweert Alert -->
  <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> 


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


////////add cart
function addcart(id){
    $.ajax({
        url: '{{ url("addcart")}}/'+id,
        type: 'GET',
        dataType: 'HTML',
        success: function(data) {
            $("#addcart").load(location.href + " #addcart");
          //  $(".addcart").attr('style','color:#41c8f5 !important;padding:0;');
        }
    });
}
/////commemt
function selectstart(value){
    $('#start_').html('<input type="hidden" id="starval" value="'+value+'">');
}
function comment(){
    console.log($('input:radio').val());
    if($('#fname').val() == ''){
        Swal.fire({
                text: "กรุณากรอกชื่อผู้แสดงความคิดเห็น",
                type: 'warning',
                confirmButtonColor: '#41c8f5',
            });
    
        // alert("Please fill all required fields");
        return false;
    }

    console.log($('#text').val() );
    if($('#text').val() == ''){
        Swal.fire({
                text: "กรุณากรอกข้อความแสดงความคิดเห็น",
                type: 'warning',
                confirmButtonColor: '#41c8f5',
            });
    
        // alert("Please fill all required fields");
        return false;
    }

    if($('#starval').val() == undefined){
        Swal.fire({
                text: "กรุณาให้คะแนนสินค้า",
                type: 'warning',
                confirmButtonColor: '#41c8f5',
            });
    
        // alert("Please fill all required fields");
            return false;
    }

    Swal.fire({
        text: "คุณต้องการส่งข้อความแสดงความคิดเห็นใช่หรือไม่",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ใช่",
        cancelButtonText: "ไม่ใช่",
        }).then((result)=>{
            if (result.value) {
                $("#comment").submit();
            }
        });
   
}

$( document ).ready(function() {
    A = '{{Session::get("success")}}';

    if(A){
        Swal.fire({
            text: "แสดงความคิดเห็นเรียบร้อย",
            type: 'success',
            confirmButtonColor: '#41c8f5',
        }).then((result)=>{
                if (result.value) {
                        <?php  Session::forget('succcess'); ?>
                        window.location.href.reload();
                    }
        });
    }
});

</script>
    
  </body>
</html>