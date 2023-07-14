<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\m_order;
use Illuminate\Support\Facades\Auth;

class UserOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order = m_order::where('id_user',Auth::user()->id)->where('id',$this->order_id)->first();
        return view('livewire.user.user-order-detail-component',[
            $order => 'order'
        ]);
    }
}
