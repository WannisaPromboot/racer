@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'รายงาน':'Report'}} @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

         <!-- Sweertalert -->
         <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

           {{-- tag input --}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

            {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.css')}}"> --}}

        {{-- datatable --}}
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

            <style>
                #table_wrapper{
                    width: 100%;
                }
                td,th{
                    text-align: center !important;
                }
            </style>

@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'รายงาน':'Report'}}</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
        
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-1 text-right mt-2"><b>{{Session::get('lang')=='th'?'รายงาน ' :'Report'}} : </b></div>
                    <div class="col-4">
                        <select class="form-control" id="selectreport">
                            <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select'}}</option>
                            <option value="1">รายงานจำนวนผู้ใช้แพลตฟอร์ม</option>
                            <option value="2">รายงานจำนวนร้านค้า</option>
                            <option value="3">รายงานจำนวนการจองบริการ</option>
                            <option value="4">รายงานบริการที่มีรีวิว</option>
                            <option value="5">รายงานจำนวนสมาชิก</option>
                            <option value="6">รายงานคำนวณคอมมิชชัน</option>
                        </select>
                    </div>
                    <div class="col-1 text-right mt-2"><b>{{Session::get('lang')=='th'?'ร้านค้า ' :'Store'}} : </b></div>
                    <div class="col-4">
                        <select class="form-control" id="store">
                            <option>{{Session::get('lang')=='th'?'กรุณาเลือก ' :'Please Select'}}</option>
                            <option value="0">ทั้งหมด</option>
                            @foreach ($store as $item)
                            <option value="{{$item->id_store}}">{{$item->store_name_th}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-1 text-right mt-2"><b>{{Session::get('lang')=='th'?'ตั้งวันที่ ' :'From'}} : </b></div>
                    <div class="col-4">
                        <input type="date" class="form-control" id="datefrom">
                    </div>
                    <div class="col-1 text-right mt-2"><b>{{Session::get('lang')=='th'?'ถึง ' :'To'}} : </b></div>
                    <div class="col-4">
                        <input type="date" class="form-control" id="dateto">
                    </div>
                </div>
                <br>
                <div class="row">  
                    <div class="col-sm" id="btn">
                        
                    </div>
                </div>
              
                <br>
                <div class="row p-3" id="new">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
                        

@endsection

@section('script')
{{-- <script src="{{ URL::asset('assets/Datatable/datatables.min.js')}}"></script>  
<script src="{{ URL::asset('assets/Datatable/datatables.js')}}"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
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

<!-- Bootstrap tags input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script>
    $('#selectreport').change(function(){
        var report = $(this).val();
        $.ajax({
            url: '{{ url("getreport")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'report' : $(this).val() },
            success: function(data) {
                $('#new').html(data);
                var table = $('#table').DataTable( {
                    "scrollX": true,
                    //scrollCollapse: true,
                   'responsive': true,
                    dom: 'Bfrtip',
                    buttons: [
                    'excel'
                    ]
                });
                console.log(report);
               
            }
        });
    });

    $('#store').change(function(){
        console.log($(this).val());
        $.ajax({
            url: '{{ url("getreport")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'report' : $('#selectreport').val() , 'id_store' : $(this).val() },
            success: function(data) {
                $('#new').html(data);
                var table = $('#table').DataTable( {
                    "scrollX": true,
                    //scrollCollapse: true,
                   'responsive': true,
                    dom: 'Bfrtip',
                    buttons: [
                    'excel'
                    ]
                });

                
            }
        });
    });

    $('#dateto').change(function(){
        console.log($(this).val());
        $.ajax({
            url: '{{ url("getreport")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'report' : $('#selectreport').val() , 
                    'id_store' : $('#store').val(), 
                    'datefrom' : $('#datefrom').val() , 
                    'dateto' :  $(this).val() },
            success: function(data) {
                $('#new').html(data);
                var table = $('#table').DataTable( {
                    "scrollX": true,
                    //scrollCollapse: true,
                   'responsive': true,
                    dom: 'Bfrtip',
                    buttons: [
                    'excel'
                    ]
                });

                
            }
        });
    });
</script>

@endsection