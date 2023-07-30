<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_order;
use App\Models\m_DetailOrder;
use App\Models\m_pembayaran;
use Illuminate\Support\Facades\Auth;
use Cart;

class CheckoutComponent extends Component
{

    public $nama;
    public $alamat;
    public $note;
    public $pembayaran;
    public $Thanks;

    protected $messages = [
        'pembayaran' => 'Mohon Untuk Ceklis',
    ];


    public function placeOrder()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'pembayaran' => 'required'
        ]);

       
        foreach (Cart::instance('belanjacart')->content() as $item)
        {
            $order = new m_order();
            $order->id_user = Auth::user()->id;
            $order->id_seller = $item->model->id_seller;
            $order->nama_penjual = $item->model->nama_penjual;
            $order->subtotal = session()->get('checkout')['subtotal'];
            $order->discount = session()->get('checkout')['discount'];
            $order->tax = session()->get('checkout')['tax'];
            $order->total = session()->get('checkout')['total'];
            $order->nama = $this->nama;
            $order->status = 'ordered';
            $order->alamat = $this->alamat;
            $order->save();

            $detail_order = new m_DetailOrder();
            $detail_order->id_seller = $item->model->id_seller;
            $detail_order->id_produk = $item->id;
            $detail_order->order_id = $order->id;
            $detail_order->harga = $item->price;
            $detail_order->jumlah = $item->qty;
            $detail_order->save();

        }

        // foreach (Cart::instance('belanjacart')->content() as $item)
        // {
           
        // }
    
        if($this->pembayaran == 'cod')
        {
            $pembayaranmode = new m_pembayaran();
            $pembayaranmode->id_user = Auth::user()->id;
            $pembayaranmode->order_id = $order->id;
            $pembayaranmode->jenis = 'cod';
            $pembayaranmode->save();
        }

        $this->Thanks = 1;
        return redirect()->route('belanja.thanks');
    }

   
    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.all-style');
    }
}
