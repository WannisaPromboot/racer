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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เพิ่มบทความ':' Add news'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('savenew')}}" method="POST" enctype="multipart/form-data" id="savenews">
                        @csrf
                        
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}} : </b>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="filepath" class="form-control chooseImage10" id="slidepicture0" multiple="multiple" onchange="readGalleryURL3(this,0)">
                                        <img id="gallerypreview20"  style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage1(0)" />
                                        {{-- <input type="text" name="sub_sort[2]" class="form-control text-center" required> --}}
                                        {{-- <button  type="button" class="btn btn-danger" onclick="deletegallery(2)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> --}}
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <input type="hidden" name="id" value="{{!empty($id)?$id:''}}" >
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (ภาษาไทย) : ' :'Title (Thailand) : '}} </b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="new_th" value="{{!empty($id)?$blog->title_th:''}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (อังกฤษ) : ' :'Title (English) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="new_en" value="{{!empty($id)?$blog->title_en:''}}" required>
                            </div>
                        </div>
                        <br>
                        
                        {{-- <div id="newlanguage"></div>
                        <button type="button" class="btn" style="background-color: #03dc74 !important;color:white !important;" onclick="addtitlelanguage()">เพิ่มหัวข้อ</button> --}}
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาไทย) : ':'Detail (Thailand) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_th"  name="description_new_th" required>{{!empty($id)?$blog->description_th:''}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาอังกฤษ) : ':'Detail (English) : '}} </b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_en" name="description_new_en" required>{{!empty($id)?$blog->description_en:''}}</textarea>
                            </div>
                        </div>
                        <br>
                        
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-sm">
                                <h5>
                                    <b>{{Session::get('lang')=='th'?'แกลลอรี่':'Gallery '}}</b>
                                </h5>
                            </div>
                        </div>
                        <div id="delete"></div>
                        <div id="newgallery" class="row"></div>
                        <button type="button" class="btn btn-primary" onclick="addimagegallery()">{{Session::get('lang')=='th'?'เพิ่มภาพ ':'Add Image'}}</button>
        
                        <br><br>
                        
                        
                        <hr style=" border-top: 1px solid #556ee6;">
                        
                        <div data-repeater-item class="row mt-5"> 
                            <div class="col-9">
                                <a href="{{url('newcontent')}}" style="float:left;"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back'}}</a>
                            </div>
                            <div class="col-3 text-right">
                                {{-- <button type="submit" formaction="{{url('saveviewblog')}}"  class="btn btn-info mr-2" >  <i class="bx bx-show" style="font-size:18px ="></i>{{Session::get('lang')=='th'?'มุมมองของลูกค้า ' :'Customer View'}}</button> --}}
                                <button type="button" class="btn" onclick="save('savenews')"  style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                                {!! OrangeV1:: AlertMessage ('savenews') !!}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
                     
<?php $count = DB::table('new_gallery')->max('id_new_gallery'); ?>
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

    ///////////image
    count = 0;
    gallery = '{{$count + 1000}}';

    function addimagegallery(){

        gallery++;

        newimage =  '<div id="gal'+gallery+'">'+
            '<div class="form-group">'+
                '<div class="col-sm-12">'+
                    '<input type="file" style="display: none;"  name="sub_gallery['+(gallery).toString()+']" class="form-control chooseImage'+gallery+'" id="slidepicture'+gallery+'" multiple="multiple" onchange="readGalleryURL2(this,'+gallery+')">'+
                    '<img id="gallerypreview'+gallery+'" style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage('+gallery+')" />'+
                    '<!--input type="text" name="sub_sort['+(gallery).toString()+']" class="form-control text-center"-->'+
                    '<div></div>'+
                    '<button  type="button" class="btn btn-danger" onclick="deletegallery('+gallery+')" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>'+
                '</div>'+
            '</div>'+
        '</div>';
        $('#newgallery').append(newimage);
    }

    function browsImage(id){
        $('.chooseImage'+id).click();
    }

    function deletegallery(num){

        $('#gal'+num).remove();
        //gallery--;
        $('#delete').append('<input type="hidden" name="deletedkey[]" value="'+num+'">');

    }

    function readGalleryURL2(input,id) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#gallerypreview'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

     ////////////สำหรับรูปหน้าปก

     function browsImage1(id){
        $('.chooseImage1'+id).click();
    }



    function readGalleryURL3(input,id) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#gallerypreview2'+id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }
    

    //////////end
    
</script>
@endsection