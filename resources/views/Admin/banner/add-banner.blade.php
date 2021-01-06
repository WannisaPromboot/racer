@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title'){{Session::get('lang')=='th'?'เพิ่มแบนเนอร์' :'Add Banner'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เพิ่มแบนเนอร์' :'Add Banner'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{url('savebanner')}}" method="POST" enctype="multipart/form-data" id="saveslide">
                        @csrf
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'หมวดหมู่':'Category'}} : </div>
                            <div class="col-5">
                                <select class="form-control" name="id_category">
                                    <option value=""> Please Select</option>
                                    @foreach($data as $datas)
                                        <option value="{{$datas->id_category}}">{{$datas->category_name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-2">ลิงก์   1 : </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="banner_link1">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">รูปภาพ   1 : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath1" id="filepath1" onchange="readImage(this,'filepath1');">
                                <img src="" id="imgpreview_filepath1" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-2">ลิงก์   2 : </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="banner_link2">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">รูปภาพ   2 : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath2" id="filepath2" onchange="readImage(this,'filepath2');">
                                <img src="" id="imgpreview_filepath2" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-2">ลิงก์   3 : </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="banner_link3">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'รูปภาพ 2':'รูปภาพ 2'}} : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath3" id="filepath3" onchange="readImage(this,'filepath3');">
                                <img src="" id="imgpreview_filepath3" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'รูปภาพ 3':'รูปภาพ 3'}} : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');">
                                <img src="" id="imgpreview_filepath" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'รูปภาพ 4':'รูปภาพ 4'}} : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');">
                                <img src="" id="imgpreview_filepath" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            
                        </div>
                        <br>
                        <div data-repeater-item class="outer mt-3"> 
                            <button type="button" onclick="save('saveslide')" class="btn btn-success" style="float:right;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
                            <a href="{{url('bannercontent')}}" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
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

        
    function deletetitleitem(item){

        $('#item'+item).remove();
        //gallery--;
        // $('#formgallery').append('<input type="hidden" name="deletedkey[]" value="'+num+'">')

    };

    
    $('.functional').select2({
        tags: true,
        minimumResultsForSearch: -1,
        maximumSelectionLength: 10,
        tokenSeparators: [',', ' '],
        placeholder: "-select target-",
    });

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