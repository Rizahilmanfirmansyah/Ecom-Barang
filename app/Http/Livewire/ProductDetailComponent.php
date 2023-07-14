<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_product;

class ProductDetailComponent extends Component
{
    public $nama_produk;

    public function mount($nama_produk)
    {
        $this->nama_produk = $nama_produk;
    }

    public function render()
    {
        $product = m_product::where('nama_produk', $this->nama_produk)->first();
        return view('livewire.product-detail-component', ['product'=>$product])->layout('layouts.app');
    }
}
