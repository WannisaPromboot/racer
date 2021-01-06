@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'สินค้า ' :'product'}} @endsection

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
                        <th>หมวดหมู่หลัก</th>
                        <th>ชื่อสินค้าภาษาไทย</th>
                        <th>คะแนน</th>
                        <th>รายละเอียด</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($products as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->sap_code}}</td>
                            <?php    
                                if(!empty($item->id_category)){
                                    $cate = \App\Category::where('id_category',$item->id_category)->first();
                                }
                            ?>
                            <td>{{!empty($item->id_category) ? $cate->category_name_th : ''}}</td>
                            <td>{{$item->product_name_th}}</td>
                            <?php $rating = \App\Review::where('product_id',$item->id_product)->get(); 
                                  $sum = 0;
                                   foreach ($rating  as $key => $value) {
                                        $sum += $value->score;
                                   } 

                                   $total = @($sum/count($rating));
                                
                            ?>
                            <td>{{  is_nan($total) ? 0 : $total}}</td>
                            <td>
                                <a href="{{url('reviewdetail/'.$item->id_product.'')}}"  class="btn btn-secondary btn-sm">{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</a>
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
        var table = $('#table').DataTable( {
            'responsive': true,
            'scrollX': true,
        });

    });
    



</script>


@endsection
