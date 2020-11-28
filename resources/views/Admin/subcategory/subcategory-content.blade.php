@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1' :'Sub Category 1'}} @endsection

@section('css') 
    <!-- Summernote css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.css')}}">

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1' :'Sub Category 1'}} </h4>     
        </div>
    </div>
    <div class="col-6 text-right">
        <a href="{{url('addsubcategory')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มหมวดหมู่ย่อย 1 ' :'+ Add Sub Category 1'}}</a>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>{{Session::get('lang')=='th'?'#' :'No.'}}</th>
                        <th>{{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}}</th>
                        <th>{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1' :'Sub Category 1'}}</th>
                    </tr>
                    </thead>
                    <?php $i=1; ?>
                    <tbody>
                        @foreach ($category as $_category)
                        <?php $subcate = \App\SubCategory::where('id_category',$_category->id_category)->get(); ?>
                        @if(count($subcate) > 0)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$_category->category_name_th}}</td>
                                <td style="padding: 0px !important;">
                                    <table style="width: 100%;">
                                            @foreach ($subcate as $_subcate)
                                            <tr>
                                                <td style="width: 65%;">{{$_subcate->subcategory_name_th}}</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm" onclick="view({{$_subcate->id_subcategory}})">{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</a>
                                                </td>
                                                <td>
                                                    <a href="{{url('editsubcategory/'.$_subcate->id_subcategory.'')}}" class="btn btn-warning btn-sm" >{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" onclick="deldata({{$_subcate->id_subcategory}})" class="btn btn-danger btn-sm" >{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                                </td>

                                <?php $i++; ?>
                            </tr>
                         @endif
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
<script src="{{ URL::asset('assets/Datatable/datatables.min.js')}}"></script>  
<script src="{{ URL::asset('assets/Datatable/datatables.js')}}"></script>
  <!-- Sweert Alert -->
  <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>   

<script>
    $(document).ready(function() {
    var table = $('#table').DataTable( {
        });

    });


    $(document).ready(function(){
        var A = "{{Session::get('Save')}}";
        if(A){
            Swal.fire({
                text: A,
                type: "success",
            });
        }
    });

        
    function view(id){
        $.ajax({
            url: '{{ url("viewsubcategory")}}',
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
        console.log(id);
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
                    url: '{{ url("delete1table")}}/SubCategory/'+ id +'/NULL',
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
