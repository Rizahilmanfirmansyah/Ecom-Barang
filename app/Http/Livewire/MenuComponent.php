<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_product;
use Cart;

class MenuComponent extends Component
{
    public $search;

    public function store($produk_id,$produk_nama_produk,$produk_harga_produk)
    {
        Cart::instance('belanjacart')->add($produk_id,$produk_nama_produk,1,$produk_harga_produk)->associate('App\Models\m_product');
        session()->flash('cart_notif', 'Item Berhasil Di Tambahkan');
        return redirect()->route('belanja.cart');
        
    }

    public function render()
    {
        $products = m_product::all();
        if ($this->search !== null) {
            $product = m_product::where('nama_produk','like', '%' . $this->search . '%')->paginate(10);
        }
        return view('livewire.menu-component', [
            'products' => $products,
        ])->layout('layouts.app');
    }
}
