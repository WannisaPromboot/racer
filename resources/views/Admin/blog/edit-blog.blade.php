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
                    <form action="{{url('updateblog/'.$item->id_blog.'')}}" method="post" enctype="multipart/form-data" id="updateblog">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}} : </b>
                            </div>
                            <div class="col-8">
                                <input type="file" class="form-control" name="filepath" id="filepath" value="{{$item->blog_image}}" onchange="readImage(this,'filepath');" >
                                <img src="{{!empty($item->blog_image)?url('storage/app/'.$item->blog_image):''}}" id="imgpreview_filepath" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}
                            </div>
                        </div>
                         <br>
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (ภาษาไทย) : ' :'Title (Thailand) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="blog_th" value="{{$item->blog_th}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'หัวข้อ (อังกฤษ) : ' :'Title (English) : '}}</b>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="blog_en" value="{{$item->blog_en}}" required>
                            </div>
                        </div>
                        
                        <br>
                        <hr style=" border-top: 1px solid #556ee6;">
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาไทย) : ':'Detail (Thailand) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_th"  name="blog_description_th"  required>{{$item->blog_description_th}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?' รายละเอียด (ภาษาอังกฤษ) : ':'Detail (English) : '}}</b>
                            </div>
                            <div class="col-sm">
                                <textarea type="text" id="description_en" name="blog_description_en" required>{{$item->blog_description_en}}</textarea>
                            </div>
                        </div>
                        <br>
                        
                        <hr style=" border-top: 1px solid #556ee6;">
                       
                        <div class="row">
                            <div class="col-2">Blog gallery : </div>
                            <div class="col-8">
                                @foreach($image as $key => $picture)
                                    <div id="gal{{$picture->id_blog_gallery}}">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="file" name="sub_gallery[{{$picture->id_blog_gallery}}]" class="form-control" id="slidepicture{{$picture->id_blog_gallery}}" multiple="multiple" onchange="readGalleryURL2(this,{{$picture->id_blog_gallery}})">
                                                    <img id="gallerypreview{{$picture->id_blog_gallery}}" style="max-height:250px ;" alt="{{url('no-image.jpg')}}" src="{{url('storage/app/'.$picture->blog_gallery_image)}}" />
                                                
                                                </div>
                                                <div class="col-sm mt-4 pt-2">
                                                    <button  type="button" class="btn btn-danger" onclick="deleteimagegallery({{$picture->id_blog_gallery}})">ลบภาพ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            <div id="delete"></div>
                            <div id="newgallery"></div>
                            
                            <button type="button" class="btn btn-primary" onclick="addimagegallery()">เพิ่มภาพ</button>

                            <br><br>
                            </div>
                        </div>
                        <div id="formgallery"></div>
                        <hr style=" border-top: 1px solid #556ee6;">
                        
                        <div data-repeater-item class="row mt-5"> 
                            <div class="col-6">
                                <a href="javascript:void(0)"  onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'ยกเลิก ':'Cancel'}}</a>
                            </div>
                            <div class="col-6 text-right">
                                {{-- <button type="submit"  formaction="{{url('viewupdateblog/'.$item->id_blog.'')}}"  class="btn btn-info">  <i class="bx bx-show" style="font-size:18px ="></i>{{Session::get('lang')=='th'?'มุมมองของลูกค้า ' :'Customer View'}}</button> --}}
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
    
        
    $('.functional').select2({
        tags: true,
        minimumResultsForSearch: -1,
        maximumSelectionLength: 10,
        tokenSeparators: [',', ' '],
        placeholder: "-select target-",
    });
           
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
        $('#formgallery').append('<input type="hidden" name="deleted_id[]" value="'+num+'">')

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
                    
</script>
<script>
    var A = "{{Session::get('Update')}}";
    if(A){
        Swal.fire({
            text:A,
            type: 'success',
        });
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

        
        Swal.fire({
            text: "คุณต้องการบันทึกข้อมูลใช่หรือไม่",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'save'
            }).then((result)=>{
                if (result.value) {
                    // console.log(formname);
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

    
    
</script>

@endsection