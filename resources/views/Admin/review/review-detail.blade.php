@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title')เพิ่มสินค้า @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

        <!-- Sweertalert -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

          <!-- tag input -->
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.css') }}">
          <style>
              .bootstrap-tagsinput{
                  width:100% !important;
              }
              .bootstrap-tagsinput .tag{
                background-color: #eff2f7 !important;
                border: 1px solid #f6f6f6 !important;
                border-radius: 1px !important;
                padding: 0 7px !important;
                color: black;
              }
               /* ------star---------- */
               .checkedstar {
                color: orange !important;
                }

                .box-re{
                background-color: #fff;
                    padding: 10px 20px;
                    margin-bottom: 10px;
                }

          </style>
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">เพิ่มสินค้า</h4>     
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div data-repeater-list="outer-group" class="outer">
                    <div data-repeater-item class="outer"> 
                        @if(count($all) > 0)
                                @foreach ($all as $item)
                                    <div class="row">
                                        <div class="col-2 pt-6">
                                            <input class="form-control display" type="checkbox" ref="{{$item->id}}" {{ $item->display == 0 ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-8">
                                            <?php $user = \App\Customer::where('customer_id',$item->customer_id)->first(); ?>
                                            <h5 style="color: #222;">{{$user->name.'  '.$user->lastname}}</h5>
                                            <p style="font-size:16px">{{$item->text}}</p>
                                            @for ($i =0; $i <= $item->score ; $i++)
                                            <span class="fa fa-star checkedstar"></span>
                                            @endfor
                                            @for ($i =0; $i <= 5-$item->score ; $i++)
                                            <span class="fa fa-star"></span>
                                            @endfor
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                        @else 
                        <div class="row">
                            <div class="col-sm text-center">
                                <h5>ไม่มีรีวิว</h5>
                            </div>
                        </div>      
                        @endif
                        <div class="row mt-5">
                            <div class="col-sm text-left">
                                <a  href="{{url('reviewcontent')}}" class="btn btn-danger">กลับ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
                     
@endsection

@section('script')

<!-- form mask -->
<script src="{{ URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')}}"></script>

<!-- form mask init -->
<script src="{{ URL::asset('assets/js/pages/form-repeater.int.js')}}"></script> 
<!--tinymce js-->
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- Summernote js -->
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>

<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>  

<!-- Sweert Alert -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> 

<!-- tag input -->
<script  src="{{ asset('assets/libs/bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script> 

<script>
   
    /////display product 
    $('.display').click(function(){
        console.log($(this).is(':checked') );
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
                                url: '{{ url("changedisplay")}}',
                                type: 'GET',
                                dataType: 'HTML',
                                data : {'id': $(this).attr('ref'), 'check' : 0 },
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
                                url: '{{ url("changedisplay")}}',
                                type: 'GET',
                                dataType: 'HTML',
                                data : { 'id': $(this).attr('ref') ,'check' : 1 },
                                success: function(data) {
                                    Swal.fire({
                                        text: "เปิดการแสดงสินค้าเรียบร้อย",
                                        type: "success",
                                    });
                            
                                }
                            });
                        }
                });
        }   
    

    });
</script>

@endsection