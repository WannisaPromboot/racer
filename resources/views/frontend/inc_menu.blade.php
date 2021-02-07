<style>
       /* --------------- */
	.img-logo {
	  width: 60%;
    }

    
    .icon-shopping_cart{
        color: #00b9e9 !important;
    }


</style>
{{-- start nav --}}
<div class="py-1 bg-primary">
	<div class="container">
		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
			<div class="col-lg-12 d-block">
				<div class="row d-flex">

					<div class="col-md-8 pr-4 d-flex topper align-items-center">
                    <div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon-phone2" style="color:#00b9e9"></span>
							<span class="text"> : 0-2811-1741-5</span></div>
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon icon-envelope" style="color:#00b9e9"></span>
							<span class="text"> :  racer_official@racerlighting.com</span></div>
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<i class="fa fa-clock-o" style="color:#00b9e9" aria-hidden="true"></i>
						    <span class="text"> : วันจันทร์ - วันศุกร์ : 08.00น. - 17.00น.</span></div>
                        </div>
					<div class="col-md-4">
                    <div class="icon mr-2 d-flex justify-content-center" id="social">
                            <a target="blank" href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-01.png"></a>
                            <a target="blank" href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-02.png"></a>
                            <a target="blank" href="https://line.me/ti/p/~@racerlighting" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-03.png"></a>
                            <a target="blank" href="https://www.youtube.com/channel/UC8Af6KCm3uAnBeTya3rwuLA" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-04.png"></a>
                            <a target="blank" href="https://www.tiktok.com/@racerlighting?" style="color: #00b9e9;"><img class="img-icon" src="http://miu.orangeworkshop.info/racer/frontend/images/BG web - Icon-05.png"></a>
                    </div>
						<!-- <div class="icon mr-2 d-flex justify-content-center" id="social">
                            <a href="https://line.me/ti/p/~@racerlighting" style="color: white;"><i class="fab fa-line"></i></a>
                        </div>
						<div class="icon mr-2 d-flex justify-content-center" id="social">
							<a href="https://www.facebook.com/racerlighting" style="color: #00b9e9;"><span class="icon-facebook"></span></a>
						</div>
						<div class="icon mr-2 d-flex justify-content-center" id="social">
							<a href="https://www.instagram.com/racerlighting" style="color: #00b9e9;"><span class="icon-instagram"></span></a>
					   </div> -->

					</div>

				</div>
			</div>
		</div>
	  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="{{url('/')}}"><img class="img-logo" src="{{asset('frontend/images/logo-menu.png')}}"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

	  	<div class="collapse navbar-collapse" id="ftco-nav">

			<div class="col-md-8">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">หน้าหลัก <span class="menu-span-col">|</span> </a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สินค้า</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<?php $menu = \App\Category::orderby('sort')->get(); ?>
								@foreach ($menu as $_menu)
									<a class="dropdown-item" href="{{url('product/'.$_menu->category_name_th.'')}}">{{strtoupper($_menu->category_name_th)}}</a>
								@endforeach
						</div>
					</li>
					<li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link"><span class="menu-span-col">|</span> เกี่ยวกับเรา</a></li>
					<!-- <li class="nav-item"><a href="news.html" class="nav-link">ข่าวสารและโปรโมชั่น</a></li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu-span-col">|</span> ข่าวสารและโปรโมชั่น</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="{{url('/news')}}">ข่าวสาร</a>
							<a class="dropdown-item" href="{{url('/promotion')}}">โปรโมชั่น</a>
						</div>
					</li>
					<li class="nav-item"><a href="{{url('/article')}}" class="nav-link"><span class="menu-span-col">|</span> บทความ</a></li>
					<li class="nav-item"><a href="{{url('/contact')}}" class="nav-link"><span class="menu-span-col">|</span> ติดต่อเรา</a></li>
				</ul>
			</div>
			<div class="col-md-4" id="pay-nemu">
				<ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <div class="container03">
                        <div class="search-toggle">
                            <button class="search-icon icon-search"></button>
                            <button class="search-icon icon-close"></button>
                        </div>
                        <div class="search-container03">
                            <form action="{{url('searchproduct')}}" method="get">
                                @csrf
                            <input type="text" name="search" id="search-terms" placeholder="Search terms..."  autocomplete="off"/>
                            <button type="submit" class="search-icon"></button>
                            </form>

                        </div>
                    </div>
		        </li>        
                <!-- <li class="nav-item cta-colored" id="mobile"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[1]</a></li> -->
                <li class="nav-item cta-colored" id="mobile"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>
                    
                    <?php
                    if(!empty(Session::get('product'))){
                        $qty = 0;
                            foreach (Session::get('product') as $key =>  $item) {
                                $qty += $item['qty'];
                            }
                    }   
                    
                ?>
                    {{!empty(Session::get('product')) ? '['.$qty.']' : ''}}
                
                <span class="menu-span-col"></span> </a></li>
                <li class="nav-item dropdown" id="desk">
                    <a href="{{url('cart')}}" class="nav-link veiw" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-shopping_cart"></span>
                        <span class="vx">
                            <?php
                            if(!empty(Session::get('product'))){
                                $qty = 0;
                                    foreach (Session::get('product') as $key =>  $item) {
                                        $qty += $item['qty'];
                                    }
                            }   
                            
                        ?>
                        {{!empty(Session::get('product')) ? '['.$qty.']' : ''}}
                        </span>
                    </a>
                        <div class="dropdown-menu showcart" aria-labelledby="dropdown04" id="dropdown-menu-cart">
                            @if(Session::get('product') && count(Session::get('product')) > 0 )
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="shopping-cart" style="overflow: scroll;;
                                            overflow-x: auto;
                                            overflow-y: auto;
                                            max-height: 500px;">
                                            <form  method="POST">
                                                <input type="hidden" name="_token" value="rizEyrDsx29TVfoDQGwFU4xqrTTeJrmFUk89YMVO">    
                                                <div class="column-labels">
                                                </div>
                                                    {{-- product --}}
                                                    <?php $items = Session::get('product');  
                                                            $sum  = 0;
                                                    ?>
                                                    @foreach ($items as $key => $item)
                                                    <?php $product = \App\Product::where('id_product',$item['product_id'])->first(); ?>
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <img src="{{url('storage/app/'.$product->product_img.'')}}">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="product-title">{{$product->product_name_th}}</div>
                                                            
                                                        </div>
                                                        @if(($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                            <div class="product-price price{{$product->id_product}}" >{{number_format($product->product_special_price)}}</div>
                                                            <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_special_price}}">
                                                        @else 
                                                            <div class="product-price price{{$product->id_product}}">{{number_format($product->product_normal_price)}}</div>
                                                            <input type="hidden" name="price_item[{{$item['product_id']}}]" value="{{$product->product_normal_price}}">
                                                        @endif                                
                                                        <div class="product-quantity">
                                                            <div class="quantity_button">
                                                                <span class="qt" id="qy{{$product->id_product}}">{{$item['qty']}}</span>
                                                                <span class="qt-plus" onclick="count('{{$product->id_product}}','add')">+</span>
                                                                <span class="qt-minus" onclick="count('{{$product->id_product}}','sub')">-</span>
                                                                <input type="hidden" class="text-center" id="inputqy{{$product->id_product}}" name="count[{{$item['product_id']}}]" value="{{$item['qty']}}" min="1">
                                                            </div>
                                                        </div>
                                                        <div class="product-removal">
                                                            <button type="button" class="remove-product" onclick="delitem({{$key}},{{$item['product_id']}})">Remove</button>
                                                        </div>
                                                        
                                                        @if(($product->product_start <= date('Y-m-d') && $product->product_start != NULL) && ($product->product_end >= date('Y-m-d') && $product->product_end != NULL))
                                                            <div class="product-line-price totalitem{{$product->id_product}}" >{{number_format($product->product_special_price * $item['qty'])}}</div>
                                                            <?php  $sum +=  $product->product_special_price * $item['qty'];?>
                                                            @else 
                                                            <div class="product-line-price totalitem{{$product->id_product}}">{{number_format($product->product_normal_price * $item['qty'])}}</div>
                                                            <?php  $sum +=  $product->product_normal_price * $item['qty'];?>
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                    
                                                    {{-- total --}}
                                                                            
                                                    <div class="totals">
                                                        <div class="totals-item">
                                                            <label>ยอดรวม</label>
                                                        <div class="totals-value" id="cart-subtotal" style="">{{!empty(Session::get('product'))?number_format($sum) : '0'}}</div>
                                                    </div>
                                                    <div class="totals-item">
                                                        <label>ค่าส่ง</label>
                                                        <div class="totals-value" id="cart-shipping" style="">0</div>
                                                    </div>
                                                    <div class="totals-item totals-item-total">
                                                        <label>ยอดรวมทั้งสิ้น</label>
                                                        <div class="totals-value" id="cart-total" style="">{{!empty(Session::get('product'))?number_format($sum) : '0'}}</div>
                                                        <input type="hidden" name="price_total" id="total" value="{{Session::get('product') ? $sum : '0'}}">
                                                    </div>
                                                    </div>
                                                    {{-- <a href="javascript:void(0)"><button type="submit" class="checkout">payment</button></a> --}}
                                                    <a href="{{url('cart')}}"><button type="button" class="checkout">view cart</button></a>
                                            </form>
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                            @else 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        คุณยังไม่มีรายการสินค้าในตะกร้า
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
           
		            </li>
					<!-- <li class="nav-item cta-colored"><a href="{{url('cart')}}" class="nav-link" id="cart-col"><span class="icon-shopping_cart"></span>{{!empty(Session::get('product')) ? '['.count(Session::get('product')).']' : ''}}<span class="menu-span-col">|</span> </a></li> -->
					@if(empty(Session::get('customer_id')))
						<li class="nav-item"><a href="{{url('userlogin')}}" class="nav-link" id="but-login">ลงชื่อเข้าใช้</a></li>
					@else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('username')}}</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a class="dropdown-item" href="{{url('/order-history')}}">ประวัติการซื้อ</a>
								<a class="dropdown-item" href="{{url('/logout')}}">ลงชื่อออก </a>
							</div>
						</li>
					@endif
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="menu-span-col">|</span> ภาษา</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="#TH"><img src="{{asset('frontend/images/th.jpg')}}"> TH</a>
                            <a class="dropdown-item" href="#EN"><img src="{{asset('frontend/images/england.png')}}"> EN</a>
                        </div>
					</li>
				</ul>
			</div>
	  	</div>
	</div>
</nav>
    <!-- END nav -->
<script>
    $(".search-toggle").addClass("closed");

$(".search-toggle .search-icon").click(function (e) {
  if ($(".search-toggle").hasClass("closed")) {
    $(".search-toggle").removeClass("closed").addClass("opened");
    $(".search-toggle, .search-container03").addClass("opened");
    $("#search-terms").focus();
  } else {
    $(".search-toggle").removeClass("opened").addClass("closed");
    $(".search-toggle, .search-container03").removeClass("opened");
  }
});

  //////cart
  var taxRate = 0.00;
  var shippingRate = 0.00; 
  var fadeTime = 300;

  ////get and change count
  function count(id,type){
            if(type == 'add'){
                console.log($('#qy'+id) );
                A = parseInt($('#qy'+id).text()) + 1;
                $('#qy'+id).html(A);
                $('#inputqy'+id).val(A);
                updateQuantity(A,id);
                countcart(id,type);
            }else{
                A = parseInt($('#qy'+id).text()) - 1;
                if(A < 1){
                    $('#qy'+id).html(1);
                    $('#inputqy'+id).val(1);
                    updateQuantity(1);
                }else{
                    $('#qy'+id).html(A);
                    $('#inputqy'+id).val(A);
                    updateQuantity(A,id);
                    countcart(id,type);
                }
               
            }

           
     }

  $('.product-removal button').click( function() {
    removeItem(this);
  });
  
  
  /* Recalculate cart */
  function recalculateCart()
  {
    var subtotal = 0;
    
    /* Sum up row totals */
    $('.product').each(function () {
      subtotal += parseFloat($(this).children('.product-line-price').text().replace(',',''));
    });
    
    /* Calculate totals */
    var tax = subtotal * taxRate;
    var shipping = (subtotal > 0 ? shippingRate : 0);
    var total = numberWithCommas(subtotal + tax + shipping);
    
    /* Update totals display */
    $('.totals-value').fadeOut(fadeTime, function() {
      $('#cart-subtotal').html(numberWithCommas(subtotal));
      $('#cart-tax').html(tax);
      $('#cart-shipping').html(shipping);
      $('#cart-total').html(total);
      $('#total').val(total);
      if(total == 0){
        $('.checkout').fadeOut(fadeTime);
      }else{
        $('.checkout').fadeIn(fadeTime);
      }
      $('.totals-value').fadeIn(fadeTime);
    });
  }
  
  
  /* Update quantity */
  function updateQuantity(quantityInput , id)
  {
    /* Calculate line price */
    // var productRow = $(quantityInput).parent().parent();
    // var price = parseInt(productRow.children('.product-price').text().replace(',',''));
    var price = parseInt($('.price'+id).text().replace(',',''));
    console.log(price);
    var quantity = quantityInput;
    var linePrice = numberWithCommas(price * quantity);
    
    /* Update line price display and recalc cart totals */
    $('.totalitem'+id).each(function () {
      $(this).fadeOut(fadeTime, function() {
        $(this).text(linePrice);
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });  
  }
  
  
  /* Remove item from cart */
  function removeItem(removeButton)
  {
    /* Remove row from DOM and recalc cart total */
    var productRow = $(removeButton).parent().parent();
    productRow.slideUp(fadeTime, function() {
      productRow.remove();
      recalculateCart();
    });
  }


  //////////////////////convert to string with comma
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }



    ///////////////delitem
    function delitem(item,id){
        $.ajax({
            url: '{{ url("deleteitemincart")}}',
            type: 'GET',
            data : {'item' : item , 'id' : id},
            success: function(data) {
                $(".countcart").load(location.href + " .countcart");
                $(".showcart").load(location.href + " .showcart");
            }
        });
    }

    //////+- สินค้า

    function countcart(value,type){
    $.ajax({
            url: '{{ url("countproduct")}}',
            type: 'GET',
            dataType: 'HTML',
            data : {'id' : value , 'type' : type},
            success: function(data) {
                $(".countcart").load(location.href + " .countcart");
            }
        });
    }
</script>