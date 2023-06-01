<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_product;
use Livewire\WithFileUploads;

class SellerEditProductComponent extends Component
{
    use WithFileUploads;

    public $nama_produk;
    public $desk_produk;
    public $foto_produk;
    public $harga_produk;
    public $stock_produk;
    public $foto;

    public function mount($product_id)
    {
        $product = m_product::where('id', $product_id)->first();
        $this->nama_produk = $product->nama_produk;
        $this->desk_produk = $product->desk_produk;
        $this->foto_produk = $product->foto_produk;
        $this->stock_produk = $product->stock_produk;
        $this->harga_produk = $product->harga_produk;
        $this->product_id = $product->id;

    }

    public function updateProduct()
    {
        $product = m_product::find($this->product_id);
        $product->nama_produk = $this->nama_produk;
        $product->desk_produk = $this->desk_produk;
        $product->stock_produk = $this->stock_produk;
        $product->harga_produk = $this->harga_produk;
        // $product->status = $this->status;
        if ($this->foto) {
            $imageName = Carbon::now()->timestamp. '.' . $this->$images->extension();
            $this->$images->storeAs('product',$imageName);
            $product->foto_produk = $imageName;
        }
        $product->save();
        session()->flash('notif', 'Product Berhasil Di Update');
        return redirect()->route('seller.all-product');

    }

    public function render()
    {
        return view('livewire.seller.seller-edit-product-component')->layout('layouts.e_seller');
    }
}
