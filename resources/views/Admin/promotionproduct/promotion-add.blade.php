@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') เพิ่มโปรโมชัน @endsection

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
        <h4 class="mb-0 font-size-18">เพิ่มโปรโมชัน</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="edit">
                    <form action="{{url('savepromotionproduct')}}"  method="post" id="save">            
                        @csrf
                        <div class="row" >
                            <div class="col-2">
                                หัวข้อ
                            </div>
                            <div class="col-4">
                                <input type="text" name="promotion_title" class="form-control" autocomplete="off" required>
                             </div>                             
                        </div>
                        <br>
                        <div class="row" >
                            <div class="col-2">
                                วันที่เริ่มต้น :
                            </div>
                            <div class="col-4">
                                <input type="date" name="get_from" min="{{date('Y-m-d')}}" class="form-control datefrom" required>
                             </div>
                             <div class="col-2 text-right">
                                วันที่สิ้นสุด :
                            </div>
                            <div class="col-4">
                                <input type="date" name="get_to" min="{{date('Y-m-d')}}" class="form-control dateto" required>
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
                                    <option value="1">ซื้อ X แถม Y</option>
                                    <option value="2" disabled>ซื้อครบ X บาท รับพรีเมียม</option>
                                    <option value="3" disabled>ซื้อครบ X บาท ลดเพิ่ม Y บาท</option>
                                    <option value="4" disabled>ซื้อครบ X บาท ลดเพิ่ม Y % </option>
                                    <option value="5" disabled>ลด X % ทั้งร้าน</option>
                                </select>
                             </div>
                        </div>
                        <br>
                        {{-- type 1 --}}
                       
                        <div id="type1" >
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
                                        <option>-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}">{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <div class="col-1">
                                   <input type="number" class="form-control" name="count_1[1]" >
                                 </div>
                                 <div class="col-1  mt-2">
                                    สินค้าชิ้นที่ 2
                                </div>
                                <div class="col-3">
                                    <select class="form-control product" name="get_product_2[1]" required>
                                        <option>-เลือกสินค้า-</option>
                                        @foreach ($products as $item)
                                            <option value="{{$item->id_product}}">{{$item->product_name_th}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="count_2[1]" >
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
                        <br>
                        {{-- end type 1  --}}
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
            tags: true,
            //minimumResultsForSearch: -1,
            //maximumSelectionLength: 10,
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


    $('.type').change(function(){
            if($(this).val() == 1){
                $('#type1').removeAttr('style');
                $('#type2').css('display','none');
            }else{
                $('#type2').removeAttr('style');
                $('#type1').css('display','none');
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
                        // tokenSeparators: [',', ' '],
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



</script>

@endsection