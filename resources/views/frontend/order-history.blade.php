<!DOCTYPE html>
<html lang="en">
  <head>
    @include('class.OrangeV1')
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

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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



button:focus {
    outline: 0px dotted;
    /* outline: 5px auto -webkit-focus-ring-color; */
}

    .pro-sub {
    color: #777;
    font-size: 13px !important;
    margin-bottom: 0px;
    text-align: left;
    font-weight: normal;
    font-family: 'Prompt', sans-serif;
}
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
}

.product-quantity {
  float: left;
  width: 10%;
}

.product-removal {
  float: left;
  width: 9%;
}

.product-product{
  float: left;
  width: 9%;
}

.product-line-price {
  float: left;
  width: 22%;
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
/* .product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '฿';
} */



h1 {
  font-weight: 100;
}

label {
  color: #fff;
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
  color: #0000;
    width: 235px;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal, .column-labels .product-price, .column-labels .product-quantity, .column-labels .product-line-price {
  text-indent: -9999px;
  color: #0000;
  /* width: 185px; */
  width: 218px;
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
  /* width: 140px; */
  width: 180px;
    height: 160px;
    object-fit: cover;
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
.product .status-product {
  /* border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: 'Prompt', sans-serif;
  font-size: 12px;
  border-radius: 3px; */
  border: 0;
    padding: 2px 10px;
    background-color: #00b9eb;
    color: #fff;
    font-family: 'Prompt', sans-serif;
    font-size: 12px;
    border-radius: 3px;
    height: 2.5em;
}


/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  /* margin-bottom: 10px; */
  margin-bottom: -20px;
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
  color: #fff;
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
    background-color: #777;
    color: #fff;
    font-size: 25px;
    border-radius: 3px;
    border: 1px solid #777;
    /* height: 2.5em; */
    margin-bottom: 50px;
    font-family: 'Prompt', sans-serif;
}

.checkout:hover {
    background-color: #ccc;
    border: 1px solid #ccc;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
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
    color:#00b9eb !important;
    font-weight: 400;
    margin-top: 50px !important;
    text-align: left;
    font-family: 'Prompt', sans-serif;
    font-size: 35px !important;
}
.totals-value2{
    color: #fff;
    /* float: right;
    margin-right: -366px;
    text-align: right; */
    background-color: #7d7e80;
    padding: 5px 15px 5px 15px;
    padding: 5px 15px 5px 15px;
    width: 50%;
    float: right;
}

/* -----end cart-------------- */
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
  /* width: 12%; */
  width: 21%;
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
  content: '';
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
/* .product .product-image img {
  width: 140px;
} */
.product .product-details .product-title {
  margin-right: 20px;
  /* font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium"; */
  font-family: 'Prompt', sans-serif;
  color: #777;
    text-align: left;
    margin: 5px 50px 5px 0;
    line-height: 1.4em;
    font-weight: normal;
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
/* .product .remove-product {
  border: 0;
    padding: 2px 10px;
    background-color: #d20b0b;
    color: #fff;
    font-family: 'Prompt', sans-serif;
    font-size: 12px;
    border-radius: 3px;
    height: 2.5em;
} */
.product .remove-product:hover {
  background-color: ##00b9eb;
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
    /* float: none;
    margin-bottom: 10px;
    width: auto; */
    float: left;
    width: 37%;
  }

  .product-price {
    /* clear: both;
    width: 70px; */
    float: left;
    width: 12%;
    color: #777;
    font-family: 'Prompt', sans-serif;
    clear: none;
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
    /* width: auto; */
    float: left;
    width: 9%;
  }

  .product-line-price {
    /* float: right;
    width: 70px; */
    float: left;
    /* width: 12%; */
    width: 21%;
    text-align: right;
    color: #777;
    font-family: 'Prompt', sans-serif;
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

.product-image {
    float: left;
    width: 20%;
}


}
/* Make more adjustments for phone */
@media screen and (max-width: 700px) {
  .product-details {
    float: none;
    width: auto;
    margin-bottom: 10px;
}
.product-price {
    clear: both;
    width: 70px;
}
.product-removal {
    width: auto;
}


}

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

/* -----end cart test-------------- */


@media (max-width: 1024px){
    .column-labels .product-image, .column-labels .product-details, .column-labels .product-removal, .column-labels .product-price, .column-labels .product-quantity, .column-labels .product-line-price {
    text-indent: -9999px;
    color: #0000;
    width: 155px;
}
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
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal, .column-labels .product-price, .column-labels .product-quantity, .column-labels .product-line-price {
    text-indent: -9999px;
    color: #0000;
    width: 115px;
}
.product .product-image img {
    /* width: 140px; */
    width: 140px;
    height: 125px;
    object-fit: cover;
}
.product .product-details .product-description {
    padding: 0px 0px 0px 20px;
}
.product .product-details .product-title {
    padding: 0px 0px 0px 20px;
}
.product .remove-product {
    border: 0;
    padding: 0px 3px;
    background-color: #00b9eb;
    color: #fff;
    font-family: 'Prompt', sans-serif;
    font-size: 10px;
    border-radius: 3px;
    height: 2.5em;
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
.product-image {
    float: left;
    width: auto;
}
.product .product-details .product-title {
    padding: 0px 0px 0px 20px;
    margin-top: 200px;
}
.product-line-price {
    float: right;
    width: 150px;
    font-size: 13px !important;
}


}

@media (max-width: 375px){


}

.product #product-image {
    text-align: center;
    float: right;
    width: auto;
}
#product-details {
    float: left;
    width: 37%;
    float: none;
    margin-bottom: 10px;
    width: auto;
}
#product-price {
    float: left;
    width: 12%;
    color: #777;
    font-family: 'Prompt', sans-serif;
    clear: none;
    clear: both;
    width: 70px;
}
#product-quantity {
    float: left;
    width: 100px;
}
#product-line-price {
    float: right;
    /* width: 12%; */
    width: auto;
    text-align: right;
    color: #777;
    font-family: 'Prompt', sans-serif;
}
#shopping-cart {
    margin-top: 0px;
}
#product-quantity:before {
    content: 'x';
}
.product #product-price::before, .product #product-line-price::before, .totals-value::before {
    content: "฿";
}
.product #remove-product {
    border: 0;
    padding: 2px 10px;
    background-color: #d20b0b;
    color: #fff;
    font-family: 'Prompt', sans-serif;
    font-size: 12px;
    border-radius: 3px;
    height: 2.5em;
}

      
  </style>

@include('frontend.inc_header')
<?php $page = 'order-history'; ?>
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
                <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdown-menu-cart">
                    <div class="showcart">
                    @if(Session::get('product') && count(Session::get('product')) > 0 )
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="shopping-cart" id="shopping-cart" style="overflow: scroll;;
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
                                                <div class="product-image" id="product-image">
                                                    <img src="{{url('storage/app/'.$product->product_img.'')}}">
                                                </div>
                                                <div class="product-details" id="product-details">
                                                    <div class="product-title">{{$product->product_name_th}}</div>
                                                    
                                                </div>
                                                @if(($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                    <div class="product-price price{{$product->id_product}}" id="product-price">{{number_format($product->product_special_price)}}</div>
                                                    <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_special_price}}">
                                                @else 
                                                    <div class="product-price price{{$product->id_product}}" id="product-price">{{number_format($product->product_normal_price)}}</div>
                                                    <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_normal_price}}">
                                                @endif                                
                                                <div class="product-quantity" id="product-quantity">
                                                    <div class="quantity_button">
                                                        <span class="qt" id="qy{{$product->id_product}}">{{$item['qty']}}</span>
                                                        <span class="qt-plus" onclick="count('{{$product->id_product}}','add')">+</span>
                                                        <span class="qt-minus" onclick="count('{{$product->id_product}}','sub')">-</span>
                                                        <input type="hidden" class="text-center" id="inputqy{{$product->id_product}}" name="count[{{$item['product_id']}}]" value="{{$item['qty']}}" min="1">
                                                    </div>
                                                </div>
                                                <div class="product-removal" id="product-removal">
                                                    <button type="button" class="remove-product" id="remove-product" onclick="delitem({{$key}},{{$item['product_id']}})">Remove</button>
                                                </div>
                                                
                                                @if(($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                    <div class="product-line-price totalitem{{$product->id_product}}" id="product-line-price">{{number_format($product->product_special_price * $item['qty'])}}</div>
                                                    <?php  $sum +=  $product->product_special_price * $item['qty'];?>
                                                    @else 
                                                    <div class="product-line-price totalitem{{$product->id_product}}" id="product-line-price">{{number_format($product->product_normal_price * $item['qty'])}}</div>
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

    {{-- <div class="hero-wrap hero-bread" style="background-image: url({{asset('frontend/images/banner-detail.jpg')}}">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">ประวัติการสั่งซื้อ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>ประวัติการสั่งซื้อ</span></p>
          </div>
        </div>
      </div>
    </div> --}}


        
    <div class="section-back" style="background-image: url({{asset('frontend/images/back-about02.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">

        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <h1 class="title-cart"><span class="icon-shopping_cart"></span>ประวัติการสั่งซื้อ</h1>

                        <div class="shopping-cart">

                        <div class="column-labels">
                            <label class="product-image">Image</label>
                            <label class="product-details">Product</label>
                            <label class="product-price">ราคา</label>
                            <label class="product-quantity">จำนวน</label>
                            <label class="product-removal">Remove</label>
                            <label class="product-line-price">รวม</label>
                        </div>
                        
                        @foreach ($order as $_order)
                        <?php $product = \App\Product::where('id_product',$_order->product_id)->first(); ?>
                        <div class="product">
                            <div class="product-image">
                            <p class="pro-sub">คำสั่งซื้อ {{$_order->id_order}}</p>
                            <p class="pro-sub">สั่งซื้อวันที่ {!! OrangeV1:: Date (date_create($_order->created_at)) !!} {{date_format($_order->created_at,'H:i:s')}}</p>
                                <img  align="left" class="img-order-pro" src="{{url('storage/app/'.$product->product_img.'')}}">
                            </div>
                            <div class="product-details">
                           
                            <div class="product-title">{{$product->product_name_th}}</div>
                            <p class="product-description"></p>
                        </div>
                        <div class="product-price">Qty: {{$_order->count}}</div>

                        <div class="product-product">
                                <button class="status-product">
                                    @if($_order->status_payment == 2)
                                            @if($_order->status_delivery == 0)
                                                เตรียมสินค้า
                                            @elseif($_order->status_delivery == 1)
                                                กำลังจัดส่งสินค้า

                                            @elseif($_order->status_delivery == 2)
                                                ส่งสินค้าเรียบร้อย
                                            @else 
                                                ชำระเงินแล้ว
                                            @endif
                                    @else 
                                        @if($_order->status_payment == 0)
                                                ยังไม่ชำระเงิน
                                        @else 
                                                รอการตรวจสอบ
                                        @endif
                                    @endif
                               
                                </button>
                            </div>
                            <div class="product-line-price">{{!empty($_order->tracking) ? $_order->tracking : '' }}</div>
                        </div>
                        @endforeach
                        

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