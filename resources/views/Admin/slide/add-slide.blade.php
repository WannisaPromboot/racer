@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title'){{Session::get('lang')=='th'?'เพิ่มแบนเนอร์และสไลด์' :'Add Banner & Slide'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เพิ่มแบนเนอร์และสไลด์' :'Add Banner & Slide'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{route('SaveSlide')}}" method="POST" enctype="multipart/form-data" id="saveslide">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ':'Title'}} : </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_th">
                            </div>
                        </div>
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>{{Session::get('lang')=='th'?'รูปภาพหรือวิดีโอ':'Image/Video '}}</b>
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'รูปภาพ':'Image'}} : </div>
                            <div class="col-5">
                                <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');">
                                <img src="" id="imgpreview_filepath" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            <div class="col-2">{{Session::get('lang')=='th'?'ลำดับรูปภาพ':'Number sequence'}} : </div>
                            <div class="col-1">
                                <input type="number" class="form-control" name="sort">
                            </div>
                        </div>
                        <hr style=" border-top: 1px solid #f1734f;">
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'วิดิโอ':'Video'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="youtube" name="video">
                            </div>
                        </div>   
                        <hr style=" border-top: 1px solid #f1734f;">
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'ลิงค์':'Link'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="link" name="link">
                            </div>
                        </div>                 
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>{{Session::get('lang')=='th'?'ระยะเวลาแสดง Slide & banner':'Period'}}</b>
                                </h5>
                            </div>
                        </div>
                        <div class="row mr-3 mt-3">
                            <div class="col-2 mt-2">
                                <b>{{Session::get('lang')=='th'?'จากวันที่':'From'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control" name="datefrom" min="{{date('Y-m-d')}}">
                            </div>
                            <div class="col-1 mt-2">
                                <b>{{Session::get('lang')=='th'?'ถึงวันที่':'To'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control" name="dateto">
                            </div>
                        </div>
                        {{-- <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>{{Session::get('lang')=='th'?'กลุ่มลูกค้า':'Target'}}</b>
                                </h5>
                            </div>
                        </div> --}}
                        {{-- <div class="row mt-3">
                            <div class="col-6">
                                <label for="name">{{Session::get('lang')=='th'?'กลุ่มลูกค้า':'Target'}} :</label>
                                <select name="target[]" data-role="tagsinput" multiple="multiple"  class="form-control functional" name="target">
                                        <option class="item_type" value="all">all</option>
                                        <option class="item_type" value="spa">สปา & นวด</option>
                                        <option class="item_type" value="hair">ครบเครื่องเรื่องทำผม</option>
                                        <option class="item_type" value="nail">ทำเล็บ</option>
                                        <option class="item_type" value="eye">ขนตาและคิ้ว</option>
                                        <option class="item_type" value="depilatory">บริการกำจัดขน</option>
                                        <option class="item_type" value="beayty">คลินิกความงาม</option>
                                        <option class="item_type" value="surgery">ศัลยกรรม</option>
                                        <option class="item_type" value="dentist">คลินิคทำฟัน</option>
                                        <option class="item_type" value="IVF">IVF & CHECK UP</option>
                                        <option class="item_type" value="fitness">ฟิตเนส</option>
                                </select>  
                            </div>
                        </div> --}}
                        <div data-repeater-item class="outer mt-3"> 
                            <button type="button" onclick="save('saveslide')" class="btn btn-success" style="float:right;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
                            <a href="{{url('slidecontent')}}" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
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