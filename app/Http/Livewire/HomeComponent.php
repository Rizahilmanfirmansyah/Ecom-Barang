<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\m_product;

class HomeComponent extends Component
{
    public function render()
    {
        $products = m_product::all();
        return view('livewire.home-component', [
            'products' => $products
        ])->layout('layouts.index');
    }
}
