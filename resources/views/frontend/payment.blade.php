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

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!-- Sweertalert -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

  </head>

  <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}


    /* ---custom radio---- */
    .container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 16px;
    font-weight: normal;
}

/* Hide the browser's default radio button */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  /* height: 25px;
  width: 25px; */
  height: 20px;
    width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #2196F3;
}


/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container2 .checkmark:after {
 	/* top: 9px;
  left: 9px; */
  top: 6px;
    left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
    /* ------------ */


      .img-logo {
        width: 60%;
}



#pro-top{
    margin-top: 40px;
}
.pro-img{
 width: 100%;
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
.bg-light {
    background: #f7f6f200 !important;
}

/* -------form------------- */

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-family: 'Prompt', sans-serif;
}

label {
  /* padding: 12px 12px 12px 0; */
  display: inline-block;
  padding: 0px 0 0px 0;
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
  width: 100%;
  margin-top: 6px;
  padding: 0px 0px 0px 13px;
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
    margin-top: 30px;
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
    margin-top: 50px;
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

.nice-select {
    -webkit-tap-highlight-color: transparent;
    background-color: #e8e8e7;
    border-radius: 5px;
    border: solid 1px #ccc;
    box-sizing: border-box;
    clear: both;
    cursor: pointer;
    display: block;
    float: left;
    font-family: inherit;
    font-size: 16px;
    font-weight: normal;
    height: 2.5em;
    line-height: 2.5em;
    outline: none;
    padding-left: 12px;
    padding-right: 30px;
    position: relative;
    text-align: left !important;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: 100%;
    color: #c4c4c4;
    font-weight: 300;
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
}
.nice-select .list {
   width: 100%;
}
input[type="text"], input[type="password"], input[type="email"], select {
    height: 2.5em;
    line-height: 2.5em;
}

/* ---------------------- */
.site-section-cover.inner-page, .site-section-cover.inner-page .container > .row {
    height: auto;
    min-height: auto;
    /* padding: 2em 0; */
    padding: 1em 0;
}
    .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    width: 100%;
}
    #form-top{
        margin-top: 20px;
    }
    #form-pad{
        padding: 0px 15px 0px 10px;
    }
    #form-pad2{
        padding: 0px 0px 0px 30px;
    }
    .bank-img {
    width: 100%;
    padding: 50px 0px 30px 0px;
}
.bank-text2 {
    color: #777;
    margin-bottom: 0px;
    text-align: left;
    padding: 0px 0px 0px 30px;
    font-weight: normal;

}
.bank-text {
    color: #777;
    margin-top: 35px;
    margin-bottom: 0px;
    text-align: left;
    padding: 0px 0px 0px 30px;
    font-weight: normal;
}
.upload {
    margin-bottom: 8px;
    color: #777;
    text-align: left;
    padding: 0px 0px 0px 30px;
}
.upload2 {
    font-size: 15px !important;
    text-align: left;
    padding: 0px 0px 0px 30px;
    font-weight: normal;
    line-height: 22px;
}
    .col-50{
        width: 50%;
    float: left;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #e4c070;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #00b9e9;
}
    .title-pay{
     /* text-align: left;
     font-size: 16px !important;
     padding: 0px 0px 0px 15px; */
     text-align: left;
    font-size: 16px !important;
    padding: 0px 0px 0px 0px;
    margin-bottom: 0px;
    margin-top: 20px;

    }
    .title-pay2{
     text-align: left;
    font-size: 16px !important;
    padding: 0px 0px 0px 0px;
    margin-bottom: 0px;
    margin-bottom: 20px;
    margin-top: 40px;
    }


      #mobile{
    display: none;
  }
  #desk{
    display: block;
  }
    .log-text{
        margin-top: 60px;
        font-family: 'Prompt', sans-serif;
        color: #969595;
        font-weight: 400;
    }
    .line-re {
        width: 24px;
    padding: 0px 25px;
    border-top: 10px solid #969595;
}
.about-title{
    color: #969595;
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
    margin-bottom: 30px;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding: 0px 8px 0px 0px;
}

.sub-text-about{
    font-size: 16px !important;
    margin-bottom: 5px !important;
}
.text-re{
    font-size: 14px !important;
    margin-top: -25px !important;
}


    		#banner {
		background-image: url(images/back-login.jpg);
	}

body {
    line-height: 29px;
    font-size: 16px;
    /* font-family: "Roboto", sans-serif; */
    font-family: 'Prompt', sans-serif;
    font-weight: 500;
    color: #777777;
}
#container{
	max-width: 2480px;
	padding-right: 1px;
    padding-left: 1px;
}
.logo{
	width: 35%;
}
.icon-top {
    background-color: #fff;
	border-radius: 100%;
    padding: 3px 8px 3px 8px;
	color: #000;
}
.icon-top2 {
    background-color: #fff;
	border-radius: 100%;
    padding: 3px 10px 3px 10px;
	color: #000;
}
.con-foot{
color: rgb(243, 9, 9);
text-align: left;
}
.pay-foot{
	color: rgb(243, 9, 9);
	text-align: center;
}
.time-foot{
	color: rgb(243, 9, 9);
	text-align: right;
}
.text-foot{
	color: #fff;
	font-size: 16px;
	font-weight: 300;
	font-family: 'Prompt', sans-serif;
}
#footer a {
    color: #fff;
    text-decoration: none;
}
.banner-slider{
	width: 85% !important; 
	height: 635px; 
	object-fit: cover;
}
#menu.visible {
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
    visibility: visible;
}
#menu {
    background: #000000 !important;
    color: #ffffff;
    height: 100%;
    max-width: 80%;
    overflow-y: auto;
    padding: 3em 2em;
	font-family: 'Prompt', sans-serif;
}
#menu .close {
 color: #fff;
}
.block__35630 h3 {
    color: #00b9e9;
    font-size: 2.4rem;
    text-align: center;
    font-weight: 600;
    font-family: 'Prompt', sans-serif;
    margin-top: 50px;
    margin-bottom: 0px !important;
}
.about-title {
    text-align: center;
    color: #777;
    font-weight: 300;
    font-family: 'Prompt', sans-serif;
}

/* -------------------- */
.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav-tabs {
    border-bottom: 1px solid #ddd;
}
.nav>li {
    position: relative;
    display: block;
}
.nav-tabs>li {
    float: left;
    margin-bottom: -1px;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #f7f7f7;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
.fade.in {
    opacity: 1;
}

@media (max-width: 768px){
    .bank-text {
    font-size: 12px;
}
.bank-text2 {
    font-size: 12px;
}
.upload2 {
    font-size: 11px !important;
    line-height: 15px;
}
.upload {
    font-size: 10px;
}
.block__35630 h3 {
    font-size: 25px;
    margin-top: 30px;
}

}
@media (max-width: 525px){
.col-50 {
    width: 100%;
    float: left;
}
.bank-text {
    font-size: 16px;
    color: #777;
    margin-top: 0px;
    margin-bottom: 0px;
    text-align: left;
    padding: 0px 0px 0px 5px;
    font-weight: normal;
}
.bank-text2 {
    color: #777;
    margin-bottom: 0px;
    text-align: left;
    padding: 0px 0px 0px 5px;
    font-weight: normal;
    font-size: 16px;
}
.upload2 {
    font-size: 13px !important;
    line-height: 22px;
    padding: 0px 0px 0px 5px;
}
.upload {
    font-size: 14px;
    padding: 0px 0px 0px 5px;
}
.col-25, .col-75, input[type=submit] {
    margin-top: 0;
    width: 90%;
    margin-top: 0;
    margin-left: 15px;
    margin-bottom: 10px;
}
#form-pad2 {
    padding: 0px 15px 0px 10px;
}


}

@media (max-width: 375px){


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
							<span class="text"> : 02 811 1741 5</span></div>
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon icon-envelope" style="color:#00b9e9"></span>
							<span class="text"> : Racer.co.th</span></div>
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<i class="fa fa-clock-o" style="color:#00b9e9" aria-hidden="true"></i>
						    <span class="text"> : วันจันทร์ - วันศุกร์ : 08.00น. - 17.00น.</span></div>
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
		  <li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">ลงชื่อเข้าใช้</a></li>
		  <li class="nav-item cta-colored active"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>{{!empty(Session::get('product')) ? '['.count(Session::get('product')).']' : '' }}</a></li>
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
            <h1 class="mb-0 bread">ชำระเงิน</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>ชำระเงิน</span></p>
          </div>
        </div>
      </div>
    </div>


        
    <div class="section-back" style="background-image: url({{asset('frontend/images/back-about02.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">



        <div class="site-section bg-light" id="" >
    
            <div class="container">
                <div class="row">
                  <div class="col-md-12 col-lg-12 mb-12" >
                    <div class="block__35630">
                        <h3 class="mb-3">ชำระเงิน</h3>
                        <p class="about-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      <center><hr class="line-re"></center>
                    </div>
                  </div>
        
                </div>
              </div>
            </div>
    
            <div class="container">
              <div class="row">
                  <div class="col-md-2 col-lg-2 mb-2" ></div>
                    <div class="col-md-8 col-lg-8 mb-8" >
                        <p class="title-pay">Delivery Detail</p>
                    </div>
                    <div class="col-md-2 col-lg-2 mb-2" ></div>
                </div>
            </div>
                <div class="site-section " id="desk">
                    <form action="{{url('storepayment')}}" method="post" id="deskfrom" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_order" value="{{$id}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 mb-2" ></div>
                
                                <div class="col-md-4 col-lg-4 mb-4" >
                                {{-- <form action="/action_page.php"> --}}
                                    <div class="row">
                                        <div class="col-75">
                                        <input type="text" id="desk_fname" name="firstname" placeholder="Name*" >
                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                        <div class="col-75">
                                        <input type="text" id="desk_email" name="email" placeholder="E-mail*" >
                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                        <div class="col-75">
                                        <input type="text" id="desk_address" name="address" placeholder="Address*" >
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                
                            <div class="col-md-4 col-lg-4 mb-4" >
                                {{-- <form action="/action_page.php"> --}}
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="desk_lname" name="lastname" placeholder="Last Name*" >
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="desk_telephone" name="telephone" placeholder="Phone No.*" >
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="desk_fax" name="fax" placeholder="Fax*" >
                                    </div>
                                </div>
                
                                {{-- </form> --}}
                            </div>
                
                            <div class="col-md-2 col-lg-2 mb-2" ></div>
                
                            </div>
                            
                        </div>
                    {{-- </div> --}}

                    {{-- ที่อยู่ใบกำกับภาษี desk --}}
                    {{-- <div class="site-section" id="desk" > --}}
                        <div class="container">
                            <div class="row">
                
                                <div class="col-md-2 col-lg-2 mb-2" >
                                </div>
                            <div class="col-md-8 col-lg-8 mb-8" >
                                <p class="title-pay">ขอใบกำกับภาษี</p>
            
                                <label class="container2">ตามที่อยู่เดิม
                                    <input type="radio" checked="checked" name="radio" value="old" class="deskold">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container2">ที่อยู่ใหม่
                                    <input type="radio" name="radio" value="new" class="desknew">
                                    <span class="checkmark" id="checkmark"></span>
                                </label>
            
                            </div>
                            <div class="col-md-2 col-lg-2 mb-2" >
                            </div>
                
                            </div>
                        </div>
                        <div class="container desktax" style="display: none">
                            <div class="row">
                    
                                <div class="col-md-2 col-lg-2 mb-2" >
                                </div>
                    
                                <div class="col-md-4 col-lg-4 mb-4" >
                                {{-- <form action="/action_page.php"> --}}
                                    <div class="row">
                                    <div class="col-75">
                                        <input type="text" id="tax_fname" name="tax_firstname" placeholder="Name*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="tax_email" name="tax_email" placeholder="E-mail*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="tax_address" name="tax_address" placeholder="Address*">
                                    </div>
                                    </div>
                                    
                                    {{-- </form> --}}
                    
                                </div>
                    
                                <div class="col-md-4 col-lg-4 mb-4" >
                                {{-- <form action="/action_page.php"> --}}
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="tax_lname" name="tax_lastname" placeholder="Last Name*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="tax_telephone" name="tax_telephone" placeholder="Phone No.*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="tax_fax" name="tax_fax" placeholder="Fax*">
                                    </div>
                                    </div>
                
                                    {{-- </form> --}}
                                </div>
                    
                                <div class="col-md-2 col-lg-2 mb-2" >
                                </div>
                    
                            </div>
                        
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 mb-2" ></div>
                                <div class="col-md-8 col-lg-8 mb-8" >
                                    <p class="title-pay2">ช่องทางการชำระเงิน</p>
                                </div>
                                <div class="col-md-2 col-lg-2 mb-2" ></div>
                            </div>
                        </div>
            
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 mb-2" >
                                </div>
                                <div class="col-md-8 col-lg-8 mb-8" >
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home" class="btntranfer">โอนผ่านบัญชี</a></li>
                                        <li><a data-toggle="tab" href="#menu1" class="btncredit">บัตรเครดิต</a></li>
                                    </ul>
                            
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="col-50">            
                                        <img class="bank-img" src="{{asset('frontend/images/bank.jpg')}}">
                                    </div>
                                    <div class="col-50">
                                        <p class="bank-text">ชื่อบัญชี : xxxxxxxxx xxxxx</p>
                                        <p class="bank-text2">เลขที่บัญชี : 000-000000-0</p>
                                        <p class="upload2">กรุณาอัปโหลดหลักฐานการชำระเงินเพื่อช่วยให้เรายืนยันการชำระเงินได้รวดเร็วขึ้น</p>
                                            {{-- <form action="#"> --}}
                                        <input type="file" id="desk_file" name="filename" class="upload" >
                                        <br>
                                    </div>
                                </div>
        
                                <div id="menu1" class="tab-pane fade">
                                
                                <div class="col-50">
                                    <div class="row" id="form-top">
                                    
                                        <div class="col-75" id="form-pad">
                                            <input type="text" id="desk_number" name="numbercard" placeholder="หมายเลขบัตรเครดิต*">
                                        </div>
                                        <div class="col-75" id="form-pad">
                                            <input type="text" id="desk_ccv" name="ccv" placeholder="CCV*">
                                            </div>
                                        </div>
                                </div>
                    
                                <div class="col-50">
                                    <div class="row" id="form-top">
                                    
                                        <div class="col-75" id="form-pad2">
                                            <input type="text" id="desk_expire" name="expire" placeholder="วันหมดอายุบัตร*">
                                        </div>
                                        <div class="col-75" id="form-pad2">
                                            <input type="text" id="desk_namecard" name="namecard" placeholder="ชื่อผู้ถือบัตร*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paymentmethod">
                            <input type="hidden" id="payment_method" name="payment_method" value="tranfer">
                        </div>
                        <div class="container">
                            <div class="row" id="">
                    
                              <div class="col-md-12 col-lg-12 mb-12" >
                                
                                  <div class="but">
                                    <center><button style="color: white;" type="submit"  class="submit2 btnsend">Send</button></center>
                                </div>
                            </div>
                          </div>
                    </form>
                </div>

                    
                {{-- mobile --}}
                <div class="site-section" id="mobile">
                    <form action="{{url('storepayment')}}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                
                            <!-- <div class="col-md-2 col-lg-2 mb-2" >
                
                            </div> -->
                
                            <div class="col-md-12 col-lg-12 mb-12">
                                {{-- <form action="/action_page.php" > --}}
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="m_fname" name="firstname" placeholder="Name*" required>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="m_lname" name="lastname" placeholder="Last name*" required>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="m_email" name="lastname" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="m_telephone" name="lastname" placeholder="Phone No.*" required>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="m_address" name="lastname" placeholder="Address*" required>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-75">
                                    <input type="text" id="m_fax" name="lastname" placeholder="Fax*" required>
                                    </div>
                                </div>
                                
                                {{-- </form> --}}
                            
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
        
        
        
                {{-- <div class="container">
                <div class="row">
        
                    <div class="col-md-2 col-lg-2 mb-2" >
                    </div>
                    <div class="col-md-8 col-lg-8 mb-8" >
                        
                    </div>
                    <div class="col-md-2 col-lg-2 mb-2" >
                </div>
        
                    </div>
                </div> --}}

                {{-- ใบกำกับภาษี --}}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-lg-2 mb-2" ></div>
                            <div class="col-md-8 col-lg-8 mb-8" ></div>
                            <div class="col-md-2 col-lg-2 mb-2" ></div>
                        </div>
                    </div>
        

                    {{-- ขอใบกำกับภาษี mobile --}}
        
                    {{-- <div class="site-section" id="mobile"> --}}
                        <div class="container">
                            <div class="row">
                
                                <div class="col-md-2 col-lg-2 mb-2" >
                                </div>
                            <div class="col-md-8 col-lg-8 mb-8" >
                                <p class="title-pay">ขอใบกำกับภาษี</p>
            
                                <label class="container2">ตามที่อยู่เดิม
                                    <input type="radio" checked="checked" name="radio" class="moblieold">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container2">ที่อยู่ใหม่
                                    <input type="radio" name="radio" class="moblienew">
                                    <span class="checkmark" id="checkmark"></span>
                                </label>
            
                            </div>
                            <div class="col-md-2 col-lg-2 mb-2" >
                            </div>
                
                            </div>
                        </div>
                        <div class="container mobiletax" style="display: none">
                            <div class="row">
                    
                                <!-- <div class="col-md-2 col-lg-2 mb-2" >
                    
                                </div> -->
                    
                                <div class="col-md-12 col-lg-12 mb-12">
                                {{-- <form action="/action_page.php" > --}}
                                    <div class="row">
                                    <div class="col-75">
                                        <input type="text" id="m_tax_fname" name="tax_firstname" placeholder="Name*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="m_tax_lname" name="tax_lastname" placeholder="Last name*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="m_tax_email" name="tax_email" placeholder="E-mail">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="m_tax_telephone" name="tax_phone" placeholder="Phone No.*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="m_tax_address" name="tax_address" placeholder="Address*">
                                    </div>
                                    </div>
                                    <div class="row">
                                
                                    <div class="col-75">
                                        <input type="text" id="m_tax_fax" name="tax_fax" placeholder="Fax*">
                                    </div>
                                </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        
                        </div>
                    {{-- </div> --}}
        
                    {{-- payment mobile --}}
                    {{-- <div class="site-section" id="mobile"> --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 mb-2" ></div>
                                <div class="col-md-8 col-lg-8 mb-8" >
                                    <p class="title-pay2">ช่องทางการชำระเงิน</p>
                                </div>
                                <div class="col-md-2 col-lg-2 mb-2" ></div>
                            </div>
                        </div>
            
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 mb-2" >
                                </div>
                                <div class="col-md-8 col-lg-8 mb-8" >
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home"  class="btntranfer">โอนผ่านบัญชี</a></li>
                                        <li><a data-toggle="tab" href="#menu1" class="btncredit">บัตรเครดิต</a></li>
                                    </ul>
                            
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="col-50">            
                                        <img class="bank-img" src="{{asset('frontend/images/bank.jpg')}}">
                                    </div>
                                    <div class="col-50">
                                        <p class="bank-text">ชื่อบัญชี : xxxxxxxxx xxxxx</p>
                                        <p class="bank-text2">เลขที่บัญชี : 000-000000-0</p>
                                        <p class="upload2">กรุณาอัปโหลดหลักฐานการชำระเงินเพื่อช่วยให้เรายืนยันการชำระเงินได้รวดเร็วขึ้น</p>
                                            {{-- <form action="#"> --}}
                                        <input type="file" id="m_file" name="filename" class="upload" required>
                                        <br>
                                    </div>
                                </div>
        
                                <div id="menu1" class="tab-pane fade">
                                
                                <div class="col-50">
                                    <div class="row" id="form-top">
                                    
                                        <div class="col-75" id="form-pad">
                                            <input type="text" id="m_number" name="lastname" placeholder="หมายเลขบัตรเครดิต*">
                                        </div>
                                        <div class="col-75" id="form-pad">
                                            <input type="text" id="m_ccv" name="lastname" placeholder="CCV*">
                                            </div>
                                        </div>
                                </div>
                    
                                <div class="col-50">
                                    <div class="row" id="form-top">
                                    
                                        <div class="col-75" id="form-pad2">
                                            <input type="text" id="m_expire" name="lastname" placeholder="วันหมดอายุบัตร*">
                                        </div>
                                        <div class="col-75" id="form-pad2">
                                            <input type="text" id="m_cardname" name="lastname" placeholder="ชื่อผู้ถือบัตร*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paymentmethod">
                            <input type="hidden" id="payment_method" name="payment_method" value="tranfer">
                        </div>
                        <div class="container">
                            <div class="row" id="">
                    
                            <div class="col-md-12 col-lg-12 mb-12" >
                                
                                <div class="but">
                                    <center><button type="submit"  class="submit2 btnsend">Send</button></center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- end mobile --}}
                
    
            <div class="col-md-2 col-lg-2 mb-2" >
        </div>
    </div>
</div>
    
    
     
    
          </div>
    {{-- endform --}}
         
       
    </div>

                        </div>	

		
	

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>

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
	                <li><span class="icon icon-map-marker"></span><span class="text">บริษัท เรเซอร์การไฟฟ้า ประเทศไทย จำกัด
137 หมู่9 ซอยเพชรเกษม91 ถนนเพชรเกษม ตำบลสวนหลวง อำเภอกระทุ่มแบน สมุทรสาคร 74110</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">02 811 1741 5</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Racer_official@Racerlighting.com</span></a></li>
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
      $('.desknew').click(function() {
          $('.desktax').removeAttr('style');
      });

      $('.deskold').click(function() {
        $('.desktax').css('display','none');
      });

      $('.moblieold').click(function() {
          $('.mobiletax').removeAttr('style');
      });

      $('.moblienew').click(function() {
        $('.mobiletax').css('display','none');
      });

     $('.btncredit').click(function(){
            //$('.but').css('display','none');
            $('.paymentmethod').html('<input type="hidden" id="payment_method" name="payment_method" value="credit">');
     });

     $('.btntranfer').click(function(){
           // $('.but').removeAttr('style');
            $('.paymentmethod').html('<input type="hidden" id="payment_method" name="payment_method" value="tranfer">');
     });
     


     
     $('#deskfrom').submit(function () {
        if($.trim($('#desk_fname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกชื่อ",
                    type: 'warning',
                });

                $('#desk_fname').focus();

                return false;
            }

            if($.trim($('#desk_lname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกนามสกุล",
                    type: 'warning',
                });

                $('#desk_lname').focus();
                
                return false;
            }

            if($.trim($('#desk_address').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกที่อยู่",
                    type: 'warning',
                });

                $('#desk_address').focus();
                
                return false;
            }

            if($.trim($('#desk_email').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกอีเมล",
                    type: 'warning',
                });

                $('#desk_email').focus();
                
                return false;
            }

            if($.trim($('#desk_telephone').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเบอร์โทรศัพท์",
                    type: 'warning',
                });

                $('#desk_telephone').focus();
                
                return false;
            }

            if($.trim($('#desk_fax').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกแฟกซ์",
                    type: 'warning',
                });

                $('#desk_fax').focus();
                
                return false;
            }

        /////check true
        if($('.desknew').is(':checked') == true ){
            if($.trim($('#tax_fname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกชื่อ",
                    type: 'warning',
                });

                $('#tax_fname').focus();

                return false;
            }

            if($.trim($('#tax_lname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกนามสกุล",
                    type: 'warning',
                });

                $('#tax_lname').focus();
                
                return false;
            }

            if($.trim($('#tax_address').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกที่อยู่",
                    type: 'warning',
                });

                $('#tax_address').focus();
                
                return false;
            }

            if($.trim($('#tax_email').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกemail",
                    type: 'warning',
                });

                $('#tax_email').focus();
                
                return false;
            }

            if($.trim($('#tax_telephone').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเบอร์โทรศัพท์",
                    type: 'warning',
                });

                $('#tax_telephone').focus();
                
                return false;
            }

            if($.trim($('#tax_fax').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกแฟกซ์",
                    type: 'warning',
                });

                $('#tax_fax').focus();
                
                return false;
            }
        }


        /////check 

        if($('#payment_method').val() == 'tranfer'){

            if($.trim($('#desk_file').val()) == ''){
                Swal.fire({
                    text: "กรุณาแนบไฟล์หลักฐานการจ่ายเงิน",
                    type: 'warning',
                });

                $('#desk_file').focus();

                return false;
            }

        }else if( $('#payment_method').val() == 'credit'){

            if($.trim($('#desk_number').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเลขบัตรเครดิต",
                    type: 'warning',
                });

                $('#desk_number').focus();

                return false;
            }

            if($.trim($('#desk_ccv').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเลขหลังบัตร",
                    type: 'warning',
                });

                
                $('#desk_ccv').focus();

                return false;
            }

            if($.trim($('#desk_expire').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกวันหมดอายุ",
                    type: 'warning',
                });

                $('#desk_expire').focus();

                return false;
            }

            if($.trim($('#desk_namecard').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกชื่อบนบัตร",
                    type: 'warning',
                });

                $('#desk_namecard').focus();


                return false;
            }
            
        }
     });   
//////////////////mobile

     $('#mobilefrom').submit(function () {
        if($.trim($('#m_fname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกชื่อ",
                    type: 'warning',
                });

                $('#m_fname').focus();

                return false;
            }

            if($.trim($('#m_lname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกนามสกุล",
                    type: 'warning',
                });

                $('#m_lname').focus();
                
                return false;
            }

            if($.trim($('#m_address').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกที่อยู่",
                    type: 'warning',
                });

                $('#m_address').focus();
                
                return false;
            }

            if($.trim($('#m_email').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกอีเมล",
                    type: 'warning',
                });

                $('#m_email').focus();
                
                return false;
            }

            if($.trim($('#m_telephone').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเบอร์โทรศัพท์",
                    type: 'warning',
                });

                $('#m_telephone').focus();
                
                return false;
            }

            if($.trim($('#m_fax').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกแฟกซ์",
                    type: 'warning',
                });

                $('#m_fax').focus();
                
                return false;
            }

        /////check true
        if($('.mobilenew').is(':checked') == true ){
            if($.trim($('#tax_fname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกชื่อ",
                    type: 'warning',
                });

                $('#tax_fname').focus();

                return false;
            }

            if($.trim($('#m_tax_lname').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกนามสกุล",
                    type: 'warning',
                });

                $('#m_tax_lname').focus();
                
                return false;
            }

            if($.trim($('#m_tax_address').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกที่อยู่",
                    type: 'warning',
                });

                $('#m_tax_address').focus();
                
                return false;
            }

            if($.trim($('#m_tax_email').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกemail",
                    type: 'warning',
                });

                $('#m_tax_email').focus();
                
                return false;
            }

            if($.trim($('#m_tax_telephone').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเบอร์โทรศัพท์",
                    type: 'warning',
                });

                $('#m_tax_telephone').focus();
                
                return false;
            }

            if($.trim($('#m_tax_fax').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกแฟกซ์",
                    type: 'warning',
                });

                $('#m_tax_fax').focus();
                
                return false;
            }
        }


        /////check 

        if($('#payment_method').val() == 'tranfer'){

            if($.trim($('#m_file').val()) == ''){
                Swal.fire({
                    text: "กรุณาแนบไฟล์หลักฐานการจ่ายเงิน",
                    type: 'warning',
                });

                $('#m_file').focus();

                return false;
            }

        }else if( $('#payment_method').val() == 'credit'){

            if($.trim($('#m_number').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเลขบัตรเครดิต",
                    type: 'warning',
                });

                $('#m_number').focus();

                return false;
            }

            if($.trim($('#m_ccv').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกเลขหลังบัตร",
                    type: 'warning',
                });

                
                $('#m_ccv').focus();

                return false;
            }

            if($.trim($('#m_expire').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกวันหมดอายุ",
                    type: 'warning',
                });

                $('#m_expire').focus();

                return false;
            }

            if($.trim($('#m_namecard').val()) == ''){
                Swal.fire({
                    text: "กรุณากรอกชื่อบนบัตร",
                    type: 'warning',
                });

                $('#m_namecard').focus();


                return false;
            }
            
        }
     });  

  </script>
    
  </body>
</html>