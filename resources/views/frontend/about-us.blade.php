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

.icon-shopping_cart{
    color: #41c8f5 !important;
}

.ftco-navbar-light .navbar-nav > .nav-item > .nav-link:hover{
    color: #d2e5f8  !important;
}

.countcart{
    color: #41c8f5 !important;
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
    /* background-color: #f7f7f7!important; */
    background-image: url(../Racer/frontend/images/back-about.jpg);
}
.bg-light {
    background: #f7f6f2 !important;
    background-image: url(frontend/images/back-about.jpg) !important;
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
    padding: 2rem 0;
    height: auto;
   
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

.block__35630 h3 {
    color: #00b9e9;
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
    border-top: 5px solid #00b9e9;
    margin-bottom: 50px;
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
    margin-bottom: 25px;
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

 /* -----contact-------------- */

 .img-con {
    width: 95%;
    height: 300px;
    object-fit: cover;
}
.address-text {
    line-height: 0px;
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    color: #222;
}
#icon-con {
    color: #00b9e9;
    line-height: 65px;
    padding: 0px 10px 0px 0px;
    font-size: 20px;
}
.block-form {
    background-color: rgb(239, 239, 239);
    padding: 15px 15px 50px 15px;
    box-shadow: 1px 1px 5px #777;
    margin-bottom: 30px;
}
.form-title {
    text-align: left;
    color: #00b9e9;
    font-weight: 500;
    font-size: 18px !important;
    margin-bottom: 30px;
}
#icon-con2 {
    color: #00b9e9;
    font-size: 20px;
    float: right;
    margin-top: -50px;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: 20px 15px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #ccc;
    background-color: #fff0;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border-radius: 0px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    margin-bottom: 10px;
    background-color: #efefef !important;
}
textarea.form-control {
    /* height: 135px; */
    height: 85px;
    padding: 7px 15px;
}
.boxed-btn3 {
    /* background: linear-gradient(to right, #f9081f 0%, #ff380b 100%); */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0181f5', endColorstr='#5db2ff',GradientType=1 );
    color: #fff;
    display: inline-block;
    /* padding: 18px 44px; */
    padding: 10px 30px;
    font-family: "Poppins", sans-serif;
    font-size: 15px;
    font-weight: 500;
    border: 0;
    border: 1px solid transparent;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 0px;
    text-align: center;
    color: #fff !important;
    text-transform: capitalize;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    cursor: pointer;
    /* width: 30%; */
    background-color: #00b9e9 !important;
    margin-top: 10px;
}
textarea.form-control {
    height: 128px !important;
}

    /* --------------- */
    #map {
    width: 95%;
    height: 510px;
}

/* ----------about-------------- */
.title-about{
    font-size: 26px;
    font-family: 'Prompt', sans-serif;
    color: #000;
    margin-bottom: 0px;
}
.line-about{
    border-top: 1px solid #222;
    width: 85%;
    margin-top: 0px;
    margin-bottom: 0px;
}
.sub-title-about{
    font-size: 30px;
    font-family: 'Prompt', sans-serif;
    color: #000;
    font-weight: 400;
    margin-bottom: 0px;
}
.line-about02{
    border-top: 1px solid #222;
    width: 25%;
    margin-top: 0px;
}
.sub-span{
    color: #27bbea;
}
.detail-about{
    font-size: 16px;
    font-family: 'Prompt', sans-serif;
    color: #000;
    text-indent: 2.5em;
    /* padding: 25px 300px 0px 0px; */
}
.detail-about02{
    font-size: 16px;
    font-family: 'Prompt', sans-serif;
    color: #000;
    text-indent: 4.5em;

    /* padding: 0px 470px 0px 0px; */
}
.detail-about03{
    font-size: 16px;
    font-family: 'Prompt', sans-serif;
    color: #000;
    /* padding: 0px 610px 0px 0px; */
}

/* ---------------------------- */





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
/* .detail-about {
    padding: 25px 140px 0px 0px;
}
.detail-about02 {
    padding: 0px 220px 0px 0px;
}
.detail-about03 {
    padding: 0px 530px 0px 0px;
} */

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
/* .detail-about {
    padding: 25px 0px 0px 0px;
}
.detail-about02 {
    padding: 0px 20px 0px 0px;
}
.detail-about03 {
    padding: 0px 30px 0px 0px;
} */

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
#map {
    width: 100%;
    margin-bottom: 20px;
}
.block__35630 h3 {
    font-size: 1.2rem;
}
.sub-title-about {
    font-size: 26px;
}
.title-about {
    font-size: 22px;
}
.line-about02 {
    width: 60%;
}
.site-section {
    padding: 2rem 0;
    height: auto;
}
/* .detail-about02 {
    padding: 0px 0px 0px 0px;
}
.detail-about03 {
    padding: 0px 0px 0px 0px;
} */

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
.block__35630 h3 {
    font-size: 1rem;
}
.address-text {
    line-height: normal;
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    color: #222;
}

}


      
  </style>

@include('frontend.inc_header')
<?php $page = 'about'; 
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
            <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdown-menu-cart">
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
                                        <a href="{{url('cart')}}"><button type="button" class="checkout">ตะกร้าสินค้า</button></a> -->
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
    <div class="hero-wrap hero-bread" style="background-image: url({{ !empty($banner) ? url('storage/app/'.$banner->slide_image) : asset('frontend/images/banner-detail.jpg')}});">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            {{-- <h1 class="mb-0 bread">เกี่ยวกับเรา</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>เกี่ยวกับเรา</span></p> --}}
          </div>
        </div>
      </div>
    </div>

        
        <div class="section-back">

            <div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-about003.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: right center !important;">

                  <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            @if(Session::get('langfrontend')=='th')
                                <div class="subtitle-height">
                                    <p class="title-about">กลุ่มบริษัทเรเซอร์</p>
                                    <hr class="line-about" align="left">
                                    <p class="sub-title-about"><span class="sub-span">COMPANY</span> PROFILE</p>
                                    <hr class="line-about02" align="left">
                                    
                                    <p class="detail-about">บริษัท เรเซอร์การไฟฟ้า (ประเทศไทย) จำกัด ก่อตั้งขึ้นในปี พ.ศ. 2512  โดยคุณวินัย รังษีสิงห์พิพัฒน์ ช่วงแรกของการเริ่มต้นธุรกิจ บริษัทฯเป็นที่ยอมรับระดับสากลในฐานะผู้ผลิตสินค้า OEM ด้านอุปกรณ์ส่องสว่างให้บริษัทชั้นนำทั้งภายในและต่างประเทศ  จนสามารถขยายและเพิ่มประสิทธิภาพในการผลิตบัลลาสต์คุณภาพสูงมากกว่า 1 ล้านหน่วยต่อเดือน
                                    <br><p class="detail-about">ปัจจุบัน “ เรเซอร์ ” เป็นผู้นำด้านนวัตกรรมอุปกรณ์ส่องสว่างและเทคโนโลยีอัจฉริยะสั่งงานด้วยเสียง สร้างความสะดวกสบายตอบโจทย์พฤติกรรมผู้บริโภคยุคใหม่  พร้อมทั้งศึกษาวิจัยและพัฒนาเทคโนโลยีอัจฉริยะสั่งงานด้วยเสียงในผลิตภัณฑ์อื่นๆอย่างต่อเนื่อง เพื่อตอบรับกับพฤติกรรมของผู้บริโภคที่เปลี่ยนแปลง   
                                    <br><p class="detail-about">นอกเหนือจากผลิตภัณฑ์ส่องสว่างและเทคโนโลยีอัจฉริยะสั่งงานด้วยเสียงแล้ว “ เรเซอร์ “ ยังมี Consumer Unit หรือตู้ไฟเบรกเกอร์  เป็นผลิตภัณฑ์ด้านความปลอดภัย แบบ Premium Set ครบชุดพร้อมเบรกเกอร์กันดูด , Complete Set เบรกเกอร์ครบชุด และ Hybrid Set รูปทรงทันสมัยโดดเด่นเหมาะกับบ้านยุคใหม่ ผ่านกระบวนการผลิตด้วยเทคโนโลยีระดับสูง ตอบโจทย์ความปลอดภัยที่หลากหลายสำหรับบ้านแห่งอนาคต ภายใต้ Concept  “ ตัดไว ปลอดภัย หายห่วง ” 
                                    <br><p class="detail-about">นอกเหนือจากกลุ่มผลิตภัณฑ์ส่องสว่างต่างๆและกลุ่มผลิตภัณฑ์ด้านความปลอดภัยแล้ว“ เรเซอร์ ”  ยังเป็นผู้ผลิตเสาไฟขนาดมาตรฐานสากล ใช้สำหรับติดตั้งโคมไฟส่องสว่างและโคมไฟพลังงานแสงอาทิตย์ ในสถานที่สำคัญต่างๆ อาทิ ทางหลวง, ทางแยกต่างระดับ, ทางพิเศษ, โรงงาน, สนามบิน, สนามกีฬา ฯลฯ  
                                    <br><p class="detail-about">ทุกกลุ่มผลิตภัณฑ์ของ “ เรเซอร์ ” ใช้เทคโนโลยีการผลิตที่ทันสมัย  ทีมงานผู้เชี่ยวชาญระดับมืออาชีพ  ในการตรวจสอบและควบคุมทุกขั้นตอนการผลิตตามหลักมาตรฐานอุตสาหกรรมไทย (มอก.)  พร้อมทั้งให้ความสำคัญกับความปลอดภัยในการผลิต , ระบบการบริหารงานองค์กรที่มีประสิทธิภาพ  , การพัฒนาบุคลากร ,การฝึกอบรมด้านการจัดการ และวางแผนองค์กรในทักษะด้านต่างๆ รวมถึงการฝึกอบรม ความเป็นผู้นำ        เพื่อเตรียมความพร้อมในการก้าวเป็นผู้นำในธุรกิจ 
                                    <br><p class="detail-about"> เพราะโลกปัจจุบันไม่ได้ต้องการแค่แสงสว่าง แต่ยังรวมถึงสุนทรียภาพของการตกแต่งและออกแบบให้เข้ากับการใช้ชีวิต บริษัท เรเซอร์การไฟฟ้า (ประเทศไทย) จำกัด จึงมุ่งมั่นพัฒนาผลิตภัณฑ์เพื่อตอบโจทย์ทุกๆพฤติกรรมของผู้บริโภค ทั้งภาคครัวเรือน และภาคอุตสาหกรรมทั้งในประเทศและต่างประเทศ คืนความสมดุลสู่ธรรมชาติเพื่อการอยู่ร่วมกันในสังคมอย่างยั่งยืนตลอดไป  “ เรเซอร์ แสงสว่างแห่งอนาคต ”
                                    <br>
                                    <h5>VISION / MISSION</h5> 
                                    <h6 style="color: black"><p style="text-indent: 2.5em;"><u> VISION</u></h6>
                                    <p class="detail-about02"> “ เรเซอร์ ”  ก้าวเข้าสู่การเป็นผู้นำด้านนวัตกรรมส่องสว่างและความปลอดภัย</p>
                                    <h6 style="color: black"><p style="text-indent: 2.5em;"> <u>MISSION</u></h6>
                                    <p class="detail-about02">
                                        -	มุ่งมั่นพัฒนาผลิตภัณฑ์ ภายใต้แบรนด์ “ เรเซอร์ ” ให้ตรงตามความต้องการของลูกค้า<br>
                                    <p class="detail-about02" >    
                                        -	ขยายช่องทางจัดจำหน่ายให้ครอบคลุมความต้องการของลูกค้าทั่วทุกพื้นที่ของประเทศ<br>
                                    <p class="detail-about02" >
                                        -	จัดการระบบขนส่งสินค้าให้มีมาตรฐานระดับสากล ทันต่อความต้องการของตลาด<br>
                                    <p class="detail-about02" >
                                        -	นำเสนอสินค้านวัตกรรม ที่ทันสมัย ตอบสนองพฤติกรรมผู้บริโภคของคนรุ่นใหม่อย่างต่อเนื่อง<br>
                                    <p class="detail-about02" >
                                        -	คิดค้นพัฒนาเพื่อต่อยอดระบบอัจฉริยะสั่งงานด้วยเสียงให้ตอบโจทย์ความต้องการผู้บริโภค<br>
                                    <p class="detail-about02" >
                                        -	วางกลยุทธ์กำหนดทิศทางการสื่อสารการตลาดแก่ผู้บริโภคโดยใช้สื่อให้มีประสิทธิภาพสูงสุด<br>
                                    <p class="detail-about02" >
                                        -	ปลูกฝั่งบุคลากรทางด้านการขาย เพื่อให้การบริการที่สร้างความประทับใจให้กับลูกค้า<br>
                                    <p class="detail-about02" >
                                        -	มุ่งมั่นพัฒนาทักษะและปลูกฝั่งจิตสำนึกให้ด้านจริยธรรมให้บุคคลากรในองค์กรให้มีประสิทธิภาพ<br>
                                    <p class="detail-about02" >
                                        -	สร้างกิจกรรมทางการตลาดที่เป็นประโยชน์ต่อสังคมและไม่ทำลายสิ่งแวดล้อม<br>
                                        <br>
                                    <p class="detail-about"><u>นโยบายด้านสิ่งแวดล้อม</u><br>
                                    <p class="detail-about02">    บริษัท เรเซอร์การไฟฟ้า (ประเทศไทย) จำกัด ได้ปลูกฝังให้พนักงานทุกคน ตระหนักถึงผลกระทบต่อสิ่งแวดล้อมจากการทำงาน และรับทราบถึงความรับผิดชอบของตนในการดูแลรักษาสิ่งแวดล้อม โดยมุ่งเน้นให้ปฏิบัติตามกฏหมายข้อบังคับ และมาตรฐานด้านสิ่งแวดล้อมที่เกี่ยวข้องกับบริษัท และปฏิบัติ ตามระเบียบขั้นตอนของบริษัท ด้านการควบคุมปัญหาสิ่งแวดล้อมทุกรูปแบบ และกำหนดให้มีแผนงานและการจัดการ เพื่อป้องกันปัญหาด้านสิ่งแวดล้อมที่เกี่ยวข้องกับมลภาวะทางเสียง อากาศ น้ำและสิ่งปฏิกูล เพื่อให้ผลกระทบต่อ สิ่งแวดล้อมน้อยที่สุด
                                        ทางบริษัทฯ มุ่งมั่นปรับปรุงระบบการจัดการสิ่งแวดล้อมอย่างต่อเนื่อง เพื่อป้องกันการเกิดมลภาวะด้วยการลดใช้ทรัพยากร และพลังงานกำจัดหรือลดทอนของเสียและกากของเสียจากการทำงานก่อนคืนสู่สภาพแวดล้อมและค้นหา แนวทางการนำของเสียที่เกิดจากกระบวนการทำงานไปใช้ให้เกิดประโยชน์สูงสุด พร้อมกันนี้ บริษัท เรเซอร์การไฟฟ้า (ประเทศไทย) จำกัด ยังได้เข้าร่วมโครงการภาครัฐ พร้อมได้รับรางวัล ISO 14001 / Green Industry / Green Mind
                                        <br><br><p class="detail-about"><u>นโยบายด้านคุณภาพ</u><br>
                                        <p class="detail-about02">   “ สร้างผลิตภัณฑ์ที่มีคุณภาพ บริการหลังการขายที่สร้างความประทับใจ มุ่งเน้นความพึงพอใจของลูกค้า ทั้งการพัฒนาอย่างต่อเนื่อง คือความรับผิดชอบของ พนักงานทุกคน ”
                                        
                                        (ต่อด้วยโลโก้ต่างๆ)
                                        ISO9001, ISO14001, ISO45001, ISO50001, Green industry, และ UKAS 

                                    </p><br>
                                    <h5>MILESTONE</h5> 
                                    
                                        
                                    <p class="detail-about">1969/ 2512 </p>
                                    <p class="detail-about02"> - ก่อตั้งบริษัทครั้งแรกในฐานะผู้ผลิตอุปกรณ์บัลลาสต์<br>
                                    <p class="detail-about"> 1995/ 2538 </p>
                                    <p class="detail-about02"> - ผสมผสานเทคโนโลยีการผลิตที่ทันสมัยรวมถึงพัฒนาระบบการประกอบอัตโนมัติ<br>
                                    <p class="detail-about"> 1997-1998/ 2540-2541 </p>
                                    <p class="detail-about02"> - ขยายตลาดไปสู่ระดับสากล เช่นที่ กัมพูชา และ เวียดนาม<br>
                                    <p class="detail-about"> 2008/2551 </p>
                                    <p class="detail-about02"> - ได้รับการรับรองมาตรฐาน ISO 9001:2008 ระบบบริหารคุณภาพ<br>
                                    <p class="detail-about"> 2009/ 2552 </p>
                                    <p class="detail-about02"> - เริ่มผลิตงานโคมตะแกรง<br>
                                    <p class="detail-about"> 2012/ 2555</p>
                                    <p class="detail-about02"> - เริ่มผลิตหลอดไฟ LED<br>
                                    <p class="detail-about"> 2013/ 2556</p>
                                    <p class="detail-about02"> -ได้รับการรับรองมาตรฐาน ISO 14000:2004 ระบบการจัดการสิ่งแวดล้อม<br>
                                    <p class="detail-about"> 2015/ 2558 </p>
                                    <p class="detail-about02"> - ได้รับการรับรองมาตรฐาน ISO 50001:2011 ระบบการจัดการพลังงาน<br>
                                    <p class="detail-about"> 2016/2559</p>
                                    <p class="detail-about02"> - ได้รับการรับรองมาตรฐาน ISO 9001:2015 ระบบบริหารคุณภาพ, OHSAS 18001: 2007 ระบบการจัดการอาชีวอนามัยและความปลอดภัย และ รางวัลอุตสาหกรรมสีเขียว ระดับที่ 3 ระบบสีเขียว<br>
                                    <p class="detail-about02"> - เริ่มผลิตตู้ไฟเหล็ก และ ตู้ไฟพลาสติก<br>
                                    <p class="detail-about"> 2017/ 2560</p>
                                    <p class="detail-about02"> - เริ่มผลิตรางเดินสายไฟ<br>
                                    <p class="detail-about"> 2018/ 2561</p>
                                    <p class="detail-about02"> - ได้รับการรับรองมาตรฐาน ISO 14000:2015 ระบบการจัดการสิ่งแวดล้อม<br>
                                    <p class="detail-about02"> - เริ่มผลิตท่อ PVC และตู้ consumer unit<br>
                                    <p class="detail-about"> 2019/ 2562 </p>
                                    <p class="detail-about02"> - ได้รับการรับรองมาตรฐาน ISO 45001:2018 การจัดการอาชีวอนามัยและความปลอดภัย<br>
                                    <p class="detail-about02"> - เริ่มเป็นผู้ผลิตเสาไฟ ขนาดมาตรฐานสากล<br>
                                    <p class="detail-about02"> - เป็นผู้พัฒนาเทคโนโลยีโคมไฟอัจฉริยะสั่งการด้วยเสียง<br>
                                    <p class="detail-about"> 2020/2563</p>
                                    <p class="detail-about02"> - วิจัยและพัฒนาเสาไฟถนนพลังงานแสงอาทิตย์และได้รับการขึ้นทะเบียนบัญชีนวัตกรรมไทย<br>
                                    <p class="detail-about02"> - เป็นผู้นำด้านเทคโนโลยีโคมไฟอัจฉริยะสั่งการด้วยเสียง<br>
                                        <br>
                                    <h5>GENERAL INFORMATION</h5> 
                                    
                                    <p class="detail-about"><u>ประเภทธุรกิจ</u><br>
                                        <p class="detail-about02">ผู้ผลิต ผู้นําเข้าชิ้นส่วน และผู้จัดจําหน่ายผลิตภัณฑ์ไฟฟ้าและแสงสว่างต่างๆ เช่น หลอดไฟ โคมไฟ 
                                        ท่อรอยสายไฟ ตู้ไฟ สายไฟ เสาไฟแอลอีดี เสาไฟพลังงานแสงอาทิตย์ รวมไปถึงอุปกรณ์อื่นๆที่เกี่ยวข้องตลอด จนเป็นผู้ ให้คําปรึกษาเกี่ยวกับไฟฟ้าแสงสว่างครบวงจร
                                        บริษัท เรเซอร์ การไฟฟ้า (ประเทศไทย) จํากัด<br>
                                    <p class="detail-about"> <u>สํานักงานใหญ่</u><br>
                                        <p class="detail-about02"> 137 หมู่ 9 ซอยศรทอง ถนนเพชรเกษม 91 ตําบลสวนหลวง  อําเภอกระทุ่มแบน    จังหวัดสมุทรสาคร 74110<br>
                                            <p class="detail-about02"> โทร: +66 (0) 2 811 1741,  +66 (0) 2 811 0700<br>
                                                <p class="detail-about02">อีเมล: racer_official@racerlighting.com<br>
                                    <p class="detail-about"> <u>โรงงาน</u> <br>
                                        <p class="detail-about02">99/5, 99/9 หมู่ 2 ถนนลาดบัวหลวง - ไม้ตรา ตําบลลาดบัวหลวง อําเภอลาดบัวหลวง จังหวัดพระนครศรีอยุธยา 13230 <br>
                                            <p class="detail-about02">โทร: +66 (0) 35-379110,  +66 (0) 81-9818584<br>
                                    <p class="detail-about"><u>โชว์รูม</u><br>
                                        <p class="detail-about02">โครงการสามย่านบิสซิเนสทาวน์ 654/4 ถนนพระราม4 แขวงมหาพฤฒาราม เขตบางรัก กรุงเทพฯ 10500<br>
                                            <p class="detail-about02">โทร: +66 (0) 2 077 4595
                                                <p class="detail-about02">อีเมล: project@racerlighting.com<br>
                                
                                </div>
                            @else

                                <div class="subtitle-height">
                                    {{-- <p class="title-about">กลุ่มบริษัทเรเซอร์</p>
                                    <hr class="line-about" align="left"> --}}
                                    <p class="sub-title-about"><span class="sub-span">COMPANY</span> PROFILE</p>
                                    <hr class="line-about02" align="left">
                                    
                                    <p class="detail-about">With 40 years of experience in manufacturing, “Racer” is one of the leading lighting manufacturers in Thailand. In the beginning the company was recognized as an OEM manufacturer of lighting equipment by leading companies, both local and international. The company expanded and increased production capacity to produce more than 1 million high quality ballast units per month.
                                    <br><p class="detail-about">Today, “Racer” is the leading manufacturer in innovative lighting equipment and intelligent voice-activated technology, which creates convenience to meet the needs of modern consumers. “Racer” also continuously researches and develops intelligent voice-activated technology in other products, this is a response to changing consumer behavior in recent years.
                                    <br><p class="detail-about">In addition to lighting products and intelligent voice-activated technology, "Racer" has also produced a Consumer Unit or ready-to-use circuit breaker cabinet which is an electrical safety device. There are a “Premium Set”, consisting of the circuit breaker with RCCB, also a “Complete Set” consisting of the circuit breaker, and a “Hybrid set” which has a sleek modern design to suit the design of new modern homes.  These are manufactured with high grade technologies, and meet the requirements   of home safety under the concept of "Fast cut, safe and worry-free".
                                    <br><p class="detail-about">In addition to various lighting and safety products, “Racer” also manufactures light poles, which comply with the TIS requirements (Thai Industrial Standard) and guidelines for the installation of lamps and solar lamps.  Installation locations include important places such as highways, intersections, expressways, factories, airports, stadiums, etc.
                                    <br><p class="detail-about">All product groups produced under the “Racer” brand are manufactured with modern production technologies, and monitored and controlled by professional production teams, in accordance with the Thai Industrial Standards (TIS). “Racer” also has a strong focus on production safety, efficient organizational management systems, human resource development, organizational planning training, management training, and leadership training in an attempt to become the leading manufacturer in the industry. 
                                    <br><p class="detail-about"> Lighting is not just about illumination and functionality; it includes aesthetics in design and decoration to suit our lifestyles. “Racer Electric (Thailand) Co., Ltd.” is driven to develop products to meet all consumer behaviors, from the household sectors to local and international industrial sectors. “Racer” is also committed to producing sustainable products and reducing the environmental impact. 
                                        “Racer Light Up the Future”
                                        
                                    <br>
                                    <h5>VISION / MISSION</h5> 
                                    <h6 style="color: black"><p style="text-indent: 2.5em;"><u> VISION</u></h6>
                                    <p class="detail-about02"> Become a leader in innovative lighting and safety products.</p>
                                    <h6 style="color: black"><p style="text-indent: 2.5em;"> <u>MISSION</u></h6>
                                    <p class="detail-about02">
                                        -   Driven to develop products under the “Racer” brand to meet consumer needs.<br>
                                    <p class="detail-about02" >    
                                        -	Expand distribution channels to cover all regions of Thailand. <br>
                                    <p class="detail-about02" >
                                        -	Manage logistics systems in accordance with international standards e.g. delivery in time with market demand.<br>
                                    <p class="detail-about02" >
                                        -	Offer innovative and modern products continuously to appeal to new generation consumers.<br>
                                    <p class="detail-about02" >
                                        -	Keep researching and developing intelligent voice-activated technology to meet consumer needs. <br>
                                    <p class="detail-about02" >
                                        -	Plan strategies and determine the direction of marketing communication, by using the most efficient media sources. <br>
                                    <p class="detail-about02" >
                                        -	Train sales staff to provide the highest standard of service to achieve customer satisfaction. <br>
                                    <p class="detail-about02" >
                                        -	Train and develop human resources for various skills and ensure that staff understands how work ethics impact and assist improvement in work efficiency.<br>
                                    <p class="detail-about02" >
                                        -	Create marketing activities that benefit society and environmental friendly.<br>
                                        <br>
                                    <p class="detail-about"><u>ENVIRONMENTAL POLICY</u><br>
                                    <p class="detail-about02"> “Racer Electric (Thailand) Co., Ltd.” trains all staff to be aware of the environmental impact from work activities along with acknowledging their responsibility relating to environmental conservation. The company insists staff comply with laws, standards, and company regulations that are related to environmental issues. This helps to prevent negative effects on the environment such as noise, air and water pollution and responsible sewage disposal, creating minimal impact on the environment
                                        <p class="detail-about02"> The company has been continuously improving environmental management systems and attempts to prevent causes of pollution by reducing energy and resource consumption. The wastes from work activities are eliminated before releasing back into environment, and the company also finds methods to reuse wastes with maximum benefits.
                                        <br><br><p class="detail-about"><u>QUALITY POLICY </u><br>
                                        <p class="detail-about02">"Create quality products, provide impressive after-sales service, focus on customer satisfaction, develop and improve continuously are the responsibilities of every employee”

                                    </p><br>
                                    <h5>MILESTONE</h5> 
                                    
                                        
                                    <p class="detail-about">1969/ 2512 </p>
                                    <p class="detail-about02"> - The company was established as a ballast manufacturer.<br>
                                    <p class="detail-about"> 1995/ 2538 </p>
                                    <p class="detail-about02"> - Applied integrated advanced manufacturing technologies and developed automated assembly systems<br>
                                    <p class="detail-about"> 1997-1998/ 2540-2541 </p>
                                    <p class="detail-about02"> - Expanded the business into international markets such as Cambodia and Vietnam.<br>
                                    <p class="detail-about"> 2008/2551 </p>
                                    <p class="detail-about02"> - Certified with ISO 9001, Quality Management System.<br>
                                    <p class="detail-about"> 2009/ 2552 </p>
                                    <p class="detail-about02"> - Started producing recess louver luminaire model.<br>
                                    <p class="detail-about"> 2012/ 2555</p>
                                    <p class="detail-about02"> - Started producing LED lights.<br>
                                    <p class="detail-about"> 2013/ 2556</p>
                                    <p class="detail-about02"> - Certified with ISO 14001, Environmental Management System.<br>
                                    <p class="detail-about"> 2016/2559</p>
                                    <p class="detail-about02"> - Certified with ISO 45001, Occupational Health and Safety Management Systems.<br>
                                    <p class="detail-about02"> - Certified with Green Industry: Level 3 (Green System).<br>
                                    <p class="detail-about02"> - Started producing steel cabinet and plastic cabinet.<br>
                                    <p class="detail-about"> 2017/ 2560</p>
                                    <p class="detail-about02"> - Certified with ISO 50001, Energy Management System.<br>
                                    <p class="detail-about02"> - Producing wire way.<br>
                                    <p class="detail-about"> 2018/ 2561</p>
                                    <p class="detail-about02"> - Started producing and distributing PVC pipe and consumer unit.<br>
                                    <p class="detail-about"> 2019/ 2562 </p>
                                    <p class="detail-about02"> - Started producing lighting poles in accordance with TIS standard.<br>
                                    <p class="detail-about02"> - Developed and distributed innovative intelligent voice-activated lamps.<br>
                                    <p class="detail-about"> 2020/2563</p>
                                    <p class="detail-about02"> - Researched and developed Solar Cell LED Streetlight with Pole and was registered in the List of Thai Innovative Products. <br>
                                    <p class="detail-about02"> - Became a leader of intelligent voice-activated lamps.<br>
                                    <br>
                                    <h5>GENERAL INFORMATION</h5> 
                                    
                                    <p class="detail-about"><u>BUSINESS TYPE</u><br>
                                        <p class="detail-about02">Manufacturer, importer and distributor of electrical and lighting products such as light bulb, light fixture, pipe, cabinet, cable, LED light pole,  solar cell light pole and other related equipment as well as providing consultation of electrical and lighting solutions.<br>
                                    <p class="detail-about"> <u>Main Office</u><br>
                                        <p class="detail-about02"> 137 Moo 9 Soi Sornthong, Petchkasem 91 Road, Suanluang Sub-district, Kratumban District, Samutsakorn 74110<br>
                                            <p class="detail-about02">Tel: +66 (0) 2 811 1741,  +66 (0) 2 811 0700<br>
                                                <p class="detail-about02">Email: project@racerlighting.com<br>
                                    <p class="detail-about"> <u>Factory</u> <br>
                                        <p class="detail-about02">99/5, 99/9 Moo 2 Latbualuang-Maitra Road, Ladbualuang Sub-district, Latbualuang District, Ayutthaya 13230<br>
                                            <p class="detail-about02">Tel: +66 (0) 35 379 110, +66 (0) 81 9818584<br>
                                    <p class="detail-about"><u>Showroom</u><br>
                                        <p class="detail-about02">Samyan Business Town, 654/4 Rama IV Road, Mahaprutaram Sub-district,  Bangrak District,  Bangkok 10500<br>
                                            <p class="detail-about02">Tel: +66 (0) 2 077 4595
                                                <p class="detail-about02">อีเมล: project@racerlighting.com<br>
                                
                                </div>
                            @endif
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

// search
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