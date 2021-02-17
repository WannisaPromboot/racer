@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') เพิ่มโปรโมชั่น@endsection

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
        <h4 class="mb-0 font-size-18">เพิ่มโปรโมชั่น</h4>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form  action="{{url('savepromotion')}}" method="POST" enctype="multipart/form-data" id="savepromotion">
                        @csrf
                        
                        <div class="row">
                            <div class="col-2">
                                <b>รูปภาพ : </b>
                            </div>
                            <div class="col-8">
                                <input type="file" class="form-control" name="filepath" id="filepath" onchange="readImage(this,'filepath');" style="width: 478px;">
                                <img src="" id="imgpreview_filepath" style="max-height:150px;">
                                {!! OrangeV1::ImagePreviewJs() !!}
                        
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <b>ลิงก์ : </b>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="link" style="width: 478px;">
                               
                            </div>
                        </div>
                        
                        {{-- <hr style=" border-top: 1px solid #556ee6;"> --}}
                        
                        <div data-repeater-item class="row mt-5"> 
                            <div class="col-9">
                                <a href="{{url('promotioncontent')}}" style="float:left;"  class="btn btn-danger">กลับ </a>
                            </div>
                            <div class="col-3 text-right">
                                {{-- <button type="submit" formaction="{{url('saveviewpromotion')}}"  class="btn btn-info mr-2" >  <i class="bx bx-show" style="font-size:18px ="></i>มุมมองของลูกค้า ' :'Customer View'}}</button> --}}
                                <button type="button" class="btn" onclick="save('savepromotion')"  style="background-color: #03dc74 !important;color:white !important;">ยืนยัน </button>
                                {!! OrangeV1:: AlertMessage ('savepromotion') !!}
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
    gallery = 0;
    function addimagegallery(){

        gallery++;
        newimage = '<div class="col-md-12" id="gal'+gallery+'">'+
        '<div class="form-group">'+
        '<label for="usr">ภาพ Gallery</label>'+
        '<input type="file" name="sub_gallery['+(gallery).toString()+']" class="form-control" id="slidepicture'+gallery+'" onchange="readGalleryURL2(this,'+gallery+')">'+
        '<img id="gallerypreview'+gallery+'" style="max-height:400px ;" src="{{url('no-image.jpg')}}" alt="No image" />'+
        '</div>'+ 
        '<button style="float: right;" type="button" class="btn btn-danger" onclick="deleteimagegallery('+gallery+')">ลบภาพ</button><br><br>'
        '</div>';


        $('#newgallery').append(newimage);
    }

    function deleteimagegallery(num){

        $('#gal'+num).remove();
        //gallery--;
        $('#formgallery').append('<input type="hidden" name="deletedkey[]" value="'+num+'">')

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
        
    $('.functional').select2({
        tags: true,
        minimumResultsForSearch: -1,
        maximumSelectionLength: 10,
        tokenSeparators: [',', ' '],
        placeholder: "-select target-",
    });



</script>
@endsection