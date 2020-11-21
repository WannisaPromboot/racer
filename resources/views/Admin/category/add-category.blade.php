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
                <form action="{{url('savecategory')}}" method="post" id="savemain">            
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer"> 
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
                            <div class="row mt-5">
                                <div class="col-sm text-left">
                                    <a  href="{{url('categorycontent')}}" class="btn btn-danger">กลับ</a>
                                </div>
                                <div class="col-sm text-right">
                                    <button  type="button" onclick="save('savemain')" class="btn btn-success" >ยืนยัน</button>
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

function save(formname){
    Swal.fire({
        text: "คุณต้องการบันทึกข้อมูลใช้หรือไม่",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'save'
        }).then((result)=>{
            if (result.value) {
                console.log(formname);
                $('#'+formname+'').submit();
                }
        });
    }
</script>
<script>
    var B = "{{Session::get('Save')}}";
    if(B){
        swal(B);
    }
</script>

@endsection