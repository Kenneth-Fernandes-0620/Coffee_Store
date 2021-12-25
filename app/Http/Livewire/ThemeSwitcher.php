<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThemeSwitcher extends Component
{
    public $isChecked = '';

    protected $listeners = ['darkTheme' => 'switchChecked'];

    public function switchChecked(){
        $this->isChecked = "checked";
    }


    public function render()
    {
        return view('livewire.theme-switcher');
    }
}
