<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StoreItem extends Component
{
    public $productName, $productImage, $productCost;

    public function mount($product)
    {
        $this->productName = $product->product_name;
        $this->productImage = $product->product_image;
        $this->productCost = $product->product_cost;
    }

    public function UpdateCart($count){
        $this->emit('addToCart', $count);
    }

    public function render()
    {
        return view('livewire.store-item');
    }
}
