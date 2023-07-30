<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\m_order;
use Illuminate\Support\Facades\Auth;

class UserOrderHistoryComponent extends Component
{
    public function render()
    {
        $orders = m_order::where('id_user', Auth::user()->id)->where('status', 'confirm')->paginate('10');
        return view('livewire.user.user-order-history-component')->layout('layouts.e_user');
    }
}
