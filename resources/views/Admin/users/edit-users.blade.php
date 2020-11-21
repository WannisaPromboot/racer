@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') แก้ไขผู้ดูแลระบบ @endsection

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
        <h4 class="mb-0 font-size-18">แก้ไขผู้ดูแลระบบ</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('updateUser')}}" method="post" id="save">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="row pb-2">
                                <div class="form-gruop col-sm">
                                    <label>อีเมล :</label>
                                    <input type="email"  class="form-control" name="email_regis" value="{{$user->email}}" required> 
                                </div>
                            </div> 
                            <div class="row m-t-4" style="color: red;">
                                <div class="col-12">
                                    <span id="err_txt">{{ isset($error_mes) ? $error_mes : '' }}</span> 
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="form-gruop col-sm">
                                    <label>ชื่อ :</label>
                                    <input type="text"  class="form-control" name="fname_regis" value="{{$user->firstname}}" required> 
                                </div>
                                <div class="form-gruop col-sm">
                                    <label>นามสกุล :</label>
                                    <input type="text" class="form-control" name="lname_regis" value="{{$user->lastname}}" required> 
                                </div>
                            </div> 
                            <div class="row pb-2">
                                <div class="form-gruop col-6">
                                    <label>รหัสผ่าน :</label>
                                    <?php $password = Crypt::decryptString($user->password); ?>
                                    <input type="password" class="form-control" name="password_regis" value="{{$password}}" required> 
                                </div>
                            </div> 
                            <div class="row pb-2">
                                <div class="form-gruop col-6">
                                    <label>บทบาท :</label>
                                    <select class="form-control" name="role">
                                        <option value="1" {{$user->role == 1 ? 'selected' : ''}}>Admin</option>
                                        <option value="2" {{$user->role == 2 ? 'selected' : ''}}>Supervisor</option>
                                        <option value="3" {{$user->role == 3 ? 'selected' : ''}}>Staff</option>
                                        <option value="4" {{$user->role == 4 ? 'selected' : ''}}>Accountant</option>
                                    </select>
                                </div>
                            </div> 
                            <br>
                            <a href="javascript:void(0)" style="float:left;"   onclick="canclebtn()"   class="btn btn-warning">{{Session::get('lang')=='th'?'กลับ ' :'cancle'}}</a>
                            <button type="button" onclick="save('save')"  class="btn" style="float:right;background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'ยืนยัน ' :'confirm'}}</button>
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
                        window.location.href = "{{ url('usercontent')}}";
                    }
            });
    }
    </script>
           
@endsection