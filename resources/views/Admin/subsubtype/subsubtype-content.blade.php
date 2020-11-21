@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'หมวดหมู่ย่อย 3' :'Sub Category 3'}} @endsection

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
        padding: 0px;
    }
    table{
        border-collapse: collapse !important;
    }
</style>

<!-- start page title -->
<div class="row">
    <div class="col-6">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 3' :'Sub Category 3'}}</h4>     
        </div>
    </div>
    <div class="col-6 text-right">
        <a href="{{url('addsubsubtype')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มหมวดหมู่ย่อย 3' :'+ Add Sub Category 3'}}</a>
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
                    </div class="col-sm">
                     
                </div>
                

                <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr style="background-color: #ffc186 !important;">
                        <th style="background-color: #ffc186 !important;">{{Session::get('lang')=='th'?'เมนูหลัก ' :'Category'}}</th>
                        <th style="padding: 0px !important;">
                            <table>
                                <tr>
                                    <td style="border-top:0;border-bottom:0px;background-color: #ffc186 !important; width: 320px;">{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 1' :'Sub Category 1'}}</td>
                                    <td style="border-top:0;border-bottom:0px;background-color: #ffc186 !important;width: 390px;">{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 2' :'Sub Category 2'}}</td>
                                     <td style="border-top:0;border-bottom:0px;background-color: #ffc186 !important;width: 535px;">{{Session::get('lang')=='th'?'หมวดหมู่ย่อย 3' :'Sub Category 3'}}</td>
                                </tr>
                            </table>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($menu as $_menu)
                        <?php $check = \App\SubSubtype::where('main_id',$_menu->menu_id)->first(); ?>
                        @if (!empty($check))
                        <tr>
                            <td>{{$_menu->menu_th}}</td>
                            <td  style="padding: 0px !important;">
                                <table width="100%">
                                    @foreach ($type as $_type)
                                    <?php $checktype = \App\SubSubtype::where('type_id',$_type->type_id)->first(); ?>
                                        @if (!empty($checktype))
                                            @if ($_menu->menu_id == $_type->mainmenu)
                                            <tr>
                                                <td style="width: 220px;">{{$_type->type_th}}</td> 
                                                <td  style="padding: 0px !important;">
                                                    <table width="100%">
                                                        @foreach ($subtype as $_subtype)
                                                        <?php $checksubtype = \App\SubSubtype::where('subtype_id',$_subtype->subtype_id)->first(); ?>
                                                            @if(!empty($checksubtype))
                                                                @if ($_type->type_id==$_subtype->type_id)
                                                                <tr>
                                                                    <td  style="width: 267px">{{$_subtype->subtype_th}}</td>
                                                                    <td  style="padding: 0px !important;">
                                                                        <table width="100%">
                                                                            @foreach ($subsubtype as $_subsubtype)
                                                                                @if ($_subsubtype->subtype_id == $_subtype->subtype_id)
                                                                                <tr>
                                                                                    <td width="150px">{{$_subsubtype->subsubtype_th}}</td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-secondary btn-sm" onclick="viewmenu({{$_subsubtype->subtype_id}})">{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</button>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="{{url('editsubsubtype/'.$_subsubtype->subsubtype_id.'')}}" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <form  method="post">
                                                                                            @csrf
                                                                                            <button type="button" class="btn btn-danger btn-sm" onclick="deldata({{$_subsubtype->subtype_id}})">{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                                @endif
                                                                            @endforeach
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </table>
                                                </td>
                                            </tr>
                                            @endif
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
            url: '{{ url("viewsubsubtype")}}/'+ encodeURIComponent(id),
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
                        url: '{{ url("delete1table")}}/SubSubType/'+ id +'/NULL',
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
