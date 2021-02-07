@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขสินค้า ' :'Edit product'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'แก้ไขเมนูหลัก ' :'Edit Category'}}</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('updateproduct/'.$product->id_product.'')}}" method="post" id="saveproduct" enctype="multipart/form-data">            
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
                                            <input type="file" style="display: none;"  name="filepath[{{$product->id_product}}]" class="form-control chooseImage2{{$product->id_product}}" id="slidepicture{{$product->id_product}}" multiple="multiple" onchange="readGalleryURL3(this,{{$product->id_product}})">
                                                <img id="gallerypreview2{{$product->id_product}}"  style="max-height:250px ;" src="{{url('storage/app/'.$product->product_img)}}" onclick="browsImage1({{$product->id_product}})" />
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
                                        <input type="text" class="form-control" name="sap_code" value="{{$product->sap_code}}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3 mt-2">
                                        <b>ชื่อสินค้า (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="product_name_th" value="{{$product->product_name_th}}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ชื่อสินค้า (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="product_name_en" value="{{$product->product_name_en}}" required>
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
                                                <option value="{{$_cate->id_category}}"  {{$_cate->id_category == $product->id_category ? 'selected':''}}>{{$_cate->category_name_th}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2 text-right  mt-2">
                                        <b>หมวดหมู่ย่อย</b>
                                    </div>
                                    <div class="col-3">
                                        <?php $subcate = \App\SubCategory::where('id_category',$product->id_category)->get(); ?>
                                        <select class="form-control" id="subcate" name="id_subcategory">
                                           
                                            @foreach ($subcate as $_subcate)
                                                <option value="{{$_subcate->id_subcategory}}"  {{$_subcate->id_subcategory == $product->id_subcategory ? 'selected':''}}>{{$_subcate->subcategory_name_th}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    <div class="col-3  mt-2">
                                        <b>ราคาปกติ </b>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control" value="{{$product->product_normal_price}}" name="product_normal_price" required>
                                    </div>
                                    <div class="col-1  mt-2">บาท</div>
                                    <div class="col-1 text-right  mt-2">
                                        <b>ราคาพิเศษ</b>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control specialprice" value="{{$product->product_special_price}}" name="product_special_price" >
                                    </div>
                                    <div class="col-1  mt-2">บาท</div>
                                </div>
                                <br>
                                @if($product->product_start == '0000-00-00' ||  $product->product_start == NULL)
                                <div class="row mt-2" id="date" style="display: none">
                                    <div class="col-3  mt-2">
                                        <b>วันที่เริ่ม </b>
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control datefrom" name="product_start" value="" min="{{date('Y-m-d')}}" >
                                    </div>
                                    <div class="col-2 text-right  mt-2">
                                        <b>ถึง</b>
                                    </div>
                                    <div class="col-2">
                                        <input type="date" class="form-control dateto" name="product_end" value="" min="{{date('Y-m-d')}}" >
                                        <div class="text-danger"  id="notidate" style="display: none">ควรใส่วันสิ้นสุดมากกว่าหรือเท่ากับวันที่เริ่มต้น</div>
                                    </div>
                                </div>
                                @else 
                                <div class="row" >
                                    <div class="col-3  mt-2">
                                        <b>วันที่เริ่ม </b>
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control datefrom" name="product_start" value="{{$product->product_start}}" min="{{date('Y-m-d')}}" >
                                    </div>
                                    <div class="col-2 text-right  mt-2">
                                        <b>ถึง</b>
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control dateto" name="product_end" value="{{$product->product_end}}" min="{{date('Y-m-d')}}" >
                                        <div class="text-danger"  id="notidate" style="display: none">ควรใส่วันสิ้นสุดมากกว่าหรือเท่ากับวันที่เริ่มต้น</div>
                                    </div>
                                </div>
                                @endif
                                <div class="row" id="date">
                                    <div class="col-3  mt-2">
                                        <b>จำนวนสินค้า </b>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control" name="product_count" min="0" value="{{$product->product_count}}" required>
                                    </div>
                                    <div class="col-1 mt-2">ชิ้น</div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>คุณสมบัติเด่น (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                    <textarea type="texe" class="form-control" id="product_selling_th" name="product_selling_th"  required>{{$product->product_selling_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>คุณสมบัติเด่น (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_selling_en" name="product_selling_en" required>{{$product->product_selling_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>คุณสมบัติทั่วไป (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_property_th" name="product_property_th" required>{{$product->product_property_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>คุณสมบัติทั่วไป (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_property_en" name="product_property_en" required>{{$product->product_property_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>วิธีใช้สินค้า (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_method_th" name="product_method_th" required>{{$product->product_method_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>วิธีใช้สินค้า (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_method_en" name="product_method_en" required>{{$product->product_method_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                              
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>การติดตั้ง (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_installation_th" name="product_installation_th" required>{{$product->product_installation_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>การติดตั้ง (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_installation_en" name="product_installation_en" required>{{$product->product_installation_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>คำแนะนำ (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_direction_th" name="product_direction_th" required>{{$product->product_direction_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>คำแนะนำ (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_direction_en" name="product_direction_en" required>{{$product->product_direction_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ข้อควรระวัง (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_caution_th" name="product_caution_th" required>{{$product->product_caution_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ข้อควรระวัง (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_caution_en" name="product_caution_en" required>{{$product->product_caution_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                {{-- spec --}}
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h4>ข้อมมูลจำเพาะและการจัดส่ง</h4>
                                    </div>
                                </div>
                                <br>
                                {{-- <div class="row">
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
                                </div> --}}
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ข้อมูลจำเพาะ (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_spec_th" name="product_spec_th" required>{{$product->product_spec_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ข้อมูลจำเพาะ (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_spec_en" name="product_spec_en" required>{{$product->product_spec_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ข้อมูลเพิ่มเติม (ภาษาไทย)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_extra_th" name="product_extra_th" >{{$product->product_extra_th}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ข้อมูลเพิ่มเติม (ภาษาอังกฤษ)</b>
                                    </div>
                                    <div class="col-sm">
                                        <textarea type="texe" class="form-control" id="product_extra_en" name="product_extra_en" >{{$product->product_extra_en}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-3  mt-2">
                                        <b>ค่าส่ง </b>
                                    </div>
                                    <div class="col-1">
                                        <input type="number" class="form-control" name="product_distance_price" required value="{{$product->product_distance_price}}">
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
                                    @if(!empty($imgs))
                                        @foreach($imgs as $key => $picture)
                                        <div id="gal{{$picture->id_product_gallery}}">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <input type="file" style="display: none;" name="sub_gallery[{{$picture->id_product_gallery}}]" class="form-control chooseImage{{$picture->id_product_gallery}}" id="slidepicture{{$picture->id_product_gallery}}" multiple="multiple" onchange="readGalleryURL2(this,{{$picture->id_product_gallery}})">
                                                    @if(!empty($picture->filepath))
                                                    <img id="gallerypreview{{$picture->id_product_gallery}}" style="max-height:250px ;" alt="{{url('no-image.jpg')}}" src="{{url('storage/app/'.$picture->filepath)}}" onclick="browsImage({{$picture->id_product_gallery}})" />
                                                    @else
                                                        <img id="gallerypreview{{$picture->id_product_gallery}}" style="max-height:250px ;opacity: 20%;" alt="{{url('no-image.jpg')}}" src="{{asset('images/brows.png')}}" />
                                                    @endif
                                                    <input type="text" id="vdo{{$picture->id_product_gallery}}" name="video[{{$picture->id_product_gallery}}]" class="form-control"  placeholder="youtube.com" onchange="insertvideo({{$picture->id_product_gallery}})" value="{{$picture->video}}">
                                                    <br>
                                                    <input type="text" name="sub_sort[{{$picture->id_product_gallery}}]"  class="form-control text-center" value="{{$picture->sort}}" />
                                                    <button  type="button" class="btn btn-danger" onclick="deletegallery({{$picture->id_product_gallery}})" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div id="delete"></div>
                                <div id="newgallery" class="row"></div>
                                <button type="button" class="btn btn-primary" onclick="addimagegallery()">{{Session::get('lang')=='th'?'เพิ่มภาพ ':'Add Image'}}</button>
                                {{-- end --}}
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h4>ไฟล์ (PDF)</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="file" class="form-control" name="filepdf" accept=".pdf" value="{{!empty($product->pdf) ? $product->pdf : '' }}"> 
                                    </div>
                                    <div class="col-6">
                                        @if(!empty($product->pdf))
                                       <a href="{{url('storage/app/'.$picture->pdf)}}"  target="_blank">
                                        <img src="{{asset('assets/images/racer/icon/pdf.png')}}" width="64px">
                                       </a>
                                       @endif
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class="row mt-5">
                                    <div class="col-sm text-left">
                                        <a  href="javascript:void(0)" onclick="canclebtn()" class="btn btn-danger">กลับ</a>
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
</div>
<!-- end row -->
                     
<?php $count = DB::table('product_gallery')->where('id_product',$product->id_product)->max('id_product_gallery'); ?>
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
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_method_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_direction_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_direction_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });
        
        $("#product_spec_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_spec_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        
        $("#product_caution_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_caution_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_selling_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_selling_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_property_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_property_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_installation_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_installation_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_extra_th").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });

        $("#product_extra_en").summernote({
            height:300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    
                    sendFile(files[0], $(this), welEditable);
                }
            }
        }).on("summernote.enter", function(we, e) {
                $(this).summernote("pasteHTML", "<br>");
                e.preventDefault();
        });


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
                    '<input type="text" id="vdo'+gallery+'" name="video['+(gallery).toString()+']" class="form-control"  placeholder="youtube.com" onchange="insertvideo('+gallery+')">'+
                    '<br>'+
                    '<input type="text" name="sub_sort['+(gallery).toString()+']" class="form-control text-center" required>'+
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
            $('#vdo'+id).attr('disabled','disabled');
            $('#vdo'+id).css('background-color','#CACCCE');
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

    function insertvideo(id){
        
        if($('#vdo'+id).val() != ''){
            $('#gallerypreview'+id).css('opacity','20%');
            $('#gallerypreview'+id).removeAttr('onclick');
        }else{
            $('#gallerypreview'+id).css('opacity','100%');
            $('#gallerypreview'+id).attr('onclick','browsImage('+id+')');
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
                    window.location.href = "{{ url('productcontent')}}";
                }
        });
    }

        /////////////////check date
        $('.dateto').change(function(){
          if($(this).val() < $('.datefrom').val() ){
                $('#notidate').removeAttr('style');
                $(this).val('');
          }else{
            $('#notidate').css('display','none');
          }  
    });


</script>

@endsection