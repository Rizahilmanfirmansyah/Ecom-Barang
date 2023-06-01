<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_product;

class SellerAllProductComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = m_product::find($id);
        $product->delete();
        session()->flash('message', 'Produk Berhasil Dihapus');

    }
    public function render()
    {
        $products = m_product::all();
        return view('livewire.seller.seller-all-product-component',[
            'products'=>$products
        ])->layout('layouts.e_seller');
    }
}
