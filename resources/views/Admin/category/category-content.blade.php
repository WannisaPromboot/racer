@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}}</h4>     
        </div>
    </div>
    <div class="col-6 text-right">
        <a href="{{url('addcategory')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มเมนูหลัก ' :'+ Add Category'}}</a>
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
                        <th>ลำดับที่</th>
                        {{-- <th>ไม่แสดง</th> --}}
                        <th>หมวดหมู่ภาษาไทย</th>
                        <th>หมวดหมู่ภาษาอังกฤษ</th>
                        {{-- <th>เมนูภาษาจีน</th>
                        <th>รายละเอียด</th> --}}
                        <th>แก้ไข</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($category as $item)
                        <tr>
                            <td>{{$i}}</td>
                            {{-- <td><input type="checkbox" class="form-control check" ref="{{$item->id_category}}" {{$item->status ==1 ? 'checked':''}}></td> --}}
                            <td>{{$item->category_name_th}}</td>
                            <td>{{$item->category_name_en}}</td>
                            {{-- <td>
                                <a href="javacript:void(0)" onclick="viewmenu({{$item->menu_id}})" class="btn btn-secondary btn-sm">{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</a>
                            </td> --}}
                            <td>
                                <a href="{{url('editcategory/'.$item->id_category.'')}}" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
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

    $('.check:checkbox').each(function(){
        $(this).click(function(){
            if(this.checked){
                var value = 1;
                var id = $(this).attr('ref');

                $.ajax({
                url: "{{ url('displaymainmenu') }}",
                method : 'GET',
                data : { 'id' : id ,'check' : value  },
                dataType : 'html', 
                success:function(result){
                }
        });
                
            }else{
                var value = 0;
                var id = $(this).attr('ref');
                $.ajax({
                url: "{{ url('displaymainmenu') }}",
                method : 'GET',
                data : { 'id' : id ,'check' : value  },
                dataType : 'html', 
                success:function(result){
                }
         });
                
            }
        // console.log(sList);
        
        });

    });
    
</script>

<script>
    var A = "{{Session::get('Save')}}";
    if(A){
        swal(A);
    }

        
    function viewmenu (id){
        console.log(id);
        $.ajax({
            url: '{{ url("viewmenu")}}/'+ encodeURIComponent(id),
            type: 'GET',
            dataType: 'HTML',
            success: function(data) {
                $('#sub').html(data);
                $('#main').modal('show');
            }
        });
    }
</script>


@endsection
