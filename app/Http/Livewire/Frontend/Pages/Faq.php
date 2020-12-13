<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.faq')->layout("layouts.frontend.index");
    }
}
