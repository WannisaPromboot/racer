@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') Form Repeater @endsection

@section('css') 
  <!-- Summernote css -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

    <!-- Sweertalert -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

      {{-- tag input --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

      {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/> --}}
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/sc-2.0.2/datatables.min.css"/>
 


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
<!--ผู้ชม-->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">ข้อมูลการจอง</h4>
      </div>
  </div>
</div>   

<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
            <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
              <tr>
                  <th>Booking ID</th>
                  <th>วันที่ทำรายการ</th>
                  <th>วันที่นัดเข้ารับบริการ</th>
                  <th>เวลา</th>
                  <th>ชื่อลูกค้า</th>
                  <th>โทรศัพท์</th>
                  <th>ชื่อบริการ</th>
                  <th>ชื่อร้านค้า</th>
                  <th>ค่าบริการ</th>
                  <th>ประเภทการชำระเงิน</th>
                  <th>วิธีการชำระเงิน</th>
                  <th>สถานะการจ่ายเงิน</th>
                  <th>สถานะการใช้บริการ</th>
                  <th>เวลาที่ใช้บริการจริง</th>
                  <th>เวลาที่ลงทะเบียนใช้บริการ</th>
              </tr>
              </thead>
              <tbody>
                <?php for($i=0;$i<=30;$i++){ ?>
                  <tr style="color: green">
                      <td><a href="{{url('detail-booking')}}" style="color: green">BTGW4329</a></td>
                      <td>30-07-20</td>
                      <td>01-08-20</td>
                      <td>11:00</td>
                      <td>Jane doe</td>
                      <td>081-00-00000</td>
                      <td>นวดหน้า</td>
                      <td>ปานปุริ</td>
                      <td>800</td>
                      <td>ชำระผ่านเว็บไซต์</td>
                      <td>บัตรเครดิต</td>
                      <td>ชำระแล้ว</td>
                      <td>ใช้บริการแล้ว</td>
                      <td>01-08-20</td>
                      <td>11:10</td>
                  </tr>
                  <tr style="color: red">
                      <td><a href="{{url('detail-booking')}}" style="color: red">BTGW4330</a></td>
                      <td>31-07-20</td>
                      <td>02-08-20</td>
                      <td>11:00</td>
                      <td>Jane doe</td>
                      <td>081-00-00000</td>
                      <td>อุดฟัน</td>
                      <td>ยิ้มสวย</td>
                      <td>600</td>
                      <td>ชำระหน้าร้าน</td>
                      <td>-</td>
                      <td>ยังไม่ได้ชำระ</td>
                      <td>ยังไม่ได้ใช้บริการ</td>
                      <td>-</td>
                      <td>-</td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
          </div>
      </div>
  </div>
</div>
                   
@endsection

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/sc-2.0.2/datatables.min.js"></script>

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
            "scrollX": true,
            "pageLength": 50
        });
  });

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'จำนวนการจอง',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById("piechart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Green", "Blue", "Gray", "Purple", "Yellow"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
      ],
      data: [12, 19, 3, 17, 28,]
    }]
  }
});
</script>
@endsection