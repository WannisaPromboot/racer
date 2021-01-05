<!DOCTYPE html>
<html lang="en">
  <head>
    @include('class.OrangeV1')
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
  width: 185px;
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
            <h1 class="mb-0 bread">ประวัติการสั่งซื้อ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>ประวัติการสั่งซื้อ</span></p>
          </div>
        </div>
      </div>
    </div>


        
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
                        <div class="product">
                            <div class="product-image">
                            <p class="pro-sub">คำสั่งซื้อ {{$_order->id_order}}</p>
                            <p class="pro-sub">สั่งซื้อวันที่ {!! OrangeV1:: Date (date_create($_order->created_at)) !!} {{date_format($_order->created_at,'H:i:s')}}</p>
                                <img  align="left" class="img-order-pro" src="{{asset('frontend/images/pro02.jpg')}}">
                            </div>
                            <div class="product-details">
                            <?php $product = \App\Product::where('id_product',$_order->product_id)->first(); ?>
                            <div class="product-title">{{$product->product_name_th}}</div>
                            <p class="product-description"></p>
                        </div>
                        <div class="product-price">Qty: {{$_order->count}}</div>

                        <div class="product-removal">
                                <button class="remove-product">
                                ส่งสินค้าแล้ว
                                </button>
                            </div>
                            <div class="product-line-price">ได้รับวันที่ 05 ก.พ. 2020</div>
                        </div>
                        @endforeach
                        

                        {{-- <div class="product">
                            <div class="product-image">
                                <p class="pro-sub">คำสั่งซื้อ 276637072504240</p>
                                <p class="pro-sub">สั่งซื้อวันที่ 26 ม.ค. 2020 17:43:53</p>
                                <img align="left" class="img-order-pro" src="{{asset('frontend/images/pro03.jpg')}}">
                            </div>
                            <div class="product-details">
                                <div class="product-title">Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบ</div>
                                <p class="product-description">Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                            </div>
                        <div class="product-price">Qty: 1</div>

                        <div class="product-removal">
                            <button class="remove-product">
                            ส่งสินค้าแล้ว
                            </button>
                        </div>
                            <div class="product-line-price">ได้รับวันที่ 05 ก.พ. 2020</div>
                        </div> --}}

                        {{-- <div class="product">
                            <div class="product-image">
                            <p class="pro-sub">คำสั่งซื้อ 276637072504240</p>
                            <p class="pro-sub">สั่งซื้อวันที่ 26 ม.ค. 2020 17:43:53</p>
                            <img align="left" class="img-order-pro" src="{{asset('frontend/images/pro04.jpg')}}">
                        </div>
                        <div class="product-details">
                            <div class="product-title">Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบ</div>
                            <p class="product-description">Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                        </div>
                        <div class="product-price">Qty: 1</div>

                        <div class="product-removal">
                            <button class="remove-product">
                            ส่งสินค้าแล้ว
                            </button>
                        </div>
                            <div class="product-line-price">ได้รับวันที่ 05 ก.พ. 2020</div>
                        </div> --}}

            </div>
        </div>
       
    </div>

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