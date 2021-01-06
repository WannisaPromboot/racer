@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') รายละเอียดแบนเนอร์ @endsection

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
        <h4 class="mb-0 font-size-18"> รายละเอียดแบนเนอร์</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
        
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    
                        
                            <div class="row">
                                <div class="col-2">หมวดหมู่   : </div>
                                <div class="col-5">{{$datas->category_name_th}}</div>
                            </div>
                            <br>
                            <br>
                            @if(count($banner)==0)
                                @foreach(range(1,5) as $i)
                                    <div class="row">
                                        <div class="col-2">ลิงก์   {{$i}} : </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="banner_link{{$i}}">
                                        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        
                                        <div class="col-2">รูปภาพ   {{$i}} : </div>
                                        <div class="col-5">
                                            
                                            <input type="file" class="form-control" name="filepath{{$i}}" id="filepath{{$i}}" onchange="readImage(this,'filepath{{$i}}');">
                                            <img src="" id="imgpreview_filepath{{$i}}" style="max-height:200px;">
                                            {!! OrangeV1::ImagePreviewJs() !!}  
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            @else
                                @foreach(range(1,5) as $j)
                                    <?php $banner = DB::Table('banner')->where('category_id',$idcate)->where('banner_number',$j)->first();?>
                                    <div class="row">
                                        <div class="col-2">ลิงก์   {{$j}} : </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="banner_link{{$j}}" value="{{!empty($banner)?$banner->banner_link:''}}">
                                        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-2">รูปภาพ   {{$j}} : </div>
                                        <div class="col-5">
                                            <input type="file" class="form-control" name="filepath{{$j}}" id="filepath{{$j}}" onchange="readImage(this,'filepath{{$j}}');">
                                            @if(!empty($banner))
                                                <img src="{{url('storage/app/'.$banner->banner_image)}}" id="imgpreview_filepath{{$j}}" style="max-height:200px;" >
                                            @else
                                                <img src="" id="imgpreview_filepath{{$j}}" style="max-height:200px;">
                                            @endif
                                            {!! OrangeV1::ImagePreviewJs() !!}  
                                            
                                        </div>
                                        
                                    </div>
                                    <br>
                                @endforeach
                            @endif
                       

                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <a href="javascript:void(0)" type="button" style="float:left;" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back '}}</a>
                            </div>
                            <div class="col-sm">
                            
                                <button type="button" onclick="save('saveside')" class="btn btn-success" style="float:right;">{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm '}}</button>
                            </div>
                            
                        </div>                
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
                        window.location.href = "{{ url('bannercontent')}}";
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