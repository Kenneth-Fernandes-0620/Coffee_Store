<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $Theme = "light";
    protected $listeners = ['dark' => 'switchDark', 'light' => 'switchLight'];

    public function switchDark()
    {
        $this->Theme = "dark";
    }
    public function switchLight()
    {
        $this->Theme = "light";
    }
    public function render()
    {
        return view('livewire.navigation');
    }
}
