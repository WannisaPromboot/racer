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
    <div class="col-6 text-right">
        <a href="{{url('addproduct')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มสินค้า ' :'+ Add Product'}}</a>
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
                        <th style="width: 100px">ไม่แสดง</th>
                        <th>SAP CODE</th>
                        <th>หมวดหมู่หลัก</th>
                        <th>ชื่อสินค้าภาษาไทย</th>
                        <th>ชื่อสินค้าภาษาอังกฤษ</th>
                        <th>รายละเอียด</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($products as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                                <input type="checkbox" name="display" class="form-control text-center display" value="{{$item->sort}}" ref="{{$item->id_product}}" {{$item->product_display == 1 ? 'checked':''}}>
                            </td>
                            <td>{{$item->sap_code}}</td>
                            <?php $cate = \App\Category::where('id_category',$item->id_category)->first(); ?>
                            <td>{{$cate->category_name_th}}</td>
                            <td>{{$item->product_name_th}}</td>
                            <td>{{$item->product_name_en}}</td>
                            <td>
                                <a href="javascript:void(0)" onclick="view({{$item->id_product}})" class="btn btn-secondary btn-sm">{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</a>
                            </td>
                            <td>
                                <a href="{{url('editproduct/'.$item->id_product.'')}}" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" onclick="deldata({{$item->id_product}})" class="btn btn-danger btn-sm">{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</a>
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
    

    // function updatesort(value,id){
    //     $.ajax({
    //         url: '{{ url("changsortcate")}}',
    //         type: 'GET',
    //         dataType: 'HTML',
    //         data : {'id' : id , 'sort' : value },
    //         success: function(data) {

    //            // window.location.reload();
    //         }
    //     });
    // }
    
    var A = "{{Session::get('save')}}";
    if(A){
        
        Swal.fire({
            text: A,
            type: "success",
        });

    }


    /////display product 
    $('.display').click(function(){
    console.log($(this).text());
        if($(this).is(':checked')){
            Swal.fire({
                text: "คุณต้องการปิดการแสดงของสินค้าใช่หรือไม่",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ใช่",
                cancelButtonText: "ไม่ใช่",
                }).then((result)=>{
                    if (result.value) {
                        $.ajax({
                                url: '{{ url("displayproduct")}}',
                                type: 'GET',
                                dataType: 'HTML',
                                data : {'id' : $(this).attr('ref') , 'check' : 1 },
                                success: function(data) {
                                    Swal.fire({
                                        text: "ปิดการแสดงสินค้าเรียบร้อย",
                                        type: "success",
                                    });
                            
                                }
                            });
                        }
                });

        }else{
            Swal.fire({
                text: "คุณต้องการเปิดการแสดงของสินค้าใช่หรือไม่",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ใช่",
                cancelButtonText: "ไม่ใช่",
                }).then((result)=>{
                    if (result.value) {
                        $.ajax({
                                url: '{{ url("displayproduct")}}',
                                type: 'GET',
                                dataType: 'HTML',
                                data : {'id' : $(this).attr('ref') , 'check' : 0 },
                                success: function(data) {
                                    Swal.fire({
                                        text: "ปิดการแสดงสินค้าเรียบร้อย",
                                        type: "success",
                                    });
                            
                                }
                            });
                        }
                });
        }   
    });

    ///view////

    function view(id){
        $.ajax({
            url: '{{ url("viewproduct")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id':id},
            success: function(data) {
                $('#sub').html(data);
                $('#main').modal('show');
            }
        });
    }



    /////// delete data
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
                    url: '{{ url("deleteproduct")}}/'+ id ,
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
