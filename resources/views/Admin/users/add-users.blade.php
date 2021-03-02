@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title'){{Session::get('lang')=='th'?' เพิ่มผู้ดูแลระบบ ' :' Add Admin'}}@endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

          <!-- Sweertalert -->
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เพิ่มผู้ดูแลระบบ ' :'Add Admin'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('createuser')}}" method="post" id="save">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="row pb-2">
                                <div class="form-gruop col-6">
                                    <label>{{Session::get('lang')=='th'?'อีเมล ' :'Email'}} :</label>
                                    <input type="email"  class="form-control" name="email_regis" required> 
                                </div>
                            </div> 
                            <div class="row m-t-4" style="color: red;">
                                <div class="col-12">
                                    <span id="err_txt">{{ isset($error_mes) ? $error_mes : '' }}</span> 
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="form-gruop col-sm">
                                    <label>{{Session::get('lang')=='th'?'ชื่อ ' :'First Name'}} :</label>
                                    <input type="text"  class="form-control" name="fname_regis" required> 
                                </div>
                                <div class="form-gruop col-sm">
                                    <label>{{Session::get('lang')=='th'?'นามสกุล ' :'Last Name'}} :</label>
                                    <input type="text" class="form-control" name="lname_regis" required> 
                                </div>
                            </div> 
                            <div class="row pb-2">
                                <div class="form-gruop col-sm">
                                    <label>{{Session::get('lang')=='th'?'รหัสผ่าน ' :'Password'}} :</label>
                                    <input type="password" class="form-control" name="password_regis" required> 
                                </div>
                                <div class="form-gruop col-sm">
                                    <label>{{Session::get('lang')=='th'?'ยืนยันรหัสผ่าน ' :'Confirm Password'}} :</label>
                                    <input type="password" class="form-control" name="repassword_regis" required> 
                                </div>
                            </div> 
                            <div class="row m-t-4" style="color: red;">
                                <div class="col-12">
                                    <span id="err_txt text-danger">{{ isset($error_pass) ? $error_pass : '' }}</span> 
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="form-gruop col-6">
                                    <label>บทบาท :</label>
                                    <select class="form-control" name="role" required>
                                        <option>-เลือกหน้าที่-</option>
                                        <option value="1">ผู้ดูแลระบบ 1</option>
                                        <option value="2">ผู้ดูแลระบบ 2</option>
                                    </select>
                                </div>
                            </div> 
                            <br>
                            <a href="{{url('usercontent')}}" style="float:left;"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
                            <button style="float:right;" type="button" onclick="save('save')"  class="btn btn-success" style="float:right">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
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

@endsection