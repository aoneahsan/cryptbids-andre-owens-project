<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class Disclaimer extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.disclaimer')->layout("layouts.frontend.index");
    }
}
