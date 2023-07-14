<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Cart;

class CartComponent extends Component
{
    public function tambah($rowId)
    {
        $product = Cart::instance('belanjacart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('belanjacart')->update($rowId,$qty);
    }

    public function kurang($rowId)
    {
        $product = Cart::instance('belanjacart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('belanjacart')->update($rowId,$qty);
    }
   

    public function destroy($rowId)
    {
        Cart::instance('belanjacart')->remove($rowId);
        session()->flash('success_message','Item berhasil di hapus');
    }
    public function checkout()
    {
        if(Auth::check())
        {
            return redirect('')->route('belanja.checkout');
        }
        else
        {
            return redirect('')->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::instance('belanjacart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        if(session()->has('coupon'))
        {
            session()->put('checkout',[
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount
            ]);
           
        }
        else
        {
            session()->put('checkout',[
                'discount' => 0,
                'subtotal' => Cart::instance('belanjacart')->subtotal(),
                'tax' => Cart::instance('belanjacart')->tax(),
                'total' => Cart::instance('belanjacart')->total()
            ]);
           
        }
    }

    public function render()
    {
        $this->setAmountForCheckout();
        if(Auth::check())
        {
            Cart::instance('belanjacart')->store(Auth::user()->email);
        }
        return view('livewire.cart-component')->layout('layouts.app');
    }
}
