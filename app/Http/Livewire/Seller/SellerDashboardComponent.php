<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_product;
use Illuminate\Support\Facades\Auth;

class SellerDashboardComponent extends Component
{
    public function render()
    {
        $count_products = m_product::where('id_seller', Auth::user()->id)->count();
        return view('livewire.seller.seller-dashboard-component', [
            'count_products' => $count_products
        ])->layout('layouts.e_seller');
    }
}
