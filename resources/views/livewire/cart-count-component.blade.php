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
