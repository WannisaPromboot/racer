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
        #mobile{
    display: none;
  }
  #desk{
    display: block;
  }
      .img-logo {
        width: 60%;
}



#pro-top{
    margin-top: 40px;
}
.pro-img{
 width: 100%;
    }
    .pro-img {
        width: 100%;
    height: 360px;
    object-fit: cover;
    margin-bottom: 25px;
}
.pro-img2 {
    width: 100%;
    object-fit: cover;
    margin-bottom: 25px;
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
    background-color: #f7f7f700!important;
}
.bg-light {
    background: #f7f6f200 !important;
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

/* ---------news------------------- */
.welcome_docmed_area .welcome_docmed_info h3 {
    font-weight: 500;
    font-size: 22px;
    margin-bottom: 10px;
}
.title-pan {
    font-size: 20px;
    color: #00b9e9;
}
.welcome_docmed_area .welcome_docmed_info p {
    font-size: 16px;
    color: #727272;
    line-height: 28px;
}
.boxed-btn3-white-2 {
    color: #ffffff !important;
    display: inline-block;
    padding: 9px 24px;
    font-family: 'Prompt', sans-serif;
    font-size: 15px;
    font-weight: 400;
    border: 0;
    border: 1px solid #00b9e9;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 0px;
    text-align: center;
    text-transform: capitalize;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    cursor: pointer;
    background-color: #00b9e9;
    margin-bottom: 50px;
}
.boxed-btn3-white-2:hover {
    background: #ed260300;
    color: #00b9e9 !important;
    border: 1px solid #00b9e9;
}
.pro-img {
    width: 100%;
    height: 330px;
    object-fit: cover;
}
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem;
}
.pagination {
    display: inline-block;
}
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}
.pagination a.active {
    color: #00b9e9;
    font-weight: bold;
}

/* --------end news----------- */

/* -------form------------- */

input[type=password],input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-family: 'Prompt', sans-serif;
  color: #777;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 95%;
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
  }
}

.but {
    margin-top: 60px;
    margin-bottom: 50px;
}
.submit2 {
    width: 25%;
    background-color: #777;
    color: white;
    padding: 10px 50px;
    margin: 8px 0;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    
    margin-bottom: 40px;
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    text-align: center;
}
a:hover {
    color: #ccc;
}

.ti-col{
  color: #000 !important;
}

.block__35630 h3 {
    color: #3c3c3c;
    font-size: 1.4rem;
    text-align: center;
    font-weight: 600;
    font-family: 'Prompt', sans-serif;
}
.about-title {
    text-align: center;
    color: #3c3c3c;
    font-weight: 300;
    font-family: 'Prompt', sans-serif;
}
.line-re {
    width: 10px;
    padding: 0px 25px;
    border-top: 5px solid #000;
}
.sub-text-about {
    text-align: center;
    color: #3c3c3c;
    margin-bottom: 15px;
    font-family: 'Prompt', sans-serif;
}
.boxed-btn3-white-2 {
    color: #fff !important;
    display: inline-block;
    padding: 9px 24px;
    font-family: 'Prompt', sans-serif;
    font-size: 15px;
    font-weight: 400;
    border: 0;
    border: 1px solid #2f3e7700;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 40px;
    text-align: center;
    text-transform: capitalize;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    cursor: pointer;
    background-color: #4f7bf5;
    margin-bottom: 0px;
    font-family: 'DB HelvethaicaMon X';
    font-size: 12px;
    font-family: 'Prompt', sans-serif;
    margin-bottom: 0px;
}
.col-75 {
    float: left;
    width: 95%;
    margin-top: 6px;
}
.text-re {
    margin-top: 30px;
    font-size: 12px;
    text-align: center;
    font-family: 'Prompt', sans-serif;
    color: #3c3c3c;
}
.but {
    margin-top: 60px;
    margin-bottom: 50px;
}

.submit2:hover {
    background-color: rgba(119, 119, 119, 0);
    color: #777 !important;
    border: 1px solid #777;
}
.re-col {
    color: #235bf7;
    font-size: 12px;
    text-align: center;
    font-family: 'Prompt', sans-serif;
}

/* ---------------------- */




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
.pro-img {
    width: 100%;
    height: 265px;
    object-fit: cover;
}

}

@media (max-width: 768px){
#col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.sub-pan{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.pro-img {
    width: 100%;
    height: 210px;
    object-fit: cover;
}
.title-pan {
    font-size: 18px;
}

}

@media (max-width: 525px){
.pro-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}
.demo {
    opacity: 0.6;
    width: 100%;
    height: 115px;
    object-fit: cover;
}
.col-75 {
    float: left;
    width: 90%;
    margin-top: 6px;
    margin-left: 20px;
}
.text-re {
    margin-top: 0px;
}
.but {
    margin-top: 35px;
    margin-bottom: 30px;
}
#mobile{
    display: block;
  }
  #desk{
    display: none;
  }

}
@media (max-width: 375px){
    .pro-img {
    width: 100%;
    height: 210px;
    object-fit: cover;
}
.demo {
    opacity: 0.6;
    width: 100%;
    height: 95px;
    object-fit: cover;
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
		  <li class="nav-item"><a href="{{url('/')}}" class="nav-link">หน้าหลัก <span class="menu-span-col">|</span> </a></li>
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
		  <li class="nav-item dropdown ">
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
		  <li class="nav-item active"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">ลงชื่อเข้าใช้</a></li>
		  <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>{{!empty(Session::get('product')) ? '['.count(Session::get('product')).']' : '' }}</a></li>
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
            <h1 class="mb-0 bread">สมัครสมาชิก</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>สมัครสมาชิก</span></p>
          </div>
        </div>
      </div>
    </div>

<div class="back" style="background-image: url({{asset('frontend/images/back-about.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">
        
        <div class="section-back">

            <div class="site-section bg-light" >
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-lg-12 mb-12" >
                      <div class="block__35630">
                        <h3 class="mb-3">สมัครสมาชิก</h3>
                        <p class="about-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <hr class="line-re">
                        <p class="sub-text-about">Lorem Ipsum is simply</p>
                         <center><a href="#" class="boxed-btn3-white-2"> <span class="icon-facebook2"></span> Continue with facebook</a></center>
                      </div>
                    </div>
          
                  </div>
                </div>
            </div>
            <form action="{{url('customerregister')}}" method="POST">
              @csrf
                <div class="" id="desk">
                    <div class="container">
                      <div class="row">
            
                        <div class="col-md-2 col-lg-2 mb-2" >
                        </div>
                          <div class="col-md-4 col-lg-4 mb-4" >
                              <div class="row">
                            
                                <div class="col-75">
                                  <input type="text" name="name" placeholder="Name*">
                                </div>
                              </div>
                              <div class="row">
                            
                                <div class="col-75">
                                  <input type="text" name="email" placeholder="E-mail*">
                                </div>
                              </div>
                              <div class="row">
                            
                                <div class="col-75">
                                  <input type="text" name="address" placeholder="Address*">
                                </div>
                              </div>
                              <div class="row">
                            
                                <div class="col-75">
                                  <select id="amphure" name="amphure">
                                    <option value="">Specify Amphure</option>
                                    
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-75">
                                  <input type="text" id="zipcode" name="postal" placeholder="Postal code" readonly>
                                </div>
                              </div>
              
                              <div class="row">
                                <div class="col-75">
                                  <input type="text" name="facebook" placeholder="Facebook">
                                </div>
                              </div>
              
                          </div>
            
                          <div class="col-md-4 col-lg-4 mb-4" >
                              <div class="row">
                            
                                <div class="col-75">
                                  <input type="text" name="lastname" placeholder="Last Name*">
                                </div>
                              </div>
                              <div class="row">
                            
                                <div class="col-75">
                                  <input type="text" name="phone" placeholder="Phone No.*">
                                </div>
                              </div>

                              <div class="row">
                            
                                <div class="col-75">
                                  <select id="province" name="province"  style="height: 50px">
                                    <option value="">Spacify Province</option>
                                    @foreach($province as $pro)
                                      <option value="{{$pro->id}}">{{$pro->name_th}}</option>

                                    @endforeach
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                            
                                <div class="col-75">
                                  <select id="district" name="district"  style="height: 50px">
                                    <option value="">Specify District</option>
                                   
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-75">
                                  <input type="password" name="password" placeholder="password">
                                </div>
                              </div>
                            
                              
                              <div class="row">
                                <div class="col-75">
                                  <input type="text" name="lineid" placeholder="Line ID">
                                </div>
                              </div>

                          </div>

                        <div class="col-md-2 col-lg-2 mb-2" >
                        </div>
            
                      </div>
                      
                    </div>
                </div>
          
                <div class="container">
                  <div class="row" id="desk">
          
                    <div class="col-md-12 col-lg-12 mb-12" >
                      
                        <div class="but">
                          <center><button type="submit" class="submit2">สมัครสมาชิก</button></center>
                        </div>
                   
          
                    </div>
                  </div>
                </div>
            </form>
          
            <div class="" id="mobile">
              <div class="container">
                <div class="row">
      
                  <div class="col-md-2 col-lg-2 mb-2" >
      
                  </div>
      
                  <div class="col-md-4 col-lg-4 mb-4">
                    <form action="/action_page.php" >
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="Name*">
                        </div>
                      </div>
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Last Name*">
                        </div>
                      </div>
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="E-mail">
                        </div>
                      </div>
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Phone No.*">
                        </div>
                      </div>
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Address*">
                        </div>
                      </div>

                      <div class="row">
                    
                        <div class="col-75">
                          <select id="country" name="country">
                            <option value="australia">Spacify District</option>
                            <option value="canada">text1</option>
                            <option value="usa">text2</option>
                          </select>
                        </div>
                      </div>

                      
                      <div class="row">
                    
                        <div class="col-75">
                          <select id="country" name="country">
                            <option value="australia">Spacify Province</option>
                            <option value="canada">text1</option>
                            <option value="usa">text2</option>
                          </select>
                        </div>
                      </div>

                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Postal code">
                        </div>
                      </div>
      
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Facebook*">
                        </div>
                      </div>
                      
                      <div class="row">
                    
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="Line ID*">
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
                
              </div>
            </div>
      
            <div class="container">
              <div class="row" id="mobile">
      
                <div class="col-md-12 col-lg-12 mb-12" >
                  
                    <div class="but">
                      <center><a href="#" class="submit2">สมัครสมาชิก</a></center>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 
    $("#province").change(function (){
        var province_id = $('#province').val();
        // console.log(province_id);
        if(province_id){
            $.ajax({
                url:'{{ url("getAmphure") }}/'+encodeURIComponent(province_id),
                type: 'GET',
                dataType: 'HTML',
                async: true,
                data: "{data: value}",
                success: function(data){
                    // jssearch();
                   
                    $('#amphure').html(data);
                }
            });
        }
    
    });

    $("#amphure").change(function() {
        var district_id = $('#amphure').val();
        if(district_id){
            $.ajax({
                url:'{{ url("getDistrict") }}/'+encodeURIComponent(district_id),
                type: 'GET',
                dataType: 'HTML',
                async: true,
                data: "{data: value}",
                success: function(data){
                    // jssearch();
                    $('#district').html(data);
                }
            });
        }
        
    });

    $("#district").change(function() {
        var sub_district_id = $('#district').val();
        // console.log(sub_district_id);
        if(sub_district_id){
            $.ajax({
                url:'{{ url("getSubDistrict") }}/'+encodeURIComponent(sub_district_id),
                type: 'GET',
                dataType: 'HTML',
                async: true,
                data: "{data: value}",
                success: function(data){
                    $('#zipcode').val(data);
                }
            });
        }
        
    });
</script>

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

    
  </body>
</html>