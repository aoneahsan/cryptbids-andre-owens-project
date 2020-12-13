<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class Fees extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.fees')->layout("layouts.frontend.index");
    }
}
