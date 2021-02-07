@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขข้อมูลโปรโมชั่น ':'Edit promotion'}} @endsection

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
                    <form action="{{url('updatepromotion/'.$item->id_new_promotion.'')}}" method="post" enctype="multipart/form-data" id="updatepromotion">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <b>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}} : </b>
                            </div>
                            <div class="col-8">
                                <input type="file" class="form-control" name="filepath" id="filepath" value="{{$item->promotion_image}}" onchange="readImage(this,'filepath');" >
                                <img src="{{!empty($item->promotion_image)?url('storage/app/'.$item->promotion_image):''}}" id="imgpreview_filepath" style="max-height:200px;">
                                {!! OrangeV1::ImagePreviewJs() !!}
                            </div>
                        </div>
                       
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <b>ลิงก์ : </b>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="link" value="{{!(empty($item->promotion_link))?$item->promotion_link:''}}" style="width: 478px;">
                               
                            </div>
                        </div>

                        <div data-repeater-item class="row mt-5"> 
                            <div class="col-6">
                                <a href="javascript:void(0)"  onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'ยกเลิก ':'Cancel'}}</a>
                            </div>
                            <div class="col-6 text-right">
                                {{-- <button type="submit"  formaction="{{url('viewupdateblog/'.$item->id_blog.'')}}"  class="btn btn-info">  <i class="bx bx-show" style="font-size:18px ="></i>{{Session::get('lang')=='th'?'มุมมองของลูกค้า ' :'Customer View'}}</button> --}}
                                <button type="button" class="btn btn-success" onclick="save('updatepromotion')" style="">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                                {!! OrangeV1:: AlertMessage ('updatepromotion') !!}
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
                    window.location.href = "{{ url('promotioncontent')}}";
                }
        });
    }

    
    
</script>

@endsection