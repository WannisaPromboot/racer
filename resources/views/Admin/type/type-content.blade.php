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
        <a href="{{url('addtype')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มหมวดหมู่ย่อย 1 ' :'+ Add Sub Category 1'}}</a>
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
                        <th>{{Session::get('lang')=='th'?'ลำดับที่' :'No.'}}</th>
                        <th>{{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}}</th>
                        <th>{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1' :'Sub Category 1'}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($main as $_main)
                        <?php $check = \App\type::where('mainmenu',$_main->menu_id)->first(); ?>
                        @if (!empty($check))
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$_main->menu_th}}</td>
                            <td style="padding: 0px !important;">
                                <table width="100%">
                                    @foreach ($type as $_type)
                                        @if ($_type->mainmenu == $_main->menu_id)
                                        <tr>
                                            <td width="400px">{{$_type->type_th}}</td> 
                                            <?php $icon = \App\Icon::where('icon_id',$_type->icon)->first(); ?>
                                            <td>
                                                @if(!empty($icon))
                                                <img src="{{url('storage/app/'.$icon->icon_img.'')}}"><br>{{$icon->icon_name}}
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm" onclick="viewmenu({{$_type->type_id}})">{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</button>
                                            </td>
                                            <td>
                                                <a href="{{url('edittype/'.$_type->type_id.'')}}" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="deldata({{$_type->type_id}})">{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</button>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        @endif
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
<script src="{{ URL::asset('assets/Datatable/datatables.min.js')}}"></script>  
<script src="{{ URL::asset('assets/Datatable/datatables.js')}}"></script>
  <!-- Sweert Alert -->
  <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>   

<script>
    $(document).ready(function() {
    var table = $('#table').DataTable( {
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
            url: '{{ url("viewtype")}}/'+ encodeURIComponent(id),
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
                        url: '{{ url("delete1table")}}/Type/'+ id +'/NULL',
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
