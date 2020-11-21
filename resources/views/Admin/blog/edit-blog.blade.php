@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขข้อมูล Blog ':'Edit blog'}} @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

         <!-- Sweertalert -->
         <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

           {{-- tag input --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'แก้ไขข้อมูล Blog ':'Edit blog'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
        
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('updateblog/'.$item->blog_id.'')}}" method="post" enctype="multipart/form-data" id="updateblog">
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (ภาษาไทย) : ' :'Title (Thailand) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_th" value="{{$item->title_th}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (อังกฤษ) : ' :'Title (English) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_en" value="{{$item->title_en}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (ภาษาจีน) : ' :'Title (Chainese) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_ch" value="{{$item->title_ch}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หมวดหมู่ : ' :'Category : '}} </b>
                            </div>
                            <div class="col-5">
                               <select class="form-control" name="catagory">
                                   <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select'}}</option>
                                   <?php  $menu = \App\Mainmenu::all(); ?>
                                   @foreach ($menu as $_item)
                                        <option value="{{$_item->menu_id}}" {{$item->catagory==$_item->menu_id?'selected':''}}>{{$_item->menu_th}}</option>
                                   @endforeach
                               </select>
                            </div>
                        </div>
                        {{-- <div id="newlanguage"></div>
                        <button type="button" class="btn" style="background-color: #03dc74 !important;color:white !important;" onclick="addtitlelanguage()">เพิ่มหัวข้อ</button> --}}
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาไทย) : ':'Detail (Thailand) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_th"  name="description_th"  required>{{$item->description_th}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาอังกฤษ) : ':'Detail (English) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_en" name="description_en" required>{{$item->description_en}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาจีน) : ':'Detail (Chainese) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_ch" name="description_ch" required>{{$item->description_ch}}</textarea>
                            </div>
                        </div>
                        {{-- <div id="newdeslanguage"></div>
                        <button type="button" class="btn" style="background-color: #03dc74 !important;color:white !important;" onclick="adddeslanguage()">เพิ่มรายละเอียด</button> --}}
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>{{Session::get('lang')=='th'?'รูปภาพหรือลิงค์หรือวิดีโอ':'Image/Link/Video '}}</b>
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'รูปภาพ':'Image'}} : </div>
                            <div class="col-8">
                                <input type="file" class="form-control" name="filepath" id="filepath" value="{{$item->filepath}}" onchange="readImage(this,'filepath');" >
                                <img src="{{!empty($item->filepath)?url('storage/app/'.$item->filepath):''}}" id="imgpreview_filepath" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'ลิงค์':'Link'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="link" name="link" value="{{$item->link}}" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'วิดิโอ':'Video'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="video" value="{{$item->video}}" name="video" >
                                @if(!empty($item->video))
                                <iframe src="{{$item->video}}?autoplay=1&controls=0" allowfullscreen allow="autoplay;"></iframe>
                                @endif
                            </div>
                        </div>  
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>{{Session::get('lang')=='th'?'ระยะเวลาแสดง Blog (ค่าเริ่มต้นคือไม่มีเวลากำหนด)':'Period'}}</b>
                                </h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 mt-2">
                                <b>{{Session::get('lang')=='th'?'จากวันที่':'From'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control datefrom" name="datefrom" value="{{$item->datefrom}}"  min="{{$item->datefrom}}">
                            </div>
                            <div class="col-1 mt-2">
                                <b>{{Session::get('lang')=='th'?'ถึงวันที่':'To'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control dateto" name="dateto" value="{{$item->dateto}}" >
                            </div>
                        </div>
                        <div data-repeater-item class="row mt-5"> 
                            <div class="col-6">
                                <a href="javascript:void(0)"  onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'ยกเลิก ':'Cancel'}}</a>
                            </div>
                            <div class="col-6 text-right">
                                <button type="submit"  formaction="{{url('viewupdateblog/'.$item->blog_id.'')}}"  class="btn btn-info">  <i class="bx bx-show" style="font-size:18px ="></i>{{Session::get('lang')=='th'?'มุมมองของลูกค้า ' :'Customer View'}}</button>
                                <button type="button" class="btn btn-success" onclick="save('updateblog')" style="">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                               
                            </div>
                            {{-- <div class="col-1">
                                <a  href="{{url('blogcontent')}}"  style="float:left;"  class="btn btn-warning">{{Session::get('lang')=='th'?'ยกเลิก':'Cancel'}}</a>
                            </div> --}}
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
    $("#description_th").summernote({
        height:500,
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                
                sendFile(files[0], $(this), welEditable);
            }
        }
    });
    $("#description_en").summernote({
        height:500,
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                
                sendFile(files[0], $(this), welEditable);
            }
        }
    });
    $("#description_ch").summernote({
        height:500,
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                
                sendFile(files[0], $(this), welEditable);
            }
        }
    });

        
    $('.functional').select2({
        tags: true,
        minimumResultsForSearch: -1,
        maximumSelectionLength: 10,
        tokenSeparators: [',', ' '],
        placeholder: "-select target-",
    });
           
                    
</script>
<script>
    var A = "{{Session::get('Update')}}";
    if(A){
        swal(A);
    }


    function save(formname){

        var inputs = document.getElementsByTagName('input');
        for (var i = 0; i < inputs.length; i++) {
            // only validate the inputs that have the required attribute
            if(inputs[i].hasAttribute("required")){
                if(inputs[i].value == ""){
                    // found an empty field that is required
                    inputs[i].focus();
                    // alert("Please fill all required fields");
                    return false;
                }
            }
        }

        
        document.getElementById("description_th").required;
        document.getElementById("description_en").required;
        document.getElementById("description_ch").required;

        
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
                    window.location.href = "{{ url('blogcontent')}}";
                }
        });
    }

    $('.edit').click(function(){
        
        $('#view').hide();
        $('#edit').removeAttr('style');
    });

    $('.cancle').click(function(){
        $('#view').show();
        $('#edit').hide();
  
    });

    $('.datefrom').change(function(){
        $('.dateto').attr('min',$(this).val());
    });
    
</script>

@endsection