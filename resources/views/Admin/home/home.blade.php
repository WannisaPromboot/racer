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
            <h4 class="mb-0 font-size-18">ลำดับสินค้าที่สั่งซื้อมากที่สุด 5 ลำดับ</h4>
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
                    <b>จำนวนคำสั่งซื้อ</b>
                  </div>
                </div>
                <?php $order = \App\Order::where('status_process',1)->get(); ?>
                <div class="row mt-4  mb-2">
                  <div class="col-sm text-center">
                    <h1>{{count($order)}}</h1>
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
                    <b>จำนวนสมาชิก</b>
                  </div>
                </div>
                <?php $user = \App\Customer::all(); ?>
                <div class="row mt-4  mb-2">
                  <div class="col-sm text-center">
                    <h1> {{count($user)}}</h1>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--ผู้ชม-->
{{-- <div class="row">
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
</div> --}}

<!--ผู้ชม-->
 <?php  $booking_graph = \App\OrderItem::select(DB::raw('count(product_order_item.product_id) as count'),'product_order_item.product_id','product_name_th')
                                ->join('product_order','product_order.id_order','=','product_order_item.id_order')
                                ->join('product','product.id_product','=','product_order_item.product_id')
                                ->groupBy('product_order_item.product_id')
                                ->where('product_order.status_process',1)
                                ->orderby('count','desc')
                                ->limit(5)
                                ->get(); 
        $booking_count  = array();
        $booking_name  = array();  
        
        foreach ($booking_graph as $key => $value) {

            if(in_array($value->product_name_th,$booking_name)==false){
                array_push($booking_count,$value->count);
                array_push($booking_name,$value->product_name_th);
            }
          
        }
        
                                
    ?> 
                        

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


var book_name = <?php echo json_encode($booking_name); ?>;
var book_count = <?php echo json_encode($booking_count); ?>;


var ctx = document.getElementById("piechart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: book_name,
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
      ],
      data: book_count
    }]
  }
});

</script>
@endsection