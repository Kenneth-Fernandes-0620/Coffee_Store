<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $Theme = "light";
    protected $listeners = ['switchTheme'=>'switchTheme'];

    public function switchTheme()
    {
        if ($this->Theme == "dark") {
            $this->Theme = "light";
        } else {
            $this->Theme = "dark";
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
