@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขเมนูหลัก ' :'Edit Category'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'แก้ไขเมนูหลัก ' :'Edit Category'}}</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('updatecategory/'.$item->id_category.'')}}"  method="post" id="editmain" enctype="multipart/form-data">            
                        @csrf
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer"> 
                                <div class="row">
                                    <div class="col-3">
                                        <b>รูปภาพหน้าปก : </b>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                            <input type="file" style="display: none;"  name="filepath[{{$item->id_category}}]" class="form-control chooseImage2{{$item->id_category}}" id="slidepicture{{$item->id_category}}" multiple="multiple" onchange="readGalleryURL3(this,{{$item->id_category}})">
                                               @if(!empty($item->category_img))
                                               <img id="gallerypreview2{{$item->id_category}}"  style="max-height:250px ;" src="{{url('storage/app/'.$item->category_img)}}" onclick="browsImage1({{$item->id_category}})" />
                                               @else  
                                               <img id="gallerypreview2{{$item->id_category}}"  style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage1({{$item->id_category}})" />
                                               @endif
                                                
                                                {{-- <input type="text" name="sub_sort[2]" class="form-control text-center" required> --}}
                                                {{-- <button  type="button" class="btn btn-danger" onclick="deletegallery(2)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> --}}
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <b>ชื่อหมวดหมู่ (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="category_th" value="{{$item->category_name_th}}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3">
                                        <b>ชื่อหมวดหมู่ (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-6">
                                        <input type="texe" class="form-control" name="category_en" value="{{$item->category_name_en}}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3">
                                        <b>ลำดับการแสดง</b>
                                    </div>
                                    <div class="col-6">{{$item->sort}}</div>
                                </div>
                                <br>
                                <div class="row mt-5">
                                    <div class="col-sm text-left">
                                        <a href="javascript:void(0)" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back'}}</a>
                                       
                                    </div>
                                    <div class="col-sm text-right">
                                        <button type="button" onclick="save('editmain')" class="btn btn-success" >{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                                        {!! OrangeV1::AlertMessage('editmain') !!}
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
                     

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
    var B = "{{Session::get('Update')}}";
    if(B){
        swal(B);
    }


    function canclebtn(){
    Swal.fire({
        text: "คุณต้องการยกเลิกการแก้ไขข้อมูลใช่หรือไม่",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่',
        cancelButtonText: 'ไม่ใช่',
        }).then((result)=>{
            if (result.value) {
                    window.location.href = "{{ url('categorycontent')}}";
                }
        });
    }

    $('.edit').click(function(){
        
        $('#view').hide();
        $('#edit').removeAttr('style');
    });

    $('.cancle').click(function(){
        $('#view').show();
        $('#edit').hide();
  
    });

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