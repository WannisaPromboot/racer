@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') {{Session::get('lang')=='th'?'แบนเนอร์และสไลด์' :'BANNER & SLIDE'}} @endsection

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
        <h4 class="mb-0 font-size-18">{{Session::get('lang')=='th'?'แบนเนอร์และสไลด์' :'BANNER & SLIDE'}}</h4>
        </div>
    </div>
    <div class="col-6">
        <a href="{{url('addslide')}}" class="btn add" style="float:right;background-color: #03dc74 !important;color:white !important;">{{Session::get('lang')=='th'?'+ เพิ่มแบนเนอร์และสไลด์' :'+ BANNER & SLIDE'}}</a>
    </div> 
</div>     
<!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        {{-- <div class="col-sm">
                            <button id="comming" type="button" class="btn btn-secondary active" >{{Session::get('lang')=='th'?'เร็ว ๆ นี้':'Upcoming'}}</button>
                            <button id="history" type="button" class="btn btn-secondary">{{Session::get('lang')=='th'?'ประวัติ':'History'}}</button>
                        </div> --}}
                        
                    </div>
                    <div id="tablecoming">
                        <table id="table1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th  width="60px">{{Session::get('lang')=='th'?'ลำดับที่':'No.'}}</th>
                                <th>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}}</th>
                                <th>{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</th>
                                <th>{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach($data as $datas)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>
                                        @if(!empty($datas->slide_image))
                                            <img src="{{url('storage/app/'.$datas->slide_image)}}" width="300px">
                                        @else 
                                            <iframe class="img-fluid" src="{{$datas->slide_video}}?loop=1&controls=0" ></iframe>
                                        @endif
                                    </td>  
                                    <td>
                                        <a href="{{url('editproduct/'.$datas->id_prid_slideoduct.'')}}" class="btn btn-warning btn-sm">{{Session::get('lang')=='th'?'แก้ไข' :'Edit'}}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="deldata({{$datas->id_slide}})" class="btn btn-danger btn-sm">{{Session::get('lang')=='th'?'ลบ' :'Delete'}}</a>
                                    </td>
                                </tr>
                                <?php $i=$i+1;?>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                    {{-- <div id="tablehistory" style="display: none">
                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>{{Session::get('lang')=='th'?'ลำดับที่':'No.'}}</th>
                                <th>{{Session::get('lang')=='th'?'หัวข้อ':'Title'}}</th>
                                <th>{{Session::get('lang')=='th'?'รูปภาพ':'Image'}}</th>
                                <th>{{Session::get('lang')=='th'?'รายละเอียด' :'Detail'}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $datas)
                                    <td></td>
                                @endforeach
                            </tbody>
                        </table>  
                    </div> --}}
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
                                    text: "ลบข้อมูลเรียบร้อย",
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



