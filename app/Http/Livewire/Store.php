<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Store extends Component
{
    public $products;
    public $product_name = '\\';

    public function __construct()
    {
        if (DB::table('products')->count() == 0) {
            $this->fillDummy();
        };
    }

    public function fillDummy()
    {
        DB::table('products')->insert([
            ['product_name' => 'Cold Coffee', 'product_image' => "https://www.vegrecipesofindia.com/wp-content/uploads/2021/04/cold-coffee-recipe-2.jpg", 'product_cost' => 90],
            ['product_name' => 'coffee_2', 'product_image' => "https://www.eatthis.com/wp-content/uploads/sites/4/2017/10/dark-chocolate-bar-squares.jpg?quality=82&strip=1&resize=640%2C360", 'product_cost' => 100],
        ]);
    }

    public function mount()
    {
        $this->products = DB::table('products')->get();
    }

    public function render()
    {
        return view('livewire.store');
    }
}
