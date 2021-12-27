<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIcon extends Component
{
    public $cartCount = 0;
    public function render()
    {
        return view('livewire.cart-icon');
    }
}
