<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_product;
use Illuminate\Support\Facades\Auth;

class SellerAllProductComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = m_product::find($id);
        // if($product->image)
        // {
        //     unlink('assets/images/product'.'/'.$product->foto_produk);
        // }
        // if($product->multi_images)
        // {
        //     $multi_images = explode(",",$product->multi_images);
        //     foreach ($multi_images as $image) {
        //         if($image)
        //         {
        //             unlink('assets/images/product'.'/'.$product->image); 
        //         }
        //     }
        // }
        $product->delete();
        session()->flash('message', 'Produk Berhasil Dihapus');

    }
    public function render()
    {
        $products = m_product::where('id_seller', Auth::user()->id)->paginate('10');
        return view('livewire.seller.seller-all-product-component',[
            'products'=>$products
        ])->layout('layouts.e_seller');
    }
}
