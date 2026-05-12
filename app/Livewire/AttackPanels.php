<?php

namespace App\Livewire;

use Livewire\Component;

class AttackPanels extends Component
{
    public string $mode = 'wifi';

    public function render()
    {
        return view('livewire.attack-panels');
    }
}
