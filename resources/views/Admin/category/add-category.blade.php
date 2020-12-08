@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title')เพิ่มเมนูหลัก @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

        <!-- Sweertalert -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

          <!-- tag input -->
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.css') }}">
          <style>
              .bootstrap-tagsinput{
                  width:100% !important;
              }
              .bootstrap-tagsinput .tag{
                background-color: #eff2f7 !important;
                border: 1px solid #f6f6f6 !important;
                border-radius: 1px !important;
                padding: 0 7px !important;
                color: black;
              }
          </style>
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">เพิ่มเมนูหลัก</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('savecategory')}}" method="post" id="savemain" enctype="multipart/form-data">            
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer"> 
                            <div class="row">
                                <div class="col-3">
                                    <b>Banner : </b>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        <input type="file" style="display: none;"  name="filepath[0]" class="form-control chooseImage20" id="slidepicture0" multiple="multiple" onchange="readGalleryURL3(this,0)">
                                            <img id="gallerypreview20"  style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage1(0)" />
                                            {{-- <input type="text" name="sub_sort[2]" class="form-control text-center" required> --}}
                                            {{-- <button  type="button" class="btn btn-danger" onclick="deletegallery(2)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> --}}
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <b>ชื่อเมนูหมวดหมู่ (ภาษาไทย)</b>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="category_th" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3">
                                    <b>ชื่อเมนูหมวดหมู่ (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-6">
                                    <input type="texe" class="form-control" name="category_en" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <?php     $checksort = \App\Category::orderby('sort','desc')->first();
                                
                                            if(empty( $checksort)){
                                                $sort = 1;
                                            }else{
                                                $sort =  $checksort->sort + 1;
                                            }

                                 ?>
                                <div class="col-3">
                                    <b>ลำดับการแสดง</b>
                                </div>
                                <div class="col-6">{{$sort}}</div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-sm text-left">
                                    <a  href="{{url('categorycontent')}}" class="btn btn-danger">กลับ</a>
                                </div>
                                <div class="col-sm text-right">
                                    <button  type="button" onclick="save('savemain')" class="btn btn-success" >ยืนยัน</button>
                                    {!! OrangeV1::AlertMessage('savemain') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
{{-- modaL --}}
<div class="modal fade bd-example-modal-lg" id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="document">
        
        <div class="modal-content" >
            <div class="modal-body" id="sub">
            
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{Session::get('lang')=='th'?'ปิด' :'Close'}}</button>
            
                </div>
        </div>
        
    </div>
</div>                

@endsection

@section('script')

<!-- form mask -->
<script src="{{ URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')}}"></script>

<!-- form mask init -->
<script src="{{ URL::asset('assets/js/pages/form-repeater.int.js')}}"></script> 
<!--tinymce js-->
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- Summernote js -->
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>

<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>  

<!-- Sweert Alert -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> 

<!-- tag input -->
<script  src="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script> 

<script>

    //////////ภาพหน้าปก
    function browsImage1(id){
        $('.chooseImage2'+id).click();
    }



    function readGalleryURL3(input,id) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#gallerypreview2'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

    
</script>

@endsection