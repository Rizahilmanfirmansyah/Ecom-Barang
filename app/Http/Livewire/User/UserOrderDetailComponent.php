<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\m_order;
use Illuminate\Support\Facades\Auth;
use DB;

class UserOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function batalOrder()
    {
        $order = m_order::find($this->order_id);
        $order->status = "batal_order";
        $order->batal_date = DB::raw('CURRENT_DATE');
        $order->save();

        session()->flash('notif', 'Pesanan Berhasil Di Batalkan');
        return redirect()->route('user.order');
    }

    public function render()
    {
        $order = m_order::where('id_user',Auth::user()->id)->where('id',$this->order_id)->first();
        return view('livewire.user.user-order-detail-component',[
            'order' => $order
        ])->layout('layouts.e_user');
    }
}
