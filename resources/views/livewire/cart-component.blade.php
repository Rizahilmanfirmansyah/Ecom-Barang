<div>
    {{-- Be like water. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 24rem;">
                @if (Session::has('notif_cart'))
                <div class="alert">{{Session::get('notif_cart')}}</div>
                @endif
                @if (Cart::instance('belanjacart')->count() > 0)
                <div class="card-body">
                    @foreach (Cart::instance('belanjacart')->content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('assets/images/product')}}/{{$item->model->foto_produk}}" alt="{{$item->model->nama_produk}}"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">{{$item->model->nama_produk}}</a>
                        </div>  
                        <div class="price-field produtc-price"><p class="price">Rp {{number_format($item->model->harga_produk)  ,0,",","."}}</p></div>
                        <div class="quantity">
                            <div class="container">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                                <a class="btn btn-increase" href="#" wire:click.prevent="tambah('{{$item->rowId}}')"></a>
                                <a class="btn btn-reduce" href="#" wire:click.prevent="kurang('{{$item->rowId}}')"></a>
                            </div>
                            {{-- <div style="margin-top: 20px;">
                                <input type="text" class="form-control">
                            </div> --}}
                        </div>
                        </div>
                        <div class="price-field sub-total"><p class="price">Rp {{number_format($item->subtotal)  ,0,",","."}}</p></div>
                        <div class="delete">
                            <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                                <span>Hapus dari keranjang</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    @endforeach 
                </div>
                @else
                    <p>Produk Belum Di Checkout</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="text-center">Order Summary</h4>
                <p class=""><span class="title">Subtotal</span><b class="index">&nbsp;Rp {{(Cart::Subtotal())}}</b></p>
                {{-- <p class="summary-info"><span class="title">Tax</span><b class="index">&nbsp;Rp {{number_format(Cart::tax()  ,0,",",".")}}</b></p> --}}
                {{-- <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p> --}}
                {{-- <p class=" "><span class="title">Total</span><b class="index">&nbsp;Rp {{number_format(Cart::total()  ,0,",",".")}}</b></p> --}}
            </div>
            <div class="checkout-info">
                <label class="checkbox-field">
                    {{-- <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span> --}}
                </label>
                <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Check out</a>
                <a class="link-to-shop" href="{{url('menu')}}">Lanjut Belanja<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
            {{-- <div class="update-clear">
                <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                <a class="btn btn-update" href="#">Update Shopping Cart</a>
            </div> --}}
        </div>
    </div>
</div>