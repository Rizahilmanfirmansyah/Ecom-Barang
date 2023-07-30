<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\m_order;
use Illuminate\Support\Facades\Auth;
use DB;

class UserOrderReadyComponent extends Component
{

    public function confirmOrder($order_id)
    {
        $order = m_order::find($order_id);
        $order->status = "confirm";
        $order->confirm_date = DB::raw('CURRENT_DATE');
        $order->save();

        session()->flash('notif', 'Pesanan Di Confirm');
    }
    public function render()
    {
        $orders = m_order::where('id_user', Auth::user()->id)->where('status', 'ready-order')->paginate('10');
        return view('livewire.user.user-order-ready-component', [
            'orders' => $orders
        ])->layout('layouts.e_user');
    }
}
