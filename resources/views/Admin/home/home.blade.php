@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') การจองทั้งหมด @endsection

@section('css') 
  <!-- Summernote css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

    <!-- Sweertalert -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

      {{-- tag input --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
      {{-- datatable --}}
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

  <style>
    th,td{
        text-align: center;
    }
    div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
        
    }
    .table.dataTable thead .sorting{
        background-color:#ffc186;
    }
    .table.dataTable thead .sorting_asc{
        background-color: #ffc186;
    }

    .active{
      background-color: #87d1a0  !important;
    }
  </style>

@endsection

@section('content')
<div class="row">
  <div class="col-9">
    <!--จำนวน orders-->
      <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'ลำดับประเภทที่เข้าชมมากที่สุด':'Top 5 category'}}</h4>
            </div>
        </div>
      </div>   

      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <canvas id="piechart" style="width: 600px;height:300px;"></canvas>
                </div>
            </div>
        </div>
      </div>
  </div>
  <div class="col-sm ">
    <!--จำนวน view-->
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm">
                    <b>{{Session::get('lang')=='th'?'จำนวนการจอง':'number of booking'}}</b>
                  </div>
                </div>
                <div class="row mt-4  mb-2">
                  <div class="col-sm text-center">
                    <h1> 26 </h1>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm">
                    <b>{{Session::get('lang')=='th'?'จำนวนร้านค้า':'Store'}}</b>
                  </div>
                </div>
                <div class="row mt-4  mb-2">
                  <div class="col-sm text-center">
                    <h1> 1<span style="color: #ffc186 "></span></h1>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm">
                    <b>{{Session::get('lang')=='th'?'จำนวนลูกค้า':'Member / Customer'}}</b>
                  </div>
                </div>
                <div class="row mt-4  mb-2">
                  <div class="col-sm text-center">
                    <h1> 20 <span style="color: #ffc186 "></span></h1>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--ผู้ชม-->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'การจอง':'Booking'}}</h4>
      </div>
  </div>
</div>   

<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
            <div class="row mb-4">
              <div class="col-sm">
                  <a href="{{url('bookingall')}}" style="float: right;" class="btn active">{{Session::get('lang')=='th'?'ทั้งหมด':'View all'}}</a>                 
              </div>   
          </div>
           
          </div>
      </div>
  </div>
</div>

<!--ผู้ชม-->
  
                        

@endsection

@section('script')
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
<!-- chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
  
$(document).ready(function() {
    var table = $('#table').DataTable( {
            // "responsive":true,
            "scrollX": true,
            // "scrollY":"200px",
            // // "scrollCollapse": true,
            // "paging":false
        });
  });

//////////pie

var ctx = document.getElementById("piechart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['A','A','A','A','A'],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
      ],
      data: ['20','30','20','50','110']
    }]
  }
});


//////payment

$('.payment').click(function(){ 
 var id = $(this).attr('ref');
 
 console.log(id);
         $.ajax({
         url:'{{ url("checkpayment") }}/'+id,
         type: 'GET',
         dataType: 'HTML',
         async: true,
         success: function(data){
         
         swal({
                         title: "การชำระเงิน",
                         html:  '<html>'+
                         '<div >' + data +'</div>'+
                         '<div class="d-inline-block p-2"></div>'+
                         '<div style="text-align:left; margin-left:100px">'+
                         '<div class="form-check">'+
                             '<input class="form-check-input" type="radio" name="orders_status" id="checkstatus" value="2" checked>'+
                             '<label class="form-check-label" for="exampleRadios1">ผ่านการตรวจ</label>'+
                         '</div>'+
                         '<div class="form-check">'+
                             '<input class="form-check-input" type="radio" name="orders_status" id="checkstatus" value="1">'+
                             '<label class="form-check-label" for="exampleRadios2">ไม่ผ่านการตรวจสอบ</label>'+
                         '</div>'+
                         '</div>'+
                         '</html>',
                         showCloseButton: true,
                         focusConfirm: false,
                         allowOutsideClick: false,
                     }).then(function(isConfirm) {

                        if(isConfirm.value){
                                $.ajax({
                                type: 'GET',
                                url: '{{ url("updatestatuspayment") }}/'+id,
                                data:  {
                                    "_token": "{{ csrf_token() }}",
                                    orders_status: $("#checkstatus:checked").val()
                                },

                            
                            });
                            
                            window.location.reload();
                        }else{
                            return false;
                        }

             
                     })
             }

     });

 });

 ///////////show payment when update status
 $('.showpayment').click(function(){ 
 var id = $(this).attr('ref');
         $.ajax({
         url:'{{ url("checkpayment") }}/'+id,
         type: 'GET',
         dataType: 'HTML',
         async: true,
         success: function(data){
         
            swal({
                    title: "การชำระเงิน",
                    html:  '<html>'+
                    '<div >' + data +'</div>'+
                    '</html>',
                    showCloseButton: true,
                    focusConfirm: false,
                    allowOutsideClick: false,
                });
            }

     });

 });
</script>
@endsection