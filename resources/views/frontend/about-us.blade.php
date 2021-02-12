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


  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">

                        <div class="col-md-8 pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon-phone2" style="color:#00b9e9"></span>
							<span class="text"> : 02 811 1741</span></div>
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
                    <li class="nav-item "><a href="{{url('/')}}" class="nav-link">หน้าหลัก <span class="menu-span-col">|</span> </a></li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สินค้า</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <?php $menu = \App\Category::orderby('sort')->get(); ?>
                                @foreach ($menu as $_menu)
                                    <a class="dropdown-item" href="{{url('product/'.$_menu->category_name_th.'')}}">{{strtoupper($_menu->category_name_th)}}</a>
                                @endforeach
                        </div>
                    </li>
                    <li class="nav-item active"><a href="{{url('/about-us')}}" class="nav-link"><span class="menu-span-col">|</span> เกี่ยวกับเรา</a></li>
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
                    <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>{{!empty(Session::get('porduct')) ? '['.count(Session::get('porduct')).']' : ''}}<span class="menu-span-col">|</span> </a></li>
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
    <div class="hero-wrap hero-bread" style="background-image: url({{ !empty($banner) ? url('storage/app/'.$banner->slide_image) : asset('frontend/images/banner-detail.jpg')}});">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            {{-- <h1 class="mb-0 bread">เกี่ยวกับเรา</h1> --}}
            {{-- <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">หน้าหลัก</a></span>/ <span>เกี่ยวกับเรา</span></p> --}}
          </div>
        </div>
      </div>
    </div>

        
        <div class="section-back">

            <div class="site-section bg-light" style="background-image: url({{asset('frontend/images/back-about.jpg')}}) !important; background-size: cover !important; background-repeat: no-repeat !important; background-position: center center !important;">

                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 col-lg-12">
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
                                <br><p class="detail-about"> เพราะโลกปัจจุบันไม่ได้ต้องการแค่แสงสว่าง แต่ยังรวมถึงสุนทรียะภาพของการตกแต่งและออกแบบให้เข้ากับการใช้ชีวิต บริษัท เรเซอร์การไฟฟ้า (ประเทศไทย) จำกัด จึงมุ่งมั่นพัฒนาผลิตภัณฑ์เพื่อตอบโจทย์ทุกๆพฤติกรรมของผู้บริโภค ทั้งภาคครัวเรือน และภาคอุตสาหกรรมทั้งในประเทศและต่างประเทศ คืนความสมดุลสู่ธรรมชาติเพื่อการอยู่ร่วมกันในสังคมอย่างยั่งยืนตลอดไป  “ เรเซอร์ แสงสว่างแห่งอนาคต ”
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
                                    ท่อรอยสายไฟ ตู้ไฟ สายไฟ เสาไฟแอลอีดี เสาไฟพลังงานแสงอาทิตย์ รวมไปถึงอุปกรณอื่นๆที่เกี่ยวข้องตลอด จนเป็นผู้ ให้คําปรึกษาเกี่ยวกับไฟฟ้าแสงสว่างครบวงจร
                                    บริษัท เรเซอร์ การไฟฟ้า (ประเทศไทย) จํากัด<br>
                                <p class="detail-about"> <u>สํานักงานใหญ่</u><br>
                                    <p class="detail-about02"> 137 หมู่ 9 ซอยศรทอง ถนนเพชรเกษม 91 ตําบลสวนหลวง  อําเภอกระทุ่มแบน    จังหวัดสมุทรสาคร 74110<br>
                                        <p class="detail-about02"> โทร: +66 (0) 2 811 1741,  +66 (0) 2 811 0700<br>
                                            <p class="detail-about02">อีเมล: project@racerlighting.com<br>
                                <p class="detail-about"> <u>โรงงาน</u> <br>
                                    <p class="detail-about02">99/5, 99/9 หมู่ 2 ถนนลาดบัวหลวง - ไม้ตรา ตําบลลาดบัวหลวง อําเภอลาดบัวหลวง จังหวัดพระนครศรีอยุธยา 13230 <br>
                                        <p class="detail-about02">โทร: +66 (0) 35-379110,  +66 (0) 81-9818584<br>
                                <p class="detail-about"><u>โชว์รูม</u><br>
                                    <p class="detail-about02">โครงการสามย่านบิสซิเนสทาวน์ 654/4 ถนนพระราม4 แขวงมหาพฤฒาราม เขตบางรัก กรุงเทพฯ 10500<br>
                                        <p class="detail-about02">โทร: +66 (0) 2 077 4595
                               
                            </div>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">บริษัท เรเซอร์การไฟฟ้า ประเทศไทย จำกัด
                        137 หมู่9 ซอยเพชรเกษม91 ถนนเพชรเกษม ตำบลสวนหลวง อำเภอกระทุ่มแบน สมุทรสาคร 74110</span></li>
                        <br>
                    <li><span class="icon icon-phone"></span><span class="text">02 811 1741 5 5</span></li>
                    <br>
	                <li><span class="icon icon-envelope"></span><span class="text">Racer_official@Racerlighting.com</span></li>
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