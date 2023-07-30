<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\m_order;
use Illuminate\Support\Facades\Auth;
use DB;

class SellerOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;

    }

    public function readyOrder()
    {
        $order = m_order::find($this->order_id);
        $order->status = "ready-order";
        $order->pesanansiap_date = DB::raw('CURRENT_DATE');
        $order->save();

        return redirect()->route('seller.ordered');
        session()->flash('notif', 'Pesanan Siap');
    } 

    public function render()
    {
        $order = m_order::where('id_seller',Auth::user()->id)->where('id',$this->order_id)->first();
        return view('livewire.seller.seller-order-detail-component', [
            'order' => $order
        ])->layout('layouts.e_seller');
    }
}
