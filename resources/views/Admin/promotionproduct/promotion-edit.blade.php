@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') แก้ไขโปรโมชัน @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

        <!-- Sweertalert -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

          <!-- tag input -->
          {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.css') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

          {{-- datatable --}}
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
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

              .table th, .table td {
                  text-align: center;
              }
          </style>
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">แก้ไขโปรโมชัน</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('updatepromotionproduct/'.$promotion->id_promotion.'')}}"  method="post" id="save">            
                        @csrf
                        <div class="row" >
                            <div class="col-2">
                                หัวข้อ
                            </div>
                            <div class="col-4">
                                <input type="text" name="promotion_title" class="form-control" value="{{$promotion->promotion_title}}" autocomplete="off" required>
                             </div>                             
                        </div>
                        <br>
                        <div class="row" >
                            <div class="col-2">
                                วันที่เริ่มต้น :
                            </div>
                            <div class="col-4">
                                <input type="date" name="get_from" min="{{date('Y-m-d')}}" value="{{$promotion->datefrom}}" class="form-control datefrom" required>
                             </div>
                             <div class="col-2 text-right">
                                วันที่สิ้นสุด :
                            </div>
                            <div class="col-4">
                                <input type="date" name="get_to" min="{{date('Y-m-d')}}" value="{{$promotion->dateto}}" class="form-control dateto" required>
                            <div id="alerttime" style="display: none" class="text-danger mt-1">ตั้งค่าวันที่สิ้นสุดให้มากกว่าเวลาเริ่มต้น</div>

                             </div>
                             
                        </div>
                        <br>
                        <div class="row" >
                            <div class="col-2">
                                ประเภทโปรโมชั่น :
                            </div>
                            <div class="col-4">
                                <select class="form-control type" name="type" required>
                                    <option>-เลือกประเภท-</option>
                                    <option value="1" {{$promotion->type == 1 ? 'selected' : ''}}>ซื้อ X แถม Y</option>
                                    <option value="2" {{$promotion->type == 2 ? 'selected' : ''}}>ซื้อครบ X บาท รับพรีเมียม</option>
                                    <option value="3" {{$promotion->type == 3 ? 'selected' : ''}}>ซื้อครบ X บาท ลดเพิ่ม Y บาท</option>
                                    <option value="4" {{$promotion->type == 4 ? 'selected' : ''}}>ซื้อครบ X บาท ลดเพิ่ม Y % </option>
                                    <option value="5" {{$promotion->type == 5 ? 'selected' : ''}}>ลด X % ทั้งร้าน</option>
                                </select>
                             </div>
                        </div>
                        <br>
                        {{-- type 1 --}}
                        @if($promotion->type == 1)
                        <div id="type1">
                            <div class="row mb-2">
                                <div class="col-sm">
                                    <h4>รายการสินค้า</h4>
                                </div>
                            </div>
                            <br>
                            @foreach ($all as $_all)
                            <div class="row mt-2" id="item{{$_all->id_promotion_item}}">
                                <div class="col-2 mt-2">
                                    สินค้าชิ้นที่ 1 
                                </div>
                                <div class="col-3">
                                    <select class="form-control product" name="get_product_1[{{$_all->id_promotion_item}}]" required>
                                        <option>-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}"  {{$item->id_product == $_all->product_1 ? 'selected' : ''}}>{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="col-1">
                                   <input type="number" class="form-control" name="count_1[{{$_all->id_promotion_item}}]" value="{{$_all->count_1}}">
                                 </div>
                                 <div class="col-1  mt-2">
                                    สินค้าชิ้นที่ 2
                                </div>
                                <div class="col-3">
                                    <select class="form-control product" name="get_product_2[{{$_all->id_promotion_item}}]" required>
                                        <option>-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}" {{$item->id_product == $_all->product_2 ? 'selected' : ''}}>{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="count_2[{{$_all->id_promotion_item}}]"  value="{{$_all->count_2}}">
                                </div>
                                <div class="col-sm">
                                    <button  type="button" class="btn btn-danger" onclick="deleteitem({{$_all->id_promotion_item}})" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                            <div id="new"></div>
                            <div id="delete"></div>
                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <button type="button" class="btn btn-info" onclick="addtype1()">+ Add</button>
                                </div>
                            </div>
                        </div>
                        @else
                        <div id="type1_display" style="display: none">
                            <div class="row mb-2">
                                <div class="col-sm">
                                    <h4>รายการสินค้า</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row" >
                                <div class="col-2 mt-2">
                                    สินค้าชิ้นที่ 1 
                                </div>
                                <div class="col-3">
                                    <select class="form-control product" name="get_product_1[1]" required>
                                        <option value="">-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}">{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="col-1">
                                   <input type="number" class="form-control count1" onchange="checknumber(this.value,'count1')" name="count_1[1]" >
                                 </div>
                                 <div class="col-1  mt-2">
                                    สินค้าแถม
                                </div>
                                <div class="col-3">
                                    <select class="form-control product" name="get_product_2[1]" required>
                                        <option value=""> -เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}">{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control count2" onchange="checknumber(this.value,'count2')" name="count_2[1]" >
                                </div>
                            </div>
                            <div id="new"></div>
                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <button type="button" class="btn btn-info" onclick="addtype1()">+ Add</button>
                                </div>
                            </div>
                        </div>
                        @endif
                      
                        {{-- grouop --}}
                        @if($promotion->type == 2  || $promotion->type == 3  || $promotion->type == 4  )
                        <div id="group">
                            <?php $category = \App\Category::all(); ?>
                            <div class="row" >
                                <div class="col-2 mt-2">
                                    เลือกกลุ่ม
                                </div>
                                <div class="col-4">
                                    <select class="form-control group" name="group" >
                                        <option value="">-เลือกกลุ่ม-</option>
                                        <option value="all" {{ $promotion->group == 'all' ? 'selected' : ''}}>ทั้งหมด</option>
                                        <option value="some" {{ $promotion->group == 'some' ? 'selected' : ''}}>เลือกสินค้า</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id_category}}" {{$item->id_category == $promotion->group ? 'selected' : ''}}>{{$item->category_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                        </div>
                        @else
                        <div id="group_display" style="display: none">
                            <?php $category = \App\Category::all(); ?>
                            <div class="row" >
                                <div class="col-2 mt-2">
                                    เลือกกลุ่ม
                                </div>
                                <div class="col-4">
                                    <select class="form-control group" name="group" >
                                        <option value="">-เลือกกลุ่ม-</option>
                                        <option value="all">ทั้งหมด</option>
                                        <option value="some">เลือกสินค้า</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id_category}}" >{{$item->category_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                        </div>
                        @endif

                        @if($promotion->type == 5  )
                        <div id="group1" >
                            <?php $category = \App\Category::all(); ?>
                            <div class="row" >
                                <div class="col-2 mt-2">
                                    เลือกกลุ่ม
                                </div>
                                <div class="col-4">
                                    <select class="form-control group" name="group_1" >
                                        <option value="">-เลือกสินค้า-</option>
                                        <option value="all" {{ $promotion->group == 'all' ? 'selected' : ''}}>ทั้งหมด</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id_category}}" {{$item->id_category == $promotion->group ? 'selected' : ''}}>{{$item->category_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                        </div>
                        @else 
                        <div id="group1_display" style="display: none">
                            <?php $category = \App\Category::all(); ?>
                            <div class="row" >
                                <div class="col-2 mt-2">
                                    เลือกกลุ่ม
                                </div>
                                <div class="col-4">
                                    <select class="form-control group" name="group_1" >
                                        <option value="">-เลือกสินค้า-</option>
                                        <option value="all" >ทั้งหมด</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id_category}}" >{{$item->category_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                        </div>
                        @endif
                        <br>
                         @if($promotion->type == 2)
                         <div id="type2">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ซื้อครบ</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type2_total"  value="{{$promotion->total}}" onchange="checknumber(this.value,'type2_total')" name="type2_total">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                                <div class="col-1 mt-2">รับสินค้า</div>
                                <div class="col-3">
                                    <select class="form-control product" name="product">
                                        <option value="">-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}"  {{$promotion->product == $item->id_product ? 'selected' : ''}}>{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @else
                        <div id="type2_display" style="display: none">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ซื้อครบ</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type2_total"   onchange="checknumber(this.value,'type2_total')" name="type2_total">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                                <div class="col-1 mt-2">รับสินค้า</div>
                                <div class="col-3">
                                    <select class="form-control product" name="product">
                                        <option value="">-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}"  >{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @endif
                         {{-- type 3 --}}
                         @if($promotion->type == 3)
                        <div id="type3">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ซื้อครบ</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type3_total" value="{{$promotion->total}}" onchange="checknumber(this.value,'type3_total')" name="type3_total">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                                <div class="col-1 mt-2">ลด</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type3_discount" value="{{$promotion->discount}}" onchange="checknumber(this.value,'type3_discount')" name="type3_discount">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                            </div>
                        </div>
                        @else  
                        <div id="type3_display" style="display: none">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ซื้อครบ</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type3_total"  onchange="checknumber(this.value,'type3_total')" name="type3_total">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                                <div class="col-1 mt-2">ลด</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type3_discount"  onchange="checknumber(this.value,'type3_discount')" name="type3_discount">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                            </div>
                        </div>
                        @endif
                         {{-- type 4 --}}
                         @if($promotion->type == 4)
                         <div id="type4" >
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ซื้อครบ</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type4_total" value="{{$promotion->total}}"  onchange="checknumber(this.value,'type4_total')" name="type4_total">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                                <div class="col-1 mt-2">ลด</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type4_discount" value="{{$promotion->discount}}" onchange="checknumber(this.value,'type4_discount')" name="type4_discount">
                                </div>
                                <div class="col-1 mt-2">%</div>
                            </div>
                        </div>
                        @else 
                        <div id="type4_display" style="display: none">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ซื้อครบ</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type4_total"   onchange="checknumber(this.value,'type4_total')" name="type4_total">
                                </div>
                                <div class="col-1 mt-2">บาท</div>
                                <div class="col-1 mt-2">ลด</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type4_discount"  onchange="checknumber(this.value,'type4_discount')" name="type4_discount">
                                </div>
                                <div class="col-1 mt-2">%</div>
                            </div>
                        </div>
                        @endif
                         {{-- type 5 --}}
                         @if($promotion->type == 5)
                         <div id="type5" >
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ลดราคา</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type5_discount" value="{{$promotion->discount}}" onchange="checknumber(this.value,'type5_discount')" name="type5_discount">
                                </div>
                                <div class="col-1 mt-2">%</div>
                            </div>
                        </div>
                        @else 
                        <div id="type5_display" style="display: none">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-1 mt-2">ลดราคา</div>
                                <div class="col-1">
                                    <input type="number" class="form-control type5_discount"  onchange="checknumber(this.value,'type5_discount')" name="type5_discount">
                                </div>
                                <div class="col-1 mt-2">%</div>
                            </div>
                        </div>
                        @endif
                        <br>
                        {{-- บางชิ้น --}}
                        @if(($promotion->type == 2  ||  $promotion->type == 3 || $promotion->type == 4 ) && $promotion->group == 'some'  )
                        <div id="someproduct">
                            @foreach ($all as $_all)
                            <div class="row mt-2" id="some{{$_all->id_promotion_item}}">
                                <div class="col-2 "></div>
                                <div class="col-1 mt-2">
                                    เลือกสินค้า
                                </div>
                                <div class="col-4">
                                    <select class="form-control product" name="some_get_product_1[{{$_all->id_promotion_item}}]" required>
                                        <option value="">-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}"  {{$_all->product_1 == $item->id_product ? 'selected' : ''}}>{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="col-1">
                                    <button  type="button" class="btn btn-danger" onclick="deletesome({{$_all->id_promotion_item}})" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            @endforeach
                            <div id="newsome"></div>
                            <div id="delsome"></div>
                            <br>
                            <div class="row">
                                <div class="col-2 "></div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-info" onclick="newsome()">+ Add</button>
                                </div>
                            </div>
                        </div>
                        @else 
                        <div id="someproduct_display" style="display: none">
                            <div class="row" >
                                <div class="col-2 "></div>
                                <div class="col-1 mt-2">
                                    เลือกสินค้า
                                </div>
                                <div class="col-4">
                                    <select class="form-control product" name="some_get_product_1[1]" required>
                                        <option value="">-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}">{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                            <div id="newsome"></div>
                            <br>
                            <div class="row">
                                <div class="col-2 "></div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-info" onclick="newsome()">+ Add</button>
                                </div>
                            </div>
                        </div>
                        @endif
                        {{-- end --}}
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-1">
                                <a type="button" href="{{url('promotionproductcontent')}}" class="btn btn-danger">กลับ</a>
                            </div>
                            <div class="col-9"></div>
                            <div class="col-2 text-right">
                                <button type="button" onclick="save('save')" class="btn btn-success">ยืนยัน</button>
                                {!! OrangeV1::AlertMessage('save') !!}
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
{{-- <script  src="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

<script>
         $('.product').select2({
            tokenSeparators: [',', ' '],
            placeholder: "-เลือกสินค้า-",
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
                    window.location.href = "{{ url('populatproductcontent')}}";
                }
        });
    }

    type  = '{{$promotion->type}}';
    group  = '{{$promotion->group}}';

    $('.type').change(function(){
            if($(this).val() == 1){ //type 1
                if(type == 1){
                    $('#type1').removeAttr('style');
                }else{
                    $('#type1_display').removeAttr('style');
                }

                if(type == 2){
                    $('#type2').css('display','none');
                }else{
                    $('#type2_display').css('display','none');
                }

                if(type == 3){
                    $('#type3').css('display','none');
                }else{
                    $('#type3_display').css('display','none');
                }

              
               
                if(type == 4){
                    $('#type4').css('display','none');
                }else{
                    $('#type4_display').css('display','none');
                }

                if(type == 5){
                    $('#type5').css('display','none');
                }else{
                    $('#type5_display').css('display','none');
                }

                if((type != 1 || type != 5) && group == 'some'){
                    $('#someproduct').css('display','none');
                }else{
                    $('#someproduct_display').css('display','none');
                }
               
                
                if(type == 2 || type == 3  || type == 4 ){
                    $('#group').css('display','none');
                }else{
                    $('#group_display').css('display','none');
                }

                if(type == 5 ){
                    $('#group1').css('display','none');
                }else{
                    $('#group1_display').css('display','none');
                }
              


            }else if($(this).val() == 2){ //type 2


                if(type == 1){
                    $('#type1').css('display','none');
                }else{
                    $('#type1_display').css('display','none');
                }

                if(type == 2){
                    $('#type2').removeAttr('style');
                }else{
                    $('#type2_display').removeAttr('style');
                }

                if(type == 3){
                    $('#type3').css('display','none');
                }else{
                    $('#type3_display').css('display','none');
                }

              
               
                if(type == 4){
                    $('#type4').css('display','none');
                }else{
                    $('#type4_display').css('display','none');
                }

                if(type == 5){
                    $('#type5').css('display','none');
                }else{
                    $('#type5_display').css('display','none');
                }

                if((type == 2 || type == 3 || type == 4 ) && group == 'some'){
                    $('#someproduct').removeAttr('style');
                }else{
                    $('#someproduct_display').removeAttr('style');
                }
               
                
                if(type == 2 || type == 3  || type == 4 ){
                    $('#group').removeAttr('style');
                }else{
                    $('#group_display').removeAttr('style');
                }

                if(type == 5 ){
                    $('#group1').css('display','none');
                }else{
                    $('#group1_display').css('display','none');
                }
              
            
            }else if($(this).val() == 3){ //type 3
                if(type == 1){
                    $('#type1').css('display','none');
                }else{
                    $('#type1_display').css('display','none');
                }

                if(type == 2){
                    $('#type2').css('display','none');
                }else{
                    $('#type2_display').css('display','none');
                }

                if(type == 3){
                    $('#type3').removeAttr('style');
                }else{
                    $('#type3_display').removeAttr('style');
                }

              
               
                if(type == 4){
                    $('#type4').css('display','none');
                }else{
                    $('#type4_display').css('display','none');
                }

                if(type == 5){
                    $('#type5').css('display','none');
                }else{
                    $('#type5_display').css('display','none');
                }

                if((type == 2 || type == 3 || type == 4 ) && group == 'some'){
                    $('#someproduct').removeAttr('style');
                }else{
                    $('#someproduct_display').removeAttr('style');
                }
               
                
                if(type == 2 || type == 3  || type == 4 ){
                    $('#group').removeAttr('style');
                }else{
                    $('#group_display').removeAttr('style');
                }

                if(type == 5 ){
                    $('#group1').css('display','none');
                }else{
                    $('#group1_display').css('display','none');
                }

            }else if($(this).val() == 4){ //type 4

                if(type == 1){
                    $('#type1').css('display','none');
                }else{
                    $('#type1_display').css('display','none');
                }

                if(type == 2){
                    $('#type2').css('display','none');
                }else{
                    $('#type2_display').css('display','none');
                }

                if(type == 3){
                    $('#type3').css('display','none');
                }else{
                    $('#type3_display').css('display','none');
                }

              
               
                if(type == 4){
                    $('#type4').removeAttr('style');
                }else{
                    $('#type4_display').removeAttr('style');
                }

                if(type == 5){
                    $('#type5').css('display','none');
                }else{
                    $('#type5_display').css('display','none');
                }

                if((type == 2 || type == 3 || type == 4 ) && group == 'some'){
                    $('#someproduct').removeAttr('style');
                }else{
                    $('#someproduct_display').removeAttr('style');
                }
               
                
                if(type == 2 || type == 3  || type == 4 ){
                    $('#group').removeAttr('style');
                }else{
                    $('#group_display').removeAttr('style');
                }

                if(type == 5 ){
                    $('#group1').css('display','none');
                }else{
                    $('#group1_display').css('display','none');
                }

            }else if($(this).val() == 5){ //type 5
                if(type == 1){
                    $('#type1').css('display','none');
                }else{
                    $('#type1_display').css('display','none');
                }

                if(type == 2){
                    $('#type2').css('display','none');
                }else{
                    $('#type2_display').css('display','none');
                }

                if(type == 3){
                    $('#type3').css('display','none');
                }else{
                    $('#type3_display').css('display','none');
                }

              
               
                if(type == 4){
                    $('#type4').css('display','none');
                }else{
                    $('#type4_display').css('display','none');
                }

                if(type == 5){
                    $('#type5').removeAttr('style');
                }else{
                    $('#type5_display').removeAttr('style');
                }

                if((type == 2 || type == 3 || type == 4 ) && group == 'some'){
                    $('#someproduct').removeAttr('style');
                }else{
                    $('#someproduct_display').removeAttr('style');
                }
               
                
                if(type == 2 || type == 3  || type == 4 ){
                    $('#group').css('display','none');
                }else{
                    $('#group_display').css('display','none');
                }

                if(type == 5 ){
                    $('#group1').removeAttr('style');
                }else{
                    $('#group1_display').removeAttr('style');
                }
            }
    });


    $('.group').change(function(){
            if($(this).val() == 'some'){
                if((type == 2 || type == 3 || type == 4 ) && group == 'some'){
                    $('#someproduct').removeAttr('style');
                }else{
                    $('#someproduct_display').removeAttr('style');
                }
            }else{

                if((type == 1 || type == 5) && group == 'some'){
                    $('#someproduct').css('display','none');
                }else{
                    $('#someproduct_display').css('display','none');
                }
            }
    });


    $('.dateto').change(function(){
        from =   $('.datefrom').val();
        to    =  $(this).val();
       
        if(to < from){
            $('#alerttime').removeAttr('style');
            $(this).val('');
        }else{
            $('#alerttime').css('display','none');
        }
    });



    ///////clone promotion
    count = 1;

    function addtype1(){

        count++;

        $.ajax({
            url: '{{ url("addproductpromotion")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'count':count},
            success: function(data) {
                $('#new').append(data);

                $('.product').select2({
                        tokenSeparators: [',', ' '],
                        placeholder: "-เลือกสินค้า-",
                });

            
            }
        });
     
    }

    function deleteitem(num){

        $('#item'+num).remove();
        //gallery--;
        $('#delete').append('<input type="hidden" name="deletedkey['+num+']" value="'+num+'">');

}



/////clone newsome
   function newsome(){

        count++;

        $.ajax({
            url: '{{ url("addnewsome")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'count':count},
            success: function(data) {
                $('#newsome').append(data);

                $('.product').select2({
                         tokenSeparators: [',', ' '],
                        placeholder: "-เลือกสินค้า-",
                });

            
            }
        });
     
    }

    function deletesome(num){

            $('#some'+num).remove();
            //gallery--;
            $('#delsome').append('<input type="hidden" name="deletedkey['+num+']" value="'+num+'">');

    }


    ////check 
    function checknumber(value,classname){
        if(parseInt(value) < 0){
        $('.'+classname).val("0");
        swal.fire({
            type:'warning',
            text:'ห้ามกรอกข้อมูลน้อยกว่า 0',
            confirmButtonColor: '#3085d6',

        });
        $('.'+classname).focus();
        }
    }

</script>

@endsection