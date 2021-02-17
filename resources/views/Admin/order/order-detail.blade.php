@extends('layouts.templatemaster-admin')
@include('class.OrangeV1')

@section('title') รายละเอียดคำสั่งซื้อ @endsection

@section('css') 
        <!-- Summernote css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}">

         <!-- Sweertalert -->
         <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

           {{-- tag input --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">รายละเอียดคำสั่งซื้อ</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
        
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-sm">
                        <h4>คำสั่งซื้อสินค้า : {{$order->id_order}}</h4>
                    </div>
                </div>
                <br>  
                <?php $user = \App\Customer::where('customer_id',$order->customer_id)->first();?>
                <div >
                    <div class="col-sm">
                        <h5>ข้อมูลผู้สั่งซื้อ</h5>
                    </div>
                </div>
                <hr>
                <div class="row p-3">
                    <div class="col-3">ชื่อ - สกุล : </div>
                    <div class="col-3">{{$user->name .' '. $user->lastname }}</div>
                    <div class="col-3">เบอร์โทรศัพท์ : </div>
                    <div class="col-3">{{$user->phone }}</div>
                </div>
                <div class="row p-3">
                    <div class="col-3">อีเมล : </div>
                    <div class="col-3">{{$user->email}}</div>
                </div>
                <br>
                <?php $user = \App\Customer::where('customer_id',$order->customer_id)->first();?>
                <div >
                    <div class="col-sm">
                        <h5>ข้อมูลสินค้า</h5>
                    </div>
                </div>
                <hr>
                <div class="row p-3">
                    <div class="col-7  text-center"><b>สินค้า</b></div>
                    <div class="col-2 text-center"><b>จำนวน</b></div>
                    <div class="col-3 text-center"><b>ราคา</b></div>
                </div>
                <?php $order_item = \App\OrderItem::where('id_order',$order->id_order)->get();  ?>
                @foreach ($order_item as $_pro)
                <div class="row pr-3 pl-3">
                    <?php $product = \App\Product::where('id_product',$_pro->product_id)->first(); ?>
                    <div class="col-7">{{$product->product_name_th}}</div>
                    <div class="col-2 text-center">{{$_pro->count}}</div>
                    <div class="col-3 text-center">{{number_format($_pro->price)}}</div>
                </div>
                <hr>
                @endforeach
                <div class="row p-3">
                    <div class="col-7"></div>
                    <div class="col-2 text-center">ค่าส่ง</div>
                    <div class="col-3 text-center">0</div>
                </div>
                <div class="row p-3">
                    <div class="col-7"></div>
                    <div class="col-2 text-center">ส่วนลด</div>
                    <div class="col-3 text-center">-{{number_format($order->discount)}}</div>
                </div>
                <div class="row p-3">
                    <div class="col-7"></div>
                    <div class="col-2 text-center">รวม</div>
                    <div class="col-3 text-center">{{number_format($order->total)}}</div>
                </div>
                <div >
                    <div class="col-sm">
                        <h5>ข้อมูลการจัดส่งสินค้าและที่อยู่ใบกำกับภาษี</h5>
                    </div>
                </div>
                <hr>
                <div class="row p-3">
                    <div class="col-3">ข้อมูลที่อยู่การจัดส่ง : </div>
                    <div class="col-3">{{$order->firstname.' '.$order->lastname.' ('.$order->telephone.') '.$order->address }}</div>
                </div>
                <?php $address_tax = \App\OrderTax::where('id_order',$order->id_order)->first(); ?>
                <div class="row p-3">
                    <div class="col-3">ข้อมูลที่อยู่ใบกำกับภาษี : </div>
                    @if(!empty($address_tax))
                    <div class="col-3">{{$address_tax->firstname.' '.$address_tax->lastname.' ('.$address_tax->telephone.') '.$address_tax->address }}</div>
                    @else 
                    <div class="col-3">{{$order->firstname.' '.$order->lastname.' ('.$order->telephone.') '.$order->address }}</div>
                    @endif
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-danger btn-sm" href="{{url('ordercontent')}}">กลับ</a>
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

<!-- Bootstrap tags input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>
    
    
</script>

@endsection