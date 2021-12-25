<?php

namespace App\Http\Livewire;

use Livewire\Component;

class App extends Component
{
    public $Theme = 'light';
    public function render()
    {
        return view('livewire.app');
    }
}
