<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Store extends Component
{
    public $Theme = "light";
    public $products;
    public $product_name;

    public function __construct()
    {
        if (DB::table('products')->count() == 0) {
            $this->fillDummy();
        }
    }

    public function fillDummy()
    {
        DB::table('products')->insert([
            ['product_name' => 'Cold Coffee', 'product_image' => "https://www.vegrecipesofindia.com/wp-content/uploads/2021/04/cold-coffee-recipe-2.jpg", 'product_cost' => 90],
            ['product_name' => 'Dark Chocolate', 'product_image' => "https://www.eatthis.com/wp-content/uploads/sites/4/2017/10/dark-chocolate-bar-squares.jpg?quality=82&strip=1&resize=640%2C360", 'product_cost' => 100],
            ['product_name' => 'Cappuccino', 'product_image' => "https://www.nespresso.com/ncp/res/uploads/recipes/nespresso-recipes-CAPPUCCINO-BANANA-SESAME-SEEDS.jpg", 'product_cost' => 50],
            ['product_name' => 'mocha', 'product_image' => "https://d2lswn7b0fl4u2.cloudfront.net/photos/pg-chocolate-mocha-1609515685.jpg", 'product_cost' => 75],
            ['product_name' => 'White chocolate', 'product_image' => "https://www.thespruceeats.com/thmb/oBowFQCbBldPUoSZ6g0Kr3PpD6o=/2164x1385/filters:no_upscale():max_bytes(150000):strip_icc()/ac_bnphotos-19a64ddc7b22445bb799ccf58de34b2e.jpg", 'product_cost' => 20],
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
