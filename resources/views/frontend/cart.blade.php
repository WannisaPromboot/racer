<!DOCTYPE html>
<html lang="en">
  <head>
    @include('frontend.inc_header')

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

/* -------------------cart----------------------- */
.product-image {
  float: left;
  width: 20%;
}

.product-details {
  float: left;
  width: 37%;
}

.product-price {
  float: left;
  width: 12%;
  color: #777;
  font-family: 'Prompt', sans-serif;
  clear: none;
}

.product-quantity {
  float: left;
  width: 10%;
}

.product-removal {
  float: left;
  width: 9%;
}

.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
  color: #777;
  font-family: 'Prompt', sans-serif;
}

/* This is used as the traditional .clearfix class */
.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
  content: '';
  display: table;
}

.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}

.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}

/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '฿';
}

 .promotion-discount:before {
  content: '- ฿';
  
}

.promotion-discount{
    color: red;
}



h1 {
  font-weight: 100;
}

label {
    color: #777;
}

.shopping-cart {
  margin-top: -45px;
}

/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #00b9eb;
  font-weight: normal;
  font-family: 'Prompt', sans-serif;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}

/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #00b9eb;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 140px;
}
.product .product-details .product-title {
  margin-right: 20px;
  /* font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium"; */
  font-family: 'Prompt', sans-serif;
  color: #777;
    text-align: left;
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
  color: #777;
  font-family: 'Prompt', sans-serif;
  text-align: left;
    font-size: 15px !important;
    font-weight: normal;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  /* border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: 'Prompt', sans-serif;
  font-size: 12px;
  border-radius: 3px; */
  border: 0;
    padding: 2px 10px;
    background-color: #d20b0b;
    color: #fff;
    font-family: 'Prompt', sans-serif;
    font-size: 12px;
    border-radius: 3px;
    height: 2.5em;
}
.product .remove-product:hover {
  background-color: #a44;
}

/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
  /* margin-bottom: -20px; */
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
  font-weight: normal;
    font-size: 16px;
    font-family: 'Prompt', sans-serif;
    font-weight: normal;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
  color: #777;
  font-family: 'Prompt', sans-serif;
  font-weight: normal;
}
.totals .totals-item-total {
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}

.checkout {
  /* float: right;
    border: 0;
    margin-top: 20px;
    padding: 2px 25px;
    background-color: #0d3b98;
    color: #fff;
    font-size: 25px;
    border-radius: 3px;
    border: 1px solid #0d3b98;
    height: 2.5em;
    margin-bottom: 50px; */
    float: right;
    border: 0;
    margin-top: 20px;
    padding: 3px 25px;
    background-color: #00b9eb;
    color: #fff;
    font-size: 25px;
    border-radius: 3px;
    border: 1px solid #00b9eb;
    /* height: 2.5em; */
    margin-bottom: 50px;
    font-family: 'Prompt', sans-serif;
}

.checkout:hover {
    /* background-color: #00b9eb;
    border: 1px solid #00b9eb; */
    background-color: #00b9eb00;
    border: 1px solid #00b9eb;
    color: #00b9eb;
}

/* Make adjustments for tablet */
@media screen and (max-width: 800px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #00b9eb;
  }

  .column-labels {
    display: none;
  }

  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }

  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }

  .product-price {
    clear: both;
    width: 70px;
  }

  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }

  .product-quantity:before {
    content: 'x';
  }

  .product-removal {
    width: auto;
  }

  .product-line-price {
    float: right;
    width: 70px;
  }
  /* .product .product-details .product-description {
    margin: 5px 0px 5px 0;
    line-height: 1.4em;
    color: #777;
    font-family: 'Prompt', sans-serif;
    text-align: left;
    font-size: 15px !important;
    font-weight: normal;
    padding: 0px 0px 0px 15px;
}
.product .product-details .product-title {
    margin-right: 21px;
    font-family: 'Prompt', sans-serif;
    color: #777;
    text-align: left;
    padding: 0px 0px 0px 15px;
} */
.checkout {
    font-size: 20px;
}

.quantity_button {
  margin-top: -27px !important;
    margin-left: 15px !important;
}


}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }

  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }

  /* .product .product-line-price:before {
    content: 'Item Total: ฿';
  } */

  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}

.title-cart {
    color: #00b9eb !important;
    font-weight: 400;
    margin-top: 50px !important;
    text-align: left;
    font-family: 'Prompt', sans-serif;
    font-size: 35px !important;
}
.totals-value2{
    color: #00b9eb;
    /* float: right;
    margin-right: -366px;
    text-align: right; */
    background-color: #7d7e80;
    padding: 5px 15px 5px 15px;
    padding: 5px 15px 5px 15px;
    width: 50%;
    float: right;
}
.product {
    display: block;
    width: 100%;
    margin-bottom: 30px;
    position: relative;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;

}

/* -----end cart-------------- */

.product_quantity {
				float: left; 
				width: 100px; 
				height: 100px
			}
			
			.quantity_button {
        margin: 0px 0;
    height: 26px;
    width: 70px;
    text-align: center;
    padding: 0px;
        background-color: #ECF0F1;
			}
			
		.qt {
      width: 40px;
      float: left;
      height: 26px;
      line-height: 30px;
      font-size: 1.25em;
      background-color: #f9f9f9;
      color: #7F8C8D;
		}
		
		.add_sub {
			float: left;
      width: 25px;
		}
		
		.qt-plus {
			line-height: 13px;
      width: 100%;
      font-size: 14px;
      color: #777;
      text-align: center;
      font-weight: bold;
      cursor: pointer;
      display: block;
		}
		
		.qt-minus {
			line-height: 13px;
      font-size: 14px;
      color: #777;
      text-align: center;
      width: 100%;
      font-weight: bold;
      cursor: pointer;
      display: block;
		}

      
  </style>

  <?php use App\Http\Controllers\Frontend\GetdataController; ?>
  @include('frontend.inc_header')
  <?php $page = 'cart'; ?>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">

              <div class="col-md-8 pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-phone2" style="color:#00b9e9"></span>
                <span class="text"> : 0-2811-1741-5</span></div>
                <div class="icon mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon icon-envelope" style="color:#00b9e9"></span>
                <span class="text"> :  racer_official@racerlighting.com</span></div>
                <div class="icon mr-2 d-flex justify-content-center align-items-center">
                  <i class="fa fa-clock-o" style="color:#00b9e9" aria-hidden="true"></i>
                  <span class="text"> : {{Session::get('langfrontend')=='th'?'วันจันทร์ - วันศุกร์':'Monday - Friday '}} : 08.00น. - 17.00น.</span></div>
              </div>
              <div class="col-md-4">
                <!-- <div class="icon mr-2 d-flex justify-content-center" id="social">
                  <a href="https://line.me/ti/p/~@racerlighting" style="color: white;"><i class="fab fa-line"></i></a>
                </div>
                <div class="icon mr-2 d-flex justify-content-center" id="social">
                  <a href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><span class="icon-facebook"></span></a>
                </div>
                <div class="icon mr-2 d-flex justify-content-center" id="social">
                  <a href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><span class="icon-instagram"></span></a>
                </div> -->
                <div class="icon mr-2 d-flex justify-content-center" id="social">
                            <a target="blank" href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-01.png"></a>
                            <a target="blank" href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-02.png"></a>
                            <a target="blank" href="https://line.me/ti/p/~@racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-03.png"></a>
                            <a target="blank" href="https://www.youtube.com/channel/UC8Af6KCm3uAnBeTya3rwuLA" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-04.png"></a>
                            <a target="blank" href="https://www.tiktok.com/@racerlighting?" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-05.png"></a>
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
		  <li class="nav-item"><a href="{{url('/')}}" class="nav-link">{{Session::get('langfrontend')=='th'?'หน้าหลัก':'Home'}} <span class="menu-span-col">|</span> </a></li>
		  <li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('langfrontend')=='th'?'สินค้า':'Product'}}</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown04">
            <?php $menu = \App\Category::orderby('sort')->get(); ?>
                @foreach ($menu as $_menu)
                    <a class="dropdown-item" href="{{url('product/'.$_menu->category_name_th.'')}}">{{strtoupper($_menu->category_name_th)}}</a>
                @endforeach
		  </div>
		</li>
		  <li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link"><span class="menu-span-col">|</span> {{Session::get('langfrontend')=='th'?'เกี่ยวกับเรา':'About Us'}}</a></li>
		  
		  <li class="nav-item dropdown ">
			<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu-span-col">|</span> {{Session::get('langfrontend')=='th'?'ข่าวสารและโปรโมชั่น':'News & Promotion'}}</a>
			<div class="dropdown-menu" aria-labelledby="dropdown04">
				<a class="dropdown-item" href="{{url('/news')}}">{{Session::get('langfrontend')=='th'?'ข่าวสาร':'News'}}</a>
				<a class="dropdown-item" href="{{url('/promotion')}}">{{Session::get('langfrontend')=='th'?'โปรโมชั่น':'Promotion'}}</a>
			</div>
		  </li>
		  <li class="nav-item"><a href="{{url('/article')}}" class="nav-link"><span class="menu-span-col">|</span> {{Session::get('langfrontend')=='th'?'บทความ':'Article'}}</a></li>
		  <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link"><span class="menu-span-col">|</span> {{Session::get('langfrontend')=='th'?'ติดต่อเรา':'Contact Us'}}</a></li>

		</ul>
	</div>
	<div class="col-md-4" id="pay-nemu">
    <ul class="navbar-nav ml-auto">

    <li class="nav-item">
		  <div class="container03">
  <div class="search-toggle">
    <button class="search-icon icon-search"></button>
    <button class="search-icon icon-close"></button>
  </div>
  <div class="search-container03">
    <form action="{{url('searchproduct')}}" method="get">
        @csrf
      <input type="text" name="search" id="search-terms" placeholder="Search terms..."  autocomplete="off"/>
      <button type="submit" class="search-icon"></button>
    </form>
  </div>
</div>
		  </li>
      
    
      <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span><span class="menu-span-col" id="addcart">
        <?php
        if(!empty(Session::get('product'))){
           $qty = 0;
               foreach (Session::get('product') as $key =>  $item) {
                   $qty += $item['qty'];
               }
        }   
       
  ?>  
        {{!empty(Session::get('product')) ? '['.$qty.']' : ''}}</span> </a></li>
      @if(empty(Session::get('customer_id')))
        <li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">{{Session::get('langfrontend')=='th'?'ลงชื่อเข้าใช้':'Sign In'}} </a></li>
      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('username')}}</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="{{url('/order-history')}}">{{Session::get('langfrontend')=='th'?'ประวัติการซื้อ':'Order History'}} </a>
            <a class="dropdown-item" href="{{url('/logout')}}">{{Session::get('langfrontend')=='th'?'ลงชื่อออก':'Logout'}} </a>
          </div>
        </li>
      @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu-span-col">|</span> {{Session::get('langfrontend')=='th'?'ภาษา':'Language'}} </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="javascript:void(0)" onclick="changelang('th');"><img src="{{asset('frontend/images/th.jpg')}}"> {{Session::get('langfrontend')=='th'?'ภาษาไทย':'TH'}} </a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="changelang('en');"><img src="{{asset('frontend/images/england.png')}}"> {{Session::get('langfrontend')=='th'?'ภาษาอังกฤษ':'EN'}} </a>
                    </div>
      </li>
    </ul>
  </div>


	  </div>
	</div>
  </nav>
    <!-- END nav -->

    <!--div class="hero-wrap hero-bread" style="background-image: url({{asset('frontend/images/BANNER-cart.jpg')}})">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            {{-- <h1 class="mb-0 bread">ตะกร้าสินค้า</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>ตะกร้าสินค้า</span></p> --}}
          </div>
        </div>
      </div>
    </div-->

    <!-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" id="pro-top">
			<div class="container">
				<div class="row">

				</div>
			</div>
        </section> -->
        
        <div class="section-back">

            <div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-about02.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">

                        <h1 class="title-cart"><span class="icon-shopping_cart"></span>ตะกร้า</h1>
    
                        <div class="shopping-cart">
                            <form action="{{url('storeorder')}}" method="POST">
                            @csrf
                            <div class="column-labels">
                                <label class="product-image">Image</label>
                                <label class="product-details">Product</label>
                                <label class="product-price" style="    color: #00b9eb;">ราคา</label>
                                <label class="product-quantity" id="product-quantity">จำนวน</label>
                                <label class="product-removal">Remove</label>
                                <label class="product-line-price" style="    color: #00b9eb;">รวม</label>
                                </div>
                                    @if(!empty(Session::get('product')) && count(Session::get('product')) > 0)
                                    <?php $items = Session::get('product');  
                                        $sum  = 0;
                                        $arr_cate = array();
                                        $arr_cate_id = array();
                                    ?>
                                        @foreach ($items as $key => $item)
                                        <?php $product = \App\Product::where('id_product',$item['product_id'])->first(); ?>
                                        <div class="product">
                                            <div class="product-image">
                                                <img src="{{url('storage/app/'.$product->product_img.'')}}">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-title">{{$product->product_name_th}}</div>
                                                <?php  $checkpromotion = \App\PromotionProduct::join('promotion_item','promotion_item.id_promotion','=','promotion.id_promotion')
                                                                                                ->where('product_1',$item['product_id'])
                                                                                                ->where('type',1)
                                                                                                ->where('datefrom','<=',date('Y-m-d'))
                                                                                                ->where('dateto','>=',date('Y-m-d'))
                                                                                                ->first();
                                                        
                                                ?>
                                                {{-- สินค้า promotion --}}
                                                <div>
                                                @if(!empty($checkpromotion ) && $item['qty'] >=  $checkpromotion->count_1)
                                                    <?php  $promotion_product = \App\Product::where('id_product',$checkpromotion->product_2)->first();  ?>
                                                    <p class="product-description">
                                                        <div class="row">
                                                            <?php  $count  = (floor($item['qty'] / $checkpromotion->count_1))*$checkpromotion->count_2;   ?>
                                                            <div class="col-3">แถมฟรี {{$count}} ชิ้น</div>
                                                            <div class="col-2">
                                                                <img src="{{url('storage/app/'.$promotion_product->product_img.'')}}" width="100%">
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="product-title">{{$promotion_product->product_name_th}}</div>
                                                            </div>
                                                        </div>
                                                    </p>
                                                @endif
                                                </div>
                                                {{-- end promotion --}}
                                            </div>
                                            @if( !empty($product->product_special_price) && ($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                <div class="product-price price{{$product->id_product}}" >{{number_format($product->product_special_price)}}</div>
                                                <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_special_price}}">
                                            @else 
                                                <div class="product-price price{{$product->id_product}}">{{number_format($product->product_normal_price)}}</div>
                                                <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_normal_price}}">
                                            @endif
                                            
                                                <!-- <div class="product-quantity">
                                                <input type="number" class="text-center" name="count[{{$item['product_id']}}]" value="{{$item['qty']}}" min="1">
                                            </div> -->
                                            <div class='product-quantity'>
                                            <div class='quantity_button'>
                                                <span class="qt" id="qy{{$product->id_product}}">{{$item['qty']}}</span>
                                                <span class="qt-plus" onclick="count('{{$product->id_product}}','add')">+</span>
                                                <span class="qt-minus" onclick="count('{{$product->id_product}}','sub')">-</span>
                                                <input type="hidden" class="text-center" id="inputqy{{$product->id_product}}" name="count[{{$item['product_id']}}]" value="{{$item['qty']}}" min="1">
                                            </div>
                                            </div>
                                            <div class="product-removal">
                                                <button type="button" class="remove-product" onclick="delitem({{$key}},{{$item['product_id']}})">Remove</button>
                                            </div>
                                            @if(  !empty($product->product_special_price) && ($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                            <div class="product-line-price totalitem{{$product->id_product}}" >{{number_format($product->product_special_price * $item['qty'])}}</div>
                                            <?php  $sum +=  $product->product_special_price * $item['qty'];?>
                                            @else 
                                            <div class="product-line-price totalitem{{$product->id_product}}">{{number_format($product->product_normal_price * $item['qty'])}}</div>
                                            <?php  $sum +=  $product->product_normal_price * $item['qty'];?>
                                            @endif
                                        </div>

                                        {{-- จับ --}}
                                        <?php 
                                        
                                            if(!empty($product->product_special_price)){
                                                        $total = $item['qty'] * $product->product_special_price ;
                                                    }else{
                                                        $total = $item['qty'] * $product->product_normal_price ;
                                                    }

                                                //  dd($total);
                                                    if(in_array($product->id_category,  $arr_cate_id) == false){
                                                        $data  = array(
                                                            'category_id'    =>  $product->id_category,
                                                            'total'           =>  $total
                                                        );
                                                        array_push($arr_cate, $data);
                                                        array_push($arr_cate_id, $product->id_category);

                                                    }else{
                                                        foreach($arr_cate as $key => $_item){
                                                            if($_item['category_id'] == $product->id_category){
                                                                $total =  $_item['total']+$total;
                                                                $arr_cate[$key]['total'] =   $total;
                                                            }
                                                        
                                                        }
                                                    }
                                        ?>
                                        @endforeach
                                   
                                        {{-- ส่วนลด --}}
                                        <?php $result  = $sum - GetdataController::checkprice($sum)['discount']; 
                                                $checkpromotion_dis = \App\PromotionProduct::where('promotion.type',2)
                                                                                            ->where('datefrom','<=',date('Y-m-d'))
                                                                                            ->where('dateto','>=',date('Y-m-d'))
                                                                                            ->first();
                                        
                                        ?>
                                        @if(count(GetdataController::checkprice($sum)['promotion']) > 0  || !empty($checkpromotion_dis ))
                                        <h1 class="title-cart"><span class="icon-shopping_cart"></span>ส่วนลด</h1>
                                        <div class="product ml-2">
                                            @foreach (GetdataController::checkprice($sum)['promotion'] as $_pro)
                                                <?php      $pro  = \App\PromotionProduct::where('id_promotion',$_pro['id_promotion'])->first(); ?>
                                                <div class="row mb-2">
                                                    <div class="col-9 ">{{$pro->promotion_title}}</div>
                                                    <input type="hidden" name="promotion[{{$_pro['id_promotion']}}]" value="{{$_pro['id_promotion']}}" >
                                                    <div class="col-3 text-right promotion-discount">{{number_format($_pro['total'],2,'.',',')}}</div>
                                                    <input type="hidden" name="total[{{$_pro['id_promotion']}}]" value="{{$_pro['total']}}" >
                                                </div>
                                            @endforeach
                                            @if(!empty( $checkpromotion_dis) && $result >= $checkpromotion_dis->total)
                                                @if($checkpromotion_dis->group == 'all')
                                                    @if($price >= $checkpromotion_dis->total)  
                                                    <div class="row mb-2">
                                                        <div class="col-9 mb-2">{{$checkpromotion_dis->promotion_title}}
                                                            <div class="row">
                                                                <?php $pro_free = \App\Product::where('id_product', $checkpromotion_dis->product)->first(); ?>
                                                                <div class="col-2">แถมฟรี</div>
                                                                <input type="hidden" name="promotion[{{ $checkpromotion_dis->id_promotion}}]" value="{{ $checkpromotion_dis->id_promotion}}" >
                                                                <input type="hidden" name="total[{{ $checkpromotion_dis->id_promotion}}]" value="0" >
                                                                <div class="col-2">
                                                                    <img src="{{url('storage/app/'.$pro_free->product_img.'')}}" width="100%">
                                                                </div>
                                                                <div class="col-8">{{$pro_free->product_name_th}}</div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-3 text-right promotion-discount">{{number_format($_pro['total'],2,'.',',')}}</div> --}}
                                                    </div>
                                                    @endif
                                                @elseif($checkpromotion_dis->group == 'item')
                                                    <?php 
                                                    $promotionitem = \App\PromotionProductItem::where('id_promotion',$checkpromotion_dis->id_promotion)->get();
                                                        foreach($promotionitem as $_promotionitem){
                                                            if(in_array($_promotionitem->product_1,  Session::get('product_arr')) == true){
                                                                $product_item =  \App\Product::where('id_product',$_promotionitem->product_1)->first(); 
                                                                $key = array_search($_promotionitem->product_1, Session::get('product_arr')); // ค้นหา index
                                                                if(!empty( $product_item->product_special_price)){
                                                                    $result_item +=  Session::get('product.'.$key.'.qty') * $product_item->product_special_price; 
                                                                }else{
                                                                    $result_item +=  Session::get('product.'.$key.'.qty') * $product_item->product_normal_price; 
                                                                }
                                                            }
                                                        }
                                                    ?>

                                                       @if($result_item >= $checkpromotion_dis->total)  
                                                        <div class="row mb-2">
                                                            <div class="col-9 mb-2">{{$checkpromotion_dis->promotion_title}}
                                                                <div class="row">
                                                                    <?php $pro_free = \App\Product::where('id_product', $checkpromotion_dis->product)->first(); ?>
                                                                    <div class="col-2">แถมฟรี</div>
                                                                    <input type="hidden" name="promotion[{{ $checkpromotion_dis->id_promotion}}]" value="{{ $checkpromotion_dis->id_promotion}}" >
                                                                    <input type="hidden" name="total[{{ $checkpromotion_dis->id_promotion}}]" value="0" >
                                                                    <div class="col-2">
                                                                        <img src="{{url('storage/app/'.$pro_free->product_img.'')}}" width="100%">
                                                                    </div>
                                                                    <div class="col-8">{{$pro_free->product_name_th}}</div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-3 text-right promotion-discount">{{number_format($_pro['total'],2,'.',',')}}</div> --}}
                                                        </div>
                                                        @endif  


                                                @else 

                                                @foreach($arr_cate as $_cate)
                                                    @if($_cate['category_id'] == $checkpromotion_dis->group)
                                                        @if($_cate['total'] >= $checkpromotion_dis->total)
                                                            <div class="row mb-2">
                                                                <div class="col-9 mb-2">{{$checkpromotion_dis->promotion_title}}
                                                                    <div class="row">
                                                                        <?php $pro_free = \App\Product::where('id_product', $checkpromotion_dis->product)->first(); ?>
                                                                        <div class="col-2">แถมฟรี</div>
                                                                        <input type="hidden" name="promotion[{{ $checkpromotion_dis->id_promotion}}]" value="{{ $checkpromotion_dis->id_promotion}}" >
                                                                        <input type="hidden" name="total[{{ $checkpromotion_dis->id_promotion}}]" value="0" >
                                                                        <div class="col-2">
                                                                            <img src="{{url('storage/app/'.$pro_free->product_img.'')}}" width="100%">
                                                                        </div>
                                                                        <div class="col-8">{{$pro_free->product_name_th}}</div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-3 text-right promotion-discount">{{number_format($_pro['total'],2,'.',',')}}</div> --}}
                                                            </div>
                                                       @endif
                                                    @endif
                                              
                                                @endforeach

                                                @endif
                                         
                                            @endif
                                            
                                        </div>
                                        @endif
                                    @endif
                                    {{-- total --}}
                            
                                    <div class="totals">
                                        <div class="totals-item">
                                            <label>ยอดรวม</label>
                                        <div class="totals-value" id="cart-subtotal">{{!empty(Session::get('product'))?number_format($sum,2,'.',',') : '0'}}</div>
                                    </div>
                                    <!-- <div class="totals-item">
                                    <label>Tax (5%)</label>
                                    <div class="totals-value" id="cart-tax">3.60</div>
                                    </div> -->
                                    <div class="totals-item">
                                        <label>ส่วนลด</label>
                                        <div class="totals-value" id="cart-discount">{!! Session::get('product') ?  number_format(GetdataController::checkprice($sum)['discount'],'2','.',',') :'0' !!}</div>
                                        <input type="hidden" name="price_discount" id="discount" value="{{Session::get('product') ? GetdataController::checkprice($sum)['discount'] : '0'}}">
                                    </div>
                                    <div class="totals-item">
                                        <label>ค่าส่ง</label>
                                        <div class="totals-value" id="cart-shipping">0</div>
                                    </div>
                                  
                                    <!-- <div class="totals-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6"></div>
                                        <div class="col-md-4 col-lg-4">
                                            <input class="w3-input w3-border" type="text" placeholder="ระบุโค้ดส่วนลด">
                                        </div>
                                        <div class="col-md-2 col-lg-2">
                                            <a href="#"><div class="totals-value2" id="">ยืนยัน</div></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div> -->
                                  
                                    <div class="totals-item totals-item-total">
                                        <label>ยอดรวมทั้งสิ้น</label>
                                        <div class="totals-value" id="cart-total">{{Session::get('product')? number_format($result,2,'.',',') : '0'}}</div>
                                        <input type="hidden" name="price_total" id="total" value="{{Session::get('product') ? $result : '0'}}">
                                    </div>
                                </div>
                                @if(!empty(Session::get('product')))
                                    <a href="javascript:void(0)"><button type="submit" class="checkout">ชำระเงิน</button></a>
                                @endif
                            </form>
                        </div>
                        
                    </div>

                </div>
            </div>
        
        </div>
        
        
        </div> 

		

		
	

        @include('frontend.inc_footer')
  

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
    var taxRate = 0.00;
  var shippingRate = 0.00; 
  var fadeTime = 300;
  
  
  /* Assign actions */
//   $('.product-quantity input').change( function() {
//     if(this.value < 1 ){
//             Swal.fire({
//                 text: 'กรุณากรอกจำนวนสินค้ามากกว่า 0 ',
//                 type: "warning",
//                 confirmButtonColor: '#41c8f5',
//             });
//             $(this).val(1); 

//             return false    
//     }
//         updateQuantity(this);
//   });

////get and change count
     function count(id,type){
            if(type == 'add'){
                console.log($('#qy'+id) );
                A = parseInt($('#qy'+id).text()) + 1;
                $('#qy'+id).html(A);
                $('#inputqy'+id).val(A);
                updateQuantity(A,id);
                countcart(id,type);
            }else{
                A = parseInt($('#qy'+id).text()) - 1;
                if(A < 1){
                    $('#qy'+id).html(1);
                    $('#inputqy'+id).val(1);
                    updateQuantity(1);
                }else{
                    $('#qy'+id).html(A);
                    $('#inputqy'+id).val(A);
                    updateQuantity(A,id);
                    countcart(id,type);
                }
               
            }

      
            
           
     }




  
  $('.product-removal button').click( function() {
    removeItem(this);
  });
  
  
  /* Recalculate cart */
  function recalculateCart()
  {
    var subtotal = 0;
    
    /* Sum up row totals */
    $('.product').each(function () {
       
      if($(this).children('.product-line-price').text() != ''){
        subtotal += parseFloat($(this).children('.product-line-price').text().replace(',',''));
      }
     
    });
    
   
    /* Calculate totals */
    var tax = subtotal * taxRate;
    var shipping = (subtotal > 0 ? shippingRate : 0);
    var discount = $('#discount').val();
    var total = numberWithCommas((subtotal + tax + shipping)-discount);
 
    
    /* Update totals display */
    $('.totals-value').fadeOut(fadeTime, function() {
      $('#cart-subtotal').html(numberWithCommas(subtotal));
     // $('#cart-discount').html(numberWithCommas(discount));
      $('#cart-tax').html(tax);
      $('#cart-shipping').html(shipping);
      $('#cart-total').html(total);
      $('#total').val(total);
      if(total == 0){
        $('.checkout').fadeOut(fadeTime);
      }else{
        $('.checkout').fadeIn(fadeTime);
      }
      $('.totals-value').fadeIn(fadeTime);
    });

    $('.section-back').load(location.href + " .section-back");
  }
  
  
  /* Update quantity */
  function updateQuantity(quantityInput , id)
  {
    /* Calculate line price */
    // var productRow = $(quantityInput).parent().parent();
    // var price = parseInt(productRow.children('.product-price').text().replace(',',''));
    var price = parseInt($('.price'+id).text().replace(',',''));
    console.log(price);
    var quantity = quantityInput;
    var linePrice = numberWithCommas(price * quantity);
    
    /* Update line price display and recalc cart totals */
    $('.totalitem'+id).each(function () {
      $(this).fadeOut(fadeTime, function() {
        $(this).text(linePrice);
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });  
    
  }
  
  
  /* Remove item from cart */
  function removeItem(removeButton)
  {
    /* Remove row from DOM and recalc cart total */
    var productRow = $(removeButton).parent().parent();
    productRow.slideUp(fadeTime, function() {
      productRow.remove();
      recalculateCart();
    });
  }


  //////////////////////convert to string with comma
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }



    ///////////////delitem
    function delitem(item,id){
        $.ajax({
            url: '{{ url("deleteitemincart")}}',
            type: 'GET',
            data : {'item' : item , 'id' : id},
            success: function(data) {
                $('.section-back').load(location.href + " .section-back");
            }
        });
    }

    </script>

<script>
$(".search-toggle").addClass("closed");

$(".search-toggle .search-icon").click(function (e) {
  if ($(".search-toggle").hasClass("closed")) {
    $(".search-toggle").removeClass("closed").addClass("opened");
    $(".search-toggle, .search-container03").addClass("opened");
    $("#search-terms").focus();
  } else {
    $(".search-toggle").removeClass("opened").addClass("closed");
    $(".search-toggle, .search-container03").removeClass("opened");
  }
});


function countcart(value,type){
    $.ajax({
            url: '{{ url("countproduct")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id' : value , 'type' : type},
            success: function(data) {
                $("#addcart").load(location.href + " #addcart");
            }
        });
    }
 </script>
    
  </body>
</html>