@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title'){{Session::get('lang')=='th'?'ข้อมูลผู้ดูแลระบบ ' :'Admin'}}@endsection

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
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'ข้อมูลผู้ดูแลระบบ ' :'Admin'}}</h4>
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
                        </div class="col-sm">
                        <div>
                            <a href="{{url('adduser')}}" class="btn" style="background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มผู้ดูแลระบบ ' :'+ Add Admin'}}</a>
                        </div>   
                    </div>

                    <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <?php $i=1 ;?>
                            <th>{{Session::get('lang')=='th'?'ลำดับที่ ' :'No.'}}</th>
                            <th>{{Session::get('lang')=='th'?'อีเมล ' :'Email'}}</th>
                            <th>{{Session::get('lang')=='th'?'ชื่อ' :'Name'}}</th>
                            <th>{{Session::get('lang')=='th'?'สิทธิ์ ' :'Privilege'}}</th>
                            <th>{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</th>
                            <th>{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->email}}</td>   
                                <td>{{$item->firstname}} {{$item->lastname}}</td>       
                                <td>
                                    @if($item->role == 1) 
                                      admin
                                    @elseif($item->role == 2)
                                      supervisor
                                    @elseif($item->role == 3)
                                       staff
                                    @elseif($item->role == 4)
                                        accountant
                                    @endif
                                </td>                  
                                <td>
                                    <a href="{{url('edituser/'.$item->id.'')}}" class="btn btn-warning">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                                </td>
                                <td>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                        
                           
                            
                        </tbody>
                        
                    </table>
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

<script type="text/javascript">


    $(document).ready(function() {
    var table = $('#table').DataTable( {
        });

    });
</script>
<script>
    var A = "{{Session::get('Delete')}}";
    var B = "{{Session::get('Save')}}";
    if(A){
        swal(A);
    }else if(B){
        swal(B);
    }
</script>

@endsection



