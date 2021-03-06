@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') แบนเนอร์หลัก @endsection

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

    /* .active{
        background-color: #ffc186  !important;
        color:white !important;
    } */
</style>
<!-- start page title -->
<div class="row">
    <div class="col-6">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">แบนเนอร์หลัก</h4>
        </div>
    </div>
    <div class="col-6">
    </div> 
</div>     
<!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                       
                        
                    </div>
                    <div id="tablecoming">
                        <table id="table1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>หน้าแสดงผล</th>
                                <th>แก้ไข</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>หน้าหลัก</td>  
                                        <td><a href="{{url('slidecontent')}}" class="btn btn-warning">แก้ไข</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>หน้าเกี่ยวกับเรา</td>  
                                        <td><a href="{{url('banner/2')}}" class="btn btn-warning">แก้ไข</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>หน้าข่าวสาร</td>  
                                        <td><a href="{{url('banner/3')}}" class="btn btn-warning">แก้ไข</button></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>หน้าโปรโมชั่น</td>  
                                        <td><a href="{{url('banner/4')}}" class="btn btn-warning">แก้ไข</button></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>หน้าบทความ</td>  
                                        <td><a href="{{url('banner/5')}}" class="btn btn-warning">แก้ไข</button></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>หน้าติดต่อเรา</td>  
                                        <td><a href="{{url('banner/6')}}" class="btn btn-warning">แก้ไข</button></td>
                                    </tr>

                                   
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modaL --}}
    <div class="modal fade bd-example-modal-lg" id="slidemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document">
            
            <div class="modal-content" >
                <div class="modal-body" id="slide">
              
                  </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                
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
        $(document).ready(function(){
            $('.slidechange').change(function(){
                var id = $(this).attr('ref');
                var sort = $(this).val();
                // console.log(id,sort);
                    $.ajax({
                        url: "{{ url('change_sortslide') }}",
                        method : 'GET',
                        data : { 'slide_id' : id ,'slide_sort' : sort  },
                        dataType : 'html', 
                        success:function(result){
                            }
                    });
            });
        });

        $(document).ready(function() {
            var table = $('#table').DataTable( {
            });

            var table1 = $('#table1').DataTable( {
            });

        });
    </script>
    <script>
        $('#comming').click(function(){
            $(this).addClass('active');
            $('#history').removeClass('active');
            $('#tablecoming').removeAttr('style');
            $('#tablehistory').css('display','none');
            $('.add').show();
        });
        
        $('#history').click(function(){
            $(this).addClass('active');
            $('#comming').removeClass('active');
            $('#tablehistory').removeAttr('style');
            $('#tablecoming').css('display','none');
            $('.add').hide();
        });


        function viewslide(id){
            console.log(id);
            $.ajax({
                url: '{{ url("viewslide")}}/'+ encodeURIComponent(id),
                type: 'GET',
                dataType: 'HTML',
                success: function(data) {
                    $('#slide').html(data);
                    $('#slidemodal').modal('show');
                }
            });
        }
        var B = "{{Session::get('Save')}}";
        if(B){
            Swal.fire({
                text: B,
                type:"success"
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
                            url: '{{ url("delete2table")}}/Slide/slideitem/'+ id +'/slide_id/filepath',
                            type: 'GET',
                            dataType: 'HTML',
                            success: function(data) {
                                Swal.fire({
                                    text: "ลบข้อมูลเรียบร้อยแล้ว",
                                    type:"success"
                                
                                });

                                window.location.reload();
                            }
                        });
                    }
            });

        }
    </script>

@endsection



