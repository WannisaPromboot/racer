@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'การจัดการการผลิต ' :'production'}} @endsection

@section('css') 
    <!-- Summernote css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
    
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

        <!-- Sweertalert -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
<style>
    th,td{
        text-align: center;
    }
</style>

<!-- start page title -->
<div class="row">
    <div class="col-6">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'สินค้า ' :'Product'}}</h4>     
        </div>
    </div>
    {{-- <div class="col-6 text-right">
        <a href="{{url('addproduct')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มสินค้า ' :'+ Add Product'}}</a>
    </div>  --}}
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row mb-4">
                    <div class="col-sm">
                        {{-- <h4 class="card-title">type</h4> --}}
                    </div>  
                </div>
                <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>SAP CODE</th>
                        <th>ชื่อสินค้าภาษาไทย</th>
                        <th>ชื่อสินค้าภาษาอังกฤษ</th>
                        <th>ราคาปกติ</th>
                        <th>ราคาพิเศษ</th>
                        <th>จำนวน</th>
                        <th>แก้ไข</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($products as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->sap_code}}</td>
                            <td>{{$item->product_name_th}}</td>
                            <td>{{$item->product_name_en}}</td>
                            <td>
                                <div id="normalprice{{$item->id_product}}">{{number_format($item->product_normal_price)}}</div>
                                <div id="inputnormalprice{{$item->id_product}}" style="display: none">
                                    <input class="form-control text-center" min="0" id="nprice{{$item->id_product}}" type="number" value="{{$item->product_normal_price}}">
                                </div>
                            </td>
                            <td>
                                <div id="specialprice{{$item->id_product}}">{{number_format($item->product_special_price)}}</div>
                                <div id="inputspecialprice{{$item->id_product}}" style="display: none">
                                    <input class="form-control text-center" min="0" id="sprice{{$item->id_product}}" type="number" value="{{$item->product_special_price}}">
                                </div>
                            </td>
                            <td>
                                <div id="count{{$item->id_product}}">{{$item->product_count}}</div>
                                <div id="inputcount{{$item->id_product}}" style="display: none">
                                    <input class="form-control text-center" min="0" id="ncount{{$item->id_product}}" type="number" value="{{$item->product_count}}">
                                </div>
                            </td>
                            <td>
                                <div id="editbtn{{$item->id_product}}">
                                    <a href="javascript:void(0)" onclick="edit({{$item->id_product}})" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                                </div>
                                <div id="savebtn{{$item->id_product}}" style="display: none">
                                    <a href="javascript:void(0)" onclick="save({{$item->id_product}})" class="btn btn-success btn-sm">{{Session::get('lang')=='th'?'บันทึก' :'save'}}</a>
                                    <a href="javascript:void(0)" onclick="cancle({{$item->id_product}})" class="btn btn-danger btn-sm">{{Session::get('lang')=='th'?'ยกเลิก' :'cancle'}}</a>
                                </div>
                            </td>
                        </tr>
                        
                        <?php  $i++;?>
                        @endforeach
           
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
{{-- <script src="{{ URL::asset('assets/Datatable/datatables.min.js')}}"></script>  
<script src="{{ URL::asset('assets/Datatable/datatables.js')}}"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

  <!-- Sweert Alert -->
  <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>   

<script>
    $(document).ready(function() {
        var table = $('#table').DataTable( {
            'responsive': true,
            'scrollX': true,
        });

    });
    

    function edit(id){
        $('#inputnormalprice'+id).removeAttr('style');
        $('#inputspecialprice'+id).removeAttr('style');
        $('#inputcount'+id).removeAttr('style');
        $('#savebtn'+id).removeAttr('style');

        $('#normalprice'+id).css('display','none');
        $('#specialprice'+id).css('display','none');
        $('#count'+id).css('display','none');
        $('#editbtn'+id).css('display','none');

    }


    
    function cancle(id){
        $('#inputnormalprice'+id).css('display','none');
        $('#inputspecialprice'+id).css('display','none');
        $('#inputcount'+id).css('display','none');
        $('#savebtn'+id).css('display','none');

        $('#normalprice'+id).removeAttr('style');
        $('#specialprice'+id).removeAttr('style');
        $('#count'+id).removeAttr('style');
        $('#editbtn'+id).removeAttr('style');

    }

    function save(id){
        var sprice = $('#sprice'+id).val();
        var nprice = $('#nprice'+id).val();
        var count = $('#ncount'+id).val();
        console.log(count);
        Swal.fire({
            text: "คุณต้องการบันทึกข้อมูลใช่หรือไม่",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'save'
            }).then((result)=>{
                if (result.value) {
                    $.ajax({
                            url: '{{ url("updateproduction")}}',
                            type: 'GET',
                            dataType: 'HTML',
                            data : {'id' : id ,'normal':nprice , 'special':sprice , 'count' : count },
                            success: function(data) {
                                Swal.fire({
                                    text: 'บันทึกข้อมูลเรียบร้อย',
                                    type: "success",
                                });

                                

                            }
                        });
                    }
        });
    }


    //////////edit

</script>


@endsection
