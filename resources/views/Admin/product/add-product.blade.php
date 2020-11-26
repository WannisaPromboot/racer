@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title')เพิ่มสินค้า @endsection

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
        <h4 class="mb-0 font-size-18">เพิ่มสินค้า</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('saveproduct')}}" method="post" id="saveproduct">            
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer"> 
                            <div class="row">
                                <div class="col-3 mt-2">
                                    <b>รหัสสินค้า</b>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="id_product" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3 mt-2">
                                    <b>ชื่อสินค้า (ภาษาไทย)</b>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="product_name_th" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>ชื่อสินค้า (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="product_name_en" required>
                                </div>
                            </div>
                            <br>
                            <div class="row" >
                                <div class="col-3  mt-2">
                                    <b>หมวดหมู่หลัก </b>
                                </div>
                                <div class="col-2">
                                    <select class="form-control cate">
                                        <option>-เลือกหมวดหมู่หลัก-</option>
                                        @foreach ($cate as $_cate)
                                            <option value="{{$_cate->id_category}}">{{$_cate->category_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2 text-right  mt-2">
                                    <b>หมวดหมู่ย่อย</b>
                                </div>
                                <div class="col-2">
                                    <select class="form-control" id="subcate">
                                        
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row" >
                                <div class="col-3  mt-2">
                                    <b>ราคาปกติ </b>
                                </div>
                                <div class="col-2">
                                    <input type="number" class="form-control" name="product_normal_price" required>
                                </div>
                                <div class="col-1  mt-2">บาท</div>
                                <div class="col-1 text-right  mt-2">
                                    <b>ราคาพิเศษ</b>
                                </div>
                                <div class="col-2">
                                    <input type="number" class="form-control specialprice" name="product_special_price" >
                                </div>
                                <div class="col-1  mt-2">บาท</div>
                            </div>
                            <br>
                            <div class="row" id="date" style="display: none">
                                <div class="col-3  mt-2">
                                    <b>วันที่เริ่ม </b>
                                </div>
                                <div class="col-2">
                                    <input type="date" class="form-control" name="product_start" min="{{date('Y-m-d')}}" >
                                </div>
                                <div class="col-2 text-right  mt-2">
                                    <b>ถึง</b>
                                </div>
                                <div class="col-2">
                                    <input type="date" class="form-control" name="product_end" min="{{date('Y-m-d')}}" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>วิธีใช้สนค้า (ภาษาไทย)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_method_th" name="product_method_en" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>วิธีใช้สนค้า (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_method_en" name="product_method_en" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>รายละเอียดสินค้า (ภาษาไทย)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_description_th" name="product_description_th" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>รายละเอียดสินค้า (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_description_en" name="product_description_en" ></textarea>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            {{-- image --}}
                            <div class="row">
                                <div class="col">
                                    <h4>รูปภาพ</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                {{-- @if(!empty($img))
                                    @foreach($img as $key => $picture)
                                    <div id="gal{{$picture->id_store_gallery}}">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="file" style="display: none;" name="sub_gallery[{{$picture->id_store_gallery}}]" class="form-control" id="slidepicture{{$picture->id_store_gallery}}" multiple="multiple" onchange="readGalleryURL2(this,{{$picture->id_store_gallery}})">
                                                <img id="gallerypreview{{$picture->id_store_gallery}}" style="max-height:250px ;" alt="{{url('no-image.jpg')}}" src="{{url('storage/app/'.$picture->filepath)}}" />
                                                <input type="text" name="sub_sort[{{$picture->id_store_gallery}}]"  class="form-control text-center" value="{{$picture->sort}}" />
                                                <button  type="button" class="btn btn-danger" onclick="deletegallery({{$picture->id_store_gallery}})" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif --}}
                            </div>
                            <div id="delete"></div>
                            <div id="newgallery" class="row"></div>
                            <button type="button" class="btn btn-primary" onclick="addimagegallery()">{{Session::get('lang')=='th'?'เพิ่มภาพ ':'Add Image'}}</button>
                            {{-- end --}}
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <h4>ขนาดและการจัดส่ง</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>น้ำหนัก</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_kg" required>
                                </div>
                                <div class="col-1  mt-2">กก.</div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>ความกว้าง</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_weight" required>
                                </div>
                                <div class="col-1  mt-2">ซม.</div>
                                <div class="col-1  mt-2">
                                    <b>ความยาว</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_lenght" required>
                                </div>
                                <div class="col-1  mt-2">ซม.</div>
                                <div class="col-1  mt-2">
                                    <b>ความสูง</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_height" required>
                                </div>
                                <div class="col-1  mt-2">ซม.</div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>ส่งฟรี </b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_distance_free" required>
                                </div>
                                <div class="col-1  mt-2">กม.</div>
                                <div class="col-1  mt-2">
                                    <b>กิโลเมตรละ</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_distance_km" required>
                                </div>
                                <div class="col-1  mt-2">บาท</div>
                            </div>
                            <br>
                            <div class="row mt-5">
                                <div class="col-sm text-left">
                                    <a  href="{{url('productcontent')}}" class="btn btn-danger">กลับ</a>
                                </div>
                                <div class="col-sm text-right">
                                    <button  type="button" onclick="save('saveproduct')" class="btn btn-success" >ยืนยัน</button>
                                    {!! OrangeV1::AlertMessage('saveproduct') !!}
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
                     
<?php $count = DB::table('product_gallery')->max('id_product_gallery'); ?>
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
    $(document).ready(function(){
        $("#product_method_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_method_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_description_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_description_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

    });
    
</script>
<script>

    /////////////รูปภาพ
    count = 0;
    gallery = '{{$count + 1000}}';

    function addimagegallery(){

        gallery++;

        newimage =  '<div id="gal'+gallery+'">'+
            '<div class="form-group">'+
                '<div class="col-sm-12">'+
                    '<input type="file" style="display: none;"  name="sub_gallery['+(gallery).toString()+']" class="form-control chooseImage'+gallery+'" id="slidepicture'+gallery+'" multiple="multiple" onchange="readGalleryURL2(this,'+gallery+')">'+
                    '<img id="gallerypreview'+gallery+'" style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage('+gallery+')" />'+
                    '<input type="text" name="sub_sort['+(gallery).toString()+']" class="form-control text-center">'+
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

    /////end image
    ///////check specialprice
    $('.specialprice').change(function(){
        if($(this).val() == ''){
            $('#date').css('display','none');
        }else{
            $('#date').removeAttr('style');
        }
     
    });

    /////////get cate 

    $('.cate').change(function(){
        $.ajax({
            url: '{{ url("getsubcate")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id' : $(this).val()},
            success: function(data) {
                $('#subcate').html(data)
               // window.location.reload();
            }
        });
    });


    var B = "{{Session::get('Save')}}";
    if(B){
        swal(B);
    }
</script>

@endsection