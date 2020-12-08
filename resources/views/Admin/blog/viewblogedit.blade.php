<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('frontend.inc_header')
    @include('class.OrangeV1')
</head>

<body>
 <?php  $blog = \App\Blog::where('blog_id',$id)->first();?>
    <div class="container-fluid">
        <div class="wrapper_pad">
            <div class="row">
                <div class="col">
                    <div class="bd_m">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Beauty blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> เคล็ด(ไม่)ลับ ดูแลสุขภาพ ให้ดูสาวอยู่ตลอดเวลา</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_inside mt-5">
                        <h1>{{ $blog->title_th  }}</h1>
                        <div class="row">
                            <div class="col-md-9">
                                <span class="date_blog">
                                    <?php $date =  date("Y-m-d"); ?>
                                    วันที่ : {!! OrangeV1:: Date (date_create($date)) !!}
                                </span>
                            </div>
                            <div class="col-md-3 text-md-right">
                                <div class="countview"><img src="frontend/images/SVG/view_icon.svg" alt="" class="img_sm4"> เข้าชม 234k</div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm">
                                @if(!empty($blog->filepath))
                                    <img src="{{url('storage/app/'.$blog->filepath)}}" alt="" class="img-fluid ">
                                @else 
                                    <iframe class="img-fluid" src="{{$blog->video}}?autoplay=1&loop=1&controls=0" allowfullscreen allow="autoplay;"  style="width:100%; height:400px; "></iframe>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="pt-4"><?php echo $blog->description_th; ?></div>

                    </div>
                    <div class="blog_share mt-5 mb-5">
                        <h6 class="graytext mb-3">แชร์บทความนี้</h6>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f" style="color:#3b5998;    font-size: 1.3em;"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" style="color:#55acee;    font-size: 1.3em;"></i></a></li>
                            <li><a href="#"><i class="far fa-envelope" style="color:#bebebe;    font-size: 1.3em;"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border_blog_recent mt-5">
                        <h3>บล็อคอัพเดทล่าสุด</h3>
                        <a href="#">
                            <div class="group_blog_recent">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/blog_05.png')}}" class="img-fluid">
                                                </a>
                                            </figure>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="content_head">
                                            <p>เล็บเจล VS SHELLAC...
                                            </p>
                                        </div>
                                        <div class="content_p">
                                            <p>นอกจากการดูแลสุขภาพร่างกายแล้ว สาวๆ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <hr>
                           <a href="#">
                            <div class="group_blog_recent">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="hoverstyle">
                                            <figure>
                                                <a href="#">
                                                <img src="{{asset('frontend/images/blog_05.png')}}" class="img-fluid">
                                                </a>
                                            </figure>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="content_head">
                                            <p>เล็บเจล VS SHELLAC...
                                            </p>
                                        </div>
                                        <div class="content_p">
                                            <p>นอกจากการดูแลสุขภาพร่างกายแล้ว สาวๆ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a><hr>
                           <a href="#">
                            <div class="group_blog_recent">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/blog_05.png')}}" class="img-fluid">
                                                </a>
                                            </figure>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="content_head">
                                            <p>เล็บเจล VS SHELLAC...
                                            </p>
                                        </div>
                                        <div class="content_p">
                                            <p>นอกจากการดูแลสุขภาพร่างกายแล้ว สาวๆ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <hr>
                           <a href="#">
                            <div class="group_blog_recent">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/blog_05.png')}}" class="img-fluid">
                                                </a>
                                            </figure>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="content_head">
                                            <p>เล็บเจล VS SHELLAC...
                                            </p>
                                        </div>
                                        <div class="content_p">
                                            <p>นอกจากการดูแลสุขภาพร่างกายแล้ว สาวๆ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="margin-bottom: 50px;margin-left:20%;margin-right:20%">
            <div class="col">
                <div class="text-center">
                    <a href="{{url('editblog/'.$id.'')}}" style="color: #777">กลับไปยังหน้าแก้ไข</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <a href="{{url('viewsaveblog/'.$id.'')}}" style="color: #777">บันทึก</a>
                </div>
            </div>
        </div>

    </div>
    @include('frontend.inc_footer')



</body>

</html>
