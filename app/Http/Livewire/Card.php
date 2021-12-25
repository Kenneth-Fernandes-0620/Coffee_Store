<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $imagesrc;
    public $heading;
    public $description;
    public function mount($imagesrc, $heading, $description)
    {
        $this->imagesrc = $imagesrc;
        $this->heading = $heading;
        $this->description = $description;
    }

    public function render()
    {
        return view('livewire.card');
    }
}
