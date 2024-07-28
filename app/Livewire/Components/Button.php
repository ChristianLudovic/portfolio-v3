<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{

    public $class;
    public $slot;

    public function render()
    {
        return view('livewire.components.button');
    }
}
