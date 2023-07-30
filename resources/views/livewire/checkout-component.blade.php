<div class="container">
	<div style="margin-top: 15px;">
		{{-- Because she competes with no one, no one can compete with her. --}}
		<div class=" main-content-area">
			<div class="wrap-address-billing">
				<h3 class="box-title">Input Order</h3>
				<form wire:submit.prevent="placeOrder">
					<p class="row-in-form">
						<label for="fname">Nama<span>*</span></label>
						<input id="fname" type="text" name="fname" value=""  wire:model="nama">
					</p>
					<p class="row-in-form">
						<label for="lname">Alamat<span>*</span></label>
						<input id="lname" type="text" name="lname" value="" placeholder="Your class" wire:model="alamat" >
					</p>
					</p>
					{{-- <p>
						<label for="">Note</label>
						<input type="text" class="form-control" wire:model="note">
					</p> --}}
			</div>
			<div class="summary summary-checkout">
				<div class="summary-item payment-method">
					<h4 class="title-box">Payment Method</h4>
					<p class="summary-info"><span class="title">Cash On Delivery</span></p>
					{{-- <p class="summary-info"><span class="title">Online</span></p> --}}
					<div class="choose-payment-methods">
						<label class="payment-method">
							<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="pembayaran">
							<span>Cash On Delivery</span>
							<span class="payment-desc">Pembayaran Mudah Dengan COD</span>
							<p>
								@error('pembayaran') <span class="error">{{$message}}</span>@enderror
							</p>
						{{-- <label class="payment-method">
							<input name="payment-method" id="payment-method-visa" value="saldo" type="radio" wire:model="pembayaran">
							<span>saldo</span>
							<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
						</label> --}}
						<label class="payment-method">
							<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="pembayaran">
							{{-- <span>Paypal</span> --}}
							<span class="payment-desc">You can pay with your credit</span>
							<span class="payment-desc">card if you don't have a paypal account</span>
						</label>
					</div>
					@if (Session::has('checkout'))
					<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">Rp {{(Session::get('checkout')['total'])}}</span></p>
					@endif
					{{-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> --}}
					<div class="row">
					<br><br>
				</div>
				</div>
				<div class="summary-item shipping-method">
					<button type="submit" class="btn btn-medium">Order</button>
					<br><br>
					<a href="{{route('belanja.cart')}}" class="btn btn-medium bi bi-cart-fill">&nbsp; Back To Cart</a>
				</div>
			</div>
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