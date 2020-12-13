<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class Career extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.career')->layout("layouts.frontend.index");
    }
}
