@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'บทความ':'Blog'}} @endsection

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

    .active{
        background-color: #ffc186  !important;
        color:white !important;
    }
</style>
<!-- start page title -->
<div class="row">
    <div class="col-6">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'บทความ':'Blog'}}</h4>
        </div>
    </div>
    <div class="col-6 text-right">
        <a href="{{url('addblog')}}" class="btn add" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มบทความ':'+ Add Blog'}}</a>
    </div>  
</div>     
<!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm">
                            <button id="comming" type="button" class="btn btn-secondary active" >{{Session::get('lang')=='th'?'เร็ว ๆ นี้':'Upcoming'}}</button>
                            <button id="history" type="button" class="btn btn-secondary">{{Session::get('lang')=='th'?'ประวัติ':'History'}}</button>
                        </div> 
                    </div>
                    <div id="tablecoming">
                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>{{Session::get('lang')=='th'?'วันที่' :'Date'}}</th>
                                <th>{{Session::get('lang')=='th'?'หัวข้อ':'Title'}}</th>
                                <th>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}}</th>
                                <th>{{Session::get('lang')=='th'?'จำนวนคลิก':'Number of click'}}</th>
                                <th>{{Session::get('lang')=='th'?'จำนวนผู้อ่าน':'read'}}</th>
                                <th>{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</th>
                                <th>{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</th>
                                <th>{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>  
                    </div>
                    <div id="tablehistory" style="display: none">
                        <table id="table1" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>{{Session::get('lang')=='th'?'วันที่' :'Date'}}</th>
                                    <th>{{Session::get('lang')=='th'?'หัวข้อ':'Title'}}</th>
                                    <th>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}}</th>
                                    <th>{{Session::get('lang')=='th'?'จำนวนคลิก':'Number of click'}}</th>
                                    <th>{{Session::get('lang')=='th'?'จำนวนผู้อ่าน':'read'}}</th>
                                    <th>{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</th>
                                </tr>
                            </thead>
                            <tbody>
                               
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
<script type="text/javascript">

    $(document).ready(function() {
        var table = $('#table').DataTable( {
            'responsive': true,
            'scrollX': true,
        });
        var table1 = $('#table1').DataTable( {
            'responsive': true,
            'scrollX': true,
        });
        
    });

    $('#comming').click(function(){
        $(this).addClass('active');
        $('#history').removeClass('active');
        $('#tablecoming').removeAttr('style');
        $('#tablehistory').css('display','none');
        $('.add').show();
    });
      
    $('#history').click(function(){
        $(this).addClass('active');
        $('#comming').removeClass('active');
        $('#tablehistory').removeAttr('style');
        $('#tablecoming').css('display','none');
        $('.add').hide();
    });
</script>
<script>
    var B = "{{Session::get('Save')}}";
    if(B){
        swal(B);
    }

    function viewblog (id){
        console.log(id);
        $.ajax({
            url: '{{ url("viewblog")}}/'+ encodeURIComponent(id),
            type: 'GET',
            dataType: 'HTML',
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
                        url: '{{ url("delete1table")}}/Blog/'+ id +'/filepath',
                        type: 'GET',
                        dataType: 'HTML',
                        success: function(data) {
                            Swal.fire({
                            html: "<h1>ลบข้อมูลเรียบร้อย</h1>",
                            showCancelButton: false,
                            showConfirmButton: false,
                            });

                            window.location.reload();
                        }
                    });
                }
        });

    }
</script>

@endsection



