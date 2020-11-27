@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'เพิ่มบทความ':' Add Blog'}} @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

          <!-- Sweertalert -->
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

            {{-- tag input --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
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
<?php
    if(!empty($id)){
        $blog = \App\Blog::where('blog_id',$id)->first();
    }

?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เพิ่มบทความ':' Add Blog'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form  action="{{url('saveblog')}}" method="POST" enctype="multipart/form-data" id="saveblog">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" value="{{!empty($id)?$id:''}}" >
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (ภาษาไทย) : ' :'Title (Thailand) : '}} : </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_th" value="{{!empty($id)?$blog->title_th:''}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (อังกฤษ) : ' :'Title (English) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_en" value="{{!empty($id)?$blog->title_en:''}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (ภาษาจีน) : ' :'Title (Chainese) : '}} </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="title_ch" value="{{!empty($id)?$blog->title_ch:''}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?'หมวดหมู่ : ' :'Category : '}}</b>
                            </div>
                            <div class="col-5">
                               <select class="form-control" name="catagory">
                                   <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select'}}</option>
                                   <?php  $menu = \App\Mainmenu::all(); ?>
                                   @foreach ($menu as $item)
                                        <option value="{{$item->menu_id}}">{{$item->menu_th}}</option>
                                   @endforeach
                               </select>
                            </div>
                        </div>
                        <br>
                        {{-- <div id="newlanguage"></div>
                        <button type="button" class="btn" style="background-color: #03dc74 !important;color:white !important;" onclick="addtitlelanguage()">เพิ่มหัวข้อ</button> --}}
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาไทย) : ':'Detail (Thailand) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_th"  name="description_th" required>{{!empty($id)?$blog->description_th:''}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาอังกฤษ) : ':'Detail (English) : '}} </b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_en" name="description_en" required>{{!empty($id)?$blog->description_en:''}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาจีน) : ':'Detail (Chainese) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_ch" name="description_ch" required>{{!empty($id)?$blog->description_ch:''}}</textarea>
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
                                @if(!empty($id) && !empty($blog->filepath) )
                                    <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');" >
                                    <img src="{{url('storage/app/'.$blog->filepath)}}" id="imgpreview_filepath" style="max-height:150px;">
                                    {!! OrangeV1::ImagePreviewJs() !!}
                                @else
                                    <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');" >
                                    <img src="" id="imgpreview_filepath" style="max-height:150px;">
                                    {!! OrangeV1::ImagePreviewJs() !!}
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'ลิงค์':'Link'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="link" name="link" value="{{!empty($id)?$blog->link:''}}" >
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col-2">{{Session::get('lang')=='th'?'วิดิโอ':'Video'}} : </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="video" value="{{!empty($id)?$blog->video:''}}" name="video" >
                                @if(!empty($id) && !empty($blog->video))
                                <iframe src="{{$blog->video}}?autoplay=1&controls=0" allowfullscreen allow="autoplay;"></iframe>
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
                                <input type="date" class="form-control datefrom" name="datefrom" value="{{!empty($id)?$blog->datefrom:''}}" min="{{date('Y-m-d')}}">
                            </div>
                            <div class="col-1 mt-2">
                                <b>{{Session::get('lang')=='th'?'ถึงวันที่':'To'}} : </b>
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control dateto" name="dateto" value="{{!empty($id)?$blog->dateto:''}}">
                            </div>
                        </div>
                        <div data-repeater-item class="row mt-5"> 
                            <div class="col-9">
                                <a href="{{url('blogcontent')}}" style="float:left;"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back'}}</a>
                            </div>
                            <div class="col-3 text-right">
                                <button type="submit" formaction="{{url('saveviewblog')}}"  class="btn btn-info mr-2" >  <i class="bx bx-show" style="font-size:18px ="></i>{{Session::get('lang')=='th'?'มุมมองของลูกค้า ' :'Customer View'}}</button>
                                <button type="button" class="btn" onclick="save('saveblog')"  style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
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
    
    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: "{{url('summernoteupload')}}",
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                editor.summernote('insertImage',url, function ($image) {
                            });
                
            },
            error: function (xhr, ajaxOptions, thrownError) {
                if (xhr.responseText) {
                    toastr.error(xhr.responseText, 'Inconceivable!')
                } else {
                    console.error("<div>Http status: " + xhr.status + " " + xhr.statusText + "</div>" + "<div>ajaxOptions: " + ajaxOptions + "</div>"
                        + "<div>thrownError: " + thrownError + "</div>");
                }
            }
        });
    }

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

    /////////////////image
function addimg(){
        item++;
        newimg= '<div class="row mb-3" id="itemimg'+item+'">'+
                            '<div class="col-10"><input type="file" class="form-control"></div>'+
                            '<div class="col-2 mb-3">'+
                                '<button style="float: left;" type="button" class="btn btn-danger" onclick="deleteimage('+item+')">ลบ</button>'
                            '</div>'+
                        '</div>';

        $('#newimage').append(newimg);
        };

        
    function deleteimage(item){

        $('#itemimg'+item).remove();
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
        text: "คุณต้องการบันทึกข้อมูลใช่หรือไม่",
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

    $('.datefrom').change(function(){
        $('.dateto').attr('min',$(this).val());
    });

</script>
@endsection