@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') Promotion @endsection

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

    .btnactive{
        background-color: #95ced4   !important;
        color:white !important;
    }
</style>

<!-- start page title -->
<div class="row">
    <div class="col-6">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">โปรโมชัน</h4>     
        </div>
    </div>
    <div class="col-6 text-right">
        <a href="{{url('addpromotionproduct')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มเมนูหลัก ' :'+ Add Promotion'}}</a>
    </div> 
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm">
                        <button id="process" type="button" class="btn btn-secondary btnactive" >กำลังดำเนินการ</button>
                        <button id="comming" type="button" class="btn btn-secondary" >เร็ว ๆ นี้</button>
                        <button id="history" type="button" class="btn btn-secondary">ประวัติ</button>
                    </div> 
                </div>
                <div id="tableprocess">
                    <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>เวลาเริ่มต้น</th>
                            <th>เวลาสิ้นสุด</th>
                            <th>ชื่อโปรโมชั่น</th>
                            {{-- <th>รายละเอียด</th> --}}
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach ($all as $item)
                            @if($item->datefrom <= date('Y-m-d') && $item->dateto >= date('Y-m-d') )
                            <tr>
                                    <td>{{date_format(date_create($item->datefrom),'d-m-Y')}}</td>
                                    <td>{{date_format(date_create($item->dateto),'d-m-Y')}}</td>
                                    <td>{{$item->promotion_title}}</td>
                                    {{-- <td>
                                        <button type="button" class="btn btn-secondary">รายละเอียด</button>
                                    </td> --}}
                                    <td>
                                        <a type="button" class="btn btn-warning" href="{{url('editpromotionproduct/'.$item->id_promotion.'')}}">แก้ไข</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="deldata({{$item->id_promotion}})">ลบ</button>
                                    </td>
                                </tr>
                                @endif
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="tablecomming" style="display: none">
                    <table id="table1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>เวลาเริ่มต้น</th>
                            <th>เวลาสิ้นสุด</th>
                            <th>ชื่อโปรโมชั่น</th>
                            {{-- <th>รายละเอียด</th> --}}
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($all as $item)
                            @if($item->datefrom > date('Y-m-d'))
                            <tr>
                                    <td>{{date_format(date_create($item->datefrom),'d-m-Y')}}</td>
                                    <td>{{date_format(date_create($item->dateto),'d-m-Y')}}</td>
                                    <td>{{$item->promotion_title}}</td>
                                    {{-- <td>
                                        <button type="button" class="btn btn-secondary">รายละเอียด</button>
                                    </td> --}}
                                    <td>
                                        <a type="button" class="btn btn-warning" href="{{url('editpromotionproduct/'.$item->id_promotion.'')}}">แก้ไข</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="deldata({{$item->id_promotion}})">ลบ</button>
                                    </td>
                                </tr>
                                @endif
                           @endforeach
                        </tbody>
                    </table>
                </div>

                <div id="tablehistory" style="display: none">
                    <table id="table2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>เวลาเริ่มต้น</th>
                            <th>เวลาสิ้นสุด</th>
                            <th>ชื่อโปรโมชั่น</th>
                            {{-- <th>รายละเอียด</th> --}}
                            <th>แก้ไข</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($all as $item)
                            @if($item->dateto < date('Y-m-d'))
                            <tr>
                                    <td>{{date_format(date_create($item->datefrom),'d-m-Y')}}</td>
                                    <td>{{date_format(date_create($item->dateto),'d-m-Y')}}</td>
                                    <td>{{$item->promotion_title}}</td>
                                    {{-- <td>
                                        <button type="button" class="btn btn-secondary">รายละเอียด</button>
                                    </td> --}}
                                    <td>
                                        <a type="button" class="btn btn-warning" href="{{url('editpromotionproduct/'.$item->id_promotion.'')}}">แก้ไข</a>
                                    </td>
                                </tr>
                                @endif
                           @endforeach
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>

{{-- modaL --}}
<div class="modal fade bd-example-modal-lg " id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        
        <div class="modal-content" >
            <div class="modal-body" id="sub">
            
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{Session::get('lang')=='th'?'ปิด' :'Close'}}</button>
            
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
        var table = $('#table').DataTable();
        var table1 = $('#table1').DataTable();
        var table2 = $('#table2').DataTable();

    });


    $('#process').click(function(){
        $(this).addClass('btnactive');
        $('#comming').removeClass('btnactive');
        $('#history').removeClass('btnactive');
        $('#tablecomming').css('display','none');
        $('#tablehistory').css('display','none');
        $('#tableprocess').removeAttr('style');
        $('.add').show();
    });


    $('#comming').click(function(){
        $(this).addClass('btnactive');
        $('#history').removeClass('btnactive');
        $('#process').removeClass('btnactive');
        $('#tablecomming').removeAttr('style');
        $('#tablehistory').css('display','none');
        $('#tableprocess').css('display','none');
        $('.add').hide();
    });
      
    $('#history').click(function(){
        $(this).addClass('btnactive');
        $('#comming').removeClass('btnactive');
        $('#process').removeClass('btnactive');
        $('#tablehistory').removeAttr('style');
        $('#tablecomming').css('display','none');
        $('#tableprocess').css('display','none');
        $('.add').hide();
    });

    
    var A = "{{Session::get('Save')}}";
    if(A){
        
        Swal.fire({
            text: A,
            type: "success",
        });

    }

    function view(id){
        $.ajax({
            url: '{{ url("viewpopular")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id':id},
            success: function(data) {
                $('#sub').html(data);
                $('#main').modal('show');
            }
        });
    }

    function deldata(id){
        Swal.fire({
        text: "คุณต้องการลบข้อมูลใช่หรือไม่",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'yes'
        }).then((result)=>{
            if (result.value) {
                $.ajax({
                    url: '{{ url("delete2table")}}/PromotionProduct/PromotionProductItem/'+ id +'/id_promotion/NULL',
                    type: 'GET',
                    dataType: 'HTML',
                    success: function(data) {
                        Swal.fire({
                            text: "ลบข้อมูลเรียบร้อย",
                            type: 'success'
                        });

                        window.location.reload();
                    }
                });
            }
        });

    }


</script>


@endsection
