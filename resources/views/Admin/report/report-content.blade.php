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

        {{-- datatable --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.css"/>

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
                    <div class="col-1 text-right mt-2"><b>รายงาน </b></div>
                    <div class="col-4">
                        <select class="form-control" id="selectreport" style="display:">
                            <option value="">กรุณาเลือก</option>
                            <option value="1">รายงานสินค้าขายดี</option>
                            <option value="2">รายงานยอดขายรายวัน</option>
                            <option value="3">รายงานจำนวนผู้เข้าชมสินค้าสูงสุด</option>
                            <option value="4">สมาชิกที่มียอดซื้อมากที่สุด</option>
                            <option value="5">รายงานสมาชิกสมัครใหม่รายวัน</option>
                            <option value="6">รายงานสินค้าคงที่</option>
                            <option value="7">รายงานหน้าที่ผู้ชมนิยม</option>
                            <option value="8">รายงานจำนวนผู้เข้าชมรายวัน</option>
                            <option value="9">รายงานอุปกรณ์และ Browser ที่เปิดเข้ามา</option>
                            <option value="10">รายงานรายประเทศ</option>
                            <option value="11">รายงานเดือนเกิดสมาชิก</option>
                            <option value="12">รายงานสมาชิกค้างโอน</option>
                            <option value="13">รายงานสมาชิกขาดการเข้าระบบ</option>
                            <option value="14">รายงานสมาชิกเข้าระบบสูงสุด</option>
                            <option value="15">รายงานประเภทการชำระเงิน</option>
                            <option value="16">รายงานช่วงเวลาที่มีผู้ชมเข้ามากสุด</option>
                            <option value="17">การจดจำ ID ผู้เข้าชม Website (Cookie)</option>
                            <option value="18">สินค้าที่ลูกค้าซื้อแบ่งตามเพศ อายุ</option>
                            <option value="19">แหล่งที่มาจากลิงค์ที่เข้ามาใน Website</option>
                            <option value="20">รายงานกลุ่มอายุของผู้เข้าชม Website</option>
                            <option value="21">รายงานสินค้าที่ลูกค้าเข้าชมแบ่งตามเพศและอายุ</option>
                        </select>
                    </div>
                   
                        <div class="col-1 text-right mt-2" id="textselect" >กรุณาเลือก : </div>
                        <div class="col-4" id="m" style="display:none"> 
                            <select class="form-control selectall" id="monthselect" >
                                <option value="">กรุณาเลือกเดือนที่ต้องการ</option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="col-4" id="dmy" style="display:">
                            <input type="date" name="date" id="dateselect" class="form-control selectall">
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>

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
        if($(this).val()==2){
            document.getElementById('m').style.display='none';
            document.getElementById('dmy').style.display='';
            $('.selectall').attr('disabled',false);

        }else if($(this).val()==5){
            document.getElementById('m').style.display='none';
            document.getElementById('dmy').style.display='';
            $('.selectall').attr('disabled',false);

        }else if($(this).val()==11){
            document.getElementById('m').style.display='';
            document.getElementById('dmy').style.display='none';
            $('.selectall').attr('disabled',false);
            
        }else if($(this).val()==17 || $(this).val()==3 || $(this).val()==14 ){
            $('.selectall').attr('disabled',true);
            document.getElementById('dmy').style.display='none';
            document.getElementById('textselect').style.display='none';
            // document.getElementsByClassName('form-control').disabled = true;
            $.ajax({
                url: '{{ url("getreport")}}',
                type: 'GET',
                dataType: 'HTML',
                data : {'report' : $(this).val()},
                success: function(data) {
                    if(data==1){
                        alert('ไม่พบข้อมูล');
                    }else{
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
                  
                
                }
            });
        }

    });

    $('#monthselect').change(function(){
        var monthselect = $(this).val();
        var report = document.getElementById('selectreport').value;
        $.ajax({
            url: '{{ url("getreport")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'report' :report,'monthselect':monthselect},
            success: function(data) {
                if(data==1){
                    alert('ไม่พบข้อมูล');
                }else{
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
               
            }
        });
    });



    $('#dateselect').change(function(){
        var dateselect = $(this).val();
        var report = document.getElementById('selectreport').value;
        $.ajax({
            url: '{{ url("getreport")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'report' :report,'dateselect':dateselect},
            success: function(data) {
                if(data==1){
                    alert('ไม่พบข้อมูล');
                }else{
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
               
            }
        });
    });


   
</script>

@endsection