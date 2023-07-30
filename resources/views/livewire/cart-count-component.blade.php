{{-- <div>
    <style>
        .countCart{
            position: relative;
        }
        .countCart span{
            position: absolute;
            top: -8px;
            right: 5px;
            display: block;
        }
    </style>
    <li class="nav-item" style="">
        <a href="{{route('product.cart')}}" class="countCart">
            <i class="fa-solid fa fa-shopping-cart fa-lg"></i>
            @if(Cart::instance('ekantincart')->count() > 0)
            <span class="badge rounded-pill badge-notification text-light" style="background-color: #2FDBBC;">{{Cart::instance('ekantincart')->count()}}</span>
            @endif
        </a>
   </li> 
</div> --}}
<div class="wrap-icon-section minicart">
    <a href="{{ route('belanja.cart')}}" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            @if (Cart::instance('belanjacart')->count() > 0)
            <span class="index">{{Cart::instance('belanjacart')->count()}} item</span>
            <span class="title">CART</span>             
            @endif
        </div>
    </a>
</div>
