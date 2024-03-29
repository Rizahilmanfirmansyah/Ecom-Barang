{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping Cart</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/color-01.css')}}">
    @livewireStyles
</head>
<body class=" shopping-cart page ">
	<!--main area-->
	<main id="main" class="main-site">
      
	</main>
	<!--main area-->

	<!--footer area-->
    @livewireScripts
	<script src="{{ asset('e_user/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('e_user/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('e_user/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.flexslider.js')}}"></script>
	<script src="{{ asset('e_user/js/chosen.jquery.min.js')}}"></script>
	<script src="{{ asset('e_user/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('e_user/js/functions.js')}}"></script>
	<!--footer area-->
</body>
</html> --}}

<div class="container">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        <div class="wrap-iten-in-cart">
            <h3 class="box-title">Products Name</h3>
            <ul class="products-cart">
                <li class="pr-cart-item">
                    @foreach ($order->orderItems as $item)
                    <div class="product-image">
                        <figure><img src="{{ asset('assets/images/product')}}/{{$item->produk->foto_produk}}" alt=""></figure>
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="#">{{$item->produk->nama_produk}}</a>
                    </div>
                    <div class="price-field produtc-price"><p class="price">{{number_format($item->harga_produk) ,0,",","."}}</p></div>
                    <div class="quantity">
                        {{-- <div class="quantity-input">
                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                            <a class="btn btn-increase" href="#" wire:click.prevent="tambah('{{$item->rowId}}')"></a>
                            <a class="btn btn-reduce" href="#" wire:click.prevent="kurang('{{$item->rowId}}')"></a>
                        </div> --}}
                    </div>
                    <div class="price-field sub-total"><p class="price">Rp {{number_format($item->harga * $item->jumlah)}}</p></div>
                    <div class="delete">
                        {{-- <a href="#" class="btn btn-delete" wire:click.prevent="destroy('{{$item->rowId}}')" title="">
                            <span>Delete from your cart</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a> --}}
                    </div>
                    @endforeach
                </li>												
            </ul>   
        </div>

        <div class="summary">
            <div class="order-summary">
                <h4 class="title-box">Order Summary</h4>
                <p class="summary-info"><span class="title">Subtotal</span><b class="index">{{(Cart::Subtotal())}}</b></p>
                {{-- <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                <p class="summary-info total-info "><span class="title">Total</span><b class="index">$512.00</b></p> --}}
            </div>
            <div class="checkout-info">
                {{-- <label class="checkbox-field">
                    <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
                </label> --}}
                <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Check out</a>
                <a class="link-to-shop" href="{{ url('menu')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
            <div class="update-clear">
                <a class="btn btn-update" href="#" wire:click.prevent="batalOrder">batal Order</a>
            </div>
        </div>
        
        {{-- <div class="wrap-show-advance-info-box style-1 box-in-site">
            <h3 class="title-box">Most Viewed Products</h3>
            <div class="wrap-products">
                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_17.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_15.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_01.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">Bestseller</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_21.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_03.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                <figure><img src="assets/images/products/digital_05.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">Bestseller</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                        </div>
                    </div>
                </div>
            </div><!--End wrap-products-->
        </div> --}}
    </div><!--end main content area-->
</div><!--end container-->
