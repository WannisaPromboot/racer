@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title')สินค้ายอดนิยม  @endsection

@section('css') 
    <!-- Summernote css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">
    
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Datatable/datatables.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

        <!-- Sweertalert -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

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
        <h4 class="mb-0 font-size-18">สินค้ายอดนิยม</h4>     
        </div>
    </div>
    {{-- <div class="col-6 text-right">
        <a href="{{url('addcategory')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มเมนูหลัก ' :'+ Add Category'}}</a>
    </div>  --}}
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
                        <th>ตั้งค่าการแสดง</th>
                        <th>หมวดหมู่ภาษาไทย</th>
                        <th>หมวดหมู่ภาษาอังกฤษ</th>
                        <th>รายละเอียด</th>
                        <th>แก้ไข</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($category as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                                <input type="checkbox" class="check"  data-toggle="toggle" ref="{{$item->id_category}}" {{$item->status == 1 ? 'checked' : ''}}>
                            </td>
                            <td>{{$item->category_name_th}}</td>
                            <td>{{$item->category_name_en}}</td>
                            <td>
                                <a href="javascript:void(0)" onclick="view({{$item->id_category}})" class="btn btn-secondary btn-sm">รายละเอียด</a>
                            </td>
                            <td>
                                <a href="{{url('editpoppularproduct/'.$item->id_category.'')}}" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
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
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#table').DataTable( {
            'responsive': true,
            'scrollX': true,
        });

    });
    
    var A = "{{Session::get('Save')}}";
    if(A){
        
        Swal.fire({
            text: A,
            type: "success",
        });

    }

    function view(id){
        $.ajax({
            url: '{{ url("viewpopular")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id':id},
            success: function(data) {
                $('#sub').html(data);
                $('#main').modal('show');
            }
        });
    }


    $('.check').change(function(){
        if(this.checked){
            Swal.fire({
                text: "คุณต้องการเปิดแสดงสินค้ายอดนิยมแบบตั้งค่าเองใช่หรือไม่",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText:"ใช่",
                cancelButtonText: "ไม่",
                allowOutsideClick: false
            }).then((result)=>{
                if (result.value) {
                        $.ajax({
                            url: "{{ url('changedisplaypopular') }}",
                            method : 'GET',
                            data : {'check' : 1 , 'id' : $(this).attr('ref')  },
                            dataType : 'html', 
                            success:function(result){
                                Swal.fire({
                                    text: 'บันทึกข้อมูลเรียบร้อยแล้ว',
                                    type: 'success',
                                    showConfirmButton : false,
                                    allowOutsideClick: false
                                });
                            }
                        
                        });

                      window.location.reload();
                    }else{
                       window.location.reload();
                    }
            });
          
            
        }else{
            Swal.fire({
                text: "คุณต้องการปิดแสดงสินค้ายอดนิยมแบบตั้งค่าเองใช่หรือไม่",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText:"ใช่",
                cancelButtonText: "ไม่",
                allowOutsideClick: false
            }).then((result)=>{
                if (result.value) {
                        $.ajax({
                            url: "{{ url('changedisplaypopular') }}",
                            method : 'GET',
                            data : {'check' : 0 , 'id' : $(this).attr('ref') },
                            dataType : 'html', 
                            success:function(result){
                                Swal.fire({
                                    text: 'บันทึกข้อมูลเรียบร้อยแล้ว',
                                    type: 'success',
                                    showConfirmButton : false,
                                    allowOutsideClick: false
                                });
                            }
                        
                        });
                        window.location.reload();
                    }else{
                       window.location.reload();
                    }
            });

        }
    });


</script>


@endsection
