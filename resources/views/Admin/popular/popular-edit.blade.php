@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แก้ไขสินค้ายอดนิยม ' :'Edit Popular Product'}} @endsection

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
        <h4 class="mb-0 font-size-18">แก้ไขสินค้ายอดนิยม : {{$item->category_name_th}}</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('savepopularproduct')}}"  method="post" id="editmain">            
                        @csrf
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer"> 
                                <div class="row">
                                    <div class="col-6">
                                        <select name="product[]"  class="form-control product"  required>
                                            <option class="item_type" >-เลือกสินค้า-</option>
                                            @foreach ($products as $product)
                                                <option class="item_type" value="{{$product->id_product}}">{{$product->product_name_th}}</option>
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>
                               <br>
                               <br>
                               {{-- <hr> --}}
                               <div id="popular">
                                    <div class="row">
                                        <?php $popular = \App\Popular::where('id_category',$id)->get(); ?>
                                        @if(!empty($popular) && count($popular) > 0)
                                        <?php $i=1; ?>
                                        <div class="col-sm">
                                            <table class="table">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ชื่อสินค้า</th>
                                                    <th>รูปภาพ</th>
                                                    <th>ลบ</th>
                                                </tr>
                                                @foreach ($popular as $item)
                                                    <?php $_product = \App\Product::where('id_product',$item->id_product)->first();  ?>
                                                    <tr>
                                                        <td>{{$i}}</td>
                                                        <td>{{$_product->product_name_th}}</td>
                                                        <td>
                                                            <img src="{{url('storage/app/'.$_product->product_img.'')}}" width="200px">
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger" onclick="removeproduct('{{$item->id_popular}}')">ลบ</button>
                                                        </td>
                                                </tr>
                                                <?php $i++; ?>
                                                @endforeach
                                                
                                            </table>
                                        </div>
                                        @endif
                                    </div>
                               </div>
                               <input type="hidden" name="categoty" id="categoty"  value="{{$id}}" >
                                <div class="row mt-5">
                                    <div class="col-sm text-left">
                                        <a href="javascript:void(0)" onclick="canclebtn()"  class="btn btn-danger">{{Session::get('lang')=='th'?'กลับ ' :'Back'}}</a>
                                       
                                    </div>
                                    {{-- <div class="col-sm text-right">
                                        <button type="button" onclick="save('editmain')" class="btn btn-success" >{{Session::get('lang')=='th'?'ยืนยัน ' :'Confirm'}}</button>
                                        {!! OrangeV1::AlertMessage('editmain') !!}
                                    </div> --}}
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
{{-- <script  src="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

<script>
         $('.product').select2({
            tags: true,
            //minimumResultsForSearch: -1,
            //maximumSelectionLength: 10,
          //  tokenSeparators: [',', ' '],
            placeholder: "-เลือกสินค้า-",
        });


        $('.product').change(function(){ 
            $.ajax({
                url: '{{ url("selectproduct")}}',
                type: 'GET',
                dataType: 'HTML',
                data : {'product':$(this).val() , 'category' : $('#categoty').val()},
                success: function(data) {
                    if(data == 0){
                        Swal.fire({
                            text: "ไม่สามารถเลือกสินค้าได้ เนื่องจากสินค้ามีจำนวน 10 ชิ้นแล้ว",
                            type: 'warning',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ตกลง'
                            });
                    }else{
                        $( "#popular" ).load(window.location.href + " #popular" );
                    }
                   
                }
            });
        });

        function removeproduct(value){
            Swal.fire({
                            text: "คุณต้องการลบข้อมูลใช่หรือไม่",
                            type: 'question',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ตกลง'
                            }).then((result)=>{
                                if (result.value) {
                                    $.ajax({
                                        url: '{{ url("removeproduct")}}',
                                        type: 'GET',
                                        dataType: 'HTML',
                                        data : {'value': value},
                                        success: function(data) {
                                            $( "#popular" ).load(window.location.href + " #popular" );
                                        }
                                    });
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
                    window.location.href = "{{ url('populatproductcontent')}}";
                }
        });
    }

</script>

@endsection