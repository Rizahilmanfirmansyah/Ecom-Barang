<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_product;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class SellerAddProductComponent extends Component
{
    use WithFileUploads;

    public $nama_produk;
    public $desk_produk;
    public $foto_produk;
    public $stock_produk;
    public $harga_produk;

    public function mount()
    {
        $this->stock_produk = "instock";
        $this->status= "pending";
    }

    protected $rules = [
        'nama_produk' => 'required|min:4',
        'desk_produk' => 'required|min:10',
        'harga_produk' => 'required|numeric'
    ];

    protected $messages = [
        'nama_produk.min' => 'minimal 6 karakter',
        'desk_produk.min' => 'minimal 10 karakter',
        'harga_produk.numeric' => 'Harus Berupa Angka'

    ];

    public function addproduct()
    {
        $this->validate();
        $product = new m_product();
        // $product->id_seller = Auth::user()->id;
        // $product->nama_penjual = Auth::user()->name;
        $product->nama_produk = $this->nama_produk;
        $product->desk_produk = $this->desk_produk;
        $product->stock_produk = $this->stock_produk;
        $product->harga_produk = $this->harga_produk;
        $product->status = $this->status;
        $imageName = Carbon::now()->timestamp. '.' . $this->foto_produk->extension();
        $this->foto_produk->storeAs('product',$imageName);
        $product->foto_produk = $imageName;
        $product->save();
        session()->flash('message', 'sukses');
        return redirect()->route('seller.all-product');

    }

    public function render()
    {
        return view('livewire.seller.seller-add-product-component')->layout('layouts.e_seller');
    }
}
