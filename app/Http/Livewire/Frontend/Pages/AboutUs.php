<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.about-us')->layout("layouts.frontend.index");
    }
}
