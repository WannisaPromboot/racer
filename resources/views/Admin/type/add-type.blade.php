@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'เพิ่มหมวดหมู่ย่อย 1 ' :'Add Sub Category 1'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เพิ่มหมวดหมู่ย่อย 1 ' :'Add Sub Category 1'}}</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('savetype')}}"  method="post" enctype="multipart/form-data" id="savetype">            
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer"> 
                                
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row"> 
                                            <div class="col-4  mt-2"><b>{{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}} :</b></div>
                                            <div class="col-7">
                                                <select class="form-control" name="mainmenu" style="width: 415px"  required>
                                                    <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select '}}</option>
                                                    @foreach ($menu as $item)
                                                        <option value="{{$item->menu_id}}">{{$item->menu_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-2"> 
                                            <div class="col-4  mt-2"><b>{{Session::get('lang')=='th'?'ไอคอน ' :'Icon'}} :</b></div>
                                            <div class="col-7">
                                                <select class="form-control icon" name="icon"  style="width: 415px" required>
                                                    <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select '}}</option>
                                                    @foreach ($icon as $item)
                                                        <option value="{{$item->icon_id}}">{{$item->icon_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 " id="icon"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 "><b>{{Session::get('lang')=='th'?'ชื่อหมวดหมู่ย่อย 1 (ภาษาไทย) ' :'Name of subcategory 1 (Thailand) '}} :</b></div>
                                    <div class="col-5">
                                        <input class="form-control"  name="type_th" required> 
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 "><b>{{Session::get('lang')=='th'?'ชื่อหมวดหมู่ย่อย 1 (ภาษาอังกฤษ) ' :'Name of subcategory 1 (English) '}} :</b></div>
                                    <div class="col-5">
                                        <input class="form-control"  name="type_en"  required> 
                                    </div>
                                </div>
                                <div class="row  mt-2">
                                    <div class="col-3"><b>{{Session::get('lang')=='th'?'ชื่อหมวดหมู่ย่อย 1 (ภาษาจีน) ' :'Name of subcategory 1 (Chainese) '}} :</b></div>
                                    <div class="col-5">
                                        <input class="form-control"  name="type_ch"  required> 
                                    </div>
                                </div>
                                <br>
                                <?php   $last = \App\Type::orderby('category_id','desc')->first(); 
                                        $cat_last = substr($last->category_id,1,4);
                                ?>
                                <div class="row  mt-2">
                                    <div class="col-3"><b>{{Session::get('lang')=='th'?'รหัสเมนู ' :'Category id'}}  :</b></div>
                                    <div class="col-5">{{!empty($last->category_id) ?  'C'.str_pad(intval($cat_last) + 1, 3, 0, STR_PAD_LEFT) : 1 }}
                                        <input type="hidden"  name="category_id" value="{{!empty($last->category_id) ? 'C'.str_pad(intval($cat_last) + 1, 3, 0, STR_PAD_LEFT) : 1 }}"  required> 
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm text-left">
                                        <a  href="{{url('typecontent')}}" class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back'}}</a>
                                    </div>
                                    <div class="col-sm text-right">
                                        <button  type="button" onclick="save('savetype')" class="btn btn-success" >{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
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
$('.icon').change(function(){
    value = $(this).val();
    $.ajax({
                url: "{{ url('geticon') }}",
                method : 'GET',
                data : { 'value' : value  },
                dataType : 'html', 
                success:function(result){
                    $('#icon').html(result)

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

</script>
<script>
    var B = "{{Session::get('Save')}}";
    if(B){
        swal(B);
    }
</script>

@endsection