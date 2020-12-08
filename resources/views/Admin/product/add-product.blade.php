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
                <form action="{{url('saveproduct')}}" method="post" id="saveproduct" enctype="multipart/form-data">            
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer"> 
                            <div class="row">
                                <div class="col-3">
                                    <b>รูปภาพหน้าปก : </b>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        <input type="file" style="display: none;"  name="filepath[0]" class="form-control chooseImage20" id="slidepicture0" multiple="multiple" onchange="readGalleryURL3(this,0)">
                                            <img id="gallerypreview20"  style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage1(0)" />
                                            {{-- <input type="text" name="sub_sort[2]" class="form-control text-center" required> --}}
                                            {{-- <button  type="button" class="btn btn-danger" onclick="deletegallery(2)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> --}}
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-3 mt-2">
                                    <b>รหัสสินค้า</b>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" name="sap_code" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3 mt-2">
                                    <b>ชื่อสินค้า (ภาษาไทย)</b>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="product_name_th" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>ชื่อสินค้า (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="product_name_en" required>
                                </div>
                            </div>
                            <br>
                            <div class="row" >
                                <div class="col-3  mt-2">
                                    <b>หมวดหมู่หลัก </b>
                                </div>
                                <div class="col-3">
                                    <select class="form-control cate" name="id_category">
                                        <option>-เลือกหมวดหมู่หลัก-</option>
                                        @foreach ($cate as $_cate)
                                            <option value="{{$_cate->id_category}}">{{$_cate->category_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2 text-right  mt-2">
                                    <b>หมวดหมู่ย่อย</b>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" id="subcate" name="id_subcategory">
                                        
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row" >
                                <div class="col-3  mt-2">
                                    <b>ราคาปกติ </b>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control" name="product_normal_price" min="0" required>
                                </div>
                                <div class="col-1  mt-2">บาท</div>
                                <div class="col-1 text-right  mt-2">
                                    <b>ราคาพิเศษ</b>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control specialprice" min="0" name="product_special_price" >
                                </div>
                                <div class="col-1  mt-2">บาท</div>
                            </div>
                            <br>
                            <div class="row mb-4" id="date" style="display: none">
                                <div class="col-3  mt-2">
                                    <b>วันที่เริ่ม </b>
                                </div>
                                <div class="col-3">
                                    <input type="date" class="form-control datefrom" name="product_start" min="{{date('Y-m-d')}}" >
                                </div>
                                <div class="col-2 text-right  mt-2">
                                    <b>ถึง</b>
                                </div>
                                <div class="col-3">
                                    <input type="date" class="form-control dateto" name="product_end" min="{{date('Y-m-d')}}" >
                                    <div class="text-danger"  id="notidate" style="display: none">ควรใส่วันสิ้นสุดมากกว่าหรือเท่ากับวันที่เริ่มต้น</div>
                                </div>
                            </div>
                            <div class="row" id="date">
                                <div class="col-3  mt-2">
                                    <b>จำนวนสินค้า </b>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control" name="product_count" min="0" >
                                </div>
                                <div class="col-1 mt-2">ชิ้น</div>
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
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>วิธีใช้สินค้า (ภาษาไทย)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_method_th" name="product_method_th" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>วิธีใช้สินค้า (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_method_en" name="product_method_en" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>จุดเด่นสินค้า (ภาษาไทย)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_selling_th" name="product_selling_th" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>จุดเด่นสินค้า (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_selling_en" name="product_selling_en" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>คุณสมบัติ (ภาษาไทย)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_property_th" name="product_property_th" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>คุณสมบัติ (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_property_en" name="product_property_en" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>การติดตั้ง (ภาษาไทย)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_installation_th" name="product_installation_th" ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>การติดตั้ง (ภาษาอังกฤษ)</b>
                                </div>
                                <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_installation_en" name="product_installation_en" ></textarea>
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
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[1]" class="form-control chooseImage1" id="slidepicture1" multiple="multiple" onchange="readGalleryURL2(this,1)">
                                        <img id="gallerypreview1"  style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(1)" />
                                        <input type="text" name="sub_sort[1]" class="form-control text-center" required>
                                        {{-- <button  type="button" class="btn btn-danger" onclick="deletegallery({{$gallery}})" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> --}}
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[2]" class="form-control chooseImage2" id="slidepicture2" multiple="multiple" onchange="readGalleryURL2(this,2)">
                                        <img id="gallerypreview2"  style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(2)" />
                                        <input type="text" name="sub_sort[2]" class="form-control text-center" required>
                                       <button  type="button" class="btn btn-danger" onclick="deletegallery(2)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[3]" class="form-control chooseImage3" id="slidepicture3" multiple="multiple" onchange="readGalleryURL2(this,3)">
                                        <img id="gallerypreview3"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(3)" />
                                        <input type="text" name="sub_sort[3]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(3)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[4]" class="form-control chooseImage4" id="slidepicture4" multiple="multiple" onchange="readGalleryURL2(this,4)">
                                        <img id="gallerypreview4"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(4)" />
                                        <input type="text" name="sub_sort[4]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[5]" class="form-control chooseImage5" id="slidepicture5" multiple="multiple" onchange="readGalleryURL2(this,5)">
                                        <img id="gallerypreview5"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(5)" />
                                        <input type="text" name="sub_sort[5]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[6]" class="form-control chooseImage6" id="slidepicture6" multiple="multiple" onchange="readGalleryURL2(this,6)">
                                        <img id="gallerypreview6"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(6)" />
                                        <input type="text" name="sub_sort[6]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[7]" class="form-control chooseImage7" id="slidepicture7" multiple="multiple" onchange="readGalleryURL2(this,7)">
                                        <img id="gallerypreview7"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(7)" />
                                        <input type="text" name="sub_sort[7]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[8]" class="form-control chooseImage8" id="slidepicture8" multiple="multiple" onchange="readGalleryURL2(this,8)">
                                        <img id="gallerypreview8"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(8)" />
                                        <input type="text" name="sub_sort[8]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[9]" class="form-control chooseImage9" id="slidepicture9" multiple="multiple" onchange="readGalleryURL2(this,9)">
                                        <img id="gallerypreview9"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(9)" />
                                        <input type="text" name="sub_sort[9]" class="form-control text-center" required>
                                         <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                    <input type="file" style="display: none;"  name="sub_gallery[10]" class="form-control chooseImage10" id="slidepicture10" multiple="multiple" onchange="readGalleryURL2(this,10)">
                                        <img id="gallerypreview10"   style="max-height:250px ;" src="{{asset('images/brows.png')}}" onclick="browsImage(10)" />
                                        <input type="text" name="sub_sort[10]" class="form-control text-center" required>
                                       <button  type="button" class="btn btn-danger" onclick="deletegallery(4)" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button> 
                                    </div>
                                </div> --}}
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
                                    <input type="number" class="form-control" name="product_width" required>
                                </div>
                                <div class="col-1  mt-2">มม.</div>
                                <div class="col-1  mt-2">
                                    <b>ความยาว</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_lenght" required>
                                </div>
                                <div class="col-1  mt-2">มม.</div>
                                <div class="col-1  mt-2">
                                    <b>ความสูง</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_height" required>
                                </div>
                                <div class="col-1  mt-2">มม.</div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3  mt-2">
                                    <b>ค่าส่ง </b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_distance_price" required>
                                </div>
                                <div class="col-1  mt-2">บาท</div>
                                {{-- <div class="col-1  mt-2">
                                    <b>กิโลเมตรละ</b>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="product_distance_km" required>
                                </div>
                                <div class="col-1  mt-2">บาท</div> --}}
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

        $("#product_selling_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_selling_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_property_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_property_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_installation_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        });

        $("#product_installation_en").summernote({
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

    //////////ภาพหน้าปก
    function browsImage1(id){
        $('.chooseImage2'+id).click();
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


    /////////////////check date
    $('.dateto').change(function(){
          if($(this).val() < $('.datefrom').val() ){
                $('#notidate').removeAttr('style');
                $('.dateto').val('');
          }else{
            $('#notidate').css('display','none');
          }  
    });

</script>

@endsection