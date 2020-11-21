@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขแบนเนอร์และสไลด์' :'Edit Banner & Slide'}} @endsection

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
        <h4 class="mb-0 font-size-18"> {{Session::get('lang')=='th'?'แก้ไขแบนเนอร์และสไลด์' :'Edit Banner & Slide'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
        
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{route('UpdateSlide',$slide->slide_id)}}" method="POST" enctype="multipart/form-data" id="saveside">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ':'Title'}} : </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_th" value="{{!empty($slide->title_th)? $slide->title_th:'' }}">
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
                                @if(!empty($slide->filepath))
                                <img src="{{url('storage/app/'.$slide->filepath)}}" id="imgpreview_filepath" style="max-height:200px;" >
                                @endif
                                {!! OrangeV1::ImagePreviewJs() !!}  
                            </div>
                            <div class="col-2">{{Session::get('lang')=='th'?'ลำดับรูปภาพ':'Number sequence'}} : </div>
                            <div class="col-1">
                                <input type="number" class="form-control" name="sort" value="{{!empty($slide->sort)? $slide->sort:'' }}">
                            </div>
                        </div>
                        <hr style=" border-top: 1px solid #f1734f;">
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'วิดิโอ':'Video'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="video" placeholder="youtube">
                                @if(!empty($slide->video))
                                    <iframe src="{{$slide->video}}?autoplay=1&controls=0" allowfullscreen allow="autoplay;"></iframe>
                                @endif
                            </div>
                        </div>
                        <hr style=" border-top: 1px solid #f1734f;">
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'ลิงค์':'Link'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="link" name="link" value="{{!empty($slide->link)? $slide->link:'' }}">
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
                        <div class="row mt-3">
                            <div class="col-2 mt-2">
                                <b>{{Session::get('lang')=='th'?'จากวันที่':'From'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control" name="datefrom"  value="{{!empty($slide->datefrom)? $slide->datefrom:'' }}" min="{{!empty($slide->datefrom)? $slide->datefrom:'' }}">
                            </div>
                            <div class="col-1 mt-2">
                                <b>{{Session::get('lang')=='th'?'ถึงวันที่':'To'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control" name="dateto"  value="{{!empty($slide->dateto)? $slide->dateto:'' }}">
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
                        <?php $target = \App\slideitem::where('slide_id',$slide->slide_id)->get(); 
                                $item = array();
                                foreach ($target as $value) {
                                    array_push($item,$value->target);
                                }
                        ?>
                        {{-- <div class="row mt-3">
                            <div class="col-6">
                                <label for="name">{{Session::get('lang')=='th'?'กลุ่มลูกค้า':'Target'}} :</label>
                                <select name="target[]" multiple="multiple"  class="form-control functional">
                                    <option class="item_type" value="all" {{in_array('all',$item)?'selected':''}}>all</option>
                                    <option class="item_type" value="spa"  {{in_array('spa',$item)?'selected':''}}>สปา & นวด</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                    <option class="item_type" value="hair" {{in_array('hair',$item)?'selected':''}}>ครบเครื่องเรื่องทำผม</option>
                                    <option class="item_type" value="nail" {{in_array('nail',$item)?'selected':''}}>ทำเล็บ</option>
                                    <option class="item_type" value="eye" {{in_array('eye',$item)?'selected':''}}>ขนตาและคิ้ว</option>
                                    <option class="item_type" value="depilatory" {{in_array('depilatory',$item)?'selected':''}}>บริการกำจัดขน</option>
                                    <option class="item_type" value="beayty" {{in_array('beayty',$item)?'selected':''}}>คลินิกความงาม</option>
                                    <option class="item_type" value="surgery" {{in_array('surgery',$item)?'selected':''}}>ศัลยกรรม</option>
                                    <option class="item_type" value="dentist" {{in_array('dentist',$item)?'selected':''}}>คลินิคทำฟัน</option>
                                    <option class="item_type" value="IVF" {{in_array('IVF',$item)?'selected':''}}>IVF & CHECK UP</option>
                                    <option class="item_type" value="fitness" {{in_array('fitness',$item)?'selected':''}}>ฟิตเนส</option>
                                </select>  
                            </div>
                        </div>  --}}
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <a href="javascript:void(0)" type="button" style="float:left;" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
                            </div>
                            <div class="col-sm">
                            
                                <button type="button" onclick="save('saveside')" class="btn btn-success" style="float:right;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
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