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

  </head>

  <style>
    .img-logo {
        width: 60%;
}


.button {
    background: #00c4ef;
    border: 1px solid #00c4ef;
    color: #fff !important;
    font-size: 16px;
    padding: 4px 0px;
    width: inherit;
    text-align: center;
    max-width: 100%;
    border-radius: 5px;
}
.name-pro{
  font-size: 16px;
  display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0px;
    padding: 0px 4px;
}
.price-pro{
  font-size: 18px;
  color: #00b9e9 !important;

}
.price-line{
  text-decoration: line-through;
  margin-bottom: 0px;
}


#pro-top{
    margin-top: 40px;
}
.pro-img{
    width: 100%;
    height: 260px;
    object-fit: contain;
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
    border: 1px solid #ddd;
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
    border: 1px solid #ddd;
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

/* .prd-top .button{
    margin-top: 20px;
} */

      
  </style>

@include('frontend.inc_header')
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
                                <span class="text"> : วันจันทร์ - วันศุกร์ : 08.00น. - 17.00น.</span></div>
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
                                                
                                                @if(($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
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
                                            <a href="{{url('cart')}}"><button type="button" class="checkout">view cart</button></a> -->
                                    </form>
                                    
                                </div>

                                <div class="totals">
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
                                            <a href="{{url('cart')}}"><button type="button" class="checkout">view cart</button></a>
                                
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
                                <a class="dropdown-item" href="#TH"><img src="{{asset('frontend/images/th.jpg')}}"> TH</a>
                                <a class="dropdown-item" href="#EN"><img src="{{asset('frontend/images/england.png')}}"> EN</a>
                            </div>
                        </li>
                    </ul>
                </div>
    
    
              </div>
        </div>
    </nav>
    <!-- END nav -->
    <div id="bannernew">
        @if(!empty($cate->category_img))
        <div class="hero-wrap hero-bread" style="background-image: url({{url('storage/app/'.$cate->category_img)}});">
        @else 
        <div class="hero-wrap hero-bread" style="background-image: url({{asset('frontend/images/all-BANNERS.jpg')}});">
        @endif
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        {{-- @if($cate == 'search')
                        <h1 class="mb-0 bread">ค้นหาสินค้า</h1> --}}
                        {{-- <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>{{$cate->category_name_th}}</span></p> --}}
                        {{-- @else 
                        <h1 class="mb-0 bread">{{$cate->category_name_th}}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>{{$cate->category_name_th}}</span></p>
                        @endif --}}
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" id="pro-top">
			<div class="container">
				<div class="row">

				</div>
			</div>
        </section> -->
        
        <div class="section-back" style="background-image: url({{asset('frontend/images/back-about.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4" id="faq">
        
                        <div class="pxlr-club-faq">
                            <div class="content">
                                <div class="panel-group" id="accordion" role="tablist"
                                     aria-multiselectable="true">
                                    {{-- menu --}}
                                    <?php $i = 1; ?>
                                    @foreach ($menu as $item)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="heading{{$i}}" role="tab">
                                                <h4 class="panel-title">
                                                    @if($cate == 'search')
                                                        <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}"   aria-expanded="false" aria-controls="collapse{{$i}}">{{strtoupper($item->category_name_th)}}</a>
                                                    @else
                                                        @if($item->id_category == $cate->id_category)
                                                        <!-- <a  class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">{{strtoupper($item->category_name_th)}}<i class="pull-right fa fa-plus"></i></a> -->
                                                        <a  class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}" onclick="selectproduct({{$item->id_category}},'null')">{{strtoupper($item->category_name_th)}}</a>
                                                        @else 
                                                        <!-- <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">{{strtoupper($item->category_name_th)}}<i class="pull-right fa fa-plus"></i></a> -->
                                                        <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="false" onclick="selectproduct({{$item->id_category}},'null')" aria-controls="collapse{{$i}}">{{strtoupper($item->category_name_th)}}</a>
                                                        @endif
                                                    @endif
                                                   
                                                </h4>
                                            </div>
                                            @if($cate == 'search')
                                                <div class="panel-collapse collapse" id="collapse{{$i}}" role="tabpanel"  aria-labelledby="heading{{$i}}">
                                            @else 
                                                @if($item->id_category == $cate->id_category)
                                                    <div class="panel-collapse collapse show" id="collapse{{$i}}" role="tabpanel"  aria-labelledby="heading{{$i}}">
                                                @else 
                                                    <div class="panel-collapse collapse" id="collapse{{$i}}" role="tabpanel"  aria-labelledby="heading{{$i}}">
                                                @endif
                                            @endif
                                                <div class="panel-body pxlr-faq-body">
                                                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                                        <?php  $subcate = \App\SubCategory::where('id_category',$item->id_category)->get();?>
                                                        @foreach ($subcate as $_sub)
                                                        <button type="button" class="nav-link text-left" data-toggle="pill" role="tab" onclick="selectproduct({{$item->id_category}},{{$_sub->id_subcategory}})" aria-selected="true" style="   cursor: pointer; ">
                                                            <i class="mdi mdi-help-circle"></i> {{$_sub->subcategory_name_th}}
                                                        </button>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                    @endforeach

                                     {{-- end --}}
        
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- start  --}}
                    <div class="col-lg-8">
                        <div class="tab-content" id="faq-tab-content">
                            <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="tab1">
                                <div class="accordion" id="accordion-tab-1">
                                    <div class="card" id="showhtml">
                                        <div class="card-header" id="accordion-tab-1-heading-1">
                                            <h5>
                                                @if($cate == 'search')
                                                    <button class="btn btn-link btntitle" type="button" data-toggle="collapse"  aria-expanded="false" >ค้นหาสินค้า  "{{$keyword}}"</button>
                                                @else
                                                    <button class="btn btn-link btntitle" type="button" data-toggle="collapse"  aria-expanded="false" >{{strtoupper($cate->category_name_th)}}</button>
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                            <div class="card-body">
        
                                                <div class="container">
                                                    <div class="row" id="contentproduct">
                                                      @if(!empty($products))
                                                            @foreach ($products as $item)
                                                            <div class="col-md-4 col-lg-4 mb-4" >
                                                            <div class="prd-top">
                                                                    <a href="{{url('detail-product/'.$item->id_product.'')}}"><img class="pro-img" src="{{url('storage/app/'.$item->product_img)}}"></a>
                                                                    <center><p class="name-pro">{{!empty($item->product_name_th) ? $item->product_name_th : '' }}</p><center>
                                                                    
                                                                    @if(!empty(	$item->product_special_price))
                                                                        <center><p class="price-line">฿{{number_format($item->product_special_price,2)}}</p><center>
                                                                    @endif
                                                                    
                                                                    @if(!empty(	$item->product_special_price) || !empty($item->product_normal_price))
                                                                        @if(!empty(	$item->product_special_price))
                                                                        <center><p class="price-pro">฿{{number_format($item->product_special_price,2)}}</p><center>
                                                                        @else 
                                                                        <center><p class="price-pro">฿{{number_format($item->product_normal_price,2)}}</p><center>
                                                                        @endif
                                                                    @endif
                                                                    </div>

                                                                    @if($item->id_category == 10 || $item->id_category == 11  )
                                                                    <center><a href="https://line.me/ti/p/~@racerlighting" ><p class="button"><span class="icon-shopping_cart"></span> สอบถามเพิ่มเติม</p></a></center>
                                                                    @else 
                                                                    <center><a href="javascript:void(0)" onclick="addcart('{{$item->id_product}}')"><p class="button"><span class="icon-shopping_cart"></span> เพิ่มในตะกร้า</p></a></center>
                                                                     @endif 
                                                                    
                                                            </div>
                                                            @endforeach
                                                       @elseif(!empty($popular)) 
                                                            @foreach ($popular as $item)
                                                            <?php $product = \App\Product::where('id_product',$item->id_product)->first(); ?>
                                                            <div class="col-md-4 col-lg-4 mb-4" >
                                                                    <a href="{{url('detail-product/'.$product->id_product.'')}}"><img class="pro-img" src="{{url('storage/app/'.$product->product_img)}}"></a>
                                                                    <center><p class="name-pro">{{!empty($product->product_name_th) ? $product->product_name_th : '' }}</p><center>
                                                                    @if(!empty(	$product->product_special_price))
                                                                        <center><p class="price-line">฿{{number_format($product->product_normal_price,2)}}</p><center>
                                                                    @endif
                                                                    @if(!empty(	$product->product_special_price))
                                                                    <center><p class="price-pro">฿{{number_format($product->product_special_price,2)}}</p><center>
                                                                    @else 
                                                                    <center><p class="price-pro">฿{{number_format($product->product_normal_price,2)}}</p><center>
                                                                    @endif
                                                                    <center><a href="javascript:void(0)" onclick="addcart('{{$product->id_product}}')"><p class="button"><span class="icon-shopping_cart"></span> เพิ่มในตะกร้า</p></a></center>
                                                            </div>
                                                            @endforeach
                                                        @else
                                                            @if(count($search) > 0)
                                                            @foreach ($search as $item)
                                                                <?php $product = \App\Product::where('id_product',$item)->first(); ?>
                                                                <div class="col-md-4 col-lg-4 mb-4" >
                                                                        <a href="{{url('detail-product/'.$product->id_product.'')}}"><img class="pro-img" src="{{url('storage/app/'.$product->product_img)}}"></a>
                                                                        <center><p class="name-pro">{{!empty($product->product_name_th) ? $product->product_name_th : '' }}</p><center>
                                                                        @if(!empty(	$product->product_special_price))
                                                                            <center><p class="price-line">฿{{number_format($product->product_normal_price,2)}}</p><center>
                                                                        @endif
                                                                        @if(!empty(	$product->product_special_price))
                                                                            <center><p class="price-pro">฿{{number_format($product->product_special_price,2)}}</p><center>
                                                                        @else 
                                                                            <center><p class="price-pro">฿{{number_format($product->product_normal_price,2)}}</p><center>
                                                                        @endif
                                                                            <center><a href="javascript:void(0)" onclick="addcart('{{$product->id_product}}')"><p class="button"><span class="icon-shopping_cart"></span> เพิ่มในตะกร้า</p></a></center>
                                                                </div>
                                                            @endforeach
                                                            @else 
                                                            ไม่พบสินค้า
                                                            @endif
                                                       @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end --}}
                </div>
            </div>        
        </div> 

        {{-- modaL --}}
        <div class="modal fade bd-example-modal-lg hide" id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" >
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-sm">
                                    <h5 style="color: #00c4ef">คุณได้เพิ่มสินค้าลงในตะกร้า</h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body" id="sub">
                            
                        </div>
                </div>
            </div>
        </div>
        {{-- end --}}

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
   <script>
    function selectproduct(main,sub){
        $.ajax({
            url: '{{ url("showproduct")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'main':main , 'sub' : sub},
            success: function(data) {
                
                 text = JSON.parse(data);   

                $('#showhtml').html(text['html']);
                $('#bannernew').html(text['banner']);
                ///////add cart
                function addcart(value){
                    $.ajax({
                            url: '{{ url("addcart")}}/'+value,
                            type: 'GET',
                            dataType: 'HTML',
                            success: function(data) {
                                $("#addcart").load(location.href + " #addcart");
                            //  $(".addcart").attr('style','color:#41c8f5 !important;padding:0;');
                            }
                        });
                    }
            }
        });
    }  

    function addcart(id){
    $.ajax({
            url: '{{ url("addcart")}}/'+id,
            type: 'GET',
            dataType: 'HTML',
            success: function(data) {
                $(".countcart").load(location.href + " .countcart");
                $(".showcart").load(location.href + " .showcart");
                $('#sub').html(data);
                $('#main').modal('toggle');
                setTimeout(function() {
                    $('#main').modal('hide');
                }, 3000);
            //  $(".addcart").attr('style','color:#41c8f5 !important;padding:0;');
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
    var shipping = (subtotal > 0 ? shippingRate : 0);
    var total = numberWithCommas(subtotal + tax + shipping);
    
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
                $(".showcart").load(location.href + " .showcart");
            }
        });
    }
 </script>


  </body>
</html>