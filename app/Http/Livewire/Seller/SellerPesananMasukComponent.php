<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_order;
use Illuminate\Support\Facades\Auth;

class SellerPesananMasukComponent extends Component
{
    public function render()
    {
        $orders = m_order::where('id_seller', Auth::user()->id)->where('status', 'ordered')->paginate(10);
        return view('livewire.seller.seller-pesanan-masuk-component', [
            'orders' => $orders
        ])->layout('layouts.e_seller');
    }
}
