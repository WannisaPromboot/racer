@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') คำสั่งซื้อสินค้า @endsection

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
        <h4 class="mb-0 font-size-18">คำสั่งซื้อสินค้า</h4>
        </div>
    </div>
    {{-- <div class="col-6 text-right">
        <a href="{{url('addnew')}}" class="btn add" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มข่าวสาร':'+ Add news'}}</a>
    </div>   --}}
</div>     
<!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        {{-- <div class="col-sm">
                            <button id="comming" type="button" class="btn btn-secondary active" >{{Session::get('lang')=='th'?'เร็ว ๆ นี้':'Upcoming'}}</button>
                            <button id="history" type="button" class="btn btn-secondary">{{Session::get('lang')=='th'?'ประวัติ':'History'}}</button>
                        </div>  --}}
                    </div>
                    <div id="tablecoming">
                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>หมายเลขคำสั่งซื้อ</th>
                                    <th>วันที่ทำรายการ</th>
                                    <th>ลูกค้า</th>
                                    <th>วิธีชำระเงิน</th>
                                    <th>หลักฐานการชำระเงิน</th>
                                    <th>สถานะการชำระเงิน</th>
                                    <th>สถานะการจัดส่ง</th>
                                    {{-- <th>รายละเอียด</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach($order as $_order)
                                <?php  $user  = \App\Customer::where('customer_id',$_order->customer_id)->first();?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td><a style="color:#95ced4 !important;"  href="{{url('orederdetail/'.$_order->id_order.'')}}"><u>{{$_order->id_order}}</u></a></td>
                                        <td>{!! OrangeV1::date($_order->updated_at)!!}</td>
                                       
                                        <td>{{$user->name. ' '.$user->lastname  }}</td>
                                        <td>
                                            @if($_order->method == 'tranfer')
                                                โอนผ่านธนาคาร
                                            @else 
                                                เครดิต
                                            @endif
                                        </td>
                                        <th>
                                            @if($_order->method == 'tranfer')
                                            <button class="btn btn-info btn-sm" onclick="receipt({{$_order->id_order}})">ใบเสร็จ</button>
                                            @endif
                                        </th>
                                        <td>
                                            <select class="form-control " onchange="status({{$_order->id_order}},this.value)">
                                                <option value="0" {{$_order->status_payment == 0 ? 'selected' : ''}}>ยังไม่ชำระเงิน</option>
                                                <option value="1" {{$_order->status_payment == 1 ? 'selected' : ''}}>รอการตรวจสอบ</option>
                                                <option value="2" {{$_order->status_payment == 2 ? 'selected' : ''}}>จ่ายเงินแล้ว</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" onchange="shipping({{$_order->id_order}},this.value)">
                                                <option value="0" {{$_order->status_delivery == 0 ? 'selected' : ''}}>เตรียมสินค้า</option>
                                                <option value="1" {{$_order->status_delivery == 1 ? 'selected' : ''}}>กำลังจัดส่ง</option>
                                                <option value="2" {{$_order->status_delivery == 2 ? 'selected' : ''}}>ส่งสินค้าเรียบร้อย</option>
                                            </select>
                                        </td>
                                        {{-- <td>
                                            <a class="btn btn-warning btn-sm"  href="{{url('orederdetail/'.$_order->id_order.'')}}">รายละเอียด</a>
                                        </td> --}}
                                    </tr>
                                    <?php $i=$i+1;?>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                   
                 
                </div>
            </div>
        </div>
    </div>

    {{-- modaL --}}
    <div class="modal fade bd-example-modal-lg" id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document">   
            <div class="modal-content" >
                <div class="modal-body" id="sub" style="text-align: center;">
                
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
<script type="text/javascript">

    $(document).ready(function() {
        var table = $('#table').DataTable( {
            'responsive': true,
            'scrollX': true,
        });
        
    });

    function receipt (id){
        // console.log(id);
        $.ajax({
            url: '{{ url("receipt")}}',
            type: 'GET',
            data: {'id' : id},
            success: function(data) {
                $('#sub').html(data);
                $('#main').modal('show');
            }
        });
    }

    function status (id,value){
        // console.log(id);
        $.ajax({
            url: '{{ url("changestatus")}}',
            type: 'GET',
            data: {'id' : id , 'value' : value},
            success: function(data) {
            
            }
        });
    }

    function shipping (id,value){
        // console.log(id);
        $.ajax({
            url: '{{ url("changeshipping")}}',
            type: 'GET',
            data: {'id' : id, 'value' : value},
            success: function(data) {
              
            }
        });
    }


</script>

@endsection



