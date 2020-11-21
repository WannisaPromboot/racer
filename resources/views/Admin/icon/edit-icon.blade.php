@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขไอคอน' :'Edit Icon'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'แก้ไขไอคอน' :'Edit Icon'}}</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->                   
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('updateicon')}}"  method="post" enctype="multipart/form-data" id="updateicon">            
                        @csrf
                    <input type="hidden" value="{{$item->icon_id}}" name="id">
                        <div class="form-group">
                            <label>{{Session::get('lang')=='th'?'ชื่อไอคอน':'Icon name'}} :</label>
                            <input type="text" class="form-control col-6" name="icon_name" value="{{$item->icon_name}}">
                        </div>
                        @if(Session::get('lang')=='th')
                            {!! OrangeV1:: ContentPreviewImage ('รูปภาพ' , 'icon_img' , 'icon_img',url('storage/app/'.$item->icon_img)) !!} 
                        @else
                            {!! OrangeV1:: ContentPreviewImage ('รูปภาพ' , 'icon_img' , 'icon_img',url('storage/app/'.$item->icon_img)) !!} 
                        @endif
                        {!! OrangeV1::ImagePreviewJs() !!}
                        <div class="row">
                            <div class="col-sm">

                                <a  href="javascript:void(0)" onclick="canclebtn()" style="float: left" class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
                            </div>
                            <div class="col-sm">
                                <button type="button" onclick="save('updateicon')" style="float: right" class="btn btn-success" >{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
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
                        window.location.href = "{{ url('iconcontent')}}";
                    }
            });
    }
</script>
<script>
    var B = "{{Session::get('Update')}}";
    if(B){
        swal(B);
    }

    $('.edit').click(function(){
        
        $('#view').hide();
        $('#edit').removeAttr('style');
    });

    $('.cancle').click(function(){
        $('#view').show();
        $('#edit').hide();
  
    });
</script>

@endsection