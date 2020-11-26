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
		  <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">หน้าหลัก</a></li>
		  <li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สินค้า</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown04">
			  <?php $menu = \App\Category::orderby('sort')->get(); ?>
                @foreach ($menu as $_menu)
                    <a class="dropdown-item" href="{{url('product/'.$_menu->id_category.'')}}">{{$_menu->category_name_th}}</a>
                @endforeach
		  </div>
		</li>
		  <li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link">เกี่ยวกับเรา</a></li>
		  <!-- <li class="nav-item"><a href="news.html" class="nav-link">ข่าวสารและโปรโมชั่น</a></li> -->
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ข่าวสารและโปรโมชั่น</a>
			<div class="dropdown-menu" aria-labelledby="dropdown04">
				<a class="dropdown-item" href="{{url('/news')}}">ข่าวสาร</a>
				<a class="dropdown-item" href="{{url('/promotion')}}">โปรโมชั่น</a>
			</div>
		  </li>
		  <li class="nav-item"><a href="{{url('/article')}}" class="nav-link">บทความ</a></li>
		  <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">ติดต่อเรา</a></li>

		</ul>
	</div>
	<div class="col-md-4" id="pay-nemu">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link">เข้าสู่ระบบ</a></li>
		  <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[1]</a></li>
		  <li class="nav-item"><a href="#" class="nav-link"><img src="{{asset('frontend/images/en.jpg')}}"></a></li>
		</ul>
	</div>


	  </div>
	</div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('frontend/images/banner-detail.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Lighting</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>Lighting</span></p>
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
        
        <div class="section-back">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4" id="faq">
        
                        <div class="pxlr-club-faq">
                            <div class="content">
                                <div class="panel-group" id="accordion" role="tablist"
                                     aria-multiselectable="true">
        
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingOne" role="tab">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Lighting<i class="pull-right fa fa-plus"></i></a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseOne" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="panel-body pxlr-faq-body">
                                                <!-- <a href="#"><p>Anim pariatur</p></a>
                                                 <a href="#"><p>Anim pariatur</p></a> -->
                                                 <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                                    <a href="#tab1" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                                                        <i class="mdi mdi-help-circle"></i> Lighting
                                                    </a>
                                                    <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                                                        <i class="mdi mdi-account"></i> เสื้อผู้หญิง
                                                    </a>
                                                    <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                                                        <i class="mdi mdi-account-settings"></i> เสื้อแฟชั่น
                                                    </a>
                                                    <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                                                        <i class="mdi mdi-heart"></i> แม่และเด็ก
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingTwo" role="tab">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="#collapseTwo"
                                                   aria-expanded="false" aria-controls="collapseTwo">บ้านและส่วน<i
                                                            class="pull-right fa fa-plus"></i></a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body pxlr-faq-body">
                                                <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                                    <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="true">
                                                        <i class="mdi mdi-help-circle"></i> ต้นไม้/ดอกไม้
                                                    </a>
                                                    <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                                                        <i class="mdi mdi-account"></i> อุปกรณ์ทำความสะอาด
                                                    </a>
                                                    <!-- <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                                                        <i class="mdi mdi-account-settings"></i> เครื่องใช้ในครัว
                                                    </a>
                                                    <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                                                        <i class="mdi mdi-heart"></i> แม่และเด็ก
                                                    </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingThree" role="tab">
                                            <h4 class="panel-title"><a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion"
                                                                       href="#collapseThree"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapseThree">เครื่องใช้ในครัว <i
                                                            class="pull-right fa fa-plus"></i></a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseThree" role="tabpanel"
                                             aria-labelledby="headingThree">
                                            <div class="panel-body pxlr-faq-body">
                                                <div class="panel-body pxlr-faq-body">
                                                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                                        <a href="#tab1" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                                                            <i class="mdi mdi-help-circle"></i> อุปกรณ์ทำอาหาร
                                                        </a>
                                                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                                                            <i class="mdi mdi-account"></i> ชุดอุปกรณ์ใส่อาหาร
                                                        </a>
                                                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                                                            <i class="mdi mdi-account-settings"></i> ชุดตกแต่งห้องครัว
                                                        </a>
                                                        <!-- <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                                                            <i class="mdi mdi-heart"></i> แม่และเด็ก
                                                        </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingFour" role="tab">
                                            <h4 class="panel-title"><a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion"
                                                                       href="#collapseFour"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapseFour">แม่และเด็ก <i
                                                            class="pull-right fa fa-plus"></i></a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseFour" role="tabpanel"
                                             aria-labelledby="headingFour">
                                            <div class="panel-body pxlr-faq-body">
                                                <div class="panel-body pxlr-faq-body">
                                                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                                        <a href="#tab1" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                                                            <i class="mdi mdi-help-circle"></i> เสื้อผ้า 
                                                        </a>
                                                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                                                            <i class="mdi mdi-account"></i> ร้องเท้า
                                                        </a>
                                                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                                                            <i class="mdi mdi-account-settings"></i> แป้ง
                                                        </a>
                                                        <!-- <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                                                            <i class="mdi mdi-heart"></i> แม่และเด็ก
                                                        </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingFive" role="tab">
                                            <h4 class="panel-title"><a class="collapsed" role="button"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion"
                                                                       href="#collapseFive"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapseFive">เครื่องใช้ไฟฟ้า <i
                                                            class="pull-right fa fa-plus"></i></a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseFive" role="tabpanel"
                                             aria-labelledby="headingFive">
                                            <div class="panel-body pxlr-faq-body">
                                                <div class="panel-body pxlr-faq-body">
                                                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                                                        <a href="#tab1" class="nav-link active show" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                                                            <i class="mdi mdi-help-circle"></i> เครื่องดูดฝุ่น
                                                        </a>
                                                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                                                            <i class="mdi mdi-account"></i> เครื่องซักผ้า
                                                        </a>
                                                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                                                            <i class="mdi mdi-account-settings"></i> เครื่องทำความเย็น
                                                        </a>
                                                        <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                                                            <i class="mdi mdi-heart"></i> อุปกรณ์ไอที
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                        
        
        
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content" id="faq-tab-content">
                            <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="tab1">
                                <div class="accordion" id="accordion-tab-1">
                                    <div class="card">
                                        <div class="card-header" id="accordion-tab-1-heading-1">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Lighting</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                            <div class="card-body">
        
                                                <div class="container">
                                                    <div class="row">
                                          
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="{{url('/detail-product')}}"><img class="pro-img" src="{{asset('frontend/images/pro01.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro02.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro03.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro04.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro05.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro06.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro07.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro08.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro09.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro10.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro11.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro12.jpg')}}"></a>
                                                    </div>
        
                                                    </div>
                                                </div>
        
                                            
                                            </div>
                                        </div>
                                    </div>
                         
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                                <div class="accordion" id="accordion-tab-2">
                                    <div class="card">
                                        <div class="card-header" id="accordion-tab-2-heading-1">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">เสื้อผู้หญิง</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                            <div class="card-body">
                                               
                                                <div class="container">
                                                    <div class="row">
                                          
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro01.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro02.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro03.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro04.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro05.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro06.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro07.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro08.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro09.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro10.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro11.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro12.jpg')}}"></a>
                                                    </div>
        
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                                <div class="accordion" id="accordion-tab-3">
                                    <div class="card">
                                        <div class="card-header" id="accordion-tab-3-heading-1">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="true" aria-controls="accordion-tab-3-content-1">เสื้อแฟชั่น</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                            <div class="card-body">
                                                
                                                <div class="container">
                                                    <div class="row">
                                          
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro01.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro02.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro03.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro04.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro05.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro06.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro07.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro08.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro09.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro10.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro11.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro12.jpg')}}"></a>
                                                    </div>
        
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                                <div class="accordion" id="accordion-tab-4">
                                    <div class="card">
                                        <div class="card-header" id="accordion-tab-4-heading-1">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">แม่และเด็ก</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                            <div class="card-body">
                                                
                                                <div class="container">
                                                    <div class="row">
                                          
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro01.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro02.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro03.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro04.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro05.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro06.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro07.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro08.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro09.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro10.jpg')}}"></a>
                                                      </div>
                                                      <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro11.jpg')}}"></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 mb-4" >
                                                        <a href="#"><img class="pro-img" src="{{asset('frontend/images/pro12.jpg')}}"></a>
                                                    </div>
        
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                                <div class="accordion" id="accordion-tab-5">
                                    <div class="card">
                                        <div class="card-header" id="accordion-tab-5-heading-1">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-1" aria-expanded="false" aria-controls="accordion-tab-5-content-1">ต้นไม้/ดอกไม้</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-5-content-1" aria-labelledby="accordion-tab-5-heading-1" data-parent="#accordion-tab-5">
                                            <div class="card-body">
                                                <p>That could be 'my' beautiful soul sitting naked on a couch. If I could just learn to play this stupid thing. Oh, I don't have time for this. I have to go and buy a single piece of fruit with a coupon and then return it, making people wait behind me while I complain. I'm just glad my fat, ugly mama isn't alive to see this day. For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. But existing is basically all I do! I never loved you.</p>
                                                <p><strong>Example: </strong>A sexy mistake. And I'd do it again!</p>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                                <div class="accordion" id="accordion-tab-6">
                                    <div class="card">
                                        <div class="card-header" id="accordion-tab-6-heading-1">
                                            <h5>
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">อุปกรณ์ทำความสะอาด</button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                                            <div class="card-body">
                                                <p>Ah, now the ball's in Farnsworth's court! We'll need to have a look inside you with this camera. Stop it, stop it. It's fine. I will 'destroy' you! Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                                <p><strong>Example: </strong>So I really am important? How I feel when I'm drunk is correct?</p>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
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
    
  </body>
</html>