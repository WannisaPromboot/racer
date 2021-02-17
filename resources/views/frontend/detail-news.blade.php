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

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


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
    height: 245px;
    object-fit: cover;
}
/* .pagination {
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
} */


.img-fluid {
    max-width: 100%;
    /* height: 400px; */
    height: auto;
    margin-bottom: 20px;
    object-fit: cover;
    width: 60%;
}
.sub-pan{
    font-family: 'Prompt', sans-serif;
}
.img-gallery {
    width: 100%;
    /* height: 180px; */
    height: auto;
    object-fit: cover;
    margin-bottom: 40px;
}
.fancybox-navigation .fancybox-button {
    background-clip: content-box;
    height: 100px;
    opacity: 0;
    position: absolute;
    top: calc(50% - 59px);
    width: 70px;
    z-index: 99999999999999;
    margin-top: calc(40% - 200px);
}

/* --------end news----------- */



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
.fancybox-navigation .fancybox-button {
    margin-top: calc(50% - 100px);
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
    height: 390px;
    object-fit: cover;
}
.demo {
    opacity: 0.6;
    width: 100%;
    height: 115px;
    object-fit: cover;
}
.fancybox-navigation .fancybox-button {
    margin-top: calc(100% - 0px);
}
.img-fluid {
    max-width: 100%;
    /* height: 300px; */
    height: auto;
    margin-bottom: 20px;
    object-fit: cover;
    width: 80%;
}
.img-gallery {
    width: 100%;
    /* height: 340px; */
    height: auto;
    object-fit: cover;
    margin-bottom: 40px;
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
.fancybox-navigation .fancybox-button {
    margin-top: calc(110% - 0px);
}
.img-fluid {
    /* height: 275px; */
    height: auto;
}

}


      
  </style>

@include('frontend.inc_header')
<?php $page = 'detail-news';
use App\Http\Controllers\Frontend\GetdataController; 
 ?>
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
                                    <div class="totals-value" id="cart-subtotal" style="">{{!empty(Session::get('product'))?number_format($sum , '2' ,'.',',') : '0'}}</div>
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
                                    <div class="totals-value" id="cart-total" style="">{{!empty(Session::get('product'))?number_format($sum,'2','.',',') : '0'}}</div>
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

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('frontend/images/Banner-NEWS.png')}}">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            {{-- <h1 class="mb-0 bread">รายละเอียดข่าวสาร</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>รายละเอียดข่าวสาร</span></p> --}}
          </div>
        </div>
      </div>
    </div>

        
    <div class="section-back">

        <div class="site-section bg-light">

            <div class="container">
                <div class="row">
                
                    <div class="col-md-12" id="">
                        <center>
                            <img class="img-fluid img-prod" src="{{url('storage/app/'.$data->new_image)}}" alt="Colorlib Template">
                        </center>
                    </div>
        
                </div>
            </div>

            <div class="container">
                <div class="row">
                
                    <div class="col-md-12" id="">
                        <div class="welcome_docmed_info">
                            <h3 class="title-pan">{{$data->new_th}}</h3>
                            <p class="sub-pan">{!!$data->description_new_th!!}</p>
                            {{-- <p class="sub-pan">มีท่อนต่างๆ ของ Lorem Ipsum ให้หยิบมาใช้งานได้มากมาย แต่ส่วนใหญ่แล้วจะถูกนำไปปรับให้เป็นรูปแบบอื่นๆ อาจจะด้วยการสอดแทรกมุกตลก หรือด้วยคำที่มั่วขึ้นมาซึ่งถึงอย่างไรก็ไม่มีทางเป็นเรื่องจริงได้เลยแม้แต่น้อย ถ้าคุณกำลังคิดจะใช้ Lorem Ipsum สักท่อนหนึ่ง คุณจำเป็นจะต้องตรวจให้แน่ใจว่าไม่มีอะไรน่าอับอายซ่อนอยู่ภายในท่อนนั้นๆ ตัวสร้าง Lorem Ipsum บนอินเทอร์เน็ตทุกตัวมักจะเอาท่อนที่แน่ใจแล้วมาใช้ซ้ำๆ ทำให้กลายเป็นที่มาของตัวสร้างที่แท้จริงบนอินเทอร์เน็ต ในการสร้าง Lorem Ipsum ที่ดูเข้าท่า ต้องใช้คำจากพจนานุกรมภาษาละตินถึงกว่า 200 คำ ผสมกับรูปแบบโครงสร้างประโยคอีกจำนวนหนึ่ง เพราะฉะนั้น Lorem Ipsum ที่ถูกสร้างขึ้นใหม่นี้ก็จะไม่ซ้ำไปซ้ำมา ไม่มีมุกตลกซุกแฝงไว้ภายใน หรือไม่มีคำใดๆ ที่ไม่บ่งบอกความหมาย</p> --}}
                                                        
                            
                        </div>
                    </div>
        
                </div>
            </div>

            <div class="container">
                <div class="row">
                
                    <div class="col-md-12" id="">
                        <div class="welcome_docmed_info">
                            <h3 class="title-pan">Gallery Photo</h3>
                        
                                                        
                            
                        </div>
                    </div>
        
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @foreach($img as $imgs)
                        <div class="col-md-3" id="">
                            <a data-fancybox="gallery" href="{{url('storage/app/'.$imgs->new_gallery_image)}}"><img class="img-gallery" src="{{url('storage/app/'.$imgs->new_gallery_image)}}" alt="Colorlib Template"></a>
                        </div>
                    @endforeach
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
            }
        });
    }

    
 </script>

    
  </body>
</html>