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
    
          <!-- Sweertalert -->
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
  </head>

  <style>
/* .bg-light{
    background-image: url({{asset('frontend/images/back-about.jpg')}}) !important;
    background-repeat: no-repeat;
  background-attachment: fixed;

} */
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

.ftco-navbar-light .navbar-nav > .nav-item > .veiw{
    color: #41c8f5 !important;
    font-size: 18px;
}

</style>
<?php use App\Http\Controllers\Frontend\GetdataController; 
      use Jenssegers\Agent\Agent;
        $agent = new Agent();
        $device  = $agent->device();
        $browser = $agent->browser();
        $UpdateDevice  = \App\CustomerDevice::where('device', $device)->where('browser',$browser)->first();

        if(!empty($UpdateDevice)){
            $UpdateDevice->count  =  $UpdateDevice->count  +1 ;
            $UpdateDevice->save();

        }else{
            $NewDevice = New \App\CustomerDevice;
            $NewDevice->device  = $device;
            $NewDevice->browser  = $browser;
            $NewDevice->count  = 1;
            $NewDevice->save();
        }

?>
@include('frontend.inc_header')
<?php $page = 'index'; ?>
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
                    <div class="icon mr-2 d-flex justify-content-center" id="social">
                            <a target="blank" href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-01.png"></a>
                            <a target="blank" href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-02.png"></a>
                            <a target="blank" href="https://line.me/ti/p/~@racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-03.png"></a>
                            <a target="blank" href="https://www.youtube.com/channel/UC8Af6KCm3uAnBeTya3rwuLA" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-04.png"></a>
                            <a target="blank" href="https://www.tiktok.com/@racerlighting?" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-05.png"></a>
                    </div>
						<!-- <div class="icon mr-2 d-flex justify-content-center" id="social">
                            <a href="https://line.me/ti/p/~@racerlighting" style="color: white;"><i class="fab fa-line"></i></a>
                        </div>
						<div class="icon mr-2 d-flex justify-content-center" id="social">
							<a href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><span class="icon-facebook"></span></a>
						</div>
						<div class="icon mr-2 d-flex justify-content-center" id="social">
							<a href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><span class="icon-instagram"></span></a>
					   </div> -->

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
					<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">{{Session::get('langfrontend')=='th'?'หน้าหลัก':'Home'}} <span class="menu-span-col">|</span> </a></li>
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
					
					<li class="nav-item dropdown">
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
            
                           
                        <!-- <li class="nav-item cta-colored" id="mobile"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[1]</a></li> -->
                        <li class="nav-item cta-colored" id="mobile"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>
                           
                            <?php
                            if(!empty(Session::get('product'))){
                                $qty = 0;
                                    foreach (Session::get('product') as $key =>  $item) {
                                        $qty += $item['qty'];
                                    }
                            }   
                            
                        ?>
                            {{!empty(Session::get('product')) ? '['.$qty.']' : ''}}
                       
                        <span class="menu-span-col"></span> </a></li>
		  <li class="nav-item dropdown" id="desk">
            <a href="{{url('cart')}}" class="nav-link veiw" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-shopping_cart"></span>
                <span class="countcart">
                    <?php
                    if(!empty(Session::get('product'))){
                        $qty = 0;
                            foreach (Session::get('product') as $key =>  $item) {
                                $qty += $item['qty'];
                            }
                    }   
                    
                ?>
                {{!empty(Session::get('product')) ? '['.$qty.']' : ''}}
                </span>
            </a>
            <div class="dropdown-menu " aria-labelledby="dropdown04" id="dropdown-menu-cart">
                <div class="showcart">
                @if(Session::get('product') && count(Session::get('product')) > 0 )
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-cart" style="overflow: scroll;;
    overflow-x: auto;
    overflow-y: auto;
    max-height: 300px;">
                                <form  method="POST">
                                    <input type="hidden" name="_token" value="rizEyrDsx29TVfoDQGwFU4xqrTTeJrmFUk89YMVO">    
                                    <div class="column-labels">
                                    </div>
                                        {{-- product --}}
                                        <?php $items = Session::get('product');  
                                                $sum  = 0;
                                        ?>
                                        @foreach ($items as $key => $item)
                                        <?php $product = \App\Product::where('id_product',$item['product_id'])->first(); ?>
                                        <div class="product">
                                            <div class="product-image">
                                                <img src="{{url('storage/app/'.$product->product_img.'')}}">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-title">{{$product->product_name_th}}</div>
                                                
                                            </div>
                                            @if(($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                <div class="product-price price{{$product->id_product}}" >{{number_format($product->product_special_price)}}</div>
                                                <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_special_price}}">
                                            @else 
                                                <div class="product-price price{{$product->id_product}}">{{number_format($product->product_normal_price)}}</div>
                                                <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_normal_price}}">
                                            @endif                                
                                            <div class="product-quantity">
                                                <div class="quantity_button">
                                                    <span class="qt" id="qy{{$product->id_product}}">{{$item['qty']}}</span>
                                                    <span class="qt-plus" onclick="count('{{$product->id_product}}','add')">+</span>
                                                    <span class="qt-minus" onclick="count('{{$product->id_product}}','sub')">-</span>
                                                    <input type="hidden" class="text-center" id="inputqy{{$product->id_product}}" name="count[{{$item['product_id']}}]" value="{{$item['qty']}}" min="1">
                                                </div>
                                            </div>
                                            <div class="product-removal">
                                                <button type="button" class="remove-product" onclick="delitem({{$key}},{{$item['product_id']}})">Remove</button>
                                            </div>
                                            
                                            @if(!empty($product->product_special_price) && ($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                <div class="product-line-price totalitem{{$product->id_product}}" >{{number_format($product->product_special_price * $item['qty'])}}</div>
                                                <?php  $sum +=  $product->product_special_price * $item['qty'];?>
                                                @else 
                                                <div class="product-line-price totalitem{{$product->id_product}}">{{number_format($product->product_normal_price * $item['qty'])}}</div>
                                                <?php  $sum +=  $product->product_normal_price * $item['qty'];?>
                                            @endif
                                        </div>
                                        @endforeach
                                        
                                        {{-- total --}}
                                                                
                                        <!-- <div class="totals">
                                            <div class="totals-item">
                                                <label>ยอดรวม</label>
                                            <div class="totals-value" id="cart-subtotal" style="">{{!empty(Session::get('product'))?number_format($sum) : '0'}}</div>
                                        </div>
                                        <div class="totals-item">
                                            <label>ค่าส่ง</label>
                                            <div class="totals-value" id="cart-shipping" style="">0</div>
                                        </div>
                                        <div class="totals-item totals-item-total">
                                            <label>ยอดรวมทั้งสิ้น</label>
                                            <div class="totals-value" id="cart-total" style="">{{!empty(Session::get('product'))?number_format($sum) : '0'}}</div>
                                            <input type="hidden" name="price_total" id="total" value="{{Session::get('product') ? $sum : '0'}}">
                                        </div>
                                        </div>
                                        {{-- <a href="javascript:void(0)"><button type="submit" class="checkout">payment</button></a> --}}
                                        <a href="{{url('cart')}}"><button type="button" class="checkout">ตะกร้าสินค้า</button></a> -->
                                </form>
                                
                            </div>

                            <div class="totals">
                                            <div class="totals-item">
                                                <label>ยอดรวม</label>
                                            <div class="totals-value" id="cart-subtotal" style="">{{!empty(Session::get('product'))?number_format($sum,'2','.',',') : '0'}}</div>
                                        </div>
                                        <div class="totals-item">
                                            <label>ส่วนลด</label>
                                            <div class="totals-value" id="cart-shipping" style="">{!! Session::get('product') ?  number_format(GetdataController::checkprice($sum)['discount'],'2','.',',') :'0' !!}</div>
                                            <input type="hidden"  id="discount" value="{{Session::get('product') ? GetdataController::checkprice($sum)['discount'] : '0'}}">
                                            
                                        </div>
                                        <div class="totals-item">
                                            <label>ค่าส่ง</label>
                                            <div class="totals-value" id="cart-shipping" style="">0</div>
                                        </div>
                                        <div class="totals-item totals-item-total">
                                            <label>ยอดรวมทั้งสิ้น</label>
                                            <?php  $result  = $sum - GetdataController::checkprice($sum)['discount'];  ?>
                                            <div class="totals-value" id="cart-total" style="">{{!empty(Session::get('product'))?number_format($result,'2','.',',') : '0.00'}}</div>
                                        </div>
                                        </div>
                                        {{-- <a href="javascript:void(0)"><button type="submit" class="checkout">payment</button></a> --}}
                                        <a href="{{url('cart')}}"><button type="button" class="checkout">ตะกร้าสินค้า</button></a>
                            
                        </div>

                    </div>
                </div>
                @else 
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            คุณยังไม่มีรายการสินค้าในตะกร้า
                        </div>
                    </div>
                </div>
                @endif
                </div>
            </div>
           
		  </li>
					<!-- <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>{{!empty(Session::get('product')) ? '['.count(Session::get('product')).']' : ''}}<span class="menu-span-col">|</span> </a></li> -->
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

    <section id="home-section" class="hero">
		<div class="home-slider owl-carousel">

			@foreach($data as $datas)
				{{-- @if(!empty($datas->slide_image)) --}}
				<div class="slider-item">
                    <a href="{{!(empty($datas->url))?$datas->url:'javascript:void(0)'}}">
                        <img src="{{url('storage/app/'.$datas->slide_image)}}"  style="width: 100%; height:auto;">
                   
				{{-- @else --}}
				{{-- <iframe class="slider-item" src="{{$datas->slide_video}}?loop=1&controls=0" style="width: 100%; height:400px;" ></iframe> --}}
				{{-- <div class="slider-item" style="background-image: url({{url('storage/app/'.$datas->slide_image)}});"> --}}
				{{-- @endif --}}
                    <div class="overlay"></div>
                </a>
                    
						<div class="container">
							<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					
							</div>
						</div>
				</div>
				
			@endforeach

		</div>

    </section>

	<div class="section-back" >

        <!-- <div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-about.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;"> -->
        <div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-index.jpg')}}) !important;    background-size: cover !important;
    background-position: top center !important;
    background-attachment: fixed !important;
    width: 100%;
    max-width: 100%;">

		<div class="container">
			<div class="row">
                @foreach($subbanner as $sub)

                    <div class="col-md-6" >
                        <a href="{{!(empty($sub->subbanner_link))?$sub->subbanner_link:'javascript:void(0)'}}"><img class="pro-img" src="{{url('storage/app/'.$sub->subbanner_image)}}"></a>
                    </div>
                    
                @endforeach
				
			</div>
        </div>
        <?php  $i = '01';
            // dd($cate);
         ?>
        @foreach ($cate as $_cate)
            <?php $product = \App\Product::where('id_category',$_cate->id_category)->get();
                $banner = \App\Banner::where('category_id',$_cate->id_category)->orderBy('banner_number','ASC')->get();
                $subcate = \App\SubCategory::where('id_category',$_cate->id_category)->orderby('sort')->limit(4)->get();
                $count_sub = count(\App\SubCategory::where('id_category',$_cate->id_category)->get());
                $count = $count_sub - 4;
                if( $count > 0){
                    $other_subcate = \App\SubCategory::where('id_category',$_cate->id_category)->skip(4)->take($count)->get();
                }
                // dd($banner);
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
                                            <span class="pro-title" id="margin-pro"><a style="color: #00b9e9" href="{{url('product/'.$_cate->category_name_th)}}">{{strtoupper ($_cate->category_name_th)}}</a></span>
                                            <span class="popular" id="margin-pro"> <a href="{{url('product-popular/'.$_cate->category_name_th.'')}}" class="next-pro" id="margin-pro">#Popular</a></span>
                                            @foreach ($subcate as $_subcate)
                                            <a href="{{url('product/'.$_cate->category_name_th.'/'.$_subcate->subcategory_name_th.'')}}" class="next-pro" id="margin-pro"> {{ucwords($_subcate->subcategory_name_th)}}</a>
                                            @endforeach
                                            @if($count > 0)
                                            <span class="dropdown">
                                                <span class="next-pro" id="margin-pro">All Product</span>
                                                <div class="dropdown-content">
                                                        @foreach ($other_subcate as $_other)
                                                        <a href="{{url('product/'.$_cate->category_name_th.'/'.$_other->subcategory_name_th.'')}}"> {{ucwords($_other->subcategory_name_th)}}</a>
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
                                    @if(!empty($banner))
                                        <div class="col-md-6" id="pro-mar">
                                            @if(!empty($banner[0]->banner_link))
                                                <a href="{{url('product/'.$_cate->category_name_th.'')}}"><img class="pro-img3" src="{{url('storage/app/'.$banner[0]->banner_image)}}"></a>
                                            @else
                                                <img class="pro-img3" src="{{url('storage/app/'.$banner[0]->banner_image)}}">
                                            @endif

                                        </div>
                                    @endif
                                    <div class="col-md-6" id="pro-mar">
                                        @if(!empty($banner))
                                            <div class="container" id="con-pro">
                                                <div class="row" >
                                                    <div class="col-md-6" id="pro-mar">
                                                        @if(!empty($banner[1]->banner_link))
                                                            <a href="{{url(''.$banner[1]->banner_link.'')}}"><img class="pro-img3" src="{{url('storage/app/'.$banner[1]->banner_image)}}"></a>
                                                        @else
                                                            <img class="pro-img3" src="{{url('storage/app/'.$banner[1]->banner_image)}}">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6" id="pro-mar">
                                                        @if(!empty($banner[2]->banner_link))
                                                            <a href="{{url(''.$banner[2]->banner_link.'')}}"><img class="pro-img3" src="{{url('storage/app/'.$banner[2]->banner_image)}}"></a>
                                                        @else
                                                            <img class="pro-img3" src="{{url('storage/app/'.$banner[2]->banner_image)}}">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6" id="pro-mar">
                                                        @if(!empty($banner[3]->banner_link))
                                                            <a href="{{url(''.$banner[3]->banner_link.'')}}"><img class="pro-img3" src="{{url('storage/app/'.$banner[3]->banner_image)}}"></a>
                                                        @else
                                                            <img class="pro-img3" src="{{url('storage/app/'.$banner[3]->banner_image)}}">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6" id="pro-mar">
                                                        @if(!empty($banner[4]->banner_link))
                                                            <a href="{{url(''.$banner[4]->banner_link.'')}}"><img class="pro-img3" src="{{url('storage/app/'.$banner[4]->banner_image)}}"></a>
                                                        @else
                                                            <img class="pro-img3" src="{{url('storage/app/'.$banner[4]->banner_image)}}">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
                        <a href="{{url('news')}}"><img class="pro-img2" src="{{url('storage/app/'.$bannernew->slide_image)}}"></a>
					</div>

				</div>
			</div>

			<div class="container">
				<div class="row">

					<div class="col-md-12" >
						<center><img class="pro-img4" src="{{asset('frontend/images/banner-fot.jpg')}}"></center>
					</div>
				

				</div>
			</div>

		</div>
		

	</div>

	</div>

	<!-- <footer class="ftco-footer ftco-section">
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
                        <br>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">02 811 1741</span></a></li>
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
        </footer> -->
       @include('frontend.inc_footer')


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
  <!-- Sweert Alert -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> 



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



    var A = "{{Session::get('success')}}";
    if(A){
        Swal.fire({
            text:A,
            type: 'success',
        });
    }



    //////cart
    var taxRate = 0.00;
  var shippingRate = 0.00; 
  var fadeTime = 300;

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
      subtotal += parseFloat($(this).children('.product-line-price').text().replace(',',''));
    });
    
    /* Calculate totals */
    var tax = subtotal * taxRate;
    var discount = $('#discount').val();
    var shipping = (subtotal > 0 ? shippingRate : 0);
    var total = numberWithCommas((subtotal + tax + shipping)-discount);
    
    /* Update totals display */
    $('.totals-value').fadeOut(fadeTime, function() {
      $('#cart-subtotal').html(numberWithCommas(subtotal));
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

    $(".countcart").load(location.href + " .countcart");
    $(".showcart").load(location.href + " .showcart");
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
                $(".countcart").load(location.href + " .countcart");
                $(".showcart").load(location.href + " .showcart");
            }
        });
    }

    //////+- สินค้า

    function countcart(value,type){
    $.ajax({
            url: '{{ url("countproduct")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id' : value , 'type' : type},
            success: function(data) {
                $(".countcart").load(location.href + " .countcart");
            }
        });
    }

 </script>
    
  </body>
</html>