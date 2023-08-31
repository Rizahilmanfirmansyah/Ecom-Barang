<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SellerEditProductComponent extends Component
{
    use WithFileUploads;

    public $nama_produk;
    public $desk_produk;
    public $foto_produk;
    public $harga_produk;
    public $stock_produk;
    public $product_id;
    public $foto;

    public $multi_images;
    public $new_multi_images;

    public function mount($product_id)
    {
        $product = m_product::where('id', $product_id)->first();
        $this->nama_produk = $product->nama_produk;
        $this->desk_produk = $product->desk_produk;
        $this->foto_produk = $product->foto_produk;
        $this->stock_produk = $product->stock_produk;
        $this->harga_produk = $product->harga_produk;
        $this->multi_images = explode(",",$product->multi_images);
        $this->product_id = $product->id;

    }
    

    public function updateProduct()
    {
        $this->validate([
            "nama_produk" => "required"
        ]);
        
        $product = m_product::find($this->product_id);
        $product->nama_produk = $this->nama_produk;
        $product->desk_produk = $this->desk_produk;
        $product->stock_produk = $this->stock_produk;
        $product->harga_produk = $this->harga_produk;
        // $product->status = $this->status;
        if($this->foto) 
        {
            unlink('assets/images/product/'.$product->foto_produk);
            $imageName = Carbon::now()->timestamp. '.' . $this->foto->extension();
            $this->foto->storeAs('product',$imageName);
            $product->foto_produk = $imageName;

        }

        if($this->new_multi_images)
        {
            if($product->multi_images)
            {
                $multi_images = explode(",",$product->multi_images);
                foreach ($multi_images as $image)
                {
                    if ($image)
                    {
                        unlink('assets/images/product'.'/'.$image);
                    }
                }
            }
            $imagesname = '';
            foreach ($this->new_multi_images as $key=>$multi) {
                $img = Carbon::now()->timestamp. $key. '.' . $multi->extension();
                $multi->storeAs('product',$img);
                $imagesname = $imagesname . ',' . $img;
            }  
            $product->multi_images = $imagesname;
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
