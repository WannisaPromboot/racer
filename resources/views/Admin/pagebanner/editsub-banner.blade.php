@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title')แก้ไขแบนเนอร์ย่อย@endsection

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
        <h4 class="mb-0 font-size-18">แก้ไขแบนเนอร์ย่อย</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{url('savesubbanner')}}" method="POST" enctype="multipart/form-data" id="savesubbanner">
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
                            <div class="col-1">รูปภาพ 1 : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath1" id="filepath1" onchange="readImage(this,'filepath1');">
                                <br>
                                @if(!empty($data[0]->subbanner_image))
                                    <img src="{{url('storage/app/'.$data[0]->subbanner_image)}}" id="imgpreview_filepath1" style="max-height:200px;" >
                                @else
                                    <img src="" id="imgpreview_filepath1" style="max-height:200px;">
                                @endif
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            <div class="col-1">
                                <b>ลิงก์ 1 : </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="link1" value="{{!(empty($data[0]->subbanner_link))?$data[0]->subbanner_link:''}}" style="width: 478px;">
                               
                            </div>
                           
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-1">รูปภาพ 2 : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath2" id="filepath2" onchange="readImage(this,'filepath2');">
                                <br>
                                @if(!empty($data[1]->subbanner_image))
                                    <img src="{{url('storage/app/'.$data[1]->subbanner_image)}}" id="imgpreview_filepath2" style="max-height:200px;" >
                                @else
                                    <img src="" id="imgpreview_filepath2" style="max-height:200px;">
                                @endif
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            <div class="col-1">
                                <b>ลิงก์ 2 : </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="link2"  value="{{!(empty($data[1]->subbanner_link))?$data[1]->subbanner_link:''}}" style="width: 478px;">
                               
                            </div>
                        </div>
                        <br>
                        
                        <div data-repeater-item class="outer mt-3"> 
                            <button type="button" onclick="save('savesubbanner')" class="btn btn-success" style="float:right;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
                            <a href="{{url('subbanner')}}" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
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
                
                $('#savesubbanner').submit();
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