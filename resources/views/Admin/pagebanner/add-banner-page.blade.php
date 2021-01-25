@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title')เพิ่มแบนเนอร์@endsection

@section('css') 
<!-- Summernote css -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

  {{-- tag input --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />


<!-- Sweertalert -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

@endsection

@section('content')
<style>
 ::placeholder {
  color: #556ee6 !important;
  opacity: 0.4 !important; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #556ee6 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: #556ee6 !important;
}
</style>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">เพิ่มแบนเนอร์</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{url('savepagebanner')}}" method="POST" enctype="multipart/form-data" id="savepagebanner">
                        @csrf
                        <input type="hidden" class="form-control" name="page" value="{{$idpage}}">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>รูปภาพ</b>
                                </h5>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-1">รูปภาพ : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');">
                                <br>
                                @if(!empty($data))
                                    <img src="{{url('storage/app/'.$data->slide_image)}}" id="imgpreview_filepath" style="max-height:200px;" >
                                @else
                                    <img src="" id="imgpreview_filepath" style="max-height:200px;">
                                @endif
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            <div class="col-1 mt-2">หน้าแสดงผล : </div>
                            <div class="col-2">
                                @if($idpage==2)
                                    <input type="text" class="form-control-plaintext" value="หน้าเกี่ยวกับเรา">
                                @elseif($idpage==3)
                                    <input type="text" class="form-control-plaintext" value="หน้าข่าวสาร">
                                @elseif($idpage==4)
                                    <input type="text" class="form-control-plaintext" value="หน้าโปรโมชั่น">
                                @elseif($idpage==5)
                                    <input type="text" class="form-control-plaintext" value="หน้าบทความ">
                                @else
                                    <input type="text" class="form-control-plaintext" value="หน้าติดต่อเรา">
                                @endif
                            </div>
                        </div>
                        <br>
                        <div data-repeater-item class="outer mt-3"> 
                            <button type="button" onclick="save('saveslide')" class="btn btn-success" style="float:right;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
                            <a href="{{url('pagecontent')}}" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
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

<!-- Bootstrap tags input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>

    function save(formname){
        Swal.fire({
            text: "คุณต้องการบันทึกข้อมูลใช่หรือไม่",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่',
            cancelButtonText: 'ไม่ใช่',

        }).then((result)=>{
            if (result.value) {
                
                $('#savepagebanner').submit();
                }
        });
    }

    
</script>
<script>
    var B = "{{Session::get('Save')}}";
    if(B){
        Swal.fire({
            text: B,
            type: 'success'
        });
       =
    }
</script>


@endsection