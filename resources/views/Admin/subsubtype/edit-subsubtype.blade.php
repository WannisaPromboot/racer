@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขหมวดหมู่ย่อย 3' :'Edit Sub Category 3'}} @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

        <!-- Sweertalert -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

          <!-- tag input -->
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.css') }}">
          <style>
              .bootstrap-tagsinput{
                  width:100% !important;
              }
              .bootstrap-tagsinput .tag{
                background-color: #eff2f7 !important;
                border: 1px solid #f6f6f6 !important;
                border-radius: 1px !important;
                padding: 0 7px !important;
                color: black;
              }
          </style>
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'แก้ไขหมวดหมู่ย่อย 3' :'Edit Sub Category 3'}}</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <?php
                 $main = \App\Mainmenu::where('menu_id',$subsubtype->main_id)->first(); 
                 $type = \App\Type::where('type_id',$subsubtype->type_id)->first();
                 $subtype = \App\SubType::where('subtype_id',$subsubtype->subtype_id)->first();
                ?>
                <div id="edit">
                    <form action="{{url('updatesubsubtype')}}"  method="post" id="updatesubsub">            
                        @csrf
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer"> 
                                <input type="hidden" name="id" value="{{$subsubtype->subsubtype_id}}" >
                                    <div class="row"> 
                                        <div class="col-3  mt-2"><b>{{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}} :</b></div>
                                        <div class="col-4">
                                            <select class="form-control mainmenu" name="main_id">
                                                <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select '}}</option>
                                                @foreach ($menu as $item)
                                                    <option value="{{$item->menu_id}}" {{$subsubtype->main_id==$item->menu_id?'selected':''}}>{{$item->menu_th}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3"> 
                                        <div class="col-3 mt-2"><b>{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1' :'Sub Category 1'}} :</b></div>
                                        <div class="col-4">
                                            <?php $type = \App\Type::where('mainmenu',$subsubtype->main_id)->get(); ?>
                                           <select class="form-control type" name="type_id" id="type" >
                                                <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select '}}</option>
                                                @foreach ($type as $_type)
                                                    <option value="{{$_type->type_id}}" {{$subsubtype->type_id==$_type->type_id?'selected':''}}>{{$_type->type_th}}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3"> 
                                        <?php $subtype = \App\SubType::where('main',$subsubtype->main_id)->get(); ?>
                                        <div class="col-3 mt-2"><b>{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 2' :'Sub Category 2'}} :</b></div>
                                        <div class="col-4">
                                           <select class="form-control" name="subtype_id" id="subtype">
                                                <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select '}}</option>
                                                @foreach ($subtype as $_subtype)
                                                    <option value="{{$_subtype->subtype_id}}" {{$subsubtype->subtype_id==$_subtype->subtype_id?'selected':''}}>{{$_subtype->subtype_th}}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3 mt-2"><b>{{Session::get('lang')=='th'?'ชื่อหมวดหมู่ย่อย 3 (ภาษาไทย) ' :'Name of subcategory 3 (Thailand)'}}:</b></div>
                                        <div class="col-4">
                                            <input class="form-control"  name="subsubtype_th" value="{{$subsubtype->subsubtype_th}}"> 
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3 mt-2"><b>{{Session::get('lang')=='th'?'ชื่อหมวดหมู่ย่อย 3 (ภาษาอังกฤษ) ' :'Name of subcategory 3 (English)'}}:</b></div>
                                        <div class="col-4">
                                            <input class="form-control"  name="subsubtype_en" value="{{$subsubtype->subsubtype_en}}"> 
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3 mt-2"><b>{{Session::get('lang')=='th'?'ชื่อหมวดหมู่ย่อย 3 (ภาษาจีน) ' :'Name of subcategory 3 (Chainese)'}}:</b></div>
                                        <div class="col-4">
                                            <input class="form-control" name="subsubtype_ch"  value="{{$subsubtype->subsubtype_ch}}"> 
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row  mt-2">
                                        <div class="col-3"><b>{{Session::get('lang')=='th'?'รหัสเมนู  ' :'ID of subcategory 1'}}  :</b></div>
                                        <div class="col-5">
                                            <input class="form-control"  name="category_id" value="{{$subsubtype->category_id}}"    required> 
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm text-left">
                                            <a  href="javascript:void(0)" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back'}}</a>
                                           
                                        </div>
                                        <div class="col-sm text-right">
                                            <button  type="button" onclick="save('updatesubsub')" class="btn btn-success" >{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                                        </div>
                                    </div>
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

<!-- tag input -->
<script  src="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script> 

<script>
$('.mainmenu').change(function(){
    value = $(this).val();
    $.ajax({
                url: "{{ url('gettype') }}",
                method : 'GET',
                data : { 'id' : value  },
                dataType : 'html', 
                success:function(result){
                    $('#type').html(result)

                }
        });
 });

 $('.type').change(function(){
    value = $(this).val();
    $.ajax({
                url: "{{ url('getsubtype') }}",
                method : 'GET',
                data : { 'id' : value  },
                dataType : 'html', 
                success:function(result){
                    $('#subtype').html(result)

                }
        });
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
                    window.location.href = "{{ url('subsubtypecontent')}}";
                }
        });
    }
</script>
<script>
    var B = "{{Session::get('Save')}}";
    if(B){
        swal(B);
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