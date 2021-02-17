@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') แก้ไขสไลด์ @endsection

@section('css') 
    <!-- Summernote css -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

    {{-- tag input --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

    <!-- Sweertalert -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18"> แก้ไขสไลด์</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
        
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('updateslide')}}" method="POST" enctype="multipart/form-data" id="saveside">
                        @csrf
                        <input type="hidden" name="sid" value="{{$slide->id_slide}}">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>รูปภาพหรือวิดีโอ</b>
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">รูปภาพ : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');">
                                @if(!empty($slide->slide_image))
                                <img src="{{url('storage/app/'.$slide->slide_image)}}" id="imgpreview_filepath" style="max-height:200px;" >
                                @endif
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            <div class="col-2">ลำดับรูปภาพ : </div>
                            <div class="col-1">
                                <input type="number" class="form-control" name="sort" value="{{!empty($slide->slide_number)? $slide->slide_number:'' }}">
                            </div>
                        </div>
                        <hr style=" border-top: 1px solid #f1734f;">
                        <div class="row">
                            <div class="col-2">วิดิโอ : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="video" placeholder="youtube">
                                @if(!empty($slide->slide_video))
                                    <iframe src="{{$slide->slide_video}}?autoplay=1&controls=0" ></iframe>
                                @endif
                            </div>
                        </div>
                        <br>
                        <hr style=" border-top: 1px solid #f1734f;">
                        <div class="row">
                            <div class="col-2">ลิงก์ : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="link" placeholder="link" value="{{!empty($slide->url)? $slide->url:'' }}">
                               
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <a href="javascript:void(0)" type="button" style="float:left;" onclick="canclebtn()"  class="btn btn-danger">กลับ</a>
                            </div>
                            <div class="col-sm">
                            
                                <button type="button" onclick="save('saveside')" class="btn btn-success" style="float:right;">ยืนยัน</button>
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

<!-- Bootstrap tags input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>
  item=0;

function addtitlelanguage(){
    item++;
    newlanguage = '<div class="row" id="item'+item+'">'+
                        '<div class="col-3"><b>ชื่อภาษา : </b></div>'+
                        '<div class="col-3"><input type="text" class="form-control"> </div>'+
                        '<div class="col-3"><input type="text" class="form-control"> </div>'+
                        '<div class="col-3 mb-3">'+
                            '<button style="float: left;" type="button" class="btn btn-danger" onclick="deletetitleitem('+item+')">ลบ</button>'
                        '</div>'+
                    '</div>';

    $('#newlanguage').append(newlanguage);
    };

    $('.functional').select2({
        tags: true,
        minimumResultsForSearch: -1,
        maximumSelectionLength: 10,
        tokenSeparators: [',', ' '],
        placeholder: "-select target-",
    });
    
function deletetitleitem(item){

    $('#item'+item).remove();
    //gallery--;
    // $('#formgallery').append('<input type="hidden" name="deletedkey[]" value="'+num+'">')

};

        
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
                        window.location.href = "{{ url('slidecontent')}}";
                    }
            });
    }
</script>
<script>
    var A = "{{Session::get('Update')}}";
    if(A){
        swal(A);
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